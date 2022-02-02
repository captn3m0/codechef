---
{"category_name":"hard","problem_code":"MXPATH","problem_name":"Maximum Tree Path","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":null,"date_added":"19-02-2018","tags":{"0":"chemthan","1":"cook92","2":"datastructure","3":"medium","4":"tree"},"editorial_url":"https://discuss.codechef.com/problems/MXPATH","time":{"view_start_date":1521397800,"submit_start_date":1521397800,"visible_start_date":1521397800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/mandarin/MXPATH.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/russian/MXPATH.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/vietnamese/MXPATH.pdf">Vietnamese</a> as well.</h3>

<p>You're given a tree with <b>N</b> vertices. There is a positive integer written in each vertex; let's denote the integer written in vertex <b>i</b> by <b>A<sub>i</sub></b>.</p>

<p>Consider a simple path between vertices <b>u</b> and <b>v</b>. Let's define <b>dist</b>(<b>u</b>, <b>v</b>) as the length of the path, <b>gcd</b>(<b>u</b>, <b>v</b>) as the greatest common divisor of all numbers written in vertices that lie on the path (including <b>u</b> and <b>v</b>) and <b>min</b>(<b>u</b>, <b>v</b>) as the minimum of numbers written in vertices on the path (including <b>u</b> and <b>v</b>).</p>

<p>Compute the maximum of the expression <b>dist</b>(<b>u</b>, <b>v</b>) · <b>gcd</b>(<b>u</b>, <b>v</b>) · <b>min</b>(<b>u</b>, <b>v</b>) over all pairs of vertices (<b>u</b>, <b>v</b>).</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of vertices of the tree.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
<li>Each of the following <b>N-1</b> lines contains three space-separated integers <b>u</b>, <b>v</b> and <b>w</b> denoting an edge with length <b>w</b> between vertices <b>u</b> and <b>v</b>.</li>
</ul>

<h3>Output</h3>
<p>For each testcase, print a single line containing one integer — the answer to the problem.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>2 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>2 ≤ sum of <b>N</b> over all test cases ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>4</sup> for each valid <b>i</b></li>
<li>1 ≤ <b>u</b>, <b>v</b> ≤ <b>N</b></li>
<li>1 ≤ <b>w</b> ≤ 10<sup>5</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
4
1 2 3 4
1 2 1
1 3 2
3 4 3

<b>Output:</b>
9
</pre>
