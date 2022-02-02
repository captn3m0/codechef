---
{"category_name":"easy","problem_code":"CHEFDICE","problem_name":"Chef and Dice","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"r_64","problem_tester":null,"date_added":"13-09-2017","tags":{"0":"ltime52","1":"r_64","2":"simple"},"editorial_url":"https://discuss.codechef.com/problems/CHEFDICE","time":{"view_start_date":1232516621,"submit_start_date":1232516621,"visible_start_date":1232516621,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/mandarin/CHEFDICE.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/russian/CHEFDICE.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/vietnamese/CHEFDICE.pdf">vietnamese</a> as well.</h3>

<p>
	Chef has a cubic die with 6 faces kept on an infinite plane. Each face has a distinct integer in the range [1,6] written on it, but the exact arrangement of the numbers on the faces of the die is unknown to Chef. Curiosity gets the better of Chef and he wants to find out <b>o</b>(1), <b>o</b>(2), ..., <b>o</b>(6), where <b>o</b>(<b>i</b>) is the number written opposite to the number <b>i</b>.</p>
<p>
	Chef performs the following <strong>N-1</strong> steps to learn the exact arrangement of the numbers on the die. In the <b>i</b>-th step, Chef pushes the die in some direction (there are 4 possible directions), and the die rolls 90<sup>o</sup> in this direction. The picture below demonstrates a die and the result that it produced after rolling in each of the 4 directions respectively. For this die, we have <b>o</b>(1)=4, <b>o</b>(2)=5, <b>o</b>(3)=6, <b>o</b>(4)=1, <b>o</b>(5)=2, <b>o</b>(6)=3.</p>
<p>
	<img src="https://codechef_shared.s3.amazonaws.com/download/upload/LTIME52/1.png" width="75%" height="75%">
</p>
<p>
	Chef records <b>N</b> numbers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>, where <b>A<sub>i</sub></b> is the number written on the top of the die before the <b>i</b>-th step. However, the information on the direction in which he pushes the die each time are lost. Can you help him determine the arrangement of 1-6? You need to output <b>o</b>(1), <b>o</b>(2), ..., <b>o</b>(6). If there are multiple solutions, output any one of them.</p>
<h3>
	Input</h3>
<ul>
	<li>The first line of input contains a single integer <b>T</b>, the number of test cases.</li>
	<li>Each test case consists of two lines.</li>
	<li>The first line contains an integer <b>N</b>, and the second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>.</li>
</ul>
<h3>
	Output</h3>
<p>
	For each test case, output one line. If a possible solution exists, then output 6 space-separated integers <b>o</b>(1), <b>o</b>(2), ..., <b>o</b>(6); otherwise, output -1.</p>

<h3>
	Constraints</h3>
<p><ul>
	<li><b>1</b> ≤ <b>T</b>, <b>N</b> ≤ <b>500</b></li>
	<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>6</b></li>
</ul></p>
<p>
	Subtask #1 (17 points):
<ul>
	<li><b>N</b> ≤ <b>2</b></li>
</ul></p>
<p>
	Subtask #2 (83 points):
<ul>
	<li>original constraints</li>
</ul></p>
<h3>
	Example</h3>
<pre>
<b>Input:</b>
4
9
1 3 4 6 1 3 4 6 1
10
1 2 1 3 1 4 1 5 1 6
6
1 2 3 4 5 6
4
1 3 3 1

<b>Output:</b>
2 1 6 5 4 3
-1
4 5 6 1 2 3
-1

</pre>
<h3>
	Explanation</h3>
<p>
	<b>Example case 1:</b> See below.</p>
<p>
	<img src="https://codechef_shared.s3.amazonaws.com/download/upload/LTIME52/2.png" width="75%" height="75%"></p>
<p>
	<b>Example case 2:</b> You can prove that there's no solution.</p>
<p>
	<b>Example case 3:</b> The solution is not unique. <span style="font-family:courier new,courier,monospace;">3 5 1 6 2 4</span> is another valid solution.</p>