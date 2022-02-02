---
{"category_name":"hard","problem_code":"NPLANAR","problem_name":"Not even planar","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xellos0","problem_tester":"antoniuk1","date_added":"27-01-2016","tags":{"0":"cook68","1":"dp","2":"edge","3":"matching","4":"medium","5":"xellos0"},"editorial_url":"http://discuss.codechef.com/problems/NPLANAR","time":{"view_start_date":1458498600,"submit_start_date":1458498600,"visible_start_date":1458498600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/mandarin/NPLANAR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/russian/NPLANAR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/vietnamese/NPLANAR.pdf">Vietnamese</a> as well.</h3>
<p>You're given an undirected graph <b>G</b> with <b>N</b> vertices and <b>M</b> edges. A triangle in this graph is a cycle of length 3.</p>
<p>Triangles are stupid and nobody likes them, so you should remove some (possibly zero) vertices from this graph in such a way, that the resulting graph doesn't contain any triangle. In addition, the number of removed vertices should be minimum possible. Note that if you remove a vertex from a graph, then all the edges incident on that vertex will also be removed.</p>
<p>In the given graph <b>G</b>, each vertex belongs to <b>at most 2</b> triangles. Also, <b>G</b> can contain at most <b>40</b> triangles.</p>
<p>Compute the minimum number of vertices to remove.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> - the number of test cases.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>.</li>
<li>Each of the next <b>M</b> lines contains two space-separated integers <b>a</b> and <b>b</b> - two vertices connected by an edge.</li>
</ul>
<h3>Output</h3>
<p>For each test case, output one line with a single number - the minimum number of vertices that have to be removed.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ N ≤ 3000</b></li>
<li><b>1 ≤ M ≤ N(N-1)/2</b></li>
<li>The sum of all <b>M</b> in a single test file won't exceed <b>10<sup>6</sup></b>.</li>
<li>The graph won't contain any self-loops or multiple edges.</li>
<li>Each vertex belongs to <b>at most 2</b> triangles.</li>
<li>In each test case, there will be at most 40 triangles.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
8 8
2 3
2 1
1 4
4 3
2 6
7 6
7 8
8 3
11 16
1 2
2 3
3 4
4 1
1 5
2 5
2 6
3 6
3 7
4 7
4 8
8 1
9 1
10 7
11 7
11 10
7 9
1 2
1 3
2 3
1 4
1 5
4 5
6 2
7 2
7 6

<b>Output:</b>
0
3
2
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The graph looks like two cycles of lengths 4 and 5 with a common edge. Since there are no triangles, there's no need to remove any vertex.</p>
<p><b>Example case 2.</b> It's sufficient to remove vertices 7, 1 and 2.</p>
<p><b>Example case 3.</b> Vertices 1 and 2 have to be removed.</p>
