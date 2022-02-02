---
{"category_name":"medium","problem_code":"COLORING","problem_name":"Tree Coloring","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"xcwgf666","date_added":"29-03-2016","tags":{"0":"data","1":"ltime35","2":"ma5termind","3":"queries","4":"segment","5":"tree"},"editorial_url":"http://discuss.codechef.com/problems/COLORING","time":{"view_start_date":1462036200,"submit_start_date":1462036200,"visible_start_date":1462036200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/mandarin/COLORING.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/russian/COLORING.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/vietnamese/COLORING.pdf">Vietnamese</a> as well.</h3>
<p>Chef has recently learnt about binary trees and immediately fell in love with them. His best friend Shasha has promised him to gift a binary tree only if he is able to show his love for binary trees by solving the following problem about binary trees.</p>
<p>Given a complete binary tree <b>T</b> consisting of <b>N</b> nodes labelled from 1 to <b>N</b>. The node with label <b>1</b> is the root of the tree. For a node labelled <b>v</b>, its' left child will be labelled as <b>2*v</b> (provided it exists) and right child as <b>2*v+1</b> (provided it exists).</p>
<p>Initially, all the nodes of tree are uncolored.</p>
<p>Chef has to perform <b>Q</b> queries on tree <b>T</b> where each query can have one of the following three types:</p>
<ul>
<li><b>1 X K</b>
<p>Update the tree <b>T</b> such that node <b>X</b> becomes uncolored, all the nodes at distance <b>1</b> from <b>X</b> get colored with color <b>1</b>, all nodes at distance <b>2</b> from <b>X</b> get colored with color <b>2</b>, and so on up to nodes at distance <b>K</b> from <b>X</b>.</p>
<p>Formally, color all nodes that are at distance <b>(1 ≤ D ≤ K)</b> units from node <b>X</b> with color <b>D</b> and make node <b>X</b> colourless.</p>
<p>Please note that when we say node at distance <b>D</b> from node <b>X</b>, <i>you have to consider all the nodes in the tree, not just the ones in the subtree of <b>X</b></i>.</p>
</li>
<li><b>2 X Y</b>
<p>Count the number of distinct colors on the unique simple path from node <b>X</b> to node <b>Y</b>.</p>
</li>
<li><b>3 X</b>
<p>Count the number of distinct colors in the subtree rooted at node <b>X</b>.</p>
</li>
</ul>

<h3>Input</h3>
<p>The first line of input contains two space separated integer numbers <b>N</b> and <b>Q</b> denoting the number of  nodes in the tree <b>T</b> and number of queries to be processed respectively.</p>
<p>Each of the following <b>Q</b> lines contains a query of one of the above mentioned three types.</p>
<h3>Output</h3>
<p>For each query of type <b>2</b> and <b>3</b>, print the sought answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ Q ≤ 50000</b></li>
<li><b>1 ≤ X, Y ≤ N</b></li>
<li><b>0 ≤ K ≤ 10<sup>5</sup></b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask 1 (32 pts) : <b>1 ≤ N, Q ≤ 1000</b></li>
<li>Subtask 2 (68 pts) : <b>original constraints</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input</b>
<tt>10 10
2 3 5
3 1
1 2 2
2 3 5
1 3 2
2 3 5
3 1
1 7 5
3 1
2 3 5</tt>

<b>output</b>
<tt>0
0
2
2
2
5
4</tt>
</pre>