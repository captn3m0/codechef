---
{"category_name":"school","problem_code":"SMPAIR","problem_name":"The Smallest Pair","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"furko","date_added":"5-06-2014","tags":{"0":"cakewalk","1":"ltime13","2":"sorting","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SMPAIR","time":{"view_start_date":1404030600,"submit_start_date":1404030600,"visible_start_date":1404030600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/mandarin/SMPAIR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/russian/SMPAIR.pdf">Russian</a>.</h3>

<p>You are given a sequence <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b>. Find the smallest possible value of <b>a<sub>i</sub> + a<sub>j</sub></b>, where 1 ≤ <b>i</b> < <b>j</b> ≤ <b>N</b>.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. </p>
<p>The first line of each description consists of a single integer <b>N</b>.</p>
<p>The second line of each description contains <b>N</b> space separated integers - <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> respectively.

<h3>Output</h3>
<p>For each test case, output a single line containing a single integer - the smallest possible sum for the corresponding test case.</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>T</b> = <b>10<sup>5</sup></b>, <b>N</b> = <b>2</b> : 13 points.</li>
<li><b>T</b> = <b>10<sup>5</sup></b>, <b>2</b> ≤ <b>N</b> ≤ <b>10</b> : 16 points.</li>
<li><b>T</b> = <b>1000</b>, <b>2</b> ≤ <b>N</b> ≤ <b>100</b> : 31 points.</li>
<li><b>T</b> = <b>10</b>, <b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> : 40 points.</li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
1
4
5 1 3 4

<b>Output:</b>
4
</pre>
<p> </p>
<h3>Explanation</h3>
<p>Here we pick <b>a<sub>2</sub></b> and <b>a<sub>3</sub></b>. Their sum equals to 1 + 3 = 4.</p>