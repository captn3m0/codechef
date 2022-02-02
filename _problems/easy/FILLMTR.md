---
{"category_name":"easy","problem_code":"FILLMTR","problem_name":"Fill The Matrix","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"jingbo_adm","date_added":"16-08-2017","tags":{"0":"admin2","1":"bipartite","2":"easy","3":"sept17"},"editorial_url":"https://discuss.codechef.com/problems/FILLMTR","time":{"view_start_date":1505122200,"submit_start_date":1505122200,"visible_start_date":1505122200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/mandarin/FILLMTR.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/russian/FILLMTR.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/vietnamese/FILLMTR.pdf">vietnamese</a> as well.</h3>

<p>A matrix B (consisting of integers) of dimension N × N is said to be <i>good</i> if there exists an array A (consisting of integers) such that B[i][j]  = |A[i] - A[j]|, where |x| denotes absolute value of integer x.</p>

<p>You are given a partially filled matrix <b>B</b> of dimension <b>N × N</b>. <b>Q</b> of the entries of this matrix are filled by either 0 or 1. You have to identify whether it is possible to fill the remaining entries of matrix <b>B</b> (the entries can be filled by <b>any</b> integer, not necessarily by 0 or 1) such that the resulting fully filled matrix <b>B</b> is <i>good</i>.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. </p>
<p>The first line of each test case contains two space separated integers <b>N, Q</b>.</p>
<p>Each of the next <b>Q</b> lines contain three space separated integers <b>i, j, val</b>, which means that <b>B[i][j]</b> is filled with value <b>val</b>.</p>

<h3>Output</h3>
<p>For each test case, output "yes" or "no" (without quotes) in a single line corresponding to the answer of the problem.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>6</sup></li>
<li>2 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>Q</b> ≤ 10<sup>6</sup></li>
<li>1 ≤ <b>i, j</b> ≤ <b>N</b></li>
<li>0 ≤ <b>val</b> ≤ 1</li>
<li>Sum of each of <b>N, Q</b> over all test cases doesn't exceed 10<sup>6</sup></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (40 points)</b> 2 ≤ <b>N</b> ≤ 10<sup>3</sup>, 1 ≤ <b>Q</b> ≤ 10<sup>3</sup>, Sum of each of <b>N, Q</b> over all test cases doesn't exceed 10<sup>4</sup></li>
<li><b>Subtask #2 (60 points)</b> Original Constraints</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
4
2 2
1 1 0
1 2 1
2 3
1 1 0
1 2 1
2 1 0
3 2
2 2 0
2 3 1
3 3
1 2 1
2 3 1
1 3 1

<b>Output</b>
yes
no
yes
no
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. You can fill the entries of matrix <b>B</b> as follows. 
<pre>
0 1
<b>1 0</b>
</pre>
This matrix corresponds to the array A = [1, 2].
</p>

<p><b>Example 2</b>. It is impossible to fill the remaining entries of matrix B such that the resulting matrix is good, as <b>B</b>[1][2] = 1 and <b>B</b>[2][1] = 0, which is impossible.</p>