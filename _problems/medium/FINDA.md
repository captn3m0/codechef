---
{"category_name":"medium","problem_code":"FINDA","problem_name":"Finding the matrix","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":"kingofnumbers","date_added":"16-01-2018","tags":{"0":"bipartite","1":"constructive","2":"cook90","3":"maths","4":"medium","5":"sidhant007"},"editorial_url":"https://discuss.codechef.com/problems/FINDA","time":{"view_start_date":1516559400,"submit_start_date":1516559400,"visible_start_date":1516559400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/mandarin/FINDA.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/russian/FINDA.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/vietnamese/FINDA.pdf">Vietnamese</a> as well.</h3>

<p>
You are given a matrix <b>B</b> with size <b>N × N</b>. Each element of this matrix is an integer from the set <b>{-1, 0, 1}</b>.
</p>

<p>
Determine if it's possible to express <b>B</b> as <b>A · A<sup>T</sup></b>, where <b>A</b> is a matrix of integers with size <b>N × N</b>. (Here, <b>A<sup>T</sup></b> is the transpose of <b>A</b>; see below for its definition.) If it is possible, find the lexicographically smallest <b>A</b> such that <b>B</b> = <b>A · A<sup>T</sup></b>.
</p>

<p>
The <i>transpose</i> of a matrix is created by flipping that matrix around its main diagonal — formally, the element at row <b>i</b> and column <b>j</b> of matrix <b>A<sup>T</sup></b> is the same as the element at row <b>j</b> and column <b>i</b> of matrix <b>A</b>, for each valid <b>i</b>, <b>j</b>. For more details, see <a href = "https://en.wikipedia.org/wiki/Transpose">Wikipedia</a>.
</p>

<p>For two matrices <b>C</b> and <b>D</b> with size <b>N × N</b>, we will say that <b>C</b> is lexicographically smaller than <b>D</b> if the sequence <b>c</b> = <b>C<sub>1,1</sub>, C<sub>1,2</sub>, ..., C<sub>1,N</sub>, C<sub>2,1</sub>, C<sub>2,2</sub>, ..., C<sub>2,N</sub>, ..., C<sub>N,1</sub>, ..., C<sub>N,N</sub></b> is lexicographically smaller than <b>d</b> = <b>D<sub>1,1</sub>, D<sub>1,2</sub>, ..., D<sub>1,N</sub>, D<sub>2,1</sub>, D<sub>2,2</sub>, ..., D<sub>2,N</sub>, ..., D<sub>N,1</sub>, ..., D<sub>N,N</sub></b>. That is, there must be a valid index <b>i</b> such that <b>c<sub>i</sub></b> and <b>d<sub>i</sub></b> differ, and the smallest such index must satisfy <b>c<sub>i</sub></b> &lt; <b>d<sub>i</sub></b>.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b>.</li>
<li>The next <b>N</b> lines describe matrix <b>B</b>. Each of these lines contains <b>N</b> space-separated integers. The <b>j</b>-th integer on the <b>i</b>-th line denotes <b>B<sub>i,j</sub></b>, the element at row <b>i</b> and column <b>j</b> of <b>B</b>.</li>
</ul>

<h3>Output</h3>
For each test case:
<ul>
<li>If no valid matrix <b>A</b> exists, print a single line containing the integer -1.</li>
<li>Otherwise, print <b>N</b> lines; each of them should contain <b>N</b> space-separated integers.</li>
<li>The <b>j</b>-th integer on the <b>i</b>-th line should denote the element at row <b>i</b> and column <b>j</b> of matrix <b>A</b>.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>2 ≤ <b>N</b> ≤ 1000</li>
<li>-1 ≤ <b>B<sub>i,j</sub></b> ≤ 1 for each valid <b>i</b>, <b>j</b></li>
<li>sum of <b>N</b> for all test cases ≤ 1000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
2
1 -1
-1 1

<b>Output:</b>
-1 0
1 0
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> You can check by brute force that this is the lexicographically smallest possible valid matrix <b>A</b>.</p>
