---
{"category_name":"medium","problem_code":"AND","problem_name":"Pairwise AND sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"Rubanenko","date_added":"18-07-2013","tags":{"0":"ad","1":"ltime03","2":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/AND","time":{"view_start_date":1377419423,"submit_start_date":1377419423,"visible_start_date":1377419423,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a sequence of <b>N</b> integer numbers <b>A</b>. Calculate the sum of <b>A<sub>i</sub> AND A<sub>j</sub></b> for all the pairs (<b>i</b>, <b>j</b>) where <b>i &lt; j</b>. </p>
<p> The <b>AND</b> operation is the <b>Bitwise AND</b> operation, defined as in <a href = http://en.wikipedia.org/wiki/Bitwise_operation#AND>here</a>. </p>
<h3>Input</h3>
<p>The first line of input consists of the integer <b>N</b>. <br /><br />
The second line contains <b>N</b> integer numbers - the sequence <b>A</b>.</p>
<h3>Output</h3>
<p>Output the answer to the problem on the first line of the output.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 3 4 5

<b>Output:</b>
9

</pre><h3>Scoring</h3>
<p>
Subtask 1 (13 points): <b>N</b> &lt;= 1000, <b>A<sub>i</sub></b> &lt;= 1. <br /><br />
Subtask 2 (39 points): <b>N</b> &lt;= 1000, <b>A<sub>i</sub></b> &lt;= 10<sup>9</sup>. <br /><br />
Subtask 3 (21 points): <b>N</b> &lt;= 10<sup>5</sup>, <b>A<sub>i</sub></b> &lt;= 1. <br /><br />
Subtask 4 (27 points): <b>N</b> &lt;= 10<sup>5</sup>, <b>A<sub>i</sub></b> &lt;= 10<sup>6</sup>. </p>
