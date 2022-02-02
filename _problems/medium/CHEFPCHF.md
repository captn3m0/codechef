---
{"category_name":"medium","problem_code":"CHEFPCHF","problem_name":"Chef and Programming Contest by His Friend","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"r_64","problem_tester":null,"date_added":"22-09-2017","tags":{"0":"binary","1":"hashing","2":"ltime52","3":"medium","4":"palindromes","5":"r_64"},"editorial_url":"https://discuss.codechef.com/problems/CHEFPCHF","time":{"view_start_date":1506790800,"submit_start_date":1506790800,"visible_start_date":1506790800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/mandarin/CHEFPCHF.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/russian/CHEFPCHF.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/vietnamese/CHEFPCHF.pdf">vietnamese</a> as well.</h3>

<p>
	Fehc is Chef's best friend. They grew up with each other, and often help each other with competitive programming.</p>
<p>
	Chef is participating in a programming contest prepared by Fehc and finds the following problem in Fehc's problem set: given a string <b>s</b>[<b>1</b>..<b>N</b>], count the number of pairs of indices <b>1</b> ≤ <strong>i</strong> ≤ <b>j</b> ≤ <strong>N</strong> such that <b>s</b>[<b>i..j</b>] is palindrome and <b>j-i</b> is even. The characters that may appear in <b>s</b> are 0, 1, 2, ..., 10<sup>9</sup>.</p>
<p>
	Chef doesn't know the solution, but he knows Fehc's habits of creating test data. When preparing data for a string problem, Fehc always generates a string of <b>N</b> 0's, and replaces some of the 0's by other characters. Thus, Chef assumes that there are only <b>K</b> nonzero characters in <b>s</b>, and <b>K</b> is usually much smaller than <b>N</b>.</p>
<p>
	Given this useful information, can you help Chef solve this problem?</p>
<h3>
	Input</h3>
<ul>
	<li>The first line of input contains one integer <b>T</b> denoting the number of test cases.</li>
	<li>For each test case, the first line contains two space-separated integers <b>N</b> and <b>K</b>.</li>
	<li><b>K</b> lines follow; the <b>i</b>-th of these lines contains two space-separated integers <b>p<sub>i</sub></b> and <b>q<sub>i</sub></b>, meaning that the <b>i</b>-th nonzero character is <b>s</b>[<b>p<sub>i</sub></b>] = <b>q<sub>i</sub></b>.</li>
</ul>
<h3>
	Output</h3>
<p>
	For each test case, output one integer denoting the answer to the problem.</p>

<h3>
	Constraints</h3>
<p><ul>
	<li><b>1</b> ≤ <b>T</b> ≤ <strong>10</strong></li>
	<li><b>1</b> ≤ <b>N</b> ≤ <strong>10<sup>9</sup></strong></li>
	<li><b>0</b> ≤ <b>K</b> ≤ <strong>10<sup>5</sup></strong></li>
	<li><b>1</b> ≤ <b>p<sub>1</sub></b> &lt; <b>p<sub>2</sub></b> &lt; ... &lt; <b>p<sub>K</sub></b> ≤ <b>N</b></strong></li>
	<li><b>1</b> ≤ <b>q<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul></p>
<p>
	Subtask #1 (9 points):
<ul>
	<li><strong>N ≤ 1000</strong></li>
</ul></p>
<p>
	Subtask #2 (14 points):
<ul>
	<li><strong>N ≤ 10<sup>5</sup></strong></li>
</ul></p>
<p>
	Subtask #3 (21 points):
<ul>
	<li><strong>K ≤ 1000</strong></li>
</ul></p>
<p>
	Subtask #4 (56 points):
<ul>
	<li>original constraints</li>
</ul></p>
<h3>
	Example</h3>
<pre>
<b>Input:</b>
3
7 2
5 1
6 1
7 3
2 1
4 2
6 1
10 0

<b>Output:</b>
9
12
30

</pre>
<h3>
	Explanation</h3>
<p>
	<b>Example case 1:</b> s={0,0,0,0,1,1,0}. The 9 pairs (i,j) are: (1,1), (2,2), ..., (7,7), (1,3) and (2,4).</p>
<p>
	<b>Example case 2:</b> s={0,1,0,2,0,1,0}.</p>
<p>
	<b>Example case 3:</b> s={0,0,0,0,0,0,0,0,0,0}.</p>
