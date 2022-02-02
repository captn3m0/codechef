---
{"category_name":"easy","problem_code":"STDYTAB","problem_name":"Steady tables","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":null,"date_added":"21-09-2014","tags":{"0":"combinatorics","1":"dynamic","2":"easy","3":"june15","4":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/STDYTAB","time":{"view_start_date":1434360600,"submit_start_date":1434360600,"visible_start_date":1434360600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/mandarin/STDYTAB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/russian/STDYTAB.pdf">Russian</a>.</h3>
<p>Let's consider a rectangular table <b>R</b> consisting of <b>N</b> rows and <b>M</b> columns. Rows are enumerated from <b>1</b>  to <b>N</b> from top to bottom. Columns are enumerated from 1 to <b>M</b> from left to right. Each element of <b>R</b> is a non-negative integer. <b>R</b> is called <b>steady</b> if the sum of elements in the <b>i<sup>th</sup></b> row is not less then the sum of elements in the <b>(i-1)<sup>th</sup></b> row for each <b>i</b> where <b>2 ≤ i ≤ N</b> and the sum of elements in the <b>N<sup>th</sup></b> row is less than or equal to <b>M</b>. Your task is to find the number of different steady tables of size <b>N x M</b> modulo <b>1 000 000 000</b>. </p>
<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b> denoting number of test cases. First and the only line of each test case contains two space separated integers <b>N</b> and <b>M</b> denoting the number of rows and columns respectively.</p>
<h3>Output</h3>
<p>For each test case, print a single integer corresponding to the answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>2000</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1 : 1 ≤ T ≤ 10 , 1 ≤ N,M ≤ 50 : ( 23 pts )</b></li>
<li><b>Subtask 2 : 1 ≤ T ≤ 10 , 1 ≤ N,M ≤ 500 : ( 29 pts )</b></li>
<li><b>Subtask 3 : 1 ≤ T ≤ 10 , 1 ≤ N,M ≤ 2000 : ( 48 pts )</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 1
2 2
2 3
<b>Output:</b>
2
25
273
</pre><h3>Explanation</h3>
<p>Test case 1 : There are only 2 such grids possible 0 and 1.</p>
