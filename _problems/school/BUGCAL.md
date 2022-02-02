---
{"category_name":"school","problem_code":"BUGCAL","problem_name":"Buggy Calculator","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":"melfice","date_added":"22-10-2017","tags":{"0":"cakewalk","1":"chemthan","2":"chemthan","3":"ltime53"},"editorial_url":"https://discuss.codechef.com/problems/BUGCAL","time":{"view_start_date":1509210000,"submit_start_date":1509210000,"visible_start_date":1509210000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/mandarin/BUGCAL.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/russian/BUGCAL.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/vietnamese/BUGCAL.pdf">Vietnamese</a> as well.</h3>

<p> </p>
<p>Trans bought a calculator at creatnx's store. Unfortunately, it is fake. It has many bugs. One of them is adding two numbers without carrying. Example expression: 12 + 9 will have result 11 in his calculator. Given an expression in the form <b>a + b</b>, please output result from that calculator.</p>
<p> </p>


<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denote the number of test cases. Each test case contains two integers <b>a, b</b> in a single line.</p>
<p> </p>

<h3>Output</h3>
<p>Each test case, print answer in a single line.</p>
<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>1 ≤ a, b ≤ 10<sup>9</sup></b></li>
</ul>
<p></p>
<p>Subtasks:</p>
<ul>
<li>Subtask #1 (30 points): <b>1 ≤ a, b ≤ 9</b></li>
<li>Subtask #2 (70 points): original constrains</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
12 9
25 25

<b>Output:</b>
11
40
</pre>
<p> </p>