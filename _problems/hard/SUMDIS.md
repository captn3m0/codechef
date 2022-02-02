---
{"category_name":"hard","problem_code":"SUMDIS","problem_name":"Sum of distances","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"r_64","problem_tester":"xcwgf666","date_added":"26-01-2017","tags":{"0":"divide","1":"geometry","2":"graph","3":"hard","4":"march17","5":"r_64"},"editorial_url":"https://discuss.codechef.com/problems/SUMDIS","time":{"view_start_date":1489397400,"submit_start_date":1489397400,"visible_start_date":1489397400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/mandarin/SUMDIS.pdf?v=1">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/russian/SUMDIS.pdf?v=1">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/vietnamese/SUMDIS.pdf?v=1">Vietnamese</a> as well.</h3>

<p>
	There is a <strong>directed</strong> acyclic graph with <strong>N</strong> vertices. The vertices are numbered from <strong>1</strong> to <strong>N</strong>.</p>
<p>
	For every <strong>1 ≤ i ≤ N-1</strong>, there is an edge from vertex <strong>i</strong> to vertex <strong>i+1</strong>, which has weight <strong>a<sub>i</sub></strong>.</p>
<p>
	For every <strong>1 ≤ i ≤ N-2</strong>, there is an edge from vertex <strong>i</strong> to vertex <strong>i+2</strong>, which has weight <strong>b<sub>i</sub></strong>.</p>
<p>
	For every <strong>1 ≤ i ≤ N-3</strong>, there is an edge from vertex <strong>i</strong> to vertex <strong>i+3</strong>, which has weight <strong>c<sub>i</sub></strong>.</p>
<p>
	There are no other edges.</p>
<p>
	For each pair of vertices <strong>s</strong>, <strong>t</strong> where <strong>s &lt; t</strong>, let <strong>d(s, t)</strong> denote the length of the shortest path from <strong>s</strong> to <strong>t</strong>. Your task is to compute the sum of <strong>d(s, t)</strong> for every <strong>1 ≤ s &lt; t ≤ N.</strong></p>

<h3>
	Input</h3>
<p>
	First line of the input contains an integer <b>T</b> denoting number of test cases. <b>T</b> test cases follow.</p>
<p>
	For each test case:</p>
<p>
	The first line contains an integer <strong>N</strong>.</p>
<p>
	The second line contains <strong>N - 1</strong> integers <strong>a<sub>1</sub></strong>, <strong>a<sub>2</sub></strong>, ..., <strong>a<sub>N-1</sub></strong>.</p>
<p>
	The third line contains <strong>N - 2</strong> integers <strong>b<sub>1</sub></strong>, <strong>b<sub>2</sub></strong>, ..., <strong>b<sub>N-2</sub></strong>.</p>
<div>
	<p>
		The fourth line contains <strong>N - 3</strong> integers <strong>c<sub>1</sub></strong>, <strong>c<sub>2</sub></strong>, ..., <strong>c<sub>N-3</sub></strong>.</p>
</div>
<h3>
	Output</h3>
<p>
	For each test case, output a single line containing an integer, denoting the answer. It can be proved that the answer fits in the signed 64-bit type.</p>
<h3>
	Constraints</h3>
<ul>
	<li>
		<strong>1 ≤ T ≤ 10<sup>4</sup></strong></li>
	<li>
		<strong>4<strong> ≤ </strong>N ≤ 10<sup>5</sup></strong></li>
	<li>
		<strong>1</strong> ≤ sum of <b>N</b> over all test cases  ≤ <strong>3*10<sup>5</sup></strong></li>
	<li>
		<strong>1</strong> ≤ <strong>a<sub>i</sub></strong><strong><strong>, </strong>b<sub>i</sub></strong><strong><strong>, </strong>c<sub>i </sub></strong><strong>≤ 10<sup>4</sup></strong></li>
</ul>
<h3>
	Subtasks</h3>
<p>
	Subtask #1 (8 points):
<ul>
	<li>
		<strong>N ≤ 10<sup>3</sup></strong>.</li>
	<li>
		<strong>1</strong> ≤ sum of <b>N</b> over all test cases  ≤ <strong>10<sup>4</sup></strong>.</li>
</ul>
</p>
<p>
	Subtask #2: (13 points):
<ul>
	<li>
		<strong>b<sub>i</sub> = a<sub>i</sub> + a<sub>i+1</sub></strong>.</li>
	<li>
		<strong>c<sub>i</sub> = a<sub>i</sub> + a<sub>i+1</sub> + a<sub>i+2</sub></strong>.</li>
</ul>
</p>
<p>
	Subtask #3: (46 points):
<ul>
	<li>
		<strong>c<sub>i</sub> = a<sub>i</sub> + a<sub>i+1</sub> + a<sub>i+2</sub></strong>.</li>
</ul>
</p>
<p>
	Subtsak #4: (33 points): 
<ul>
<li>Original constraints.</li>
</ul>
</p>
<h3>
	Example</h3>
<pre>
<b>Input:</b>
<tt>2
4
1 1 1
1 1
1
5
1 2 3 4
2 3 4
3 4</tt>

<b>Output:</b>
<tt>6
31</tt></pre>

<h3>Explanation</h3>
<p><b>Example case 1</b>. In this test case the distance between the node <b>A</b> and the node <b>B</b> will be equal to one for all pairs <b>(A, B)</b>. So for all six pairs we get the distance <b>1</b> and the final sum <b>6</b>. </p>