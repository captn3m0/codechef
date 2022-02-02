---
{"category_name":"easy","problem_code":"AFK","problem_name":"Three Integers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"lg5293","date_added":"27-03-2018","tags":{"0":"ad","1":"easy","2":"ltime58","3":"maths","4":"mgch"},"time":{"view_start_date":1522602000,"submit_start_date":1522602000,"visible_start_date":1522602000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/mandarin/AFK.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/russian/AFK.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/vietnamese/AFK.pdf">Vietnamese</a> as well.</h3>

<p> 
You are given three integers <b>A</b>, <b>B</b> and <b>C</b>. You may perform the following operation an arbitrary number of times: choose one of the numbers <b>A</b>, <b>B</b>, <b>C</b> and either add 1 to it or subtract 1 from it.</p>

<p>Find the minimum number of operations required to make the sequence <b>A, B, C</b> an arithmetic progression, i.e. a sequence which satisfies <b>B</b> - <b>A</b> = <b>C</b> - <b>B</b>.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains three space-separated integers <b>A</b>, <b>B</b> and <b>C</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the minimum required number of operations.
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10,000</li>
<li>-10<sup>9</sup> ≤ <b>A</b>, <b>B</b>, <b>C</b> ≤ 10<sup>9</sup></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (35 points):</b> -10<sup>2</sup> ≤ <b>A</b>, <b>B</b>, <b>C</b> ≤ 10<sup>2</sup>
</p>

<p>
<b>Subtask #2 (65 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

5
-5 0 5
-5 7 6
-10 -100 20
1 -1 1
51 23 10

<b>Output:</b>

0
7
105
2
8
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> No operations are needed because 0-(-5) = 5-0.</p>
<p><b>Example case 2:</b> We can obtain an arithmetic progression in seven operations by adding 1 to <b>A</b> = -5 and subtracting 1 six times from <b>B</b> = 7.</p>
<p><b>Example case 3:</b> We should add 1 to <b>B</b> 105 times.</p>
