---
{"category_name":"medium","problem_code":"COPRIME3","problem_name":"Coprime Triples","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"furko","date_added":"5-06-2014","tags":{"0":"easy","1":"gcd","2":"iep","3":"ltime13","4":"mobius_function","5":"sieve","6":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/COPRIME3","time":{"view_start_date":1404030600,"submit_start_date":1404030600,"visible_start_date":1404030600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/mandarin/COPRIME3.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/russian/COPRIME3.pdf">Russian</a>.</h3>
<p>You are given a sequence <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b>. Count the number of triples (<b>i, j, k</b>) such that 1 ≤ <b>i</b> &lt; <b>j</b> &lt; <b>k</b> ≤ <b>N</b> and GCD(<b>a<sub>i</sub>, a<sub>j</sub>, a<sub>k</sub></b>) = 1. Here <b>GCD</b> stands for the Greatest Common Divisor.</p>
<h3>Input</h3>
<p>The first line of input contains a single integer <b>N</b> - the length of the sequence.</p>
<p>The second line contains <b>N</b> space-separated integers - <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> respectively.</p>
<h3>Output</h3>
<p>Output the required number of triples on the first line of the output.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b> : 22 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b> : 23 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> : 55 points.</li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 2 3 4

<b>Output:</b>
4
</pre><p> </p>
<h3>Explanation</h3>
<p>Any triple will be a coprime one.</p>
