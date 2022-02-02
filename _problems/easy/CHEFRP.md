---
{"category_name":"easy","problem_code":"CHEFRP","problem_name":"Chef and new recipe","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abhra73","problem_tester":"kevinsogo","date_added":"3-03-2015","tags":{"0":"abhra73","1":"basic","2":"cakewalk","3":"may15"},"editorial_url":"http://discuss.codechef.com/problems/CHEFRP","time":{"view_start_date":1431941400,"submit_start_date":1431941400,"visible_start_date":1431941400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/mandarin/CHEFRP.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/russian/CHEFRP.pdf">Russian</a>.</h3>
<p>Rupsa recently started to intern under Chef. He gave her <b>N</b> type of ingredients of varying quantity <b> A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> respectively to store it. But as she is lazy to arrange them she puts them all in a storage box.</p>
<p>Chef comes up with a new recipe and decides to prepare it. He asks Rupsa to get <b>two</b> units of each type ingredient for the dish. But when she went to retrieve the ingredients, she realizes that she can only pick one item at a time from the box and can know its type only after she has picked it out. The picked item is not put back in the bag.</p>
<p>She, being lazy, wants to know the maximum number of times she would need to pick items from the box in the worst case so that it is guaranteed that she gets at least two units of each type of ingredient. If it is impossible to pick items in such a way, print -1.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of different type of ingredients.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> denoting the quantity of each ingredient.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing an integer denoting the answer corresponding to that test case.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ A<sub>i</sub> ≤ 10<sup>4</sup></b></li>
</ul>
<h3>Sub tasks</h3>
<ul>
<li>Subtask #1: <b>1 ≤ N ≤ 1000</b> (30 points)</li>
<li>Subtask #2: original constraints (70 points)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
2 2
1
6

<b>Output:</b>
4
2
</pre><h3>Explanation</h3>
<ul>
<li><b>In Example 1,</b> she need to pick up all items.</li>
<li><b>In Example 2,</b> since there is only one type of ingredient, picking two items is enough.</li>
</ul>
