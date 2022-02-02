---
{"category_name":"hard","problem_code":"LKYEDGE","problem_name":"Lucky Edge","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"fudail","problem_tester":"alex_2oo8","date_added":"3-10-2017","tags":{"0":"dfs","1":"fudail","2":"hard","3":"oct17","4":"tree"},"editorial_url":"https://discuss.codechef.com/problems/LKYEDGE","time":{"view_start_date":1508146200,"submit_start_date":1508146200,"visible_start_date":1508146200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/mandarin/LKYEDGE.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/russian/LKYEDGE.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/vietnamese/LKYEDGE.pdf">vietnamese</a> as well.</h3>

<p>In an undirected unweighted graph, an edge of the graph is said to be <em>lucky</em> if it is a part of some cycle of the graph.</p>

<p>You are given a list <b>E</b> of <b>M</b> edges. We define <b>f(i)</b> as the number of intervals <b>[l, r]</b> (<b>1 ≤ l ≤ i ≤ r ≤ M</b>) such that if you build a graph from edges <b>E<sub>l</sub>, E<sub>l+1</sub>, ..., E<sub>r</sub></b>, the edge <b>E<sub>i</sub></b> will be a lucky edge in this graph.</p>

<p>Your task is to calculate the values of <b>f(1), f(2), ..., f(M)</b>.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The first line of each test case contains a single integer <b>M</b> denoting the number of edges.</p>
<p>Each of the next <b>M</b> lines contains two space-separated integers <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b> denoting that <b>i</b>-th edge connects nodes <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing <b>M</b> integers, i-th of which should be value of <b>f(i)</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>5,000</b></li>
<li><b>1</b> ≤ sum of <b>M</b> over all test-cases ≤ <b>20,000</b></li>
<li><b>1</b> ≤  <b>u<sub>i</sub></b>, <b>v<sub>i</sub></b> ≤ <b>10,000</b></li>
<li><b>u<sub>i</sub></b> ≠ <b>v<sub>i</sub></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
	<li><b>Subtask #1 (10 points): </b> <b>M</b>  ≤ 200 and sum of <b>M</b>  ≤ 2,300 </li>
<li><b>Subtask #2 (20 points): </b> <b>M</b>  ≤ 1,000 and sum of <b>M</b>  ≤ 4,000 </li>
	<li><b>Subtask #3 (70 points):  </b> Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2
3 4
2 1
5
1 2
2 3
3 4
1 4
4 2

<b>Output:</b>
1 0 1
2 3 3 2 2
</pre>