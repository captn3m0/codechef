---
{"category_name":"easy","problem_code":"SEAGRP","problem_name":"Sereja and Graph","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"gerald","date_added":"9-06-2013","tags":{"0":"jan14","1":"matching","2":"medium","3":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAGRP","time":{"view_start_date":1389605400,"submit_start_date":1389605400,"visible_start_date":1389605400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/SEAGRP.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/SEAGRP.pdf">Russian</a>.</h3>
<p>Sereja has undirected graph, which consists of <b>n</b> vertexes and <b>m</b> edges. Sereja can delete edges from the graph. Now Sereja is interested in one question : is it possible to delete edges in the graph so that the degree of each vertex in the graph will be equal <b>1</b>?</p>
<p>Please, help Sereja.</p>
<h3>Input</h3>
<p>First line contains integer <b>T</b>. <b>T</b> testcases follow. The first line of each testcase contains integers <b>n</b> and <b>m</b>. Following <b>m</b> lines contain descriptions of the edges of the graph, each line contains two numbers — indexes of the vertexes, which are connected with edge. There can be multiple edges in the graph, but can not be any loops.</p>
<h3>Output</h3>
<p>For each test case print <b>"YES"</b>, if you can remove the edges so that the degrees of all vertexes will be equal to <b>1</b>, and <b>"NO"</b> otherwise. Print the words without quotation marks.</p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>10</b></li>
<li><b>1</b> &lt;= <b>n, m</b> &lt;= <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 2
1 2
1 2
3 2
1 2
2 3
4 6
1 2
1 3
1 4
2 3
2 4
3 4

<b>Output:</b>
YES
NO
YES
</pre><p> </p>
