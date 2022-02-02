---
{"category_name":"medium","problem_code":"PAIRCLST","problem_name":"Two Closest","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"zedthirtyeight","date_added":"21-02-2016","tags":{"0":"dijkstra","1":"floyd","2":"ltime34","3":"medium","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/PAIRCLST","time":{"view_start_date":1459011600,"submit_start_date":1459011600,"visible_start_date":1459011600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/mandarin/PAIRCLST.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/russian/PAIRCLST.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/vietnamese/PAIRCLST.pdf">Vietnamese</a> as well.</h3>
<p>You are given a weighted graph with <b>N</b> nodes and <b>M</b> edges. Some of the nodes are marked as <i>special</i> nodes. Your task is to find the   shortest pairwise distance between any two different <i>special</i> nodes.</p>
<h3>Input</h3>
<p>The first line of the input contains three space-separated integers <b>N</b>, <b>M</b> and <b>K</b> denoting the number of nodes, the number of edges, and the number of special nodes. </p>
<p>The following line contains <b>K</b> space-separated distinct integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>K</sub> </b>, denoting the special nodes.</p>
<p>Each of the following <b>M</b> lines (say, the <b>j</b><sup>th</sup>) contains a triple <b>X<sub>j</sub> Y<sub>j</sub> Z<sub>j</sub></b>, denoting the edge connecting the nodes <b>X<sub>j</sub></b> and <b>Y<sub>j</sub></b>, and having the weight of <b>Z<sub>j</sub></b>.</p>
<h3>Output</h3>
<p>Output the shortest pairwise distance between any two different special nodes.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>2</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li>The given graph is <b>connected</b>.</li>
<li>The given graph doesn't contain self loops and multiple edges.</li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>Z<sub>j</sub></b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>X<sub>j</sub></b>, <b>Y<sub>j</sub></b> ≤ <b>N</b></li>
</ul>
</p>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (20 points): <b>2</b> ≤ <b>N</b> ≤ <b>300</b>, <b>N-1</b> ≤ <b>M</b> ≤ <b>N*(N-1)/2</b>, <b>2</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li>Subtask #2 (25 points): <b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b>, <b>N-1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b>, <b>2</b> ≤ <b>K</b> ≤ <b>10</b></li>
<li>Subtask #3 (55 points): <b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b>, <b>N-1</b> ≤ <b>M</b> ≤ <b>3 * 10<sup>5</sup></b>, <b>2</b> ≤ <b>K</b> ≤ <b>10<sup>4</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>5 5 3
1 3 5
1 2 3
2 3 4
3 4 1
4 5 8
1 5 19</tt>

<b>Output:</b>
<tt>7</tt>
</pre><h3>Explanation</h3>
<p>Nodes 1, 3 and 5 are special nodes. Shortest distance between nodes 1 and 3 is 7 and that between nodes 3 and 5 is 9. Shortest distance between nodes 1 and 5 is 16. Minimum of these distances is 7. Hence answer is 7.</p>
