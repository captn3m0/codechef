---
{"category_name":"school","problem_code":"C00K0FF","problem_name":"Chef and Cook-Off Contests","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"r_64","problem_tester":null,"date_added":"22-09-2017","tags":{"0":"cakewalk","1":"ltime52","2":"r_64"},"editorial_url":"https://discuss.codechef.com/problems/C00K0FF","time":{"view_start_date":1232516621,"submit_start_date":1232516621,"visible_start_date":1232516621,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/mandarin/C00K0FF.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/russian/C00K0FF.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/vietnamese/C00K0FF.pdf">vietnamese</a> as well.</h3>

<p>
	Chef wants to prepare a Cook-Off contest with 5 problems chosen from a set of <b>N</b> problems. He has marked the difficulty of each problem within a range identified by one of the following strings: "cakewalk", "simple", "easy", "easy-medium", "medium", "medium-hard", "hard". According to <a href="https://www.codechef.com/problemsetting#ProblemLevel">this page</a>, a Cook-Off contest must have problems of the following difficulties:
<ul>
	<li>exactly one "cakewalk";</li>
	<li>exactly one "simple";</li>
	<li>exactly one "easy";</li>
	<li>one "easy-medium" or one "medium";</li>
	<li>one "medium-hard" or one "hard".</li>
</ul></p>
<p>
	Given the information about the <b>N</b> problems, can you advise Chef if it's possible to pick 5 problems and form a valid Cook-Off contest?</p>
<h3>
	Input</h3>
<ul>
	<li>The first line of input contains one integer <strong>T</strong> denoting the number of test cases.</li>
	<li><b>T</b> test cases follow.</li>
	<li>The first line of each test case contains a single integer <b>N</b>.</li>
	<li>Then <b>N</b> lines follow; the <b>i</b>-th line contains a single string <b>s<sub>i</sub></b>, denoting the difficulty of the <b>i</b>-th problem.</li>
</ul>
<h3>
	Output</h3>
<p>
	For each test case, output "Yes" if it's possible to pick 5 problems and form a valid Cook-Off contest; otherwise, output "No".</p>


<h3>
	Constraints</h3>
<p><ul>
	<li><b>1</b> ≤ <b>T</b> ≤ <b>100000</b></li>
	<li><b>5</b> ≤ <b>N</b> ≤ <b>100000</b></li>
	<li>sum of <strong>N</strong> in all test cases ≤ <strong>600000</strong></li>
	<li><strong>s<sub>i</sub></strong> can only be one of the following strings:
<ul><li>"cakewalk"</li>
<li>"simple"</li>
<li>"easy"</li>
<li>"easy-medium"</li>
<li>"medium"</li>
<li>"medium-hard"</li>
<li>"hard"</li></ul></li>
</ul>
</p>
<p>
	Subtask #1 (11 points):
<ul>
	<li><b>N</b> = <b>5</b></li>
</ul>
</p>
<p>
	Subtask #2 (27 points):
<ul>
	<li><b>5</b> ≤ <b>N</b> ≤ <b>15</b></li>
	<li><b>T</b> ≤ <b>100</b></li>
</ul>
</p>
<p>
	Subtask #3 (62 points):
<ul>
	<li>original constraints</li>
</ul>
</p>
<h3>
	Example</h3>
<pre>
<b>Input:</b>
3
5
easy
medium
medium-hard
simple
cakewalk
7
simple
simple
medium
medium
easy-medium
cakewalk
easy
7
cakewalk
simple
easy
easy-medium
medium
medium-hard
hard

<b>Output:</b>
Yes
No
Yes

</pre>
<h3>
	Explanation</h3>
<p>
	<b>Example case 2:</b> There are neither problems of "medium-hard" level nor "hard" level, so it's impossible to form a Cook-Off contest.</p>