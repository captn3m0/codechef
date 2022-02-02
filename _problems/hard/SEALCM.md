---
{"category_name":"hard","problem_code":"SEALCM","problem_name":"Sereja and LCM","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"shiplu","date_added":"23-10-2014","tags":{"0":"dynamic","1":"jan15","2":"matrix","3":"medium","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEALCM","time":{"view_start_date":1421055000,"submit_start_date":1421055000,"visible_start_date":1421055000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/SEALCM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/SEALCM.pdf">Russian</a>.</h3>
<p>
In this problem Sereja is interested in number of arrays <b>A[1], A[2], ..., A[N] (1 ≤ A[i] ≤ M, A[i] - integer)</b><br />
such that least common multiple (<a href="http://en.wikipedia.org/wiki/Least_common_multiple"><b>LCM</b></a>) of all its elements is divisible by number <b>D</b>.
</p>
<p>
Please, find sum of answers to the problem with <b>D = L, D = L+1, ..., D = R</b>. As answer could be large, please output it modulo<br />
(10<sup>9</sup> + 7).
</p>
<h3>Input</h3>
<li>First line of input contain integer <b>T</b> - number of test cases. </li>
<li>For each test case, only line of input contain four integers <b>N, M, L, R</b>.</li>
<h3>Output</h3>
<p>For each test case, output required sum modulo <b>(10<sup>9</sup> + 7)</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5*10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>M</b> ≤ <b>1000</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1: <b>1</b> ≤ <b>N, M</b> ≤ <b>10</b> (25 points)</li>
<li>Subtask #2: <b>1</b> ≤ <b>N, M</b> ≤ <b> 1000 </b> (25 points)</li>
<li>Subtask #3: original constraints (50 points)</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 5 1 5
5 5 4 5

<b>Output:</b>
12310
4202

</pre>