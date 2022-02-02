---
{"category_name":"hard","problem_code":"XRQRS","problem_name":"Xor Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"gomelfk","problem_tester":"shiplu","date_added":"6-12-2014","tags":{"0":"data","1":"gomelfk","2":"jan15","3":"medium","4":"trie"},"editorial_url":"http://discuss.codechef.com/problems/XRQRS","time":{"view_start_date":1421055000,"submit_start_date":1421055000,"visible_start_date":1421055000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/XRQRS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/XRQRS.pdf">Russian</a>.</h3>


<p>
Given an initially empty integer array (1-indexed) and some queries:
<ul>
<li><b>Type 0</b>: Add the integer number <b>x</b> at the end of the array. </li>
<li><b>Type 1</b>: On the interval <b>L..R</b> find a number <b>y</b>, to maximize (<b>x <a href ="http://en.wikipedia.org/wiki/Bitwise_operation#XOR">xor</a> y</b>).</li>
<li><b>Type 2</b>: Delete last <b>k</b> numbers in the array</li>
<li><b>Type 3</b>: On the interval <b>L..R</b>, count the number of integers less than or equal to <b>x</b>.</li>
<li><b>Type 4</b>: On the interval <b>L..R</b>, find the <b>k<sub>th</sub></b> smallest integer (<b>k<sub>th</sub></b> order statistic).</li>
</ul>
</p>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer <b>M</b> denoting number of queries. </li>
<li>The following <b>M</b> lines contain queries, form of queries is as follows.</li>
<li>Query type 0 has the form <b>"0 x"</b>. </li>
<li>Query type 1 has the form <b>"1 L R x"</b>. </li>
<li>Query type 2 has the form <b>"2 k"</b>. </li>
<li>Query type 3 has the form <b>"3 L R x"</b>. </li>
<li>Query type 4 has the form <b>"4 L R k"</b>. </li>
</ul>

Note that, there will be no invalid query in the input.

<h3>Output</h3>
<p>For each Query of type 1, 3 and 4 output the result in a single line.</p>

<h3>Constraints</h3>
<ul></ul>
<li>Let <b>N</b> denote numbers of elements in before executing the query.</li>
<li><b>1 ≤ M ≤ 5 * 10<sup>5</sup></b></li>
<li><b>1 ≤ x ≤ 5 * 10<sup>5<sup></b></li>
<li><b>1 ≤ L ≤ R ≤ N</b></li>
<li> For query type 2, <b>1 ≤ k ≤ N	</b> and for query type 4, <b>k ≤ R-L+1</b> </li>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (40 points): <b>1 ≤ M ≤ 5 * 10<sup>4</sup></b> </li>
<li>Subtask #2: (60 points): <b>1 ≤ M ≤ 5 * 10<sup>5</sup></b> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
10
0 8
4 1 1 1
0 2
1 2 2 7
1 2 2 7
0 1
3 2 2 2
1 1 2 3
3 1 3 5
0 6

<b>Output:</b>
8
2
2
1
8
2
</pre>
