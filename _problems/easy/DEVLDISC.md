---
{"category_name":"easy","problem_code":"DEVLDISC","problem_name":"Devu and a light discussion","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"iscsi","date_added":"3-03-2015","tags":{"0":"ad","1":"admin2","2":"feb16","3":"graph","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/DEVLDISC","time":{"view_start_date":1455528600,"submit_start_date":1455528600,"visible_start_date":1455528600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/mandarin/DEVLDISC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/russian/DEVLDISC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/vietnamese/DEVLDISC.pdf">Vietnamese</a> as well.</h3>


<p>
One day, Devu and Churu were involved in a light discussion about finding the diameter of an undirected unweighted connected graph. Diameter of a graph is the maximum value of pairwise shortest distances over all pairs of vertices of the graph. Churu proposed the following algorithm which takes a parameter <tt><b>start_vertex</b></tt>.

<pre><tt>
Algorithm (<b>start_vertex</b>):
	find out the set of vertices <b>S</b> having maximum value of 
		shortest distance from <b>start_vertex</b>.
	ans = 0;
	for each vertex v in <b>S</b>
		temp = 0;
		for each vertex u in graph G:
			temp = max(temp, shortest distance between u and v).
		ans = max(ans, temp);
	return ans;
</tt></pre>
</p>

<p>
When Devu heard this algorithm, he exclaimed: "What, this does not seem to be correct!". Churu challenged him to give a counter example to disprove the algorithm. You have to help Devu come up with a graph as a counter example to the above algorithm, if one exists.
</p>

<p>
Formally, You will be given an integer <b>n</b> denoting the number of nodes of the expected graph (counter example Devu is producing). The graph should be undirected, unweighted and connected. The actual diameter of the graph should not be equal to the one returned by the Churu's proposed algorithm. 

If for the given <b>n</b>, there does not exist any such graph which could act as counter example, print -1.
</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting number of test cases. Description of <b>T</b> test cases follows.</li>
<li>Only line of each test case contains a single integer <b>n</b> as defined in the problem statement.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, first line should contain the number of edges in the counter-example graph, or -1 if no counter-example exists.</li>
If a counter example exists, then:
<li>Print a single line containing an integer <b>m</b> denoting the number of edges in the desired graph</li>
<li>Print <b>m</b> lines, each line should contain two integers <b>u</b> and <b>v</b> (1-based indexing) denoting an edge of the graph. You should make sure that no two edges in the graph repeat, and that the graph is connected.</li>
<li>In the next line, print a single integer denoting <tt><b>start_vertex</b></tt> (1-based indexing) passed to the algorithm.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T, n ≤ 50</b></li>
</ul>

<h3>Subtask</h3>
There is only a single subtask worth 100 points with above mentioned constraints.

<h3>Example</h3>
<pre><b>Input:</b>
2
2
10
<b>Output:</b>
-1
9
1 2
2 3
3 4
4 5
5 6
6 7
7 8
8 9
9 10
7
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There can be only one connected graph of 2 nodes. (i.e. 1 is connected to 2). Diameter returned by algorithm for any start vertex will be 1 which is equal to the actual diameter. So answer is -1.
</p>
<p><b>Example case 2.</b> Please note that example given for <b>n = 10</b> is <b>not a correct counter example</b>. It is only given so as to clarify the input output format. In the example, first line contains <b>9</b> denoting the number of edges in the graph. Then <b>9</b> edges of the graph are given. The graph is connected. Then the last line specifies the value of <tt><b>start_vertex</b></tt> passed (that is, <b>7</b>) to Churu's algorithm.</p>