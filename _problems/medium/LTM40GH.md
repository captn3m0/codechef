---
{"category_name":"medium","problem_code":"LTM40GH","problem_name":"Chef and Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"xcwgf666","date_added":"12-09-2016","tags":{"0":"lca","1":"ltime40","2":"medium","3":"mgch","4":"optimization","5":"tree","6":"xor"},"editorial_url":"http://discuss.codechef.com/problems/LTM40GH","time":{"view_start_date":1474736400,"submit_start_date":1474736400,"visible_start_date":1474736400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/mandarin/LTM40GH.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/russian/LTM40GH.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/vietnamese/LTM40GH.pdf">Vietnamese</a> as well.</h3>


<p>
Chef likes trees a lot. He has a weighted rooted tree <b>T</b> rooted at node 1. There are <b>N</b> nodes in the tree numbered from 1 to <b>N</b>. Each node <b>v</b> has a value <b>A<sub>v</sub></b> associated with it. Let's call ugliness of path between nodes <b>u</b> and <b>v</b> - C(<b>u</b>, <b>v</b>) as bitwise XOR of all values on path. Let's call ugliness of node <b>v</b> maximal ugliness among all the paths which lies in subtree <b>v</b>. For each node find ugliness of it.
</p>

<h3>Input</h3>
<p>The first line contains one integer <b>T</b>, denoting the number of the test cases. </p>
<p>First line of each test case contains one integer <b>N</b>. </p>
<p>Second line contains <b>N</b> space-separated integers denoting <b>A<sub>v</sub></b> - the values associated with nodes.</p>
<p>Next <b>N-1</b> lines contains two space-separated integers <b>u</b>, <b>v</b> denoting the nodes connected by an edge.</p>

<h3>Output</h3>
<p>For each test case for each node in range from 1 to <b>N</b>, output its ugliness in a single line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b>
<li><b>1</b> ≤ <b>u, v</b> ≤ <b>N</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
 <li><b>Subtask #1 (10 points):</b> 1 ≤ sum over all <b>N</b> ≤ 100</li>
 <li><b>Subtask #2 (20 points):</b> 1 ≤ sum over all <b>N</b> ≤ 1000</li>
 <li><b>Subtask #3 (30 points):</b> 1 ≤ sum over all <b>N</b> ≤ 10000</li>
 <li><b>Subtask #4 (40 points):</b> 1 ≤ sum over all <b>N</b> ≤ 100000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
5
1 2 3 4 5
1 2
1 3
2 4
2 5
</tt>

<b>Output:</b>
<tt>7
7
3
4
5</tt>
</pre>


