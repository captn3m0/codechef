---
{"category_name":"medium","problem_code":"SEADIV","problem_name":"Sereja and Dividing","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"xcwgf666","date_added":"15-09-2013","tags":{"0":"dec15","1":"division","2":"inverse","3":"medium","4":"modular","5":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEADIV","time":{"view_start_date":1450085400,"submit_start_date":1450085400,"visible_start_date":1450085400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/mandarin/SEADIV.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/russian/SEADIV.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/vietnamese/SEADIV.pdf">Vietnamese</a> as well.</h3>


<p>Sereja has two integers — <b>A</b> and <b>B</b> — in <i>7</i>-ary system. He wants to calculate the number <b>C</b>, such that <b>B * C = A</b>. It is guaranteed that <b>B</b> is a divisor of <b>A</b>.</p>
<p>
Please, help Sereja calculate the number <b>C</b> modulo <b>7<sup>L</sup></b>.
</p>

<h3>Input</h3>
<p>
First line of input contains an integer <b>T</b> — the number of test cases. <b>T</b> tests follow.</p>
<p>
For each test case, the first line contains the integer <b>A</b>, and the second line contains the integer <b>B</b>, and the third line contains the integer <b>L</b>. <b>A</b> and <b>B</b> are given in <i>7</i>-ary system.
</p>

<h3>Output</h3>
Output the answer in <i>7</i>-ary system.

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>A</b> and <b>B</b> are both positive integers.</li>
<li>Length of <b>A</b> is a positive integer and doesn't exceed <b>10<sup>6</sup></b>.</li>
<li><b>L</b> and length of <b>B</b> are positive integers and do not exceed <b>10000</b>.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Sub task #1 (20 points):</b> Length of <b>A</b> is a positive integer and doesn't exceed <b>20</b>.</li>
<li><b>Sub task #2 (30 points):</b> Length of <b>A</b> is a positive integer and doesn't exceed <b>2000</b>.</li>
<li><b>Sub task #3 (50 points):</b> Original constraints.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
21
5
10
202
13
1
202
13
2</tt>

<b>Output:</b>
<tt>3
3
13</tt>
</pre>