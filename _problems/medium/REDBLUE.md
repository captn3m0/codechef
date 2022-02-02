---
{"category_name":"medium","problem_code":"REDBLUE","problem_name":"Red and blue points","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"30-11-2017","tags":{"0":"dec17","1":"kingofnumbers"},"editorial_url":"https://discuss.codechef.com/problems/REDBLUE","time":{"view_start_date":1512984600,"submit_start_date":1512984600,"visible_start_date":1512984600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/mandarin/REDBLUE.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/russian/REDBLUE.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/vietnamese/REDBLUE.pdf">Vietnamese</a> as well.</h3>

<p>You are given <b>N</b> red points and <b>M</b> blue points on a 2D plane.</p>

<p>You are required to delete the minimum number of points(the deleted points can be of both colors) so that it's possible to draw a line such that all remaining red points are on one side of the line while all remaining blue points are on the other side of the line.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>

<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>.</li>

<li>Each of the next <b>N</b> lines contains two integers <b>Xr<sub>i</sub></b>, <b>Yr<sub>i</sub></b> describing the coordinates of the i-th red point.</li>

<li>Each of the next <b>M</b> lines contains two integers <b>Xb<sub>i</sub></b>, <b>Yb<sub>i</sub></b> describing the coordinates of the i-th blue point.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, output a single line containing one integer denoting the minimum number of points to be deleted.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b>, <b>M</b> ≤ 1,000</li>
<li>1 ≤ sum of <b>N</b> in all test cases ≤ 1,000</li>
<li>1 ≤ sum of <b>M</b> in all test cases ≤ 1,000</li>
<li>-10<sup>9</sup> ≤ <b>Xr<sub>i</sub></b>, <b>Yr<sub>i</sub></b>, <b>Xb<sub>i</sub></b>, <b>Yb<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>No two points among both red and blue points have same coordinates</li>
<li>No three points among both red and blue points are collinear</li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (20 points):</b> 1 ≤ sum of <b>N</b> in all test-cases,  sum of <b>M</b> in all test-cases ≤ 100
</p>

<p>
<b>Subtask #2 (80 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

1
4 4
0 0
10 10
0 10
10 0
12 11
2 1
12 1
2 11

<b>Output:</b>

2
</pre>
