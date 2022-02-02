---
{"category_name":"easy","problem_code":"BANDMATR","problem_name":"Bandwidth of a matrix","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"xcwgf666","date_added":"23-02-2017","tags":{"0":"admin2","1":"basic","2":"march17","3":"matrix","4":"simple"},"editorial_url":"https://discuss.codechef.com/problems/BANDMATR","time":{"view_start_date":1489397400,"submit_start_date":1489397400,"visible_start_date":1489397400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/mandarin/BANDMATR.pdf?v=1">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/russian/BANDMATR.pdf?v=1">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/vietnamese/BANDMATR.pdf?v=1">Vietnamese</a> as well.</h3>

<p><a href="https://en.wikipedia.org/wiki/Band_matrix#Bandwidth">Bandwidth</a> of a matrix <b>A</b> is defined as the smallest non-negative integer <b>K</b> such that <b>A<sub>(i, j)</sub> = 0</b> for <b>|i - j| > K</b>.</p>

<p>For example, a matrix with all zeros will have its bandwith equal to zero. Similarly bandwith of <a href="https://en.wikipedia.org/wiki/Diagonal_matrix">diagonal matrix</a> will also be zero.
</p>

<p>
For example, for the below given matrix, the bandwith of this matrix is 2.

<pre>
1 0 0
0 1 1
1 1 0 
</pre>
</p>

<p>
Bandwidth of the below matrix is 1. </br>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/MARCH17/bandmatr1.png" height="200"/>
</p>

<p>
Bandwidth of the below matrix is 2. </br>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/MARCH17/bandmatr2.png" height="240"/>
</p>

<p>
Bandwidth of the below matrix is also 2. </br>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/MARCH17/bandmatr3.png" height="240"/>
</p>

<p>You will be a given a binary matrix <b>A</b> of dimensions <b>N × N</b>. You are allowed to make following operation as many times as you wish (possibly zero or more). In a single operation, you can swap any two entries of the matrix. Your aim is to minimize the bandwidth of the matrix. Find the minimum bandwidth of the matrix <b>A</b> you can get after making as many operations of above type as you want.</p>

<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follow.</p>
<p>First line of each test case contains an integer <b>N</b> denoting the height/width of the matrix.</p>
<p>Next <b>N</b> lines of each test case contain <b>N</b> space separated binary integers (either zero or one) corresponding to the entries of the matrix.</p>

<h3>Output</h3>
<p>For each test case, output a single integer corresponding to the minimum bandwidth that you can obtain.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ N ≤ 500</b></li>
<li><b>0 ≤ A<sub>(i, j)</sub> ≤ 1</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (40 points) : <b>1 ≤ N ≤ 100</b></li>
<li>Subtask #2 (60 points) : original constraints</li>
</ul>

<h3>Example</h3>

<pre><b>Input:</b>
6
2
0 0
0 0
2
1 0
0 1
2
1 0
1 0
2
1 0
1 1
3
1 0 0
0 1 1
1 1 0
4
1 1 1 1
1 1 1 1
1 1 1 1
1 1 1 1

<b>Output:</b>
0
0
0
1
1
3
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> The bandwidth of a matrix will all zero entries will be zero. This is the minimum bandwidth you can get, so there is no need of performing any swap operation.</p>
<p><b>Example case 2.</b> The bandwidth of a diagonal matrix will also be zero.</p>
<p><b>Example case 3.</b> You can make the given matrix a diagonal matrix by swapping <b>A<sub>(2, 1)</sub></b> and <b>A<sub>(2, 2)</sub></b>, which will have zero bandwidth.</p>
<p><b>Example case 4.</b> You can not make swaps in any way that can reduce the bandwidth of this matrix. Bandwidth of this matrix is equal to 1, which is the minimum bandwidth that you can get.</p>
<p><b>Example case 5.</b> Bandwidth of the given matrix is 2. You can make it equal to be 1 by swapping <b>A<sub>(3, 1)</sub></b> and <b>A<sub>(3, 3)</sub></b>, i.e. the matrix after the operation will look like

<pre>
1 0 0
0 1 1
0 1 1
</pre>

The bandwidth of this matrix is 1.</p>
<p><b>Example case 6.</b> The swap operations won't have any effect on the matrix. Its bandwidth is equal to 3.</p>

