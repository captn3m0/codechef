---
{"category_name":"medium","problem_code":"SNGRAPH","problem_name":"Snakes and Graph","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kingofnumbers","date_added":"31-05-2017","tags":{"0":"admin2","1":"dsu","2":"graph","3":"medium","4":"snckpb17"},"editorial_url":"https://discuss.codechef.com/problems/SNGRAPH","time":{"view_start_date":1496331000,"submit_start_date":1496331000,"visible_start_date":1496331000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/mandarin/SNGRAPH.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/russian/SNGRAPH.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/vietnamese/SNGRAPH.pdf">Vietnamese</a> as well.</h3>

<p>There is a graph consisting of <b>n</b> nodes and <b>m</b> edges. There is a snake in each of its nodes. These snakes want to stage a coup against the mongoose who controls and puts restrictions on various aspects of their life. If there is an edge between some two nodes, then it means that the snakes in those nodes can talk with each other. The mongoose wants to protect himself against the coup. First, he calculates the degree of each node, i.e. the number of snakes a snake can talk to. He starts with an integer d = 0 and goes till d = <b>n</b> - 1. At each such d, he will select the set of nodes that have their degree (the originally computed degree, because the mongoose doesn't like to compute the degree each time) less than or equal to d. He will remove all the edges whose one or both the endpoints belong to this set. The snakes want to find, for each d, the minimum number of edges (or communication channels) that they should add so that each of the snakes is able to talk to every other snake either directly via an edge or via other snakes indirectly.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of the each test case contains two space separated integers: <b>n, m</b>.</p>
<p>Each of the next <b>m</b> lines contain two space separated integers <b>u</b><sub>i</sub>, <b>v</b><sub>i</sub> denoting that there is an edge between nodes <b>u</b><sub>i</sub> and <b>v</b><sub>i</sub>.</p>

<h3>Output</h3>
<p>For each test case, output <b>n</b> space separated integers corresponding to answers for d = 0 to <b>n</b> - 1.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 3</li>
<li>1 ≤ <b>n</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>m</b> ≤ min(n * (n - 1) / 2, 2 * 10<sup>5</sup>)</li>
<li>1 ≤ <b>u</b><sub>i</sub>,  <b>v</b><sub>i</sub>≤ n</li>
<li><b>u</b><sub>i</sub> ≠ <b>v</b><sub>i</sub></li>
<li>The graph doesn't have self loops and multi edges.</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
1
5 4
1 2
2 3
2 4
4 5

<b>Output</b>
0 3 4 4 4
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. The degree of the nodes are [1, 3, 1, 2, 1]. </p>

<p>For d = 0, all the vertices and edges are the present in the graph. The snakes can talk to each other already, and there is no need to add more edges. So, the answer is zero for d = 0. </p>

<p>For d = 1, the chosen vertex set will be [1, 3, 5]. The set of edges that will be removed will be (1, 2), (2, 3) and (4, 5). Only the edge (2, 4) is remaining. Now, in order to talk with each other, at least 3 edges must be added. One way of doing this is to add the three edges removed.</p>

<p>For d = 2, the chosen vertex set will be [1, 3, 4, 5]. All the edges of the graph will be removed. Now, in order to talk with each other, at least 4 edges must be added to the graph.</p>

<p>For d = 3 and d = 4 also, all the edges will be removed, and at least 4 edges must be added to the graph in order for all the snakes to talk with each other.</p>
