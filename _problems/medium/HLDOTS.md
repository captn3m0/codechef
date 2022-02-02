---
{"category_name":"medium","problem_code":"HLDOTS","problem_name":"Heavy-light Decompositions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"furko","date_added":"23-01-2015","tags":{"0":"dynamic","1":"ltime21","2":"medium","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/HLDOTS","time":{"view_start_date":1424593800,"submit_start_date":1424593800,"visible_start_date":1424593800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Heavy-light decomposition of a tree is a powerful tool that often helps in the most difficult tree data structure problems.</p>
<p>Heavy-light decomposition is to be built on a rooted tree. In this problem, the node with the number <b>1</b> should be considered the root of a tree. Heavy light decomposition is a colouring of edges of the tree. Each edge is either heavy or light. For each non leaf node (node having degree greater than 1), from all the edges emanating from it into the subtree rooted at this vertex should have exactly one heavy edge.
</p>
<p>The heavy-light decomposition is called correct, if you can reach any node from the root node by using no more that <b>⌊ log<sub>2</sub> N ⌋</b> <i>light</i> edges, where <b>N</b> is the number of nodes in the tree.</p>
<p>Given a tree, calculate the number of its' correct heavy-light decompositions. As answer could be very large, please print it modulo <b>19101995</b>.</p>
<h3>Input</h3>
<p>There is exactly one test case.</p>
<p>The first line of input consists of a single integer <b>N</b>, denoting the number of the nodes in the tree.</p>
<p>Each of the following <b>N - 1</b> lines contains a pair of integers, denoting the numbers of the nodes that are connected with an edge. The nodes are enumerated by positive integers in the range <b>[1; N]</b>.</p>
<h3>Output</h3>
<p>Output the number of correct heavy-light decompositions of the given tree. Since this number can be huge, please output it modulo <b>19101995</b>.</p>
<h3>Constraints</h3>
<ul>
<li>(Subtask 1): <b>1</b> ≤ <b>N</b> ≤ <b>20</b> - 21 point.</li>
<li>(Subtask 2): <b>1</b> ≤ <b>N</b> ≤ <b>1000</b> - 34 points.</li>
<li>(Subtask 3): <b>1</b> ≤ <b>N</b> ≤ <b>100000</b> - 45 points.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
7
1 2
3 1
3 4
3 5
2 6
2 7

<b>Output:</b>
8
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Input is a complete binary tree. It consists of 7 nodes, therefore you can't have more than <b>⌊log<sub>2</sub> 7⌋ = ⌊(2.80735492206)⌋ = 2 </b> light edges on the path from the root node to any other one. But the tree's height is 2, so you can choose the decomposition in any way you like. All the decompositions will be correct ones. There are three nodes that has outgoing edges from them (in the direction opposite to the root's one), their numbers are <b>1</b>, <b>2</b> and <b>3</b>. Each of them has 2 outgoing edges from which you can colour exactly one of them heavy, so overall you'll have 2 * 2 * 2 = 8 options of creating the correct heavy-light decompositions.</p>
