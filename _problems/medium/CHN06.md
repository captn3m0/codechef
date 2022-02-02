---
{"category_name":"medium","problem_code":"CHN06","problem_name":"King Animesh decides to have a voyage to the sun","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-01-2016","tags":{"0":"acm15chn","1":"admin2","2":"graph","3":"perfect"},"time":{"view_start_date":1453546800,"submit_start_date":1453546800,"visible_start_date":1453546800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
King Animesh has decided to go on a voyage to the Sun. He has decided to take only one of his courtiers with him. Everyone knows that the king has two favorite courtiers, Arjun and Praveen, and so they are competing between themselves to go with the King. Arjun is a great archer, so he has decided to impress the king by demonstrating his perfect abilities. Praveen is smart, he knows exactly what the King likes - Graphs of Perfection.
Graphs of Perfection are weighted complete bipartite graphs with <b>2*N</b> vertices, which have a property that <b>every Perfect Matching in the graph has the same cost</b>. The cost of a Perfect Matching is just the sum of costs of all the <b>N</b> edges in it.
</p>

<p>
Such graphs are rare, but Praveen had found one in the Forest of Perfection and he had kept it carefully in a box. The <b>N</b> nodes in the left column are labelled <b>{1,2, … ,N}</b>, and the <b>N</b> nodes in the right column are labelled <b>{N+1, N+2, … , 2*N}</b>. The cost associated with an edge between node <b>u</b> in left column and node <b>v</b> in right column, is denoted by <b>C<sub>u</sub><sub>v</sub></b>.
</p>

<p>
Unfortunately, when it is Praveen's turn to present the graph to the King, he realizes that his rival Arjun has made a hole in the box and as a result, some of the edges have fallen off. He tries to remain calm and presents the graph to the King claiming that he can assign costs to the missing edges in such a way that the graph becomes a Graph of Perfection again. Praveen knows that the remaining edges have a magical property - <b>there is a unique way to assign costs to the missing edges such that the graph becomes a Graph of Perfection</b>. But he doesn't tell that to the King, and so the King gets highly impressed by his claim and tells him to report the sum of the squares of all the <b>N<sup>2</sup></b> edge costs modulo <b>10<sup>9</sup>+7</b>. Alas! Praveen is not <em>that</em> smart, but we hope you are! You are given the costs of the edges which are still in the box; please help Praveen find the required sum.
</p>

<p>
<b>Note:</b>
<ul>
<li>A complete bipartite graph means that there is an edge between every node in the left column and every node in the right column.</li>
<li>A Perfect Matching in this graph is a set of <b>N</b> edges such that no two edges among them have any end point in common.</li>
</ul>
</p>

<h3>Input</h3>
<ul>
<li>The first line contains two integers: <b>N</b> and <b>E</b>.</li>
<li>The next <b>E</b> lines of the test case contain three integers each: <b>u</b>, <b>v</b> and <b>x</b>. This signifies Praveen knows the cost of the edge from vertex <b>u</b> in the left column to the vertex <b>v</b> in the right column, and that cost is equal to <b>x</b>. That is, <b>C<sub>u</sub><sub>v</sub></b> = <b>x</b></li>
<li>It is guaranteed that there is a unique way to assign costs to the missing edges such that the given graph in the input becomes a Graph of Perfection.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single integer in a line, corresponding to the answer of the problem.</li>
</ul>
</ul>


<h3>Constraints</h3>
<ul>
<li>1 &le; <b>N</b> &le; <b>10<sup>5</sup></b></li>
<li>1 &le; <b>E</b> &le; <b>10<sup>6</sup></b></li>
<li>1 &le; <b>u</b> &le; <b>N</b></li>
<li><b>N+1</b> &le; <b>v</b> &le; <b>2*N</b></li>
<li>1 &le; <b>x</b> &le; <b>10<sup>5</sup></b>, but note that the edge costs which are not in the input need not satisfy this constraint. That is, this constraint does not apply for the missing edges.</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
2 3
1 3 2
1 4 3
2 3 5

<b>Output:</b>
74
</pre>

<h3>Explanation</h3>
<p>
Out of the 4 edges, the costs of 3 edges are already given to us. The edge (2, 4) must cost 6 to satisfy the "All Perfect Matchings should have equal costs" constraint. Therefore, now, the sum of the squares of the costs of all the 4 edges is (2<sup>2</sup> + 3<sup>2</sup> + 5<sup>2</sup> + 6<sup>2</sup>) = (4 + 9 + 25 + 36) = 74
</p>