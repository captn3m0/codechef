---
{"category_name":"medium","problem_code":"CLOSEFAR","problem_name":"So Close Yet So Far","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"animesh_f","problem_tester":"pushkarmishra","date_added":"29-07-2016","tags":{"0":"animesh_f","1":"data","2":"ltime38","3":"lunchtime","4":"mo","5":"optimization"},"editorial_url":"http://discuss.codechef.com/problems/CLOSEFAR","time":{"view_start_date":1469901600,"submit_start_date":1469901600,"visible_start_date":1469901600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/mandarin/CLOSEFAR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/russian/CLOSEFAR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/vietnamese/CLOSEFAR.pdf">Vietnamese</a> as well.</h3>


<img src = "https://codechef_shared.s3.amazonaws.com/upfiles/5cm.jpg" height="300" width="450">

<p>
Takaki Tono is a Computer Programmer in Tokyo. His boss at work shows him an online puzzle, which if solved would earn the solver a full expense paid trip to Los Angeles, California. Takaki really wants to solve this, as the love of his life, Akari, lives in Los Angeles and he hasn't met her since four years. Upon reading the puzzle he realizes that it is a query based problem. The problem is as follows :-
</p>

<p>
You are given a <a href="https://en.wikipedia.org/wiki/Tree_(graph_theory)">Tree</a> <b>T</b> with <b>N</b> nodes numbered from <b>1</b> to <b>N</b>, with each node numbered <b>z</b> having a positive integer <b>A<sub>z</sub></b> written on it. This integer denotes the value of the node. You have to process <b>Q</b> queries, of the following forms :- </p>
<p>
<b>1)</b> <b>C x y</b> : Report the closest two values in the unique path from <b>x</b> to <b>y</b> i.e compute <b>min(|A<sub>p</sub> - A<sub>q</sub>|)</b> where <b>p</b> and <b>q</b> are two distinct nodes on the unique path from <b>x</b> to <b>y</b>. 
</p>
<p>
<b>2)</b> <b>F x y</b> : Report the farthest two values in the unique path from <b>x</b> to <b>y</b> i.e. compute <b>max(|A<sub>p</sub> - A<sub>q</sub>|)</b> where <b>p</b> and <b>q</b> are two distinct nodes on the unique path from <b>x</b> to <b>y</b>.
</p>
<p>
It is also mentioned that <b>x</b> is not equal to <b>y</b> in any query and that no two nodes have the same value printed on them. Also, <b>|x|</b> denotes the absolute value of x. 
</p>
<p>
Takaki is perplexed and requires your help to solve this task? Can you help him out?
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of nodes in tree <b>T</b>. </p>
<p>The second line comprises <b>N</b> space separated integers denoting <b>A</b>, where the <b>i</b>-th integer denotes <b>A<sub>i</sub></b>. </p>
<p>The next <b>N-1</b> lines each comprise two space separated integers <b>u</b> and <b>v</b>, denoting that node <b>u</b> and node <b>v</b>
are connected by an edge. It is guaranteed that the final graph will be a connected tree.</p> 
<p>The next line contains a single integer <b>Q</b>, denoting number of queries. </p>
<p>The next <b>Q</b> lines comprise the queries. Each such line is of the format <b>C x y</b> or <b>F x y</b>. </p>

<h3>Output</h3>
<p>For each query, print the required output as mentioned above. </p>

<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>35000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>35000</b></li>
<li><b>1</b> ≤ <b>u, v</b> ≤ <b>N</sup></b></li>
<li>No two nodes have the same value printed on them.</li>
<li><b>x</b> is not equal to <b>y</b> in any query.</li>
</ul>

<h3>Subtasks</h3>

<h3>Subtasks</h3>
<b>Subtask #1 (15 points)</b>
<ul>
<li><b>N, Q</b> <b>≤ 1000</b></li>
</ul> 

<b>Subtask #2 (20 points)</b>
<ul>
<li>Only Type <b>F</b> queries are present.</li>
</ul> 

<b>Subtask #3 (65 points)</b>
<ul>
<li>Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>5
1 2 7 4 5
1 2
2 3
2 4
2 5
7
C 1 5
F 1 5
C 2 4
C 1 2
F 1 3
F 3 4
F 2 4</tt>

<b>Output:</b>
<tt>1
4
2
1
6
5
2</tt>
</pre>

<h3>Explanation</h3>
<p>Given below is the tree corresponding to the sample input. Each node has two numbers written in it. </p>
<p>The first number represents the node index and the second number indicates node value.</p>
<img src = "https://codechef_shared.s3.amazonaws.com/upfiles/Tree.png" height="300" width="300">