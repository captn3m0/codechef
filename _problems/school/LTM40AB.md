---
{"category_name":"school","problem_code":"LTM40AB","problem_name":"Chef and Inequality","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"xcwgf666","date_added":"12-09-2016","tags":{"0":"basic","1":"cakewalk","2":"ltime40","3":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/LTM40AB","time":{"view_start_date":1474736400,"submit_start_date":1474736400,"visible_start_date":1474736400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/mandarin/LTM40AB.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/russian/LTM40AB.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/vietnamese/LTM40AB.pdf">Vietnamese</a> as well.</h3>


<p>Chef likes inequalities. Please help him to solve next one.</p>
<p>Given four integers <b>a</b>, <b>b</b>, <b>c</b>, <b>d</b>. Find number of solutions <b>x</b> < <b>y</b>, where <b>a</b> ≤ <b>x</b> ≤ <b>b</b> and <b>c</b> ≤ <b>y</b> ≤ <b>d</b> and <b>x</b>, <b>y</b> integers.
</p>

<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting number of tests.</p>
<p>First line of each test case contains four positive integer numbers <b>a</b>, <b>b</b>, <b>c</b> and <b>d</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single number each in separate line denoting number of integer solutions as asked in the problem.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 20 </li>
<li>1 ≤ <b>a</b>, <b>b</b>, <b>c</b>, <b>d</b> ≤ 10<sup>6</sup> </li>
</ul>

<h3>Subtasks</h3>
<ul>
 <li><b>Subtask #1: (30 points) </b> 1 ≤ <b>a</b>, <b>b</b>, <b>c</b>, <b>d</b> ≤ 10<sup>3</sup>.</li>
 <li><b>Subtask #2: (70 points) </b> Original constraints.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
2 3 3 4</tt>

<b>Output:</b>
<tt>3</tt>

<b>Input:</b>
<tt>1
2 999999 1 1000000</tt>

<b>Output:</b>
<tt>499998500001</tt>
</pre>