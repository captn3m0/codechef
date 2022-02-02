---
{"category_name":"easy","problem_code":"POSTTREE","problem_name":"Post Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"gainullinildar","problem_tester":"melfice","date_added":"26-05-2017","tags":{"0":"dfs","1":"easy","2":"gainullinildar","3":"lca","4":"ltime48"},"editorial_url":"https://discuss.codechef.com/problems/POSTTREE","time":{"view_start_date":1495899840,"submit_start_date":1495899840,"visible_start_date":1495899840,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/mandarin/POSTTREE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/russian/POSTTREE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/vietnamese/POSTTREE.pdf">Vietnamese</a> as well.</h3>

<p>You are given a rooted tree on <b>N</b> vertices. The nodes are numbered from 1 to <b>N</b>, and Node 1 is the root. Each node u has an associated value attached to it: <b>A<sub>u</sub></b>.</p>

<p>For each vertex v, we consider the path going upwards from v to the root. Suppose that path is v<sub>1</sub>, v<sub>2</sub>, .., v<sub>k</sub>, where v<sub>1</sub> = v and v<sub>k</sub> = 1. The cost of any node on this path is equal to the minimum value among all the nodes to its left in the path sequence, including itself. That is, cost(v<sub>i</sub>) = min<sub>1 <= j <= i</sub>{<b>A<sub>v<sub>j</sub></sub></b>}. And the cost of the path is the sum of costs of all the nodes in it.</p>

<p>For every node in the tree, find the cost of the path from that node to the root.</p>

<h3>Input</h3>
 <ul>
<li>The first line of the input contains a single integer, <b>N</b>, denoting the number of nodes in the tree.</li>
<li>The next line contains <b>N</b>-1 integers, the i-th of which denotes the parent of node i+1.</li>
<li>The next line contains <b>N</b> integers, the i-th of which denotes <b>A<sub>i</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>Output a single line containing <b>N</b> integers, the i-th of which should be the cost of the path from node i to the root.</p>
  
<h3>Constraints</h3>
 <ul>
<li>1 ≤ <b>N</b> ≤ 100,000</li>
<li>-1,000,000,000 ≤ <b>A<sub>v</sub></b> ≤ 1,000,000,000</li>
</ul>
 
 
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (30 points): 1 ≤ <b>N</b> ≤ 2000</li>
<li>Subtask #2 (70 points): Original constraints.</li>
</ul>
 

<h3>Example</h3>
<pre><b>Input:</b>
8
1 1 1 1 5 8 6
1 2 3 4 5 15 70 10

<b>Output:</b> 
1 3 4 5 6 21 96 26
</pre>
 
 
<h3>Explanation</h3>
<p>For example, take a look at the path from vertex 7: The path is 7 -> 8 -> 6 -> 5 -> 1.</p> 
<p>Cost(7) has no choice but to be <b>A<sub>7</sub></b>. So Cost(7) = 70.</p>
<p> Cost(8) will be minimum of <b>A<sub>7</sub></b> and <b>A<sub>8</sub></b>, which turns out to be <b>A<sub>8</sub></b>. So Cost(8) = 10.</p>
<p> Cost(6) = minimum {<b>A<sub>7</sub>, A<sub>8</sub>, A<sub>6</sub></b>} = minimum {70, 10, 15} = 10.</p>
<p> Cost(5) = minimum {70, 10, 15, 5} = 5.</p>
<p> Cost(1) = minimum {70, 10, 15, 5, 1} = 1. </p>
<p>So, the cost of the path from 7 to the root is 70 + 10 + 10 + 5 + 1 = 96.</p>