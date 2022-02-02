---
{"category_name":"medium","problem_code":"TABLECOV","problem_name":"Table Covering","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2 - 3","source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"pavel1996","date_added":"27-12-2015","tags":{"0":"dilworth","1":"dynamic","2":"kostya_by","3":"ltime32","4":"maxflow","5":"partial"},"editorial_url":"http://discuss.codechef.com/problems/TABLECOV","time":{"view_start_date":1454229000,"submit_start_date":1454229000,"visible_start_date":1454229000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME32/mandarin/TABLECOV.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME32/russian/TABLECOV.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME32/vietnamese/TABLECOV.pdf">Vietnamese</a> as well.</h3>
<p>
Chef's friend Aayan loves Ghariyals (those long-mouthed crocodile like creatures). Chef's other friend, Mr. KG, knows about this love of Aayan's. So one day, he gives Aayan an interesting problem:
</p>
<p>
Mr. KG gives Aayan a table <b>A</b> of <b>N</b> rows and <b>M</b> columns filled with non-negative integers. The rows and colums of the table are indexed starting from 1. <b>A[i][j]</b> denotes the <b>j</b>'th integer in the <b>i</b>'th row of <b>A</b>.
</p>
<p>
Let's consider some sequence (<b>i<sub>1</sub></b>, <b>j<sub>1</sub></b>), (<b>i<sub>2</sub></b>, <b>j<sub>2</sub></b>), ..., (<b>i<sub>K</sub></b>, <b>j<sub>K</sub></b>)(1 ≤ <b>K</b>) of the table cells.
</p>
<p>
A sequence of table cells is said to be a <i>valid Ghariyal-path</i> if all of the following conditions holds:</p>
<ul>
<li>(<b>i<sub>1</sub></b>, <b>j<sub>1</sub></b>) equals to (1, 1) - the top-left cell of the table
</li><li>(<b>i<sub>K</sub></b>, <b>j<sub>K</sub></b>) equals to (N, M) - the bottom-right cell of the table
</li><li><b>i<sub>t</sub></b> ≤ <b>i<sub>t + 1</sub></b> for each integer <b>1 ≤ t &lt; K</b>
</li><li><b>j<sub>t</sub></b> ≤ <b>j<sub>t + 1</sub></b> for each integer <b>1 ≤ t &lt; K</b>
</li><li>|<b>i<sub>t + 1</sub></b> - <b>i<sub>t</sub></b>| + |<b>j<sub>t + 1</sub></b> - <b>j<sub>t</sub></b>| = 1 for each integer <b>1 ≤ t &lt; K</b>
</li></ul>

<p>One can easily prove that the length of any valid Ghariyal-path is exactly <b>N + M - 1</b> cells. It's also easy to prove that any valid Ghariyal-path contains any of the table cells at most once.</p>
<p>Mr. KG asked Aayan to cover the given table with valid Ghariyal-paths. To be precise, his task is to find the minimal number of valid Ghariyal-paths such that for any table cell with coordinates (<b>i</b>, <b>j</b>) the following condition is satisfied: at least <b>A[i][j]</b> valid Ghariyal-paths contain the (<b>i</b>, <b>j</b>)-cell.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>
The first line of each test case contains two integers <b>N</b> and <b>M</b>. The next <b>N</b> lines contain <b>M</b> non-negative integers each denoting the given table <b>A</b>.
</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the minimal number of valid Ghariyal-paths to cover the table as described above.
</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>0 ≤ <b>A[i][j]</b> ≤ 1000</li>
<li>Subtask 1(20 points): 1 ≤ <b>N</b> ≤ 20</li>
<li>Subtask 2(30 points): 1 ≤ <b>N</b> ≤ 100</li>
<li>Subtask 3(50 points): 1 ≤ <b>N</b> ≤ 1000</li>
</ul>
<h3>Note</h3>
<p>
The first test of the first subtask is the example test. It's made for you to make sure, that your solution produces the same verdict both on your machine and our server.
</p>
<h3>Time Limits</h3>
<p>
Time limit for the first subtask is 2 s. Time limit for the second and the third subtasks is 3 s.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 4
1 1 1 1
1 2 1 1
1 1 3 1
1 1 1 4
1 1 1 1
2 3
1 2 3
4 5 6

<b>Output:</b>
6
8

</pre><h3>Explanation of the example test</h3>
<p>
In the first case, the following set of valid Ghariyal-paths is one of the optimal ones:</p>
<p><ui></ui></p>
<li>(1, 1), (1, 2), (1, 3), (1, 4), (2, 4), (3, 4), (4, 4), (5, 4)
</li><li>(1, 1), (2, 1), (2, 2), (2, 3), (3, 3), (4, 3), (4, 4), (5, 4)
</li><li>(1, 1), (2, 1), (2, 2), (2, 3), (3, 3), (4, 3), (4, 4), (5, 4)
</li><li>(1, 1), (2, 1), (3, 1), (3, 2), (3, 3), (4, 3), (4, 4), (5, 4)
</li><li>(1, 1), (2, 1), (3, 1), (4, 1), (4, 2), (5, 2), (5, 3), (5, 4)
</li><li>(1, 1), (2, 1), (3, 1), (4, 1), (5, 1), (5, 2), (5, 3), (5, 4)<br />


<p>
In the second case, the following set of valid Ghariyal-paths is one of the optimal ones:</p>
<p><ui></ui></p>
</li><li>(1, 1), (1, 2), (1, 3), (2, 3)
</li><li>(1, 1), (1, 2), (1, 3), (2, 3)
</li><li>(1, 1), (1, 2), (1, 3), (2, 3)
</li><li>(1, 1), (2, 1), (2, 2), (2, 3)
</li><li>(1, 1), (2, 1), (2, 2), (2, 3)
</li><li>(1, 1), (2, 1), (2, 2), (2, 3)
</li><li>(1, 1), (2, 1), (2, 2), (2, 3)
</li><li>(1, 1), (2, 1), (2, 2), (2, 3)<br />


</li>