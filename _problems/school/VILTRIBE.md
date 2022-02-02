---
{"category_name":"school","problem_code":"VILTRIBE","problem_name":"Villages and Tribes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"30-10-2017","tags":{"0":"admin2","1":"cakewalk","2":"nov17"},"editorial_url":"https://discuss.codechef.com/problems/VILTRIBE","time":{"view_start_date":1510579800,"submit_start_date":1510579800,"visible_start_date":1510579800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/mandarin/VILTRIBE.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/russian/VILTRIBE.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/vietnamese/VILTRIBE.pdf">Vietnamese</a> as well.</h3>


<p>There are <b>n</b> villages in a line in an area. There are two kinds of tribes A and B that reside there. A village can be either empty or occupied by one of the tribes. An empty village is said to be controlled by a tribe of village A if it is surrounded by villages of tribes A from the left and from the right. Same goes for the tribe B.</p>

<p>Find out the number of villages that are either occupied by or controlled by tribes A and B, respectively.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The first line of the input contains a string <b>s</b> denoting the configuration of the villages, each character of which can be 'A', 'B' or '.'.</p>

<h3>Output</h3>
<p>For each test case, output two space-separated integers denoting the number of villages either occupied by or controlled by tribe A and B, respectively.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 20</b></li>
<li><b>1 ≤ |s| ≤ 10<sup>5</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1</b> (40 points): <b>1 ≤ |s| ≤ 10<sup>3</sup></b></li>
<li><b>Subtask #2</b> (60 points): Original constraints</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
4
A..A..B...B
..A..
A....A
..B..B..B..

<b>Output</b>
4 5
1 0
6 0
0 7
</pre>