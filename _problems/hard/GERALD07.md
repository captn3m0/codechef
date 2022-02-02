---
{"category_name":"hard","problem_code":"GERALD07","problem_name":"Chef and Graph Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"gerald","problem_tester":null,"date_added":"9-02-2014","tags":{"0":"decomposition","1":"gerald","2":"link","3":"march14","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/GERALD07","time":{"view_start_date":1395135000,"submit_start_date":1395135000,"visible_start_date":1395135000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/GERALD07.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/GERALD07_new.pdf">Russian</a>.</h3>
<h3>Problem Statement</h3>
<p>Chef has a undirected graph <b>G</b>. This graph consists of <b>N</b> vertices and <b>M</b> edges. Each vertex of the graph has an unique index from <b>1</b> to <b>N</b>, also each edge of the graph has an unique index from <b>1</b> to <b>M</b>.</p>
<p>Also Chef has <b>Q</b> pairs of integers: <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b> (<b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>M</b>). For each pair <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>, Chef wants to know: how many connected components will contain graph <b>G</b> if Chef erase all the edges from the graph, except the edges with indies <b>X</b>, where <b>L<sub>i</sub></b> ≤ <b>X</b> ≤ <b>R<sub>i</sub></b>. Please, help Chef with these queries. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />The first line of each test case contains three integers <b>N</b>, <b>M</b>, <b>Q</b>. Each of the next <b>M</b> lines contains a pair of integers <b>V<sub>i</sub></b>, <b>U<sub>i</sub></b> - the current edge of graph <b>G</b>. Each of the next <b>Q</b> lines contains a pair of integers <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b> - the current query.</p>

<h3>Output</h3>
<p>For each query of each test case print the required number of connected components.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b>.</li>
<li><b>1</b> ≤ <b>N</b>, <b>M</b>, <b>Q</b> ≤ <b>200000</b>.</li>
<li><b>1</b> ≤ <b>U<sub>i</sub></b>, <b>V<sub>i</sub></b> ≤ <b>N</b>.</li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>M</b>.</li>
<li>Sum of all values of <b>N</b> for test cases is not greater than <b>200000</b>. Sum of all values of <b>M</b> for test cases is not greater than <b>200000</b>. Sum of all values of <b>Q</b> for test cases is not greater than <b>200000</b>.</li>
<li>Graph <b>G</b> can contain self-loops and multiple edges.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 5 4
1 3
1 2
2 1
3 2
2 2
2 3
1 5
5 5
1 2
1 1 1
1 1
1 1
<b>Output:</b>
2
1
3
1
1
</pre>