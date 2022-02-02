---
{"category_name":"hard","problem_code":"FURGRAPH","problem_name":"Mario and Luigi","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"xcwgf666","date_added":"14-12-2015","tags":{"0":"april16","1":"furko","2":"graphs","3":"hard","4":"segment","5":"treaps"},"editorial_url":"http://discuss.codechef.com/problems/FURGRAPH","time":{"view_start_date":1460374200,"submit_start_date":1460374200,"visible_start_date":1460374200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/mandarin/FURGRAPH.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/russian/FURGRAPH.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/vietnamese/FURGRAPH.pdf">Vietnamese</a> as well.</h3>
<p> Mario and Luigi are very lazy guys. These are not the guys from some game, these are the ones playing games all the time. Recently, they bought a new game named "Graph Vertices chooser".</p>
<p>The rules of this game are pretty simple. It's a two player game with each player taking alternating turns starting with Mario. You are given a weighed graph. All the vertices are initially unmarked. In each turn, a player chooses an unmarked vertex and mark it to red or black color (Mario marks red whereas Luigi marks black). The game ends when there is no any unmarked vertex left. After the end of the game, Mario's score will be weight of all the edges in graph such that both the end points of the edge are colored red. Similarly, score of Luigi is sum of weight of edges with both end points being black.
</p>
<p>
Mario would like to maximize difference between his and Luigi points, while Luigi would like to minimize the difference between Mario's and his score. Both player optimally. </p>
<p></p><p>
Now, you are the one who decided to be the coach of both the players. You want to create many graphs for Mario and Luigi to train. For that, you decided to take a graph <b>H</b> of <b>N</b> vertices. Initially, there is no edge in graph <b>H</b>. One by one, you will add an edge in the graph <b>H</b> and ask the both the players to play on the newly created graph. You will add <b>M</b> such edges. For each of the <b>M</b> graphs, you have to tell the  difference between points of Mario and Luigi at the end of the game, when they play the game on that graph. Note that self loops and multi-edges are allowed to exist.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The first line of each test case contains two integers <b>N</b> and <b>M</b> denoting number of vertexes and number of edges to be added by the coach.</p>
<p>Each of the next <b>M</b> lines contains description of each edge <b>u</b>, <b>v</b>, <b>c</b>, denoting two vertexes and cost of edge. </p>
<h3>Output</h3>
<p>For each test case, output <b>M</b> lines containing the difference between Mario's and Luigi's points after adding the <b>i-th</b> edge, for each <b>i</b>.</p>
<p>You should add edges one by one (with same order as they follows in input), and every time output the difference between points of Mario and Luigi at the end of each game.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>u, v</b> ≤ <b>N</b></li>
<li><b>1</b> &le; <b>c</b> &le; 10<sup>9</sup></li>
<li>Self loops and multiple edges are allowed.</li>
</ul>
</p>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1</b> (10 points): <b>1</b> ≤ <b>N</b> ≤ <b>10</b>, <b>1</b> ≤ <b>M</b> ≤ <b>100</b></li>
<li><b>Subtask 2</b> (40 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>2000</b></li>
<li><b>Subtask 3</b> (50 points): original constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
5 4
1 2 1
1 3 1
1 4 1
1 5 1

<b>Output:</b>
0
1
1
2
</pre>