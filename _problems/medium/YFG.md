---
{"category_name":"medium","problem_code":"YFG","problem_name":"Y Figures","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"kr_abhinav","problem_tester":null,"date_added":"26-03-2018","tags":{"0":"codemelange","1":"dsu","2":"kr_abhinav","3":"medium","4":"sack"},"editorial_url":"https://discuss.codechef.com/problems/YFG","time":{"view_start_date":1522873800,"submit_start_date":1522873800,"visible_start_date":1522873800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a tree with <b>N</b> nodes, numbered from 1 to <b>N</b>. It is rooted at node 1, and each node i is labelled with a positive integer <b>label<sub>i</sub></b>.</p>

<p>‘Y Figures’ of a node X are defined as the number of ordered triplets of nodes (A, B, C) satisfying:</p>
<ul>
<li><b>label<sub>A</sub></b> = <b>label<sub>B</sub></b> = <b>label<sub>C</sub></b> = <b>label<sub>X</sub></b>.</li>
<li>A is an ancestor of X.</li>
<li>B and C are in the subtree of X and LCA(B,C) = X. </li>
<li>A, B, C, X are pairwise distinct.</li>
</ul>

<p>You need to answer Q queries of the form ‘X Z’. For each query, Change the label of node X to Z and report the number of ‘Y Figures’ of the node X.  </p>

<p><b>Note:</b> Changes are not persistent. Each query is independent of every other query. </p>

<p>It is advised to use fast I/O methods.</p>


<h3>Input</h3>
<ul>
<li>First Line of Input consists of a single integer <b>T</b>, the number of test cases.</li>
<li>First line of every test case contains of two Integers, <b>N</b> and <b>Q</b>,  denoting number of nodes in the tree and the number of queries respectively.</li>
<li>The second line of input consists of <b>N</b> integers,  where the i-th integer represents <b>label<sub>i</sub></b>, the label of node i (1-indexed).</li>
<li>The next <b>N - 1</b> lines contain two integers, <b>a</b> and <b>b</b>,  denoting that an edge exists between node <b>a</b> and node <b>b</b>.</li>
<li>The next <b>Q</b> lines contain two integers, <b>X</b> and <b>Z</b> where <b>X</b> is the node and <b>Z</b> is the new label of the node for the current query.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For every testcase, output <b>Q</b> lines, where each line is the answer to each query in the order of input.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li>1 ≤ Sum of all <b>N</b> ≤ 200000</li>
<li>1 ≤ <b>a</b>, <b>b</b> ≤ <b>N</b></li>
<li>1 ≤ <b>X</b> ≤ <b>N</b></li>
<li>1 ≤ Sum of all <b>Q</b> ≤ 100000</li>
<li>1 ≤ <b>Z, label<sub>i</sub></b> ≤ 1000000000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
6 2
1 1 1 1 1 1
1 2
2 3
3 4
2 5
2 6
2 1
2 2

<b>Output:</b>
10
0
</pre>

<h3>Explanation</h3>
<p>For query ‘2 1’, the satisfying triplets are (1,3,5), (1,3,6), (1,4,5), (1,4,6), (1,5,6), (1,5,3), (1,5,4), (1,6,5), (1,6,3) and (1,6,4). </p>
<p>For query ‘2 2’, there are no satisfying triplets.
</p>