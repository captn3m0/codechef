---
{"category_name":"medium","problem_code":"TREEROOT","problem_name":"Root of the Problem","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"anton_lunyov","date_added":"26-11-2012","tags":{"0":"cook29","1":"pieguy","2":"simple","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/TREEROOT","time":{"view_start_date":1356288302,"submit_start_date":1356288302,"visible_start_date":1356288262,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has a binary tree. The binary tree consists of 1 or more nodes. Each node has a unique integer id. Each node has up to 2 children, which are identified by their ids, and each node is the child of at most 1 other node. A node <b>X</b> is considered to be an ancestor of node <b>Y</b> if node <b>Y</b> is a child of node <b>X</b> or if there is some node <b>Z</b> for which <b>X</b> is an ancestor of <b>Z</b> and <b>Y</b> is a child of <b>Z</b>. No node is an ancestor of itself.  A special node called the root node is an ancestor of all other nodes.</p>
<p>Chef has forgotten which node of his tree is the root, and wants you to help him to figure it out. Unfortunately, Chef's knowledge of the tree is incomplete. He does not remember the ids of the children of each node, but only remembers the sum of the ids of the children of each node.</p>
<h3>Input</h3>
<p>Input begins with an integer <b>T</b>, the number of test cases. Each test case begins with an integer <b>N</b>, the number of nodes in the tree. <b>N</b> lines follow with 2 integers each: the id of a node, and the sum of the ids of its children. The second number will be 0 if the node has no children.</p>
<h3>Output</h3>
<p>For each test case, output on a line a space separated list of all possible values for the id of the root node in increasing order. <b>It is guaranteed that at least one such id exists for each test case.</b></p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 50</li>
<li>1 ≤ <b>N</b> ≤ 30</li>
<li>All node ids are between 1 and 1000, inclusive</li>
</ul>
<h3>Sample Input</h3>
<pre>2
1
4 0
6
1 5
2 0
3 0
4 0
5 5
6 5
</pre><h3>Sample Output</h3>
<pre>4
6
</pre><h3>Explanation</h3>
<p>In the first sample test case, there is only one node, which is clearly the root. In the second test case, there are two non-isomorphic trees that satisfy the constraints, as seen in the following picture:</p>
<pre><code>  6           6
   \         / \
    5       1   4
   / \       \
  1   4       5
 / \         / \
2   3       2   3
</code></pre>