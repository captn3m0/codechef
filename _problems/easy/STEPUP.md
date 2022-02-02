---
{"languages_supported":{"0":"NA"},"title":"STEPUP","category":"NA","old_version":true,"problem_code":"STEPUP","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><h3>Statement</h3>
<p>
Given a directed graph G with N vertices and M edges. For each vertex u, you must assign positive integer F(u) such that:  <br />
<ol>
	<li> For each edge e from a to b, F(b) &gt; F(a) </li>
	<li> The maximum value m = max( F(u) ) is minimized </li>
</ol>
<br />
Output the maximum value m. If no such assignment is possible output "IMPOSSIBLE" (quotes for clarity). <br />

<h3>INPUT FORMAT</h3>
</p><p>
First line of input contains a number t, the number of test cases. <br />
Each test case contain starts with two space seperated integers N and M, denoting the number of vertices and the number of edges in the graph respectively. <br />
Each of the following M lines contain two space seperated integers a b denoting an edge from vertex a to vertex b.  <br />
There can be multiple edges between two vertices a and b. <br />
</p>

<h3>OUTPUT FORMAT</h3>
<p>For each testcase output the maximum value m or "IMPOSSIBLE" if no assignment is possible.</p>

<h3>SAMPLE INPUT</h3>
<pre>
2
2 2
1 2
2 1
3 2
1 2
1 3
</pre>

<h3>SAMPLE OUTPUT</h3>
<pre>
IMPOSSIBLE
2
</pre>

<h3>CONSTRAINTS</h3>
<pre>
t &lt;= 20
N &lt;= 10000
M &lt;= 20000
1 &lt;= a,b &lt;= N
</pre>

<h3>EXPLANATION</h3>
<pre>
A feasible assignment for the second testcase is: 

Vertex	             Number
1			1
2			2
3			2

So the maximum value is 2
</pre>    