---
{"category_name":"medium","problem_code":"CO92TREE","problem_name":"Chef Chooses a Subset","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kefaa","problem_tester":null,"date_added":"15-03-2018","tags":{"0":"bruteforce","1":"cook92","2":"dfs","3":"kefaa","4":"medium","5":"tree"},"editorial_url":"https://discuss.codechef.com/problems/CO92TREE","time":{"view_start_date":1521397800,"submit_start_date":1521397800,"visible_start_date":1521397800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/mandarin/CO92TREE.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/russian/CO92TREE.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/vietnamese/CO92TREE.pdf">Vietnamese</a> as well.</h3>

<p>Chef has a tree with <b>N</b> nodes numbered 1 through <b>N</b>.</p>

<p>A subset <b>S</b> of nodes of the tree is called <i>connected</i> if, for any two nodes from <b>S</b>, the simple path between these two nodes in the tree contains only nodes which belong to <b>S</b>.</p>

<p>Chef defines the <i>cost</i> of a connected subset <b>S</b> as <b>|S| · AND(S)</b>. Here, <b>|S|</b> denotes the size of the set <b>S</b> and <b> AND(S)</b> denotes the bitwise AND of indices of all nodes from <b>S</b>.</p>

<p>Chef would like to know the maximum of costs of all connected subsets. Can you help him?</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b>.</li>
<li>Each of the following <b>N-1</b> lines contains two space-separated integers <b>x</b> and <b>y</b> denoting an edge between nodes <b>x</b> and <b>y</b> of the tree.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the maximum cost of a connected subset.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 30</li>
<li>1 ≤ <b>N</b> ≤ 100,000</li>
<li>1 ≤ <b>x</b>, <b>y</b> ≤ <b>N</b></li>
<li>1 ≤ sum of <b>N</b> over all test cases  ≤ 300,000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

1
6
1 2
3 5
3 4
2 3
5 6

<b>Output:</b>

8
</pre>
