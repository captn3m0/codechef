---
{"category_name":"easy","problem_code":"KBIGNUMB","problem_name":"Eugene and big number","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"aangairbender","problem_tester":"mgch","date_added":"5-04-2016","tags":{"0":"aangairbender"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/mandarin/KBIGNUMB.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/russian/KBIGNUMB.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/vietnamese/KBIGNUMB.pdf">Vietnamese</a> as well.</h3>

<p>Eugene has to do his homework. But today, he is feeling very lazy and wants to you do his homework. His homework has the following given maths problem.</p>

<p>You are given three integers: <b>A</b>, <b>N</b>, <b>M</b>. You write the number <b>A</b> appended to itself <b>N</b> times in a row. Let's call the resulting big number <b>X</b>. For example, if <b>A = 120, N = 3</b>, then <b>X</b> will be <b>120120120</b>. Find out the value of <b>X</b> <a href="https://en.wikipedia.org/wiki/Modulo_operation">modulo</a> <b>M</b>.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follow.</p>
<p>Each test case is described in one line containing three integers: <b>A</b>, <b>N</b> and <b>M</b> as described in the problem statement.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing an integer denoting the value of <b>X</b> modulo <b>M</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>A</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>12</sup></b></li>
<li><b>2</b> ≤ <b>M</b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>

<p><b>Subtask #1 (15 points):</b>
<ul>
<li><b>0 ≤ A ≤ 100</b></li>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
</ul>
</p>
<p><b>Subtask #2 (25 points):</b>
<ul>
<li><b>1 ≤ N ≤ 10<sup>9</sup></b></li>
</ul>
</p>
<p><b>Subtask #3 (60 points):</b>
<ul>
<li><b>Original constraints</b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
2
12 2 17
523 3 11

<b>Output:</b>
5
6
</pre>

<h3>Explanation</h3>
<p><b>Example 1:</b> As <b>A = 12, N = 2, X = 1212</b>, <b>1212 modulo 17 = 5</b></p>

<p><b>Example 2.</b> As <b>A = 523, N = 3, X = 523523523</b>, <b>523523523 modulo 11 = 6</b></p>