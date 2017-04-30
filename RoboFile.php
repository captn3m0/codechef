<?php

use Sunra\PhpSimple\HtmlDomParser;
use KzykHys\FrontMatter\Document;
use KzykHys\FrontMatter\FrontMatter;
use League\HTMLToMarkdown\HtmlConverter;

class RoboFile extends \Robo\Tasks
{
    const CATEGORIES = [
        'school', 'easy', 'medium', 'hard', 'challenge',
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

    private function getKey() {
        $json = json_decode(`curl --silent 'https://www.codechef.com/api/user/key'`, true);

        return $json['key'];
    }

    private function parseUrl($url) {
        $contents = file_get_contents($url);

        return HtmlDomParser::str_get_html($contents);
    }

    private function parseCategory($category) {

        $url = 'https://www.codechef.com/problems/' . $category . '/';

        $this->say("Fetching $url");
        $dom = $this->parseUrl($url);

        $links = $dom->find('.problemname a');

        $problems = [];

        $count = count($links);

        $this->say("Found $count problems in $category");

        foreach ($links as $link) {
            $problems[] = basename($link->href);
        }

        $this->taskWriteToFile("_data/$category.json")
            ->text(json_encode($problems))
            ->run();
    }

    private function setCategories($category) {
        if ($category === 'all') {
            return self::CATEGORIES;
        }

        return [$category];
    }

    public function updateProblemlist($category = 'all')
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
                if ($json->status === 'error') {
                    unlink($file);
                }
            }
        }
    }

    private function _verifyProblem($category, $problem) {
        $filename = "_problems/$category/$problem.json";
        if (file_exists($filename)) {
            $json = json_decode(file_get_contents($filename));
            return ($json and $json->status === 'success');
        }

        return false;
    }

    public function generateCollection($category = 'all') {
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

                $doc = new Document($body, $json);
                $contents = FrontMatter::dump($doc);

                file_put_contents($newFileName, $contents);
            }
        }
    }

    public function stats($category = 'all') {
        $categories = $this->setCategories($category);

        foreach ($categories as $category) {
            $problems = json_decode(file_get_contents("_data/$category.json"));
            $count = count($problems);

            $actualCount = count(glob("_problems/$category/*.json"));

            $this->say("[$category] Download Status: $actualCount/$count");
        }

    }

    public function downloadProblems($category = 'all') {
        $categories = $this->setCategories($category);

        foreach ($categories as $category) {

            @mkdir("_problems/$category");
            $this->_cleanFiles($category);

            $problems = json_decode(file_get_contents("_data/$category.json"));

            $cat = strtoupper($category);

            if ($cat === 'SCHOOL') {
                $cat = 'PRACTICE';
            }

            // Find problems that are not yet downloaded cleanly
            $problems = array_filter($problems, function($problem) use ($category){
                return (! $this->_verifyProblem($category, $problem));
            });

            $this->say('Downloading ' . count($problems) . ' problems from category:'. $category);

            $chunks = array_chunk($problems, 5);

            foreach ($chunks as $chunk) {
                $task = $this->taskParallelExec();

                foreach ($chunk as $problemname) {
                    $url = "https://www.codechef.com/api/contests/$cat/problems/$problemname";
                    $time = (time() * 1000) - 200;
                    $key = $this->getKey();
                    $filepath = "_problems/$category/$problemname.json";
                    if (! file_exists($filepath)) {
                        $task = $task->process("wget --output-document '$filepath' --header 'Cookie:poll_time=$time;userkey=$key;notification=0' $url");
                        $this->say("Added $url");
                    }
                }

                $task->run();
            }
        }
    }
}

