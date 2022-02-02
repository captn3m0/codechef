---
{"category_name":"medium","problem_code":"MARRAYS","problem_name":"Chef and Magic Arrays","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"alex_2oo8","date_added":"23-01-2014","tags":{"0":"berezin","1":"dynamic","2":"easy","3":"oct17"},"editorial_url":"https://discuss.codechef.com/problems/MARRAYS","time":{"view_start_date":1508146200,"submit_start_date":1508146200,"visible_start_date":1508146200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/mandarin/MARRAYS.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/russian/MARRAYS.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/vietnamese/MARRAYS.pdf">vietnamese</a> as well.</h3>

<p>Yesterday Chef had cooked <b>N</b> very tasty dishes. A dish is prepared of several ingredients. You are given this information by <b>N</b> arrays, each array contains elements equal to the number of ingredients used in that dish. Also, an element of the array denotes the tastiness of the ingredient in the corresponding dish.</p>

<p>Chef placed his <b>N</b> dishes in a line, one after the other. You can make a simple observation that the last ingredient of a dish will be a neighbor of the first ingredient of the next dish. Of course, this is not valid for the <b>N</b>-th dish, as it's the last dish.</p>
<p>

<p>Overall quality of these dishes will be calculated as follows. Consider dish <b>i</b> and <b>i + 1</b>, if the last ingredient of dish <b>i</b> be of tastiness <b>x</b>, and the first ingredient of dish <b>i + 1</b> of tastiness of <b>y</b>, then the quality of dish will be increased by <b>|x - y| * i</b>, where (|t| denotes the absolute value of t).</p>

<p>Chef wants to maximize the quality of the dish. For each dish, he is allowed to take its ingredients and cyclically rotate/shift them by as many rotations as he wishes. Find the maximum possible quality of the dishes that he can obtain.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of dishes. </p>
<p>Next <b>N</b> lines follows. <b>i</b>-th line contains integer <b>M</b> denoting the number of ingredients in <b>i</b>-th dish and <b>M</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>M</sub></b> denoting the tastiness of ingredients of <b>i</b>-th dish.". </p>

<h3>Output</h3>
<p>For each test case, output in a single line an integer corresponding to the maximum possible quality of the dishes.</p>

<h3>Constraints</h3>
<ul>
<li>Total number of ingredients over all the test cases in a single test file won't exceed 10<sup>6</sup></li>
<li><b>M</b> ≥ <b>1</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (20 points)</b>: Total number of dishes = 2.</li>
<li><b>Subtask #2 (30 points)</b>: <b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>500</b></li>
<li><b>Subtask #3 (50 points)</b>: original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
3
3 1 2 3
2 3 2
2 4 5
2
2 1 2
2 4 5
3
2 1 2
3 3 2 5
2 4 5

<b>Output:</b>
8
4
10
</pre>

<h3>Explanation</h3>
<pre><p><b>Example case 1.</b> 
01) 123|32|45 = 0 * 1 + 2 * 2 = 4
02) 312|32|45 = 1 * 1 + 2 * 2 = 5
03) 231|32|45 = 2 * 1 + 2 * 2 = 6
04) 123|23|45 = 1 * 1 + 1 * 2 = 3
05) 312|23|45 = 0 * 1 + 1 * 2 = 2
06) 231|23|45 = 1 * 1 + 1 * 2 = 3
07) 123|32|54 = 0 * 1 + 3 * 2 = 6
08) 312|32|54 = 1 * 1 + 3 * 2 = 7 
<b>09) 231|32|54 = 2 * 1 + 3 * 2 = 8</b>
10) 123|23|54 = 1 * 1 + 2 * 2 = 5
11) 312|23|54 = 0 * 1 + 2 * 2 = 4
12) 231|23|54 = 1 * 1 + 2 * 2 = 5</p></pre>