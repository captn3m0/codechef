---
{"category_name":"easy","problem_code":"SEATL","problem_name":"Sereja and Two Lines","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM guile","42":"SCM qobi","43":"ST","44":"TCL","45":"TEXT","46":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"iscsi","date_added":"1-12-2014","tags":{"0":"feb16","1":"medium","2":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEATL","time":{"view_start_date":1455528600,"submit_start_date":1455528600,"visible_start_date":1455528600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/mandarin/SEATL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/russian/SEATL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/vietnamese/SEATL.pdf">Vietnamese</a> as well.</h3>

<p>
Sereja has a matrix <b>A</b> with <b>N</b> rows and <b>M</b> columns with positive integer elements.
Consider the multiset <b>S<sub>ij</sub></b> made from the elements in the <b>i</b><sup>th</sup> row, along with those in the <b>j</b><sup>th</sup> column of <b>A</b> (do not count the element <b>A<sub>ij</sub></b> twice). Then, define a matrix <b>F</b> as <b>F<sub>ij</sub> = <tt>max</tt><sub>x ∈ S<sub>ij</sub></sub> <tt>count</tt>(x, S<sub>ij</sub>)</b>, where <b><tt>count</tt>(x, S)</b> gives the number of times a number <b>x</b> occurs in the multiset <b>S</b>.
</p>
<p>
For example, for the matrix
<pre>
1 2 1 2
3 4 1 2
1 1 1 1
2 2 2 2
</pre>
</p>
<p>The matrix <b>F</b> is
<pre>
3 3 4 4
3 3 3 3
5 4 6 4
4 5 4 6
</pre>
</p>
<p>
Your task is to find the value of the maximum element of <b>F</b>.
</p>

<h3>Input</h3>
The first line of input contains a single integer <b>T</b>, the number of test cases. <b>T</b> tests follow. First line of each test case contains two integers,
<b>N</b> and <b>M</b>. Each of the next <b>N</b> lines contain <b>M</b> numbers, representing the matrix <b>A</b>.

<h3>Output</h3>
For each test case, output a line containing a single integer, the answer to the problem.

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>sum of N*M over all testcases</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b> A[i][j] </b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
4 4
1 2 1 2
3 4 1 2
1 1 1 1
2 2 2 2

<b>Output:</b>
6

</pre>

<h3>Sub tasks</h3>
<ul>
<li>Sub task #1: <b>1 ≤ N, M  ≤ 10</b> (10 points) </li>
<li>Sub task #2: <b>1 ≤ N, M  ≤ 100</b> (20 points) </li>
<li>Sub task #3: <b>original constraints</b> (70 points) </li>
</ul>