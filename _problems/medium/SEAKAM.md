---
{"category_name":"medium","problem_code":"SEAKAM","problem_name":"Sereja and Salesman","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"antoniuk1","date_added":"14-10-2014","tags":{"0":"combinatorics","1":"dp","2":"jan16","3":"medium","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAKAM","time":{"view_start_date":1452504600,"submit_start_date":1452504600,"visible_start_date":1452504600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/mandarin/SEAKAM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/russian/SEAKAM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/vietnamese/SEAKAM.pdf">Vietnamese</a> as well.</h3>
<p>
Sereja has an undirected graph on <b>N</b> vertices. There are edges between all but <b>M</b> pairs of vertices.
</p>
<p>A permutation <b>p</b> on the vertices of the graph is represented as <b>p[1], p[2], … , p[N]</b> such that for all <b>i</b>, <b>p[i]</b> is a vertex of the graph. A permutation is called connected if there is an edge between vertices <b>p[i]</b> and <b>p[i+1]</b> for all natural numbers <b>i</b> less than <b>N</b>. Sereja wants to know the number of connected permutations on the graph vertices.
</p>
<h3>Input</h3>
<p>
First line of input contains a single integer <b>T</b>, denoting the number of test cases. <b>T</b> tests follow. First line of each test case contains two integers, <b>N</b> and <b>M</b>. <b>M</b> lines follow, each containing a pair of indices of vertices, indicating that those vertices are <b>not</b> connected by an edge.
</p>
<h3>Output</h3>
<p>
For each test case, output one number — the answer for the problem modulo <b>10<sup>9</sup>+7</b>.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 10 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b> 7 </b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1: </b> <b>1</b> ≤ <b>N</b> ≤ <b> 10 </b> (25 points) </li>
<li><b>Subtask #2: </b> <b>1</b> ≤ <b>N</b> ≤ <b> 100 </b> (25 points) </li>
<li><b>Subtask #3: </b> <b>1</b> ≤ <b>N</b> ≤ <b> 1000 </b> (25 points) </li>
<li><b>Subtask #4: </b> <b> original </b> (25 points) </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4 3
1 2
2 3
3 4
2 1
1 2

<b>Output:</b>
2
0

</pre>