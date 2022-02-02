---
{"category_name":"medium","problem_code":"BIPARTRE","problem_name":"Bipartite Graph from Trees","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"23-07-2017","tags":{"0":"admin3","1":"cook84","2":"max","3":"maxflow","4":"medium","5":"vivek1_007"},"editorial_url":"https://discuss.codechef.com/problems/BIPARTRE","time":{"view_start_date":1500834600,"submit_start_date":1500834600,"visible_start_date":1500834600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/mandarin/BIPARTRE.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/russian/BIPARTRE.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/vietnamese/BIPARTRE.pdf">vietnamese</a> as well.</h3>

<p>You are given a rooted tree <b>T</b> with <b>N</b> vertices. The vertices are numbered from 1 to <b>N</b>, and vertex 1 is the root. You are also given <b>M</b> lists <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, .., <b>A<sub>M</sub></b>, where each <b>A<sub>i</sub></b> contains a subset of the vertices in <b>T</b>.</p>

<p>Consider a new bipartite graph G = (L, R, E), where L = {l<sub>1</sub>, l<sub>2</sub>, .., l<sub><b>M</b></sub>} and R = {r<sub>1</sub>, r<sub>2</sub>, .., r<sub><b>N</b></sub>} denote the two bi-partitions of the vertex set and E = { (l<sub>i</sub>, r<sub>j</sub>), such that there exists a k which is an ancestor of j in <b>T</b>, and is also contained in <b>A<sub>i</sub></b>}. That is, there is an edge from l<sub>i</sub> to r<sub>j</sub> if and only if <b>A<sub>i</sub></b> contains a vertex of <b>T</b> which is an ancestor of j in <b>T</b>.</p>

<p><b>Note</b>: Vertex u is an ancestor of vertex v, if it is on the path from the root to v, both end points included.</p>

<p>You need to compute the size of the maximum matching in G.</p>


<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>Q</b>, which denotes the number of testcases. The description of each testcase follows.</li>
<li>The first line of each testcase contains two integers: <b>N</b> and <b>M</b>, which denote the number of vertices in the tree and the number of lists respectively.</li>
<li>The next line contains <b>N</b> - 1 integers: <b>P<sub>2</sub></b>, <b>P<sub>3</sub></b>, ..., <b>P<sub>N</sub></b>, where <b>P<sub>i</sub></b> denotes the parent of vertex i in <b>T</b>.</li>
<li>The i-th of the next <b>M</b> lines describes the i-th list <b>A<sub>i</sub></b>. The first integer in the line is |<b>A<sub>i</sub></b>|, which is the size of the i-th list. This is followed by |<b>A<sub>i</sub></b>| integers in the same line, which denote the elements of <b>A<sub>i</sub></b>.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the size of the maximum matching of the corresponding bipartite graph.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>Q</b> ≤ 4</li>
<li>1 ≤ <b>N</b> ≤ 5000</li>
<li>1 ≤ <b>M</b> ≤ 5000</li>
<li>1 ≤ <b>P<sub>i</sub></b> ≤ <b>N</b></li>
<li>1 ≤ every element of a list ≤ <b>N</b></li>
<li>All the elements of a single list are distinct</li>
<li>1 ≤ Sum of sizes of all lists in one test case ≤ 10000</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
1
12 8
4 1 1 2 7 8 4 2 12 12 4
1 7
1 7
2 6 11
2 8 11
2 10 8
2 12 8
2 8 10
2 7 12

<b>Output:</b>
6
</pre>

<h3>Explanation</h3>
<p>The left bipartition of G contains 8 vertices: l<sub>1</sub>, l<sub>2</sub>, ..., l<sub>8</sub> and the right bipartition contains 12: r<sub>1</sub>, r<sub>2</sub>, ..., r<sub>12</sub>. Some of the edges of this bipartite graph are:</p>
<p>(l<sub>1</sub>, r<sub>7</sub>), (l<sub>1</sub>, r<sub>6</sub>), (l<sub>2</sub>, r<sub>7</sub>), (l<sub>2</sub>, r<sub>6</sub>), (l<sub>3</sub>, r<sub>6</sub>), (l<sub>3</sub>, r<sub>11</sub>), (l<sub>4</sub>, r<sub>8</sub>), (l<sub>4</sub>, r<sub>7</sub>), (l<sub>4</sub>, r<sub>6</sub>), (l<sub>4</sub>, r<sub>11</sub>). There are more edges.</p>
<p>There is a matching of size 6 in this graph which consists of the edges { (l<sub>1</sub>, r<sub>6</sub>), (l<sub>2</sub>, r<sub>7</sub>), (l<sub>3</sub>, r<sub>11</sub>), (l<sub>4</sub>, r<sub>8</sub>), (l<sub>5</sub>, r<sub>10</sub>), (l<sub>6</sub>, r<sub>12</sub>)}. There is no larger matching and hence the answer is 6.</p>