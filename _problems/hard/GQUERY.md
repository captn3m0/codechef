---
{"category_name":"hard","problem_code":"GQUERY","problem_name":"Game Revisited","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":null,"date_added":"2-06-2017","tags":{"0":"deadwing97"},"time":{"view_start_date":1496516400,"submit_start_date":1496516400,"visible_start_date":1496516400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/mandarin/GQUERY.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/russian/GQUERY.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/vietnamese/GQUERY.pdf">Vietnamese</a> as well.</h3>

<p>
Hussain and Alex are ex-IOI participants. They participated together in IOI 2014, aiming for medals. Unfortunately both had very bad luck back then and neither of them got a medal. (Even though IOI 2014 tasks were very interesting and not so hard). </p>

<p>Hussain and Alex felt very annoyed after that. Every time they come across any of the IOI 2014 problems, they just feel angry and each says to himself, "How didn't I solve this task?!". </p>

<p>Last week they came across the problem Game from IOI 2014 which was a really easy problem. Hussain again felt very angry, till the point that he thought of a much harder version of this task and decided to solve it.</p>

<p>Basically IOI 2014 game was a game played between two playersand an undirected graph consisting of <b>N</b> nodes.</p> 

<p>Hussain will give Alex a list of bidirectional edges. This list contains <b>M</b> edges numbered from <b>1</b> to <b>M</b>.</p>
<p>Alex will add these edges one by one starting from edge number <b>1</b>. </p> 

<p>While adding these edges to the graph, whenever the entire graph became connected (ie. it's possible to move between any 2 of the <b>N</b> nodes via a sequence of the added edges), the game stops and Alex tells Hussain the number of edges he has added till then.</p>

<p>Hussain decided to make the game more challenging, and so he told Alex that he will play on the same list of edges <b>Q</b> times, each time taking the current list and swapping 2 edges in this list and giving it back to Alex. Each time, Alex must tell the number of edges he will add till the graph becomes connected. </p>

<p>Of course playing each game edge by edge is killing. Help Alex to play with Hussain fast. Please note that after a game finishes, Alex returns the list to Hussain, and Hussain swaps another pair of edges without changing the order of the remaining edges in the list. That is, the swaps are not reverted and the edges which were swapped in a query remain swapped for the future queries as well.</p>

<p>Also note that you do not need to report what happens with the original graph. Only after each query.</p>

<h3>Input</h3>
<ul>
<li>First line of each testfile contains a single integer <b>T</b>, denoting the number of testcases. </li>
<li>First line of each testcase contains 3 space separated integers <b>N,M,Q</b>, denoting the number of nodes, the number of edges in the list and the number of queries to process. </li>
<li>Next M lines specifying the edges in the original list. The <b>i-th</b> line of them would contain two space separated integers <b>U<sub>i</sub> , V<sub>i</sub> </b>. <b>U<sub>i</sub> , V<sub>i</sub></b> denoting the endpoints of the <b>i-th</b> edge. It's guaranteed that the list won't contain a self loop (an edge between a node and itself), but it may contain edges between the same pair of nodes.</li>
<li>Next <b>Q</b> lines each contain 2 space separated integers <b>a , b</b> denoting the indexes of edges Hussain should swap. </li>
</ul>

<h3>Output</h3>
<p>For each testcase, output <b>Q</b> lines, the <b>i-th</b> line of them must contain a single integer denoting the number of edges Alex must insert so the graph becomes connected.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N , Q</b> ≤ <b>100000</b></li>
<li><b>N - 1</b> ≤ <b>M</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>U<sub>i</sub>, V<sub>i</sub></b> ≤ <b>N</b></li>
<li>For each query <b>1</b> ≤ <b>a,b</b> ≤ <b>M</b> , <b>a != b</b></li>
<li>The sum of <b>N</b> in all scenarios won't exceed 100000</li>
<li>The sum of <b>M</b> in all scenarios won't exceed 100000</li>
<li>The sum of <b>Q</b> in all scenarios won't exceed 100000</li>
<li>It's guaranteed that the graph becomes connected if Alex adds all edges in every scenario</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5 7 3
1 2
1 3
2 3
3 5
1 5
4 5
1 4
5 6
3 4
7 4

<b>Output:</b>
5
5
4
</pre>

<h3>Explanation</h3>
<p>The original list of edges is { (1, 2), (1, 3), (2, 3), (3, 5), (1, 5), (4, 5), (1, 4) }.</p>
<p>First query: After applying the (5, 6) swap, the list of edges is { (1, 2), (1, 3), (2, 3), (3, 5), (4, 5), (1, 5), (1, 4) }. Just the first 5 edges in this, that is { (1, 2), (1, 3), (2, 3), (3, 5), (4, 5) } connects the entire graph. Hence the answer is 5.</p>

<p>Second query: After applying the (3, 4) swap to the list from the previous query, we get { (1, 2), (1, 3), (3, 5), (2, 3), (4, 5), (1, 5), (1, 4) }. Just the first 5 edges in this, that is { (1, 2), (1, 3), (3, 5), (2, 3), (4, 5) } connects the entire graph. Hence the answer is 5.</p>

<p>Third query: After applying the (7, 4) swap to the list from the previous query, we get { (1, 2), (1, 3), (3, 5), (1, 4), (4, 5), (1, 5), (2, 3) }. Just the first 4 edges in this, that is { (1, 2), (1, 3), (3, 5), (1, 4) } connects the entire graph. Hence the answer is 4.</p>