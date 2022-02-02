---
{"category_name":"hard","problem_code":"TUPLES2","problem_name":"Path Triples On Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"r_64","problem_tester":"xcwgf666","date_added":"7-02-2017","tags":{"0":"centroid","1":"dynamic","2":"hard","3":"march17","4":"r_64","5":"tree"},"editorial_url":"https://discuss.codechef.com/problems/TUPLES2","time":{"view_start_date":1489397400,"submit_start_date":1489397400,"visible_start_date":1489397400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/mandarin/TUPLES2.pdf?v=1">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/russian/TUPLES2.pdf?v=1">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/vietnamese/TUPLES2.pdf?v=1">Vietnamese</a> as well.</h3>

<p>Chef is given a tree of <b>N</b> nodes.
Let M denote the number of simple paths with at least two nodes.
Notice that M = <b>N * (N - 1) / 2</b>.</p>

<p>There are (M * (M - 1) * (M - 2) / 6) unordered triples of such paths.
Your task is to count how many of them are nice.
A triple of paths (<b>A</b>, <b>B</b>, <b>C</b>) is <i>nice</i> if and only if <b>either</b> of the following conditions is satisfied:</p>

<ul>
<li>The three paths are pairwise disjoint (no two of them share a node).</li>
<li>Each pair of paths intersect with each other.
In other words: paths <b>A</b> and <b>B</b> share at least one node, paths <b>A</b> and <b>C</b> share at least one node, and also paths <b>B</b> and <b>C</b> share at least one node.</li>
</ul>

<p>Output the number of nice triples of paths modulo (<b>10<sup>9</sup>+7</b>).</p>




<h3>
	Input</h3>

<p>
	The first line of the input contains an integer <b>N</b>.</p>

<p>
Each of the next <b>N-1</b> lines contains two integers <b>a</b><sub>i</sub> and <b>b</b><sub>i</sub> denoting an edge between nodes <b>a</b><sub>i</sub> and <b>b</b><sub>i</sub>.</p>
<h3>


	Output</h3>
<p>
	Output a single integer, denoting the number of nice triples of paths modulo (<b>10<sup>9</sup>+7</b>).</p>



<h3>
	Constraints</h3>
<ul>
	<li>
		<b>1</b> ≤ <b>N</b> ≤ <b>3*10<sup>5</sup></b></li>
	<li>
		<b>1</b> ≤ <b>a</b><sub>i</sub>, <b>b</b><sub>i</sub> ≤ <b>N</b></li>
	<li>
	            <b>a</b><sub>i</sub> ≠ <b>b</b><sub>i</sub></li>
</ul>




<h3>Subtasks</h3>


	Subtask 1 (15 points):
<ul>
	<li>
		<b>1</b> ≤ <b>N</b> ≤ <b>2000</b></li>
</ul>
<br>


	Subtask 2 (57 points):
<ul>
	<li>
		<b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<br>

	Subtask 3 (28 points):
<ul>
	<li>
		Original constraints.</li>
</ul>



<h3>
	Example</h3>
<pre>
<b>Input 1:</b>
<tt>4
1 2
2 3
3 4</tt>

<b>Output 1:</b>
<tt>16</tt>

<b>Input 2:</b>
<tt>13
1 2
1 3
1 4
2 5
2 6
3 7
4 8
7 9
9 10
10 11
11 12
12 13</tt>

<b>Output 2:</b>
<tt>43484</tt></pre>
<h3>



	Explanation</h3>

	<b>Example test 1.</b> Let (<b>x</b>, <b>y</b>) denote the simple path between nodes <b>x</b> and <b>y</b>. There are <b>16</b> nice triples of paths:
<ul>
	<li>
		(1, 2), (1, 3), (1, 4)</li>
	<li>
		(1, 2), (1, 3), (2, 3)</li>
	<li>
		(1, 2), (1, 3), (2, 4)</li>
	<li>
		(1, 2), (1, 4), (2, 3)</li>
	<li>
		(1, 2), (1, 4), (2, 4)</li>
	<li>
		(1, 2), (2, 3), (2, 4)</li>
	<li>
		(1, 3), (1, 4), (2, 3)</li>
	<li>
		(1, 3), (1, 4), (2, 4)</li>
	<li>
		(1, 3), (1, 4), (3, 4)</li>
	<li>
		(1, 3), (2, 3), (2, 4)</li>
	<li>
		(1, 3), (2, 3), (3, 4)</li>
	<li>
		(1, 3), (2, 4), (3, 4)</li>
	<li>
		(1, 4), (2, 3), (2, 4)</li>
	<li>
		(1, 4), (2, 3), (3, 4)</li>
	<li>
		(1, 4), (2, 4), (3, 4)</li>
	<li>
		(2, 3), (2, 4), (3, 4)</li>
</ul>

<br>
<b>Example test 2.</b> The triple {(1, 5), (3, 7), (9, 13)} is one of the 43484 nice triples of paths.