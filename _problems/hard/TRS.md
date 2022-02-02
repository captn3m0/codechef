---
{"category_name":"hard","problem_code":"TRS","problem_name":"Queries on Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"lg5293","date_added":"27-03-2018","tags":{"0":"decomposition","1":"hard","2":"ltime58","3":"mgch","4":"squareroot","5":"supernode"},"time":{"view_start_date":1522602000,"submit_start_date":1522602000,"visible_start_date":1522602000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/mandarin/TRS.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/russian/TRS.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/vietnamese/TRS.pdf">Vietnamese</a> as well.</h3>

<p> 
You are given a tree <b>T</b> with <b>N</b> nodes numbered 1 through <b>N</b>. Each node of the tree has a value; let's denote the value of node <b>v</b> by <b>C<sub>v</sub></b>. You are also given <b>Q</b> queries to process. There are two types of queries:
<ul>
<li>1 <b>U</b> <b>V</b> <b>W</b> — add <b>W</b> to the value of each node on the path between nodes <b>U</b> and <b>V</b> (both inclusive)</li>
<li>2 <b>U</b> <b>V</b> <b>X</b> — consider each node on the path between nodes <b>U</b> and <b>V</b> (both inclusive) whose value is ≥ <b>X</b>; compute the minimum of these nodes' values</li>
</ul>
</p>

<p>Process the queries in the given order and compute the answer to each query of the second type.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>Q</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>C<sub>1</sub>, C<sub>2</sub>, ..., C<sub>N</sub></b>.</li>
<li><b>N-1</b> lines follow. Each of these lines contains two space-separated integers <b>U</b> and <b>V</b> denoting an edge connecting nodes <b>U</b> and <b>V</b>.</li>
<li>The following <b>Q</b> lines describe queries. Each of them contains four space-separated integers <b>type</b>, <b>U</b>, <b>V</b> and either <b>W</b> (for <b>type</b> = 1) or <b>X</b> (for <b>type</b> = 2). Here, <b>type</b> denotes the type of the query.</li>
</ul>

<h3>Output</h3>
<p>For each query of the second type, print a single line containing one integer — the minimum value ≥ <b>X</b> of a node on the given path which is, or -1 if no such value exists.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100,000</li>
<li>1 ≤ <b>N</b>, <b>Q</b> ≤ 100,000</li>
<li>0 ≤ <b>C<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
<li>1 ≤ <b>type</b> ≤ 2</li>
<li>1 ≤ <b>X</b> ≤ 10<sup>14</sup></li>
<li>1 ≤ <b>W</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>U</b>, <b>V</b> ≤ <b>N</b></li>
<li>the graph described on the input is a tree</li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 100,000</li>
<li>1 ≤ sum of <b>Q</b> over all test cases ≤ 100,000</li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (43 points):</b> there are no queries of the first type (<b>type</b> = 2 for each query)
</p>

<p>
<b>Subtask #2 (57 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

1
5 5
10 15 20 15 10
1 2
1 3
2 4
2 5
2 5 3 3
1 2 5 10
2 1 4 4
1 5 2 17
2 1 5 100

<b>Output:</b>

10
10
-1
</pre>
