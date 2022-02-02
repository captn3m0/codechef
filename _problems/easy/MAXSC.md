---
{"category_name":"easy","problem_code":"MAXSC","problem_name":"Maximum Score","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hruday968","problem_tester":null,"date_added":"28-12-2017","tags":{"0":"cakewalk","1":"hruday968","2":"hruday968","3":"jan18"},"editorial_url":"https://discuss.codechef.com/problems/MAXSC","time":{"view_start_date":1516008600,"submit_start_date":1516008600,"visible_start_date":1516008600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/mandarin/MAXSC.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/russian/MAXSC.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/vietnamese/MAXSC.pdf">Vietnamese</a> as well.</h3>

<p>You are given <b>N</b> integer sequences <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>. Each of these sequences contains <b>N</b> elements. You should pick <b>N</b> elements, one from each sequence; let's denote the element picked from sequence <b>A<sub>i</sub></b> by <b>E<sub>i</sub></b>. For each <b>i</b> (2 ≤ <b>i</b> ≤ <b>N</b>), <b>E<sub>i</sub></b> should be strictly greater than <b>E<sub>i-1</sub></b>.</p>
 
<p>Compute the maximum possible value of <b>E<sub>1</sub> + E<sub>2</sub> + ... + E<sub>N</sub></b>. If it's impossible to pick the elements <b>E<sub>1</sub>, E<sub>2</sub>, ..., E<sub>N</sub></b>, print -1 instead.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b>.</li>
<li><b>N</b> lines follow. For each valid <b>i</b>, the <b>i</b>-th of these lines contains <b>N</b> space-separated integers <b>A<sub>i1</sub>, A<sub>i2</sub>, ..., A<sub>iN</sub></b> denoting the elements of the sequence <b>A<sub>i</sub></b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the maximum sum of picked elements.</p> 

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 700</li>
<li>1 ≤ sum of <b>N</b> in all test-cases ≤ 3700</li>
<li>1 ≤ <b>A<sub>ij</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b>, <b>j</b></li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (18 points):</b> 1 ≤ <b>A<sub>ij</sub></b> ≤ <b>N</b> for each valid <b>i</b>, <b>j</b>
</p>
	
<p>
<b>Subtask #2 (82 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

1
3
1 2 3
4 5 6
7 8 9

<b>Output:</b>

18
</pre>

<h3>Explanation</h3>

<p><b>Example case 1:</b> To maximise the score, pick 3 from the first row, 6 from the second row and 9 from the third row. The resulting sum is <b>E<sub>1</sub>+E<sub>2</sub>+E<sub>3</sub></b> = 3+6+9 = 18.</p>
