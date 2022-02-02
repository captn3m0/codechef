---
{"category_name":"easy","problem_code":"ABX01","problem_name":"Strange Function","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"abx_2109","problem_tester":"kingofnumbers","date_added":"30-10-2017","tags":{"0":"abx_2109","1":"fast","2":"ltime55","3":"observations","4":"simple"},"editorial_url":"https://discuss.codechef.com/problems/ABX01","time":{"view_start_date":1514653200,"submit_start_date":1514653200,"visible_start_date":1514653200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/mandarin/ABX01.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/russian/ABX01.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/vietnamese/ABX01.pdf">Vietnamese</a> as well.</h3>


<p>As New Year is approaching, Salik is studying functions in order to sharpen his math skills. Instead of regular functions, he is studying a strange function <b>F</b> which operates on non-negative integers. The value of <b>F</b>(<b>A</b>) is obtained by the following process:
<ul>
<li>Compute the sum of digits of <b>A</b>; let's denote this sum by <b>S</b>.</li>
<li>If <b>S</b> is a single-digit integer, then <b>F</b>(<b>A</b>) = <b>S</b>.</li>
<li>Otherwise, <b>F</b>(<b>A</b>) = <b>F</b>(<b>S</b>).</li>
</ul></p>
<p>It's guaranteed that this process correctly defines the function <b>F</b>.</p>

<p>
Since this problem was pretty straightforward, he invented a new problem: Given two integers <b>A</b> and <b>N</b>, compute <b>F</b>(<b>A<sup>N</sup></b>). Can you help him solve this task?</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains two space-separated integers <b>A</b> and <b>N</b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the value of <b>F</b>(<b>A<sup>N</sup></b>).</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>A</b>, <b>N</b> ≤ 10<sup>18</sup></li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (10 points):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 3</li>
<li>1 ≤ <b>A</b> ≤ 10<sup>5</sup></li>
</ul>
</p>

<p>
<b>Subtask #2 (20 points):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 100</li>
<li>1 ≤ <b>A</b> ≤ 10<sup>5</sup></li>
</ul>
</p>

<p>
<b>Subtask #3 (70 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

3
5 2
7 2
127 1

<b>Output:</b>

7
4
1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> F(5 · 5) = F(25) = F(2+5) = F(7) = 7</p> <p><b>Example case 2:</b> F(7 · 7) = F(49) = F(4+9) = F(13) = F(1+3) = F(4) = 4</p>
<p><b>Example case 3:</b> F(127) = F(1+2+7) = F(10) = F(1+0) = F(1) = 1</p>