---
{"category_name":"medium","problem_code":"ANUGCD","problem_name":"Maximum number, GCD condition","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":null,"date_added":"23-01-2014","tags":{"0":"anudeep2011","1":"march14","2":"medium","3":"prime","4":"segment"},"editorial_url":"http://discuss.codechef.com/problems/ANUGCD","time":{"view_start_date":1395135000,"submit_start_date":1395135000,"visible_start_date":1395135000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/ANUGCD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/ANUGCD.pdf">Russian</a>.</h3>
<h3>Statement</h3>
<p>You will be given an array <b>A</b> of <b>N</b> integers. You need to answer <b>M</b> queries.<br />
Each query is of the form <b>G x y</b>.<br />
For each query, construct the set <b>S</b> from <b>A</b>. <b>A[i]</b> is included in <b>S</b> if <b>x</b> &lt;= <b>i</b> &lt;= <b>y</b> and <b>GCD(G,A[i])</b> > 1.<br /><br />
Let <b>MAX</b> be the maximum number present in <b>S</b>. Output <b>MAX</b> and number of occurances of <b>MAX</b> in <b>S</b>. <br />If no such number exists, output "<b>-1 -1</b>" (without quotes).
</p>
<h3>Input</h3>
<p>The first line of the input contains 2 integers <b>N</b> and <b>M</b>.<br />
Next line has <b>N</b> integers representing the elements of array <b>A</b>.<br />
<b>M</b> lines follow, one per query. Each line has 3 integers <b>G</b>, <b>x</b> and <b>y</b></p>
<h3>Output</h3>
<p>For each query output the required Answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N,M,G,A[i]</b> ≤ <b>100000</b>  (<b>1</b> ≤ <b>i</b> ≤ <b>N</b>)</li>
<li><b>1</b> ≤ <b>x</b> ≤ <b>y</b> ≤ <b>N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
6 5
1 2 3 4 5 4
2 1 5
121 1 6
3 2 6
5 5 5
24 4 6

<b>Output</b>
4 1
-1 -1
3 1
5 1
4 2
</pre><h3>Explanation</h3>
<p><b>Query #1</b><br />
GCD(2,1)=1, GCD(2,2)=2, GCD(2,3)=1, GCD(2,4)=2, GCD(2,5)=1<br /><br />
S = {2,4}<br /><br />
MAX = 4<br /><br />
<b>Query #2</b><br />
S = {}<br /><br />
There is no element in <b>A</b> such that GCD(121, A[i])>1<br /><br />
<b>Query #5</b><br />
GCD(24,4)=4, GCD(24,5)=1, GCD(24,4)=4<br /><br />
S = {4,4}<br /><br />
MAX = 4<br /><br />
Answer is "4 2" as there are 2 occurances of 4 in <b>S</b>
</p>
<!--
<h3>Author's Note</h3>
<p>Time Limit is not strict if correct Algorithm is used.</br>Author's solution passes with 0.6 sec Time Limit (C++ solution, using scanf and printf).</br>
Maximum Input File Size &lt; 3MB.
</p>
--><!--
<h3>Author's Note</h3>
<p>Time Limit is not strict if correct Algorithm is used.</br>Author's solution passes with 0.6 sec Time Limit (C++ solution, using scanf and printf).</br>
Maximum Input File Size &lt; 3MB.
</p>
-->