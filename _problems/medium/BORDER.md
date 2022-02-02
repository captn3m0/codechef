---
{"category_name":"medium","problem_code":"BORDER","problem_name":"Prefix borders","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"mgch","date_added":"21-02-2018","tags":{"0":"binary","1":"kingofnumbers","2":"kmp","3":"ltime57","4":"medium","5":"tree"},"editorial_url":"https://discuss.codechef.com/problems/BORDER","time":{"view_start_date":1519491600,"submit_start_date":1519491600,"visible_start_date":1519491600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/mandarin/BORDER.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/russian/BORDER.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/vietnamese/BORDER.pdf">Vietnamese</a> as well.</h3>

<p>Let's define a <i>border substring</i> of a string as a non-empty substring that's both a suffix and a prefix of this string.</p>

<p>You are given a string <b>S</b> with length <b>N</b> and <b>Q</b> queries. In each query, you are given the <b>p</b>-th prefix of <b>S</b> (let's denote it by <b>S<sub>1..p</sub></b>) and an integer <b>k</b>. Consider the <b>k</b>-th shortest border of <b>S<sub>1..p</sub></b> (if it exists). Compute the length of this border substring or determine that it doesn't exist.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>Q</b>.</li>
<li>The second line contains a single string <b>S</b>.</li>
<li>Each of the following <b>Q</b> lines contains two space-separated integers <b>p</b> and <b>k</b> describing one query.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print <b>Q</b> lines. For each <b>i</b> (1 ≤ <b>i</b> ≤ <b>Q</b>), the <b>i</b>-th of these lines should contain a single integer — the answer to the <b>i</b>-th query (the length of the <b>k</b>-th shortest border or -1 if it doesn't exist).</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b>, <b>Q</b> ≤ 200,000</li>
<li><b>|S|</b> = <b>N</b></li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 200,000</li>
<li>1 ≤ sum of <b>Q</b> over all test cases ≤ 200,000</li>
<li>1 ≤ <b>p</b>, <b>k</b> ≤ <b>N</b></li>
<li><b>S</b> contains only lowercase English letters</li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (20 points):</b>
<ul>
<li><b>Q</b>, <b>N</b> ≤ 100</li>
<li>sum of <b>N</b> over all test cases ≤ 500</li>
<li>sum of <b>Q</b> over all test cases ≤ 500</li>
</ul>
</p>

<p>
<b>Subtask #2 (20 points):</b>
<ul>
<li><b>N</b> ≤ 100</li>
<li>sum of <b>N</b> over all test cases ≤ 500</li>
</ul>
</p>

<p>
<b>Subtask #3 (60 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

1
5 4
abcab
2 1
5 1
5 2
5 3

<b>Output:</b>

2
2
5
-1
</pre>
