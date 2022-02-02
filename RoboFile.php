<?php

use voku\helper\HtmlDomParser;

class RoboFile extends \Robo\Tasks
{
    const ALL = 'all';

    const API_ROOT = 'https://www.codechef.com';

    const CATEGORIES = [
        'school',
        'easy',
        'medium',
        'hard',
        'challenge',
        // This breaks at the moment because of memory limits
        //'extcontest'
    ];

    const FIELDS_TO_DROP = [
        'problem_author_html_handle',
        'problem_tester_html_handle',
        'user',
        'todo',
        'problem_status',
        'body',
        'status',
        'user_zen_mode',
        'is_user_verified_for_proctoring'
    ];

    private function parseUrl($url) {
        $headers = "Accept-language: en\r\n" .
            "User-Agent: Mozilla/Safari/Chrome";

        $opts = [
            "http" => [
                "method" => "GET",
                "header" => $headers
            ]
        ];

        $context = stream_context_create($opts);

        // Open the file using the HTTP headers set above
        $contents = file_get_contents($url, false, $context);
        if (strlen($contents) < 1000) {
            throw new \Exception("Invalid response from server");
        }
        return HtmlDomParser::str_get_html($contents);
    }

    private function parseCategory($category) {
        $url = self::API_ROOT . "/problems/$category/";

        $this->say("Fetching $url");
        $dom = $this->parseUrl($url);

        if ($dom === false) {
            throw new \Exception("DOM parsing failed");
        }
        $links = $dom->find('.problemname a');

        $problems = [];

        $count = count($links);

        $this->say("Found $count problems in $category");

        foreach ($links as $link) {
            $problems[] = basename($link->href);
        }

        sort($problems, SORT_STRING);

        $this->taskWriteToFile("_data/$category.json")
            ->text(json_encode($problems, JSON_PRETTY_PRINT))
            ->run();
    }

    private function setCategories($category) {
        if ($category === self::ALL) {
            return self::CATEGORIES;
        }

        return [$category];
    }

    /**
     * Generates _data/$category.json files for a collection
     */
    public function updateProblemlist($category = self::ALL)
    {
        $this->_cleanDir('_data');

        $categories = $this->setCategories($category);

        foreach ($categories as $category) {
            $this->say("Downloading Category: $category");
            $this->parseCategory($category);
        }
    }

    protected function _cleanFiles($category) {
        foreach (glob("_problems/$category/*.json") as $file) {
            $size = stat($file)['size'];
            if($size === 0) {
                unlink($file);
            }
            else if($json = json_decode(file_get_contents($file))) {
                if (isset($json->status) and ($json->status === 'error')) {
                    unlink($file);
                }
            }

            else if($this->fileIsUnlisted($file)) {
                unlink($file);
            }
        }
    }

    protected function fileIsUnlisted($file, $category): bool {
        $problemName = basename($file, '.json');

        // Not implemented yet
        return false;
    }

    private function _verifyProblem($category, $problem) {
        $filename = "_problems/$category/$problem.json";
        if (file_exists($filename)) {
            $json = json_decode(file_get_contents($filename));
            return ($json and ((isset($json->status) and $json->status === 'success') or (isset($json->old_version))));
        }

        return false;
    }

    public function generateCollection($category = self::ALL) {
        $categories = $this->setCategories($category);

        foreach ($categories as $category) {
            $dir = "_problems/$category";

            foreach (glob("$dir/*.json") as $file) {
                $json = json_decode(file_get_contents($file), true);
                $body = $json['body'];

                $eraser = array_flip(self::FIELDS_TO_DROP);

                $json = array_diff_key($json, $eraser);

                $json['languages_supported'] = explode(', ', $json['languages_supported']);

                unset($json['time']['current']);
                unset($json['problemComponents']['statement']);

                if (isset($json['tags'])) {
                    preg_match_all('/\/tags\/problems\/(\w*)/', $json['tags'], $matches);
                    if (isset($matches[1]) and count($matches) >= 1) {
                        $json['tags'] = $matches[1];
                    }
                }
                else {
                    $json['tags'] = ['NA'];
                }

                $json['layout'] = 'problem';

                $basename = basename($file, '.json');
                $newFileName = "$dir/$basename.md";

                $fm = json_encode($json, JSON_UNESCAPED_SLASHES | JSON_FORCE_OBJECT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION);

                $contents = "---\n$fm\n---\n$body";
                file_put_contents($newFileName, $contents);
            }
        }
    }

    private function isBackTick($line) {
        return (substr($line, 0, 3) === '```');
    }

    private function _fixPreTags(string $body) {
        $lines = explode(PHP_EOL, $body);

        $result = "";
        $start = false;

        foreach ($lines as $line) {
            if ($this->isBackTick($line)) {
                switch ($start) {
                    case true:
                        // Workaround for a converter bug
                        if ($line === '``````') {
                            $result .= "</pre><pre>";
                        }
                        else {
                            $result .= str_replace('```', "</pre>", $line);
                            $start = false;
                        }
                        break;

                    case false:
                        $start = true;
                        $result .= str_replace('```', "<pre>", $line);
                        break;
                }
            }
            else {
                $result .= $line . PHP_EOL;
            }
        }

        return $result;
    }

    public function stats($category = self::ALL) {
        $categories = $this->setCategories($category);

        foreach ($categories as $category) {
            $problems = json_decode(file_get_contents("_data/$category.json"));
            $count = count($problems);

            $actualCount = count(glob("_problems/$category/*.json"));

            $this->say("[$category] Download Status: $actualCount/$count");
        }

    }

    /**
     * Provide a list of unavailable problems
     * for a given category
     */
    public function statsRemaining($category = self::ALL) {
        $categories = $this->setCategories($category);

        foreach ($categories as $category)  {
            $problems = json_decode(file_get_contents("_data/$category.json"));
            foreach ($problems as $problem) {
                if (!$this->_verifyProblem($category, $problem)) {
                    echo $category . "-" . $problem . PHP_EOL;
                }
            }
        }
    }

    /**
     * Clear all downloaded problems
     */
    public function downloadClean($category = self::ALL) {
        $categories = $this->setCategories($category);

        foreach ($categories as $category) {
            $this->_cleanFiles($category);
        }
    }

    public function downloadProblems($category = self::ALL) {
        $categories = $this->setCategories($category);

        foreach ($categories as $category) {

            if (!file_exists("_problems/$category")) {
                @mkdir("_problems/$category");
            }

            $this->_cleanFiles($category);

            $problems = json_decode(file_get_contents("_data/$category.json"));

            $cat = strtoupper($category);

            // Find problems that are not yet downloaded cleanly
            $problems = array_filter($problems, function($problem) use ($category){
                return (! $this->_verifyProblem($category, $problem));
            });

            $this->say('Downloading ' . count($problems) . ' problems from category:'. $category);

            $chunks = array_chunk($problems, 8);

            foreach ($chunks as $chunk) {

                $task = $this->taskParallelExec();

                foreach ($chunk as $problemname) {
                    // We look for all problems under PRACTICE in hopes
                    // that the contest is over
                    $url = self::API_ROOT . "/api/contests/PRACTICE/problems/$problemname";
                    $time = (time() * 1000) - 200;
                    $filepath = "_problems/$category/$problemname.json";
                    if (! file_exists($filepath)) {
                        $task = $task->process("wget --output-document '$filepath' $url");
                    }
                }

                $task->run();
            }

            // Run a cleanup as well to remove error|empty files
            $this->downloadClean($category);
        }
    }
}

