<?php
include "simple_html_dom.php";
//Please pass the folder path with problems
$folder = $argv[1];
foreach(glob($folder."/*") as $file)
{
    $html = file_get_html($file);
    echo $file;
    $content =  $html->find('#problem-page',0);
    if(!$content)
        continue;
    else
        $content= $content->find('.content',0)->innertext;
    file_put_contents($file,$content);
}

