---
{"category_name":"medium","problem_code":"COOK82D","problem_name":"Nasty Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":"kingofnumbers","date_added":"20-05-2017","tags":{"0":"cook82","1":"deadwing97","2":"euler","3":"hashing","4":"medium"},"time":{"view_start_date":1495391400,"submit_start_date":1495391400,"visible_start_date":1495391400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/mandarin/COOK82D.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/russian/COOK82D.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/vietnamese/COOK82D.pdf">vietnamese</a> as well.</h3>

<p>Hussain was doing research on graph theory, and he came up with a new family of graphs called Deadwing Graphs.</p>

<p>Consider an undirected graph. We can partition the vertices uniquely into <a href = "https://en.wikipedia.org/wiki/Connected_component_(graph_theory)">connected components</a>, such that two vertices belong to the same connected component if and only if they are connected by a sequence of edges.</p>

<p>We call a graph Good, if for every vertex, there is a <a href = "http://mathworld.wolfram.com/Walk.html">walk</a> starting from that vertex, and ending at the vertex, while using every edge exactly once. In other words, for every vertex, you should be able to start from that vertex, and following the edges, end at the same vertex, and have traversed every edge exactly once.</p>

<p>A Deadwing Graph is an undirected graph, such that if the graph is decomposed into its connected components, then each connected component is Good.</p>

<p>Hussain has an undirected graph with <b>N</b> nodes, and a list of <b>M</b> edges: <b>E<sub>1</sub>, E<sub>2</sub>, .., E<sub>M</sub></b>. The nodes are numbered from 1 to <b>N</b>. He wants you to answer <b>Q</b> queries. Each query is denoted by 2 integers <b>l, r</b>: Consider all the edges between the <b>l-th</b> and the <b>r-th</b> edge. You must tell if the graph formed by these edges forms a Deadwing graph or not. That is, consider a new graph, which has the same set of vertices as the original graph, but the edges are only <b>E<sub>l</sub>, E<sub>l+1</sub>, .., E<sub>r</sub></b>. You need to check whether this graph is a Deadwing Graph or not.</p>


<h3>Input</h3>
<ul>
<li>The first line contains 2 integers: <b>N, M</b>, the number of vertices in the graph and the number of edges in the original graph.</li>
<li>The i-th of the next <b>M</b> lines contains 2 integers: <b>u<sub>i</sub> , v<sub>i</sub></b>. This denotes that there is an edge between <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>.</li>
<li>The next line contains an integer <b>Q</b> denoting the number of queries.</li>
<li>The next <b>Q</b> lines each contains 2 integers: <b>l , r</b></li>
</ul>

<h3>Output</h3>
<p>Output <b>Q</b> lines, the i-th of which should contain a single word: "Yes" if the graph formed by the edges in the i-th query is a Deadwing Graph. Otherwise output "No". (Without quotations).</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>M , Q</b> ≤ 10<sup>6</sup></li>
<li>1 ≤ <b>u<sub>i</sub>, v<sub>i</sub></b> ≤ N</li>
<li>1 ≤ <b>l</b> ≤ <b>r</b> ≤ <b>M</b>, in each query</li>
<li>There can be more than one edge between same pair of nodes. But there is no edge between a node and itself. That is, <b>u<sub>i</sub></b> ≠ <b>v<sub>i</sub></b>.</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
4 6
1 2
3 1
2 3
4 1
2 4
1 2
3
1 3
2 4
1 6

<b>Output:</b>
Yes
No
Yes
</pre>

<h3>Explanation</h3>
<p>The given original graph is as follows:</p>
<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/COOK82/COOK82D/image1.png" /> 
<p></p>

<p>The first query corresponds to the graph with edges <b>E<sub>1</sub>, E<sub>2</sub> and E<sub>3</sub></b>:</p>
<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/COOK82/COOK82D/image2.png" /> 
<p></p>
<p>This has two connected components and both of them are Good. Hence this is a Deadwing Graph.</p>

<p>The second query corresponds to the graph with edges <b>E<sub>2</sub>, E<sub>3</sub> and E<sub>4</sub></b>:</p>
<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/COOK82/COOK82D/image3.png" /> 
<p></p>
<p>This has only one connected component, which is not Good. This is because there is no walk starting from node 2 (or any other node for that matter), which passes through each edge exactly once and comes back to node 2.Hence this is not a Deadwing Graph.</p>

<p>The third query corresponds to the entire original graph. It has only one component, and it is Good. For example, starting from node 1, we have this walk: <b>E<sub>2</sub>, E<sub>3</sub>, E<sub>1</sub>, E<sub>6</sub>, E<sub>5</sub>, E<sub>4</sub></b>. Hence this is a Deadwing Graph.</p>