---
{"category_name":"easy","problem_code":"CHEFCCYL","problem_name":"Chef and Cycled Cycles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"alex_2oo8","date_added":"24-11-2015","tags":{"0":"berezin","1":"medium","2":"oct17","3":"prefix"},"editorial_url":"https://discuss.codechef.com/problems/CHEFCCYL","time":{"view_start_date":1508146200,"submit_start_date":1508146200,"visible_start_date":1508146200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/mandarin/CHEFCCYL.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/russian/CHEFCCYL.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/vietnamese/CHEFCCYL.pdf">vietnamese</a> as well.</h3>

<p>Chef recently learned about finding shortest paths in a bidirectional graph. He has following types of graphs with him and would like to find shortest paths between some given pair of vertices.</p>

<p>There are <b>N</b> cycles in the graph. Let us enumerate them cycle number <b>1</b> to <b>N</b>. The <b>i</b>-th cycle contains <b>A<sub>i</sub></b> nodes enumerated from <b>1</b> to <b>A<sub>i</sub></b>.</p>

<p>The nodes of a single cycle are connected to each other in cyclic fashion, i.e. the 1st node is connected to 2nd, 2nd to 3rd, and so on till the last node is connected to the 1st node. All of these edges are weighed.</p>

<p>The cycles are also connected to each other via an edge in a similar cyclic order. The <b>i</b>-th cycle is connected to <b>i % N + 1</b>-th cycle via an edge. This edge is between some vertex <b>v<sub>1</sub></b> of <b>i</b>-th cycle and vertex <b>v<sub>2</sub></b> of <b>i % N + 1</b>-th cycle and is a weighted edge.</p>

<p>You are given <b>Q</b> queries, each containing four integers <b>v<sub>1</sub></b>, <b>c<sub>1</sub></b>, <b>v<sub>2</sub></b>, <b>c<sub>2</sub></b>. You have to find the weight of shortest path between the <b>v<sub>1</sub></b>-th vertex of <b>c<sub>1</sub></b>-th cycle, and <b>v<sub>2</sub></b>-th vertex of <b>c<sub>2</sub></b>-th cycle.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>First line of each test case contains two space separated integers <b>N, Q</b> denoting the number of cycles in the graph and the number of queries.</p>
<p>Next <b>N</b> lines contain the description of the cycles.</p>
<p>The <b>i</b>-th line describes <b>i</b>-th cycle. First it contains an integer <b>A<sub>i</sub></b> denoting the number nodes in the <b>i</b>-th cycle followed by <b>A<sub>i</sub></b> integers denoting the weight of edges of the cycle. First integer denotes the weight of edge from node <b>1</b> to node <b>2</b>, from <b>2</b> to <b>3</b> and so on. Last integer denotes the weight of the edge from node <b>A<sub>i</sub></b> to node <b>1</b>. </p>
<p>Next <b>N</b> lines describe connections between adjacent cycles. The <b>i</b>-th line contains three space separated integers <b>v<sub>1</sub></b>, <b>v<sub>2</sub></b>, <b>w</b> denoting that there is an edge of weight <b>w</b> between the <b>v<sub>1</sub></b>-th node of <b>i</b>-th cycle and <b>v<sub>2</sub></b>-th node of the <b>i % N + 1</b>-th cycle.</p>
<p>Next <b>Q</b> lines describe the queries. Each query is given by four space separated integers <b>v<sub>1</sub></b>, <b>c<sub>1</sub></b>, <b>v<sub>2</sub></b>, <b>c<sub>2</sub></b></p>

<h3>Output</h3>
<p>For each query, output a single integer corresponding to the total weight of the shortest path. </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>1</sub></b> + <b>A<sub>2</sub></b> + ... + <b>A<sub>N</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>weight of edges</b> ≤ <b>10<sup>3</sup></b></li>
<li>For each query,  <b>c<sub>1</sub></b> !=  <b>c<sub>2</sub></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (10 points)</b>: 1 ≤ <b>A<sub>1</sub></b> + <b>A<sub>2</sub></b> + ... + <b>A<sub>N</sub></b> ≤ <b>10<sup>3</sup></b>, <b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>3</sup></b>.</li>
<li><b>Subtask #2 (15 points)</b>:  All the edges are of weight = 1.</li>
<li><b>Subtask #3 (20 points)</b>: <b>c<sub>1</sub></b> = 1 for all the queries.</li>
<li><b>Subtask #4 (55 points)</b>: <b>Original constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3 3
3 1 2 2
2 1 2
3 1 4 1
2 1 2
2 1 5
3 1 3
2 1 1 2
1 1 1 2
3 1 3 3

<b>Output:</b>
2
3
5
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p>Here is the description of the graph. </p>

<p>There are <b>3</b> cycles. 

<pre>
Cycle <b>1</b>: <b>3</b> nodes. Edges: <b>(1, 2) = 1</b>, <b>(2, 3) = 2</b>, </b>(3, 1) = 2</b>.
Cycle <b>2</b>: <b>2</b> nodes. Edges: <b>(1, 2) = 1</b>, <b>(2, 1) = 2</b>.
Cycle <b>3</b>: <b>3</b> nodes. Edges: <b>(1, 2) = 1</b>, <b>(2, 3) = 4</b>, </b>(3, 1) = 1</b>.
</pre>
</p>

<p>Connections between adjacent cycles:</p>

<p>
<pre>
Cycle <b>1</b> node <b>2</b> is connected to Cycle <b>2</b> node <b>1</b> with edge of weight <b>2</b>. 
Cycle <b>2</b> node <b>2</b> is connected to Cycle <b>3</b> node <b>1</b> with edge of weight <b>5</b>.
Cycle <b>3</b> node <b>3</b> is connected to Cycle <b>1</b> node <b>1</b> with edge of weight <b>3</b>.
</pre>

<p><b>Queries</b></p>
<p>Best path from node <b>2</b> cycle <b>1</b> to node <b>1</b> cycle <b>2</b> is of the cost 2. </p>
<p>Best path from node <b>1</b> cycle <b>1</b> to node <b>1</b> cycle <b>2</b> is: 
edge <b>(1, 2)</b> of cycle <b>1</b> + edge <b>(2, 1)</b> between cycles <b>1</b> and <b>2</b>.</p>
<p>Best path from node <b>3</b> cycle <b>1</b> to node <b>3</b> cycle <b>3</b> is:
edge <b>(3,1)</b> of cycle <b>1</b> + edge <b>(3, 1)</b> between cycles <b>3</b> and <b>1</b>.</p>