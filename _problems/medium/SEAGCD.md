---
{"category_name":"medium","problem_code":"SEAGCD","problem_name":"Sereja and GCD","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"1 - 15","source_sizelimit":50000,"problem_author":"sereja","problem_tester":"shiplu","date_added":"21-10-2014","tags":{"0":"dec14","1":"medium","2":"number","3":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAGCD","time":{"view_start_date":1418643320,"submit_start_date":1418643320,"visible_start_date":1418643000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/mandarin/SEAGCD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/russian/SEAGCD.pdf">Russian</a>.</h3>
<p>In this problem Sereja is interested in the number of arrays of integers, <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>, with <b>1 ≤ A<sub>i</sub> ≤ M</b>, such that the greatest common divisor of all of its elements is equal to a given integer <b>D</b>.</p>
<p>Find the sum of answers to this problem with <b>D = L, D = L+1, ..., D = R</b>, modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> - the number of test cases. <b>T</b> tests follow, each containing a single line with the values of <b>N, M, L, R</b>.</p>
<h3>Output</h3>
<p>For each test case output the required sum, modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>M</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1: <b>1</b> ≤ <b>N, M</b> ≤ <b>10 (10 points)</b></li>
<li>Subtask #2: <b>1</b> ≤ <b>N, M</b> ≤ <b>1000 (30 points)</b></li>
<li>Subtask #3: <b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>7</sup> (60 points)</b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 5 1 5
5 5 4 5

<b>Output:</b>
3125
2

</pre>