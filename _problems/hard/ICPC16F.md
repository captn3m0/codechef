---
{"contest_code":"ACMIND16","contest_name":"ACM-ICPC India Regionals, Online Preliminary Round 2016","problem_code":"ICPC16F","problem_name":"Chef and Bipartite Graphs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"18-10-2016","tags":{"0":"admin3"},"time":{"view_start_date":1477143000,"submit_start_date":1477143000,"visible_start_date":1788139521,"end_date":1477153800},"layout":"problem"}
---
<p>Chef is very interested in studying biparite graphs. Today he wants to construct a bipartite graph with <b>n</b> vertices each, on the two parts, and with total number of edges equal to <b>m</b>. The vertices on the left are numbered from <b>1</b> to <b>n</b>. And the vertices on the right are also numbered from <b>1</b> to <b>n</b>. He also wants the degree of every vertex to be greater than or equal to <b>d</b>, and to be lesser than or equal to <b>D</b>. ie. for all <b>v</b>, <b>d</b> ≤ <b>deg(v)</b> ≤ <b>D</b>
</p>

<p>Given four integers, <b>n, m, d, D</b>, you have to help Chef in constructing some bipartite graph satisfying this property. If there does not exist any such graph, output -1</p>.

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>The only line of each test case contains four space separated integers <b>n, m, d, D</b>. </p>


<h3>Output</h3>
<p>For each test case, output <b>-1</b> if there is no bipartite graph satisfying this property. Otherwise output <b>m</b> lines, each of the lines should contain two integers <b>u, v</b> denoting that there is an edge between vertex <b>u</b> on the left part and vertex <b>v</b> on the right part. If there can be multiple possible answers, you can print any. Note that the bipartite graph should not have multi-edges.</p>


<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T, n ≤ 100</b></li>
<li><b>1 ≤ d ≤ D ≤ n</b></li>
<li><b>0 ≤ m ≤ n * n</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
2
2 3 1 2
2 3 1 1    

<b>Output:</b>
1 1
2 2
1 2
-1
</pre>
