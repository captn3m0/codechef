---
{"category_name":"easy","problem_code":"BINTREE","problem_name":"Shortest Path in Binary Trees","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":"shiplu","date_added":"21-03-2014","tags":{"0":"april14","1":"darkshadows","2":"easy","3":"tree"},"editorial_url":"http://discuss.codechef.com/problems/BINTREE","time":{"view_start_date":1397468279,"submit_start_date":1397468279,"visible_start_date":1397467741,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/BINTREE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/BINTREE.pdf">Russian</a>.</h3>
<p>Consider an infinite full binary tree (each node has two children except the leaf nodes) defined as follows. For a node labelled <b>v</b> its left child will be labelled <b>2*v</b> and its right child will be labelled <b>2*v+1</b>. The root is labelled as <b>1</b>.</p>
<p>You are given <b>N</b> queries of the form <b>i j</b>. For each query, you have to print the length of the shortest path between node labelled <b>i</b> and  node labelled <b>j</b>.
</p>
<h3>Input</h3>
<p>First line contains <b>N</b>, the number of queries. Each query consists of two space separated integers <b>i</b> and <b>j</b> in one line.</p>
<h3>Output</h3>
<p>For each query, print the required answer in one line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>i,j</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 2
2 3
4 3

<b>Output:</b>
1
2
3
</pre><h3>Explanation</h3>
<p>For first query, 1 is directly connected to 2 by an edge. Hence distance 1.</p>
