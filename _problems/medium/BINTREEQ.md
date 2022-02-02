---
{"category_name":"medium","problem_code":"BINTREEQ","problem_name":"Queries on a Binary Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"pavel1996","date_added":"26-03-2016","tags":{"0":"cook69","1":"easy","2":"kostya_by","3":"lca"},"editorial_url":"http://discuss.codechef.com/problems/BINTREEQ","time":{"view_start_date":1460917800,"submit_start_date":1460917800,"visible_start_date":1460917800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK69/mandarin/BINTREEQ.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK69/russian/BINTREEQ.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK69/vietnamese/BINTREEQ.pdf">Vietnamese</a> as well.</h3>
<p>Let's consider a rooted binary tree with the following properties:</p>
<p><ul>
<li>The number of nodes and edges in the tree is infinite</li>
<li>The tree root is labeled by <b>1</b></li>
<li>A node labeled by <b>v</b> has two children: <b>2 × v</b> (the left son of <b>v</b>) and <b>2 × v + 1</b> (the right son of <b>v</b>)</li>
</ul>
</p>
<p>Here is an image of the first several tree layers of such a tree:</p>
<p><img width="300" src="https://www.codechef.com/download/COOK69/1.png" /></p>
<p>Let's consider four operations, that are allowed to apply during the tree traversal:</p>
<p><ul>
<li><b>move to the left son</b> - move from <b>v</b> to <b>2 × v</b></li>
<li><b>move to the right son</b> - move from <b>v</b> to <b>2 × v + 1</b></li>
<li><b>move to the parent as a left son</b> - move from <b>v</b> to <b>v / 2</b> if <b>v</b> is an even integer</li>
<li><b>move to the parent as a right son</b> - move from <b>v</b> to <b>(v - 1) / 2</b> if <b>v</b> is an odd integer</li>
</ul>
</p>
<p>It can be proven, that for any pair of two nodes <b>u</b> and <b>v</b>, there is only one sequence of such commands, that moves from <b>u</b> to <b>v</b> and visits each node of the tree at most once. Let's call such a sequence of commands a <i>path configuration</i> for a pair of nodes (<b>u</b>, <b>v</b>).</p>
<p>You are asked to process a series of the following queries:</p>
<p>You are given three integers <b>n</b>, <b>u</b> and <b>v</b> (<b>1 ≤ u, v ≤ n</b>). Count the pairs of nodes (<b>w, t</b>) (<b>1 ≤ w, t ≤ n</b>) such that the path configuration for (<b>w, t</b>) is the same with the path configuration for (<b>u, v</b>).</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>Q</b> denoting the number of queries to process.</p>
<p>Each of the next <b>Q</b> lines contains three space-separated integers <b>n</b>, <b>u</b> and <b>v</b> denoting a query.</p>
<h3>Output</h3>
<p>For each query, print the answer on a separate line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ Q ≤ 20000</b></li>
<li><b>1 ≤ u, v ≤ n ≤ 10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
11 9 11
10 2 2
8 1 8

<b>Output:</b>
2
10
1
</pre><h3>Explanation</h3>
<p>In the first query from the example test case, you should count pairs (<b>5, 7</b>) and (<b>9, 11</b>).</p>
<p>In the second query from the example test case, you should count the following pairs: (<b>1, 1</b>), (<b>2, 2</b>), (<b>3, 3</b>), (<b>4, 4</b>), (<b>5, 5</b>), (<b>6, 6</b>), (<b>7, 7</b>), (<b>8, 8</b>), (<b>9, 9</b>) and (<b>10, 10</b>).</p>
<p>In the third query from the example test case, you should only count a pair (<b>1, 8</b>).</p>
