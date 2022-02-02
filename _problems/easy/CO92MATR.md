---
{"category_name":"easy","problem_code":"CO92MATR","problem_name":"Chef Restores a Matrix","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kefaa","problem_tester":null,"date_added":"15-03-2018","tags":{"0":"cook92","1":"easy","2":"implementation","3":"kefaa"},"editorial_url":"https://discuss.codechef.com/problems/CO92MATR","time":{"view_start_date":1521397800,"submit_start_date":1521397800,"visible_start_date":1521397800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/mandarin/CO92MATR.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/russian/CO92MATR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/vietnamese/CO92MATR.pdf">Vietnamese</a> as well.</h3>

<p>Chef defines a <i>non-decreasing</i> matrix as a matrix that satisfies the following rules:
<ul>
<li>For each row of the matrix, the elements of this row form a non-decreasing sequence.</li>
<li>For each column of the matrix, the elements of this column form a non-decreasing sequence.</li>
</ul></p>

<p>Chef has a matrix <b>A</b> with size <b>N</b> × <b>M</b>. Each element of this matrix is either unknown (denoted by -1) or a positive integer.</p>

<p>Chef would like to replace each unknown element of this matrix by a positive integer in such a way that the resulting matrix is non-decreasing. Find one possible resulting matrix or determine that it's impossible.</p>

<h3>Input</h3>

<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>.</li>
<li><b>N</b> lines follow. For each valid <b>i</b>, the <b>i</b>-th of these lines contains <b>M</b> space-separated integers <b>A<sub>i1</sub>, A<sub>i2</sub>, ..., A<sub>iM</sub></b> denoting the elements of the <b>i</b>-th row of matrix <b>A</b>.</li>
</ul>

<h3>Output</h3>

<ul>
<li>For each test case, if there is no way to obtain a non-decreasing matrix, print a single line containing the integer -1.</li>
<li>Otherwise, print <b>N</b> lines describing the matrix obtained by replacing all unknown elements.</li>
<li>For each valid <b>i</b>, the <b>i</b>-th of these lines should contain <b>M</b> space-separated integers denoting the elements of the <b>i</b>-th row of this matrix. Each of these elements should lie between 1 and 2,000,000,000 inclusive.</li>
</ul>

<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b>, <b>M</b> ≤ 100</li>
<li>1 ≤ <b>A<sub>ij</sub></b> ≤ 10<sup>9</sup> or <b>A<sub>ij</sub></b> = -1 for each valid <b>i</b>, <b>j</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

2
4 4
1 2 2 3
1 -1 7 -1
6 -1 -1 -1
-1 -1 -1 -1
2 3
1 4 -1
1 -1 3

<b>Output:</b>

1 2 2 3
1 7 7 100
6 10 20 101
7 11 21 20000
-1
</pre>
