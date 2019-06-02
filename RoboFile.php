<?php

use KubAT\PhpSimple\HtmlDomParser;
use KzykHys\FrontMatter\Document;
use KzykHys\FrontMatter\FrontMatter;
use League\HTMLToMarkdown\HtmlConverter;

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
        'status'
    ];

    const MARKDOWN_OPTIONS = [
        'strip_tags' => true,
        'hard_break' => true,
        'header_style' => 'atx'
    ];


    public function __construct() {
        $this->converter = new HtmlConverter(self::MARKDOWN_OPTIONS);
    }

    private function parseUrl($url) {

        $headers = "Accept-language: en\r\n" .
            "Cookie: foo=bar\r\n" .
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
        return HtmlDomParser::str_get_html($contents);
    }

    private function parseCategory($category) {
        $url = self::API_ROOT . "/problems/$category/";

        $this->say("Fetching $url");
        $dom = $this->parseUrl($url);

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

    public function updateProblemlist($category = self::ALL)
    {
        $this->_cleanDir('_data');

        $categories = $this->setCategories($category);

        foreach ($categories as $category) {
            $this->say("Downloading Category: $category");
            try {
                $this->parseCategory($category);
            }
            catch(\Throwable $e) {
                $this->say($e->getMessage());
            }
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

                $body = $this->converter->convert($body);

                $body = $this->_fixPreTags($body);

                $doc = new Document($body, $json);
                $contents = FrontMatter::dump($doc);

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

    public function statsRemaining($category) {
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

    public function downloadClean($category = self::ALL) {
        $categories = $this->setCategories($category);

        foreach ($categories as $category) {
            $this->_cleanFiles($category);
        }

    }

    public function downloadProblems($category = self::ALL) {
        $categories = $this->setCategories($category);

        foreach ($categories as $category) {

            @mkdir("_problems/$category");
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
                        $this->say("Added $url");
                    }
                }

                $task->run();
            }

            // Run a cleanup as well to remove error|empty files
            $this->downloadClean($category);
        }
    }
}

