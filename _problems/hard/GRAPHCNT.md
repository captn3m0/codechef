---
{"category_name":"hard","problem_code":"GRAPHCNT","problem_name":"Counting on a directed graph","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ztxz16","problem_tester":"kevinsogo","date_added":"25-03-2015","tags":{"0":"dominator","1":"may15","2":"medium","3":"ztxz16"},"editorial_url":"http://discuss.codechef.com/problems/GRAPHCNT","time":{"view_start_date":1431941400,"submit_start_date":1431941400,"visible_start_date":1431941400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/mandarin/GRAPHCNT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/russian/GRAPHCNT.pdf">Russian</a>.</h3>
<p>Given an directed graph with <b>N</b> nodes (numbered from 1 to <b>N</b>) and <b>M</b> edges, calculate the number of unordered pairs<b> (X, Y)</b> such there exist two paths, one from node 1 to node <b>X</b>, and another one from node 1 to node <b>Y</b>, such that they don't share any node except node 1. </p>
<h3>Input</h3>
<p>There is only one test case in one test file.</p>
<p>The first line of each test case contains two space separated integers <b>N, M</b>. Each of the next M lines contains two space separated integers  <b>u, v</b> denoting a directed edge of graph G, from node <b>u</b> to node <b>v</b>. There are no multi-edges and self loops in the graph.
</p>
<h3>Output</h3>
<p>Print a single integer corresponding to the number of unordered pairs as asked in the problem.. </p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>0 ≤ M ≤ 5 * 10<sup>5</sup> </b></li>
</ul>

<p><b>Subtask 1: (30 points)</b></p>
<ul>
<li>The graph is a <a href="http://en.wikipedia.org/wiki/Directed_acyclic_graph" >Directed Acyclic Graph (DAG) </a> i.e. there is no cycle in the graph.</li>
</ul>
<p> </p>
<p><b>Subtask 2: (20 points)</b></p>
<ul>
<li>N * M ≤ 50000000 </li>
</ul>
<p><br /></p>
<p><b>Subtask 3 (50 points)</b></p>
<ul>
<li>No additional constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
6 6
1 2
1 3
1 4
2 5
2 6
3 6

<b>Output:</b>
14
</pre><h3>Explanation</h3>
<p>There are 14 pairs of vertices as follows: <br />
	(1,2) <br />
	(1,3) <br />
	(1,4) <br />
	(1,5)  <br />
	(1,6) <br />
	(2,3) <br />
	(2,4) <br />
	(2,6) <br />
	(3,4) <br />
	(3,5) <br />
	(3,6) <br />
	(4,5) <br />
	(4,6) <br />
	(5,6) 
</p>
