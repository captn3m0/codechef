---
{"category_name":"medium","problem_code":"MSTQS","problem_name":"MST Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"pkacprzak","problem_tester":null,"date_added":"29-12-2016","tags":{"0":"graph","1":"kruskal","2":"ltime43","3":"medium","4":"mst","5":"pkacprzak"},"editorial_url":"https://discuss.codechef.com/problems/MSTQS","time":{"view_start_date":1483203600,"submit_start_date":1483203600,"visible_start_date":1483203600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/mandarin/MSTQS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/russian/MSTQS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/vietnamese/MSTQS.pdf">Vietnamese</a> as well.</h3>

<p>For a given connected graph <b>G</b> with <b>N</b> vertices and <b>M</b> undirected weighted edges, the goal is to perform <b>Q</b> queries, each belonging to one of the below 3 types:
</p>

<ol>
<li><b>AssignZero(u, v)</b> := Change the weight of edge between vertices <b>u</b> and <b>v</b> to zero. It is guaranteed there is an edge between vertex <b>u</b> and <b>v</b> in the graph <b>G</b>. </li>
<li><b>AssignOriginal(u, v)</b> := Change the weight of edge between vertices <b>u</b> and <b>v</b> to its original weight.</li>
<li><b>MstWeight()</b> := Returns the weight of <a href="https://en.wikipedia.org/wiki/Minimum_spanning_tree">Minimal Spanning Tree</a> of <b>G</b>.</li>
</ol>

<h3>Input</h3>
<p>First line of the input contains three space separated integers <b>N</b>, <b>M</b> and <b>Q</b>, denoting the number of vertices in <b>G</b>, the number of edges in <b>G</b>, and the number of queries to perform, respectively.
</p>

<p>Next <b>M</b> lines follow, each consisting of three space separated integers <b>u</b>, <b>v</b> and <b>w</b>, denoting that there is an edge between vertices <b>u</b> and <b>v</b> in <b>G</b> of weight <b>w</b>.
</p>

<p>The <b>i</b>-th of the following <b>Q</b> lines corresponds to the <b>i</b>-th query. It starts with a single integer <b>qtype</b> denoting the type of the query. If <b>qtype = 1 or 2</b>, it is followed by two space separated integers <b>u</b>, <b>v</b> denoting the arguments of the query.
</p>

<h3>Output</h3>
<p>For each query of type 3, output an integer in a single line corresponding to the answer to this query.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ v, u ≤ N</b></li>
<li><b>v ≠ u</b></li>
<li><b>1 ≤ w ≤ 10<sup>9</sup></b></li>
<li><b>1 ≤ qtype ≤ 3</b></li>
<li>There are no multi-edges and no self loops in the graph <b>G</b>.</li>
<li>For every query of types 1 and 2, it is guaranteed that there is an edge between vertices <b>u</b> and <b>v</b> in G.</li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1: (20 points)</b>
<ul>
<li><b>2 ≤ N ≤ 200</b></li>
<li><b>1 ≤ M ≤ 2000</b></li>
<li><b>1 ≤ Q ≤ 2000</b></li>
</ul>
</p>

<p>
<b>Subtask #2: (50 points)</b>
<ul>
<li><b>2 ≤ N ≤ 2000</b></li>
<li><b>1 ≤ M ≤ 2*10<sup>5</sup></b></li>
<li><b>1 ≤ Q ≤ 2*10<sup>4</sup></b></li>
<li>There is no query of type 2</li>
</ul>
</p>

<p>
<b>Subtask #3: (30 points)</b>
<ul>
<li>The same as in subtask #2, but all query types are allowed</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
4 4 5
1 2 1
2 3 1
3 4 1
4 1 1
3 
1 1 2
3
2 1 2
3

<b>Output:</b>
3
2
3
</pre>

<h3>Explanation</h3>
<p>
The input graph has 4 vertices and 4 edges, it can be drawn like this:
</p>

<pre>
<pre>
4_____3
|           |
|           |
|_____ |
1         2
</pre>
</pre>

<p>Initially, all edges have weight equal 1. There are 5 queries to handle. </p>
<p>In the first query, we are asked for the weight of Minimal Spanning Tree, which is 3 (taking any 3 edges produces such a tree).</p>
<p>After that, weight of edge between vertices 1 and 2 is changed to 0. Then we are asked again for the weight of Minimal Spanning Tree. It is now 2, because we can take edge from 1 to 2 and any 2 of the remaining edges. </p>
<p>Next, we restore the weight of edge between vertices 1 and 2, i.e. change it to original weight 1.  Finally, we are again asked for the weight of Minimal Spanning Tree, which is again 3, because the underlying graph is the same as it was at the beginning.</p>
