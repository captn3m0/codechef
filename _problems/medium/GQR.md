---
{"category_name":"medium","problem_code":"GQR","problem_name":"Queries with GCD","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"11-12-2017","tags":{"0":"dynamic","1":"gcd","2":"ltime58","3":"medium","4":"mgch"},"time":{"view_start_date":1522602000,"submit_start_date":1522602000,"visible_start_date":1522602000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/mandarin/GQR.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/russian/GQR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/vietnamese/GQR.pdf">Vietnamese</a> as well.</h3>

<p>
You are given a sequence <b>A</b> with <b>N</b> elements and <b>Q</b> queries on this sequence. In each query, you are given two indices <b>L</b> and <b>R</b>; you should compute the maximum value of the <a href="https://en.wikipedia.org/wiki/Greatest_common_divisor">greatest common divisor</a> (GCD) of two elements <b>A<sub>x</sub></b>, <b>A<sub>y</sub></b> satisfying <b>L</b> ≤ <b>x</b> &lt; <b>y</b> ≤ <b>R</b>.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains two space-separated integers <b>N</b> and <b>Q</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
<li>Each of the following <b>Q</b> lines contains two space-separated integers <b>L</b> and <b>R</b> describing one query.</li>
</ul>

<h3>Output</h3>
<p>For each query, print a single line containing the maximum GCD.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>4</sup></li>
<li>1 ≤ <b>Q</b> ≤ 5 · 10<sup>5</sup></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>8</sup> for each valid <b>i</b></li>
<li>1 ≤ <b>L</b> &lt; <b>R</b> ≤ <b>N</b></li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (25 points):</b> <b>N</b> ≤ 200
</p>

<p>
<b>Subtask #2 (25 points):</b> <b>A<sub>i</sub></b> ≤ 1,000 for each valid <b>i</b>
</p>

<p>
<b>Subtask #3 (50 points):</b> original constraints
</p>

<h3>Example</h3>
<pre>
<b>Input:</b>

4 6
4 2 1 8
1 2
1 3
1 4
2 3
2 4
3 4

<b>Output:</b>

2
2
4
1
2
1
</pre>

<h3>Explanation</h3>

<p>The answers to the queries are GCDs of the following pairs:
<ul>
<li>query 1: GCD(<b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>) = 2</li>
<li>query 2: GCD(<b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>) = 2</li>
<li>query 3: GCD(<b>A<sub>1</sub></b>, <b>A<sub>4</sub></b>) = 4</li>
<li>query 4: GCD(<b>A<sub>2</sub></b>, <b>A<sub>3</sub></b>) = 1</li>
<li>query 5: GCD(<b>A<sub>2</sub></b>, <b>A<sub>4</sub></b>) = 2</li>
<li>query 6: GCD(<b>A<sub>3</sub></b>, <b>A<sub>4</sub></b>) = 1</li>
</ul>
</p>
