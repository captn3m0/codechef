---
{"category_name":"hard","problem_code":"TREEBAL","problem_name":"Tree Balancing","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"30-09-2016","tags":{"0":"binary","1":"dynamic","2":"hard","3":"kingofnumbers","4":"oct16"},"editorial_url":"http://discuss.codechef.com/problems/TREEBAL","time":{"view_start_date":1476696600,"submit_start_date":1476696600,"visible_start_date":1476696600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/mandarin/TREEBAL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/russian/TREEBAL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/vietnamese/TREEBAL.pdf">Vietnamese</a> as well.</h3>

<p>
You are given a rooted tree of <b>N</b> vertices, the root is at vertex <b>1</b>. The <b>i</b>-th edge has two parameters associated with it, <b>C<sub>i</sub></b> denoting the cost of the edge and parameter <b>D<sub>i</sub></b>.
</p>

<p>
You want to make cost of all the paths from the root to any leaf having equal costs. Cost of a path is sum of costs of all the edges on the path. For that, you can increase or decrease cost of any edge. The time taken in changing cost of <b>i</b>-th edge to <b>X</b> will be <b>D<sub>i</sub> × |X - C<sub>i</sub>|</b>.
</p>

<p>
Find the minimum time required to make cost of all the paths from the root to all leaves equal. Furthmore, you should also output the new edge costs. If there are more than one possible solutions, you can print any of them.
</p>

<p>
Note that you can change costs of edges to negative, but all costs should be integers.
</p>



<h3>Input</h3>
<p>First line of input contains an integer <b>T</b> denoting number of test cases. <b>T</b> test cases follow.</p>
<p>First line of each test case contains an integer <b>N</b> denoting number of vertices in the tree.</p>
<p>Each of the next <b>N - 1</b> line contains four space separated integers <b>u<sub>i</sub>, v<sub>i</sub>, C<sub>i</sub>, D<sub>i</sub></b> denoting there is an edge between vertex <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b> with parameters <b>C<sub>i</sub></b> and <b>D<sub>i</sub></b> that are described in the statement.</p>

<h3>Output</h3>
<p>For each test case, output <b>N</b> lines.</p>
<p>First line should contain an integer corresponding to minimum time required.</p>
<p>In next <b>N - 1</b> lines, <b>i</b>-th line should contain the updated cost of <b>i</b>-th edge.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T, N ≤ 200000</b></li>
<li>Denote the sum of <b>N</b> in all <b>T</b> test-cases with <b>S</b></li>
<li><b>S ≤ 200000</b></li>
<li><b>1 ≤ u<sub>i</sub>, v<sub>i</sub> ≤ N</b></li>
<li><b>1 ≤ C<sub>i</sub>, D<sub>i</sub> ≤ 10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
  <li>Subtask #1 (10 points) <b>S ≤ 200</b>, all nodes except node <b>1</b> are direct children of node <b>1</b></li>
  <li>Subtask #2 (20 points) <b>S ≤ 200</b></li>
  <li>Subtask #3 (20 points) <b>D<sub>i</sub> = 1</b> for all <b>i</b></li>
  <li>Subtask #4 (50 points) original constraints</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
1
5
1 2 5 4
1 3 15 15
2 4 3 2
2 5 5 1

<b>Output: </b>
19
5
15
10
10</pre>
