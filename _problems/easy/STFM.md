---
{"category_name":"easy","problem_code":"STFM","problem_name":"Chef and Strange Formula","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"shangjingbo","date_added":"15-08-2014","tags":{"0":"antoniuk1","1":"easy","2":"feb15","3":"math"},"editorial_url":"http://discuss.codechef.com/problems/STFM","time":{"view_start_date":1424079000,"submit_start_date":1424079000,"visible_start_date":1424079000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/mandarin/STFM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/russian/STFM.pdf">Russian</a>.</h3>
<p>For positive integer <b>x</b> let define function <b>F(x) = 1 * (1! + x) + 2 * (2! + x) + .. + x * (x! + x)</b>. </p>
<p><b>"k!"</b> means factorial: <b>k! = 1 * 2 * .. * k</b> </p>

<p>Chef wants to calculate <b>F(p<sub>1</sub>) + F(p<sub>2</sub>) + ... + F(p<sub>n</sub>)</b>. </p>
<p>As answer could be large, help him, calculate value modulo <b>m</b>. </p>

<h3>Input</h3>
<li>First line contains two integers <b>n</b> and <b>m</b>.</li>
<li>Next line contains <b>n</b> space separated integers <b>p<sub>i</sub></b>.</li>
<h3>Output</h3>
<li>Output a single line containing one integer --- calculated value modulo <b>m</b>.</li>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>n<sub></sub></b> ≤ <b> 10<sup>5</sup> </b></li>
<li><b>1</b> ≤ <b><b>p<sub>i</sub></b></b> ≤ <b> 10<sup>18</sup> </b></li>
<li><b>1</b> ≤ <b>m</b> ≤ <b> 10<sup>7</sup> </b></li>
</ul>

<h3> Subtasks </h3>
<ul>
<li>Subtask #1: <b>1</b> ≤ <b><b>p<sub>i</sub></b></b> ≤ <b> 6 </b> (10 points)</li>
<li>Subtask #2: <b>1</b> ≤ <b><b>p<sub>i</sub></b></b> ≤ <b> 7 * 10<sup>3</sup> </b> (25 points)</li>
<li>Subtask #3: <b>m<sub></sub><sup></sup></b> - prime number (25 points)</li>
<li>Subtask #4: <sub></sub><sup></sup>original constraints (40 points)</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5 7
1 2 3 4 5

<b>Output:</b>
6

<h3>Explanation</h3>
<li>F(1) = 1 * (1! + 1) = 2</li>
<li>F(2) = 1 * (1! + 2) + 2 * (2! + 2) = 3 + 8 = 11</li>
<li>F(3) = 1 * (1! + 3) + 2 * (2! + 3) + 3 * (3! + 3) = 4 + 10 + 27 = 41</li>
<li>F(4) = 1 * (1! + 4) + 2 * (2! + 4) + 3 * (3! + 4) + 4 * (4! + 4) = 5 + 12 + 30 + 112 = 159</li>
<li>F(5) = 1 * (1! + 5) + 2 * (2! + 5) + 3 * (3! + 5) + 4 * (4! + 5) + 5 * (5! + 5) = 794</li>
F(1) + F(2) + F(3) + F(4) + F(5) = 2 + 11 + 41 + 159 + 794 = 1007 

1007 modulo 7 = 6
</pre>