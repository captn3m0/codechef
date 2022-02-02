---
{"category_name":"medium","problem_code":"SUBSGM","problem_name":"Nice SubSegments","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"Rubanenko‎","date_added":"7-03-2014","tags":{"0":"easy","1":"greedy","2":"ltime10","3":"segment","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SUBSGM","time":{"view_start_date":1396168200,"submit_start_date":1396168200,"visible_start_date":1396168200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/mandarin/SUBSGM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/russian/SUBSGM.pdf">Russian</a>.</h3>
<p>Let's call arrays of the form <b>x</b> <b>x+1</b> ... <b>x+k</b> nice. In other words nice arrays are arrays that form increasing arithmetic progression with the difference of one.</p>
<p>You are given an array of <b>N</b> integers. Let's denote it's numbers by <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>N</sub></b>. You are also given <b>M</b> change queries. Every change query is a query of the form "<b>X</b> <b>Y</b>" with the meaning that the <b>X</b>-th number in it becomes equal to <b>Y</b>. We perform these queries one after another, strictly in this order. Please, calculate the length of the longest nice subarray of this array, i.e. the length of the longest segment [<b>L</b>; <b>R</b>] that (<b>a<sub>L</sub></b>, <b>a<sub>L+1</sub></b>, ... <b>a<sub>R</sub></b>) is a nice array before all the queries and after every query.</p>
<h3>Input</h3>
<p>The first line of input consists of two integers <b>N</b> and <b>M</b>, separated by a single space - the length of the array and the number of queries.<br /><br />
The second line of input consists of <b>N</b> integers, the <b>i</b>-th equals to <b>a<sub>i</sub></b> - namely the <b>i</b>-th number in the array.<br /><br />
The following <b>M</b> lines contains the queries in the form "<b>X</b> <b>Y</b>", where <b>X</b> and <b>Y</b> are natural numbers with the meaning that the <b>X</b>-th number becomes equal to <b>Y</b>. </p>
<h3>Output</h3>
<p>Output the length of the longest nice subarray of the initial array at the first line of output. Then, output <b>M</b> integers at separate lines. The <b>i</b>-th such line should contain the length of the longest nice subarray after the <b>i</b>-th changing query.<br /><br />
Anytime <b>a<sub>i</sub></b> &lt;= 2 * <b>N</b> holds.
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 5
1 4 3 5 2
2 2
4 4
5 5
3 7
4 8

<b>Output:</b>
1
3
4
5
2
2
</pre><h3>Scoring</h3>
<p>
1 &lt;= <b>N</b> &lt;= 100, 1 &lt;= <b>M</b> &lt;= 1000 : 20 points. <br /><br />
1 &lt;= <b>N</b>, <b>M</b> &lt;= 5000 : 26 points. <br /><br />
1 &lt;= <b>N</b>, <b>M</b> &lt;= 10<sup>5</sup>  : 54 points.
</p>
