---
{"languages_supported":{"0":"NA"},"title":"BEARS","category":"NA","old_version":true,"problem_code":"BEARS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p><table border="0" cellspacing="0" cellpadding="0" width="100%"><tr><td width="50%"></td><td>
<div align="right"><i>
It's a very funny thought that, if Bears were Bees,<br />
They'd build their nests at the bottom of trees.<br />
And that being so (if the Bees were Bears),<br />
We shouldn't have to climb up all these stairs.<br /></i>
<hr />
Winnie-the-Pooh, a Complaining Song
</div></td></tr></table>
</p><p>
</p><p>Have you ever thought, when given an undirected graph in some problem, that it would be easier to solve it if the graph's edges were actually its vertices and the graph's vertices were its edges? This problem is right about this -- unfortunately, not about bears and bees (but if you want, you may think of vertices as of bears and of edges as of bees (or even vice versa)).

</p><p>Suppose you're given an undirected graph <b>G<sub>0</sub></b> with <b>N</b> vertices and <b>M</b> edges. Let's perform a <i>simple transformation</i> on graph <b>G<sub>0</sub></b> to obtain graph <b>G<sub>1</sub></b> with <b>M</b> vertices so that each vertex of <b>G<sub>1</sub></b> corresponds to a unique edge of <b>G<sub>0</sub></b> and a pair of vertices in <b>G<sub>1</sub></b> is connected by a single edge if and only if the corresponding edges of <b>G<sub>0</sub></b> share a common vertex. Similarly, let's perform a simple transformation on graph <b>G<sub>1</sub></b> to obtain graph <b>G<sub>2</sub></b>, and let's perform a simple transformation on graph <b>G<sub>2</sub></b> to obtain graph <b>G<sub>3</sub></b>.

</p><p>All you have to do is to output the number of vertices and edges in <b>G<sub>3</sub></b>.

<h3>Input</h3>
</p><p>The first line of the input file contains one integer <b>T</b> -- the number of test cases (no more than 10). Each test case is described by a line containing two integers <b>N</b> and <b>M</b> (1 ≤ <b>N</b>, <b>M</b> ≤ 1000) followed by <b>M</b> lines, each containing two integers between 1 and <b>N</b>, inclusive, separated by a single space and describing an edge of graph <b>G<sub>0</sub></b>. It's guaranteed that each edge connects two distinct vertices and each pair of vertices is directly connected by at most one edge.

<h3>Output</h3>
</p><p>For each test case output just one line containing two integers -- the number of vertices and edges in <b>G<sub>3</sub></b>.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3 3
1 2
1 3
2 3
4 4
1 2
1 3
2 3
3 4

<b>Output:</b>
3 3
8 18

<b>Explanation:</b>
</pre>
</p><p>In the first test case the given graph is a "triangle". It's easy to see that a simple transformation on a triangle results in the same triangle (as it contains three pairwise connected vertices and three pairwise "connected" edges).</p>    