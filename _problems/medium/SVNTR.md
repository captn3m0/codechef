---
{"category_name":"medium","problem_code":"SVNTR","problem_name":"Save the nature","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 3","source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"xcwgf666","date_added":"26-09-2015","tags":{"0":"fenwick","1":"ltime29","2":"medium","3":"mergesort","4":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/SVNTR","time":{"view_start_date":1445761800,"submit_start_date":1445761800,"visible_start_date":1445761800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME29/mandarin/SVNTR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME29/russian/SVNTR.pdf">Russian</a></h3>


<p>The new king of Byteland, John-2318, has just ascended the throne. As every new king, he wants to build a spectacular palace to showcase his wealth and power.</p>

<p>We can consider Byteland as an <b>N x M</b> rectangular matrix <b>A</b>. If <b>A[i][j]</b> is positive, then it means that <b>A[i][j]</b> litres of oxygen are produced by trees in the cell with coordinates <b>(i, j)</b> every day. On the other hand, a negative value of <b>A[i][j]</b> indicates that a Byteland resident lives in this cell, who consumes <b>A[i][j]</b> litres of oxygen every day.</p>

<p>The palace will occupy some rectangle submatrix of <b>A</b>. All the cells within the palace premises will not produce nor consume any oxygen.</p>

<p>Byteland scientists discovered the new important fact: if Byteland will be producing <b>S</b> less litres of oxygen every day than it produces now, it will lead to a natural disaster. So now everyone is interested in the following question: how many ways exist for choosing a rectangular region for the planned palace?</p>

<h3>Input</h3>
<p>The first line contains one integer <b>T</b> denoting the number of testcases.</p>
<p>Each testcase starts with a line containing three space-separated integers <b>N</b>, <b>M</b>, and <b>S</b>. The following <b>N</b> lines contain <b>M</b> integers each and describe the cells of the matrix <b>A</b>.</p>

<h3>Output</h3>
<p>For each testcase, output a single line containing one integer - the number of rectangles where the palace can be built without causing a disaster.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>150</b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>A[i][j]</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>S</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>

<h3>Subtasks</h3>
<ul>
<li>Subtask 1 (27 points) <b>1</b> ≤ <b>N, M</b> ≤ <b>20</b>, <b>time limit = 1 sec</b></li>
<li>Subtask 2 (30 points) <b>1</b> ≤ <b>N, M</b> ≤ <b>50</b>, <b>time limit = 1 sec</b></li>
<li>Subtask 3 (43 points) <b>1</b> ≤ <b>N, M</b> ≤ <b>150</b>, <b>time limit = 3 sec</b></li>

</ul>
<p> </p>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
2 3 7
1 2 3
4 5 6
3 3 12
3 3 3
4 4 4
3 3 3</tt>

<b>Output:</b>
<tt>11
27</tt>
</pre>
<p> </p>

<h3>Explanation</h3>
<p><b>Test case 1</b>: we have the following matrix <b>A</b>:<br>
<tt>1 2 3<br>
4 5 6</tt>
</p>

<p>There are 11 rectangular submatrices with sum ≤ <b>S = 7</b>: all the 6 cells themselves, 2 columns (the left and the middle), 1 row (the first), and 2 segments in the first row of length 2 each.</p>