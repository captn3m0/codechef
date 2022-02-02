---
{"category_name":"medium","problem_code":"TRAVELAL","problem_name":"Travel to all Points","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"arpa","problem_tester":null,"date_added":"28-07-2017","tags":{"0":"arpa","1":"binary","2":"ltime50"},"editorial_url":"https://discuss.codechef.com/problems/TRAVELAL","time":{"view_start_date":1501349400,"submit_start_date":1501349400,"visible_start_date":1501349400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/mandarin/TRAVELAL.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/russian/TRAVELAL.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/vietnamese/TRAVELAL.pdf">vietnamese</a> as well.</h3>

<p>There are <b>N</b> <i>special</i> points on the 2-D plane. You can travel from a special point (<b>x<sub>i</sub></b>, <b>y<sub>i</sub></b>) to another special point (<b>x<sub>j</sub></b>, <b>y<sub>j</sub></b>) if and only if |<b>x<sub>i</sub></b> - <b>x<sub>j</sub></b>| + |<b>y<sub>i</sub></b> - <b>y<sub>j</sub></b>| ≥ <b>D</b>.</p>

<p>You need to find the largest integer <b>D</b>, such that we can start at some special point and visit each of the other special points, directly or through other special points. Note that you can visit a special point more than once.</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of each testcase follows.</li>
<li>The first line of each testcase contains a single integer, <b>N</b>, which denotes the number of special points.</li>
<li>The i-th of the next <b>N</b> lines contains two integers, <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b>, which denotes that (<b>x<sub>i</sub></b>, <b>y<sub>i</sub></b>) is a special point.</li>
</ul>


<h3>Output</h3>
<p>For each test case, output a single line containing the answer.</p>

<h3>Subtasks</h3>
<b>Subtask #1</b> (20 points):
<ul>
<li>2 ≤ <b>N</b> ≤ 10<sup>3</sup> </li>
<li>2 ≤ Sum of <b>N</b> over all test cases ≤ 10<sup>3</sup></li>
</ul>
<b>Subtask #2</b> (60 points):
<ul>
<li>2 ≤ <b>N</b> ≤ 3 * 10<sup>4</sup></li>
<li>2 ≤ Sum of <b>N</b> over all test cases ≤ 3 * 10<sup>4</sup></li>
</ul>
<b>Subtask #3</b> (20 points):
<ul>
<li>Original constraints</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 50</li>
<li>2 ≤ <b>N</b> ≤10<sup>6</sup></li>
<li>0 ≤ <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>2 ≤ Sum of <b>N</b> over all test cases ≤ 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
6
1 7
8 5
6 3
10 3
5 2
6 10

<b>Output:</b>
9
</pre>

<h3>Explanation</h3>
<p>We can start at some point and travel to all of the points if <b>D</b> ≤ 9, but not if <b>D</b> is greater than 9. Hence the answer is 9.</p>

<p>Let us take an example when <b>D</b> is 9. You can start at (1, 7) and move to (8, 5) because |1 - 8| + |7 - 5| = 9 ≥ 9. From (8, 5) you can move back to (1, 7) and then to (10, 3). From there you can go to (6, 10) and then to (5, 2). You then go to (1, 7) and then to (6, 3). Hence, we have visited all the special points.</p>