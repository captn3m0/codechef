---
{"category_name":"easy","problem_code":"XXOR","problem_name":"Chef and Easy Problem","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hruday968","problem_tester":null,"date_added":"29-01-2018","tags":{"0":"easy","1":"hruday968","2":"march18","3":"prefix","4":"xor"},"editorial_url":"https://discuss.codechef.com/problems/XXOR","time":{"view_start_date":1520847000,"submit_start_date":1520847000,"visible_start_date":1520847000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/mandarin/XXOR.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/russian/XXOR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/vietnamese/XXOR.pdf">Vietnamese</a> as well.</h3>

<p>You are given a sequence <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> and <b>Q</b> queries. In each query, you are given two parameters <b>L</b> and <b>R</b>; you have to find the smallest integer <b>X</b> such that 0 ≤ <b>X</b> < 2<sup>31</sup> and the value of (<b>A<sub>L</sub></b> xor <b>X</b>) + (<b>A<sub>L+1</sub></b> xor <b>X</b>) + ... + (<b>A<sub>R</sub></b> xor <b>X</b>) is maximum possible.</p>

<p>Note: xor denotes the <a href = "https://en.wikipedia.org/wiki/Bitwise_operation#XOR">bitwise xor operation</a>.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains two space-separated integers <b>N</b> and <b>Q</b> denoting the number of elements in <b>A</b> and the number of queries respectively.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
<li>Each of the next <b>Q</b> lines contains two space-separated integers <b>L</b> and <b>R</b> describing one query.</li>
</ul>

<h3>Output</h3>
<p>For each query, print a single line containing one integer — the minimum value of <b>X</b>.</p> 

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>Q</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>A<sub>i</sub></b> < 2<sup>31</sup> for each valid <b>i</b></li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (18 points):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>3</sup></li>
<li>1 ≤ <b>Q</b> ≤ 10<sup>3</sup></li>
<li>0 ≤ <b>A<sub>i</sub></b> < 2<sup>10</sup> for each valid <b>i</b></li>
</ul>
</p>

<p>
<b>Subtask #2 (82 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

5 3
20 11 18 2 13
1 3
3 5
2 4

<b>Output:</b>

2147483629
2147483645
2147483645
</pre>
