<?php

include "simple_html_dom.php";

$categories = [
    'school', 'easy', 'medium', 'hard', 'challenge',
    // This breaks at the moment because of memory limits
    //'extcontest'
    ];



function save_problem($name) {
    $dom = file_get_html('https://www.codechef.com/problems/'. $name);
    $div = $dom->find('.problem-statement', 0);
}


