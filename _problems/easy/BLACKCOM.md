---
{"category_name":"easy","problem_code":"BLACKCOM","problem_name":"Black Nodes in Subgraphs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"2-06-2017","tags":{"0":"admin3"},"time":{"view_start_date":1496516400,"submit_start_date":1496516400,"visible_start_date":1496516400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/mandarin/BLACKCOM.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/russian/BLACKCOM.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/vietnamese/BLACKCOM.pdf">Vietnamese</a> as well.</h3>

<p>You are given a tree T with <b>N</b> nodes. The nodes are numbered from 1 to <b>N</b>, and each node is colored either white or black. You are given <b>Q</b> queries, where each query is of the form (<b>s</b>, <b>b</b>). You need to check if there is a connected subgraph of size exactly <b>s</b>, which contains exactly <b>b</b> black nodes.</p>

<p>A subgraph H, of a tree T, is a graph whose vertex set V<sub>H</sub> is a subset of the nodes of the tree and the edges are exactly those edges of the tree whose both end points are in V<sub>H</sub>. A subgraph H is a connected subgraph if H is connected.</p>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>T</b>, which denotes the number of testcases. The descriptions of the testcases follow.</li>
<li>The first line of each testcase contains two integers, <b>N</b> and <b>Q</b>, which denotes the number of nodes in the tree, and the number of queries, respectively.</li>
<li>The i-th of the next <b>N</b> - 1 lines contains two integers: <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>. This denotes that there is an edge between nodes <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b> in the tree.</li>
<li>The next line contains <b>N</b> integers, <b>c<sub>1</sub>, c<sub>2</sub></b>, .., <b>c<sub>N</sub></b>. <b>c<sub>i</sub></b> is 0 if node i is colored white, and it is 1 if it is colored black.</li>
<li>The i-th of the next <b>Q</b> lines contains two integers: <b>s<sub>i</sub></b> and <b>b<sub>i</sub></b>. This denotes a query of the form (<b>s<sub>i</sub>, b<sub>i</sub></b>) as described above.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each testcase, output a single line containing the string "Yes" (without quotes), if there is a connected subgraph as required by the query, or "No" (without quotes) otherwise.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>2 ≤ <b>N</b> ≤ 5000</li>
<li>1 ≤ <b>Q</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>u<sub>i</sub>, v<sub>i</sub></b> ≤ <b>N</b></li>
<li>0 ≤ <b>c<sub>i</sub></b> ≤ 1</li>
<li>0 ≤ <b>b<sub>i</sub></b>  ≤ <b>N</b></li>
<li>1 ≤ <b>s<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>b<sub>i</sub></b> ≤ <b>s<sub>i</sub></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
9 4
4 1
1 5
1 2
3 2
3 6
6 7
6 8
9 6
0 1 0 1 0 0 1 0 1
3 2
7 3
4 0
9 5

<b>Output:</b>
Yes
Yes
No
No
</pre>

<h3>Explanation</h3>
<p><b>Query 1</b>: The subgraph containing the nodes {6, 7, 9} is a connected subgraph because (6, 7) and (6, 9) are edges in the original tree. And it has exactly two black nodes (7 and 9). So, there is at least one connected subgraph of size exactly 3 which has exactly 2 black nodes. Hence the answer is "Yes".</p>

<p><b>Query 2</b>: The subgraph containing the nodes {1, 2, 3, 4, 6, 7, 8} is a connected subgraph. And it has exactly three black nodes (2, 4 and 7). So, there is at least one connected subgraph of size exactly 7 which has exactly 3 black nodes. Hence the answer is "Yes".</p>

<p><b>Query 3</b>: There is no connected subgraph of size exactly 4 with all white nodes. Hence the answer is "No".</p>

<p><b>Query 4</b>: The only subgraph with 9 nodes is the entire tree itself. And it has 4 black nodes, and not 5. Hence the answer is "No".</p>