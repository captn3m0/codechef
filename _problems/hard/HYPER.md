---
{"languages_supported":{"0":"NA"},"title":"HYPER","category":"NA","old_version":true,"problem_code":"HYPER","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>A <b>hypergraph</b> is a generalization of a graph, where an edge can connect any number of vertices. A <i>k</i>-<b>uniform hypergraph</b> is a hypergraph such that all its hyperedges have size <i>k</i>. For more information, see <a href="http://en.wikipedia.org/wiki/Hypergraph">Wikipedia</a>.
<br /><br />
Let's call a particular hypergraph a <b>hypertree</b> if it is connected (that is, you can move from any vertex to any other vertex using only its hyperedges) and removing any of its hyperedges makes the hypergraph disconnected (note that this definition of hypertrees differs from the standard one).
<br /><br />
Given just one integer <b>N</b>, find the number of 3-uniform hypertrees on <b>N</b> vertices. Two 3-uniform hypertrees are considered different if a hyperedge (<i>u</i>, <i>v</i>, <i>w</i>) exists such that it is present in exactly one of these hypertrees (note that the order of vertices in the hyperedge doesn't matter, and neither does the order of hyperedges in the hypertree).

<h3>Input</h3>
</p><p>The first line of the input contains an integer <b>T</b> -- the number of test cases (at most 15). Then <b>T</b> lines follow, each contains an integer <b>N</b> (3 ≤ <b>N</b> ≤ 17).

</p><p><b>Important! Please include all code used in solving this problem in your solution.</b>

<h3>Output</h3>
</p><p>For each test case output one line containing the requested number. It's guaranteed that this number won't exceed 2<sup>63</sup>-1.

<h3>Examples</h3>

<pre>
<b>Input:</b>
4
3
4
5
8

<b>Output:</b>
1
6
25
93268

<b>Explanation:</b>
</pre>
</p><p>There is just one 3-uniform hypertree on 3 vertices: {(1,2,3)}. There are six of them on 4 vertices: {(1,2,3), (1,2,4)}, {(1,2,3), (1,3,4)}, {(1,2,3), (2,3,4)}, {(1,2,4), (1,3,4)}, {(1,2,4), (2,3,4)}, {(1,3,4), (2,3,4)}. Two of the 25 possible hypertrees on 5 vertices are {(1,2,3), (3,4,5)} and {(1,2,3), (1,2,4), (1,2,5)}.</p>    