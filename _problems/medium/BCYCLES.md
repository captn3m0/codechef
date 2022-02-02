---
{"category_name":"medium","problem_code":"BCYCLES","problem_name":"BiCycles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"26-06-2017","tags":{"0":"alei"},"time":{"view_start_date":1498908900,"submit_start_date":1498908900,"visible_start_date":1498908900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKFL17/mandarin/BCYCLES.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/russian/BCYCLES.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/vietnamese/BCYCLES.pdf">Vietnamese</a> as well.</h3>

<p>Given a bipartite graph of <b>N</b> vertices in which every vertex has degree exactly 3, find a set of <b>distinct</b> simple cycles such that every edge belongs to exactly two cycles. The vertices are numbered from 1 to <b>N</b>.
For the given constraints, it can be shown that such a set of cycles always exists.</p>

<p>A simple cycle of length k (k must be at least 3) in the graph is a sequence of vertices v<sub>1</sub>, v<sub>2</sub>, .., v<sub>k</sub>, such that v<sub>i</sub> ≠ v<sub>j</sub> if i ≠ j, and such that there exist edges between vertex v<sub>i</sub> and v<sub>i + 1</sub> for i < k, and an edge between vertices v<sub>k</sub> and v<sub>1</sub>.</p>

<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b>, denoting the number of test cases.</p>
<p>The first line of each test case contains one integer <b>N</b>, denoting the number of vertices in the graph.</p>
<p>Each of the next 3 × <b>N</b>/2 lines contains two integers <b>u</b>, <b>v</b>, denoting an edge of the graph.</p>

<h3>Output</h3>
<p>For each test case describe any valid set of cycles. First print <b>C</b>, the number of cycles.</p>
<p>In the next <b>C</b> lines describe one cycle per line: the i-th line should contain an integer <b>k<sub>i</sub></b>, denoting the number of vertices in the i-th cycle, followed by <b>k<sub>i</sub></b> space separated integers, which should be the sequence of vertices of the cycle in order.</p>

<h3>Constraints</h3>
<ul>
<li>6 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li><b>N</b> is an even integer</li>
<li>1</b> ≤ <b>u</b>, <b>v</b> ≤ <b>N</b> </li>
<li>The sum of <b>N</b> over all test cases is at most 5 × 10<sup>5</sup></li>
<li>The graph is guaranteed to be bipartite, and every vertex will have degree exactly 3</li>
<li>The graph will not have multi-edges or loops</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
6
1 4
1 5
1 6
2 4
2 5
2 6
3 4
3 5
3 6

<b>Output:</b>
3
6 3 6 2 5 1 4
6 3 5 2 4 1 6
6 3 5 1 6 2 4
</pre>

<h3>Explanation</h3>
<p>The following image depicts the three cycles in the output of the sample case. Note that for every edge in the original graph, there are two cycles that contain it.
</p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/SNCKFL17/1.png"></img>
