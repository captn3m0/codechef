---
{"category_name":"hard","problem_code":"CHN10","problem_name":"Animesh does not gift Malvika on her birthday","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-01-2016","tags":{"0":"acm15chn","1":"admin2","2":"combinatorics","3":"graph"},"time":{"view_start_date":1453546800,"submit_start_date":1453546800,"visible_start_date":1453546800,"end_date":1735669800},"hand_edited":true,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Malvika was sad because Animesh, the miser, did not buy her even a chocolate bar on her birthday. Animesh, feeling sorry about his behavior, repented and asked Malvika how he could make up for this catastrophic mistake. Enraged as she was, Malvika gave him an empty graph <b>H</b> of <b>n</b> vertices and asked him to add edges into it and convert the graph into a graph that she likes.
</p>

<p>
Malvika always keeps a graph <b>G</b> with <b>n</b> vertices and <b>m</b> edges with her. Malvika likes a graph <b>H</b> if, and only if, she can find a permutation <b>P</b> of <b>1, 2, … , N</b> such that there's an edge between vertices <b>u</b> and <b>v</b> in <b>H</b> if and only if there's an edge between vertices <b>P[u]</b> and <b>P[v]</b> in <b>G</b>.
</p>

<p>
Animesh thought for days and days about how he could add edges into the empty graph <b>H</b> so that he can get a graph that Malvika likes. After putting in a lot of effort, he found such a graph and said that this is the graph you desired.
</p>

<p>
Malvika was still really angry with him and asked <em>little</em> Animesh to come up as many graphs as possible, such that Malvika likes them. Given his recent track record, you know this is going to take him at least a few years to solve by himself. Can you help Animesh find out how many such graphs he has to come up with? Please output your answer modulo <b>10<sup>9</sup> + 7</b>.
</p>

<p>
Two ways of adding edges <b>A, B</b> are considered different if there is a an edge <b>(u, v)</b> which is present in <b>A</b> but not in <b>B</b>.
</p>

<p>
You are given the adjacency matrix of the graph <b>G</b> as input. The graph has a special property — each row and column of the graph has atleast <b>n - 3</b> 1's.
</p>

<p>
Note that adjacency matrix of a graph <b>G</b> containing <b>n</b> vertices is a matrix <b>A</b> of size <b>n * n</b>. If there is an edge between vertex <b>i</b> and <b>j</b>, then <b>A(i, j) = 1</b>, otherwise <b>A(i, j) = 0</b>.

In our case, as the graph is undirected, the matrix will be a symmetric matrix. Also, the entries on the diagonal will be all zeros.
</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting the number of test cases.</li>
<li>For each test case:</li>
<ul>
	<li>First line contains an integer <b>n</b> denoting the number of vertices in graph <b>G</b>.</li>
	<li>Each of the next <b>n</b> lines contains <b>n</b> characters, each of them will be either '0' or '1'. The <b>j</b><sup>th</sup> character in the <b>i</b><sup>th</sup> line denotes <b>A[i][j]</b>, where <b>A</b> is the adjacency matrix.</li>
</ul>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output your answer in a separate line.</li>
</ul>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T,  n ≤ 50</b></li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
2
2
01
10
3
001
001
110

<b>Output:</b>
1
3
</pre>

<h3>Explanation</h3>
<p><b>In the first example</b>, the graph <b>G</b> has an edge between 1 and 2. Animesh has to add only one edge in the graph <b>H</b> between vertices 1 and 2 to please her. This is the only graph he has to come up with.
</p>

<p><b>In the second example</b>, the graph <b>G</b> has edges {1, 3} and {2, 3}. Animesh can come up with the following graphs `({1, 3}, {2, 3}), ({2, 1}, {3, 1}), ({1, 2}, {3, 2})`. Malvika likes all of these graphs. In this representation, `({1, 3}, {2, 3})` means that a graph has 3 vertices and two edges — between 1 and 3, and between 2 and 3.
</p>