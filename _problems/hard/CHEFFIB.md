---
{"category_name":"hard","problem_code":"CHEFFIB","problem_name":"Chef, Leonardo And Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kefaa","problem_tester":null,"date_added":"23-11-2017","tags":{"0":"dec17","1":"kefaa"},"editorial_url":"https://discuss.codechef.com/problems/CHEFFIB","time":{"view_start_date":1512984600,"submit_start_date":1512984600,"visible_start_date":1512984600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/mandarin/CHEFFIB.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/russian/CHEFFIB.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/vietnamese/CHEFFIB.pdf">Vietnamese</a> as well.</h3>

<p>Chef has a tree with <b>N</b> nodes numbered <b>1</b> through <b>N</b>. Initially, each node has value <b>0</b>.</p>

<p>Chef's best friend Leonardo loves queries on trees. He asked Chef to perform <b>Q</b> queries. Each query is of one of the following two types:
<ul>
<li> <b>1 v k a b</b>: Consider <b>f(0) = a</b>, <b>f(1) = b</b>, <b>f(i) = f(i - 1) + f(i - 2)</b> for <b>i ≥ 2</b>. For each node <b>u</b> of the tree, let <b>d</b> be the distance (in edges) from <b>v</b> to <b>u</b>. Then, if <b>d</b> ≤ <b>k</b>, Chef must add <b>f(d)</b> to the value of node <b>u</b>. </li>

<li> <b>2 v</b>: Print the value of node <b>v</b> modulo <b>10^9 + 7</b>.</li>
</ul>
</p>

<p>Help Chef perform Leonardo's queries! </p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains one integer <b>T</b> denoting the number of test cases.</li>

<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>Q</b>.</li>

<li>Each of the next <b>N</b>-1 lines contains two space-separated integers <b>x</b> and <b>y</b> denoting an edge between nodes <b>x</b> and <b>y</b>.</li>

<li><b>Q</b> lines follow. Each of these lines describes one query in the format above.</li>
</ul></p>

<h3>Output</h3>
<p>For each query of type 2, print the answer to it on a separate line.</p>

<h3>Constraints</h3>
<ul>
<li> 1 ≤ <b>T</b> ≤ 150 </li>
<li> 1 ≤ <b>N, Q</b> ≤ 300,000 </li>
<li> 1 ≤ sum of <b>N</b> over all testcases ≤ 300,000 </li>
<li> 1 ≤ sum of <b>Q</b> over all testcases ≤ 300,000 </li>
<li> 1 ≤ <b>v</b> ≤ <b>N</b> </li>
<li> 0 ≤ <b>k</b> ≤ <b>N</b> </li>
<li> 0 ≤ <b>a, b</b> ≤ 1,000,000,000 </li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (15 points):</b>
<ul>
<li>sum of all <b>N</b> ≤ 3000</li>
<li>sum of all <b>Q</b> ≤ 3000</li>
</ul>
</p>

<p>
<b>Subtask #2 (85 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

1
6 5
4 5
1 5
5 2
3 4
6 1
1 2 0 3 3
2 2
1 4 2 1 5
1 1 2 5 4
2 4

<b>Output:</b>

3
10
</pre>
<p> </p>
