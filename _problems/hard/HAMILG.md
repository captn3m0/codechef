---
{"category_name":"hard","problem_code":"HAMILG","problem_name":"A game on a graph","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2 - 5","source_sizelimit":50000,"problem_author":"xellos0","problem_tester":"mugurelionut","date_added":"11-02-2015","tags":{"0":"game","1":"graphs","2":"hard","3":"july15","4":"matching","5":"xellos0"},"editorial_url":"http://discuss.codechef.com/problems/HAMILG","time":{"view_start_date":1436779800,"submit_start_date":1436779800,"visible_start_date":1436779800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/JULY15/mandarin/HAMILG.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/JULY15/russian/HAMILG.pdf" target="_blank">Russian</a>.</h3>
<p>Two players, Askar and Bob, play a game with a token on an undirected graph <b>G</b>. The game goes as follows:</p>
<ul>
<li>Askar chooses a starting vertex and places the token on this vertex.</li>
<li>The players now alternate turns; Bob moves first.</li>
<li>In his turn, each player has to move the token along exactly one edge to another vertex.</li>
<li>It's not allowed to move the token to some vertex if it was on that vertex earlier during the game (including the starting vertex).</li>
<li>The player who can't make a move loses.</li>
</ul>
<p>A vertex <tt>v</tt> is called a winning vertex if Askar is able to win after choosing this <tt>v</tt> as the starting vertex. Assume that both players play optimally.</p>
<p>Given the graph <b>G</b>, determine how many winning vertices exist.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> - the number of test cases.</li>
<li>The first line of each test case contains two integers <b>N</b> and <b>M</b>, denoting the number of vertices and the number of edges of <b>G</b>.</li>
<li>The following <b>M</b> lines describe the edges of <b>G</b>. Each of these lines contains two integers <b>x</b> and <b>y</b>, denoting an edge between vertices <b>x</b> and <b>y</b>.</li>
</ul>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of winning vertices.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>N-1</b> ≤ <b>M</b> ≤ <b>N(N-1)/2</b></li>
<li><b>1</b> ≤ <b>x,y</b> ≤ <b>N</b></li>
<li><b>x</b> ≠ <b>y</b></li>
<li>All unordered pairs <b>(x,y)</b> will be distinct</li>
<li>The graph in each test case will be connected</li>
<li>Sum of <b>M</b> over all test cases in a single file will never exceed <b>10<sup>6</sup></b>. </li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<p><i>Subtask 1 (8 points)</i>: <b>1 ≤ N ≤ 18</b></p>
<p><i>Subtask 2 (19 points)</i>: <b>1 ≤ N ≤ 40</b></p>
<p><i>Subtask 3 (26 points)</i>: <b>1 ≤ N ≤ 200</b></p>
<p><i>Subtask 4 (47 points)</i>: <b>1 ≤ N ≤ 2000</b></p>
<p>The time limit is 2 seconds for subtasks 1-3 and 5 seconds for subtask 4.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
4 6
1 2
1 3
4 1
4 2
4 3
2 3
8 7
3 2
1 2
4 2
5 1
6 3
7 1
8 3
3 2
1 2
2 3

<b>Output:</b>
0
4
2
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> The graph is a complete graph with 4 vertices, so the game will always last 3 turns; in the 4th turn, Askar will have no way to move and lose.</p>
<p><b>Example case 2.</b> If Askar places the token on vertex 7, Bob will have to move it to vertex 1 and Askar can then move it to vertex 5 and win. A similar strategy exists for vertices 5, 6 and 8.</p>
<p><b>Example case 3.</b> If Askar places the token on vertex 1, Bob will have to move it to vertex 2 and Askar can then move it to vertex 3 and win. The case when Askar starts at vertex 3 is analogous. On the contrary, if Askar starts at vertex 2, then Bob can move the token to either vertex 1 or 3, and in both cases Askar can't make a move and loses.</p>