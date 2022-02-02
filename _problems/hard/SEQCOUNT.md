---
{"category_name":"hard","problem_code":"SEQCOUNT","problem_name":"How many sequences","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"Rubanenko‎","date_added":"7-03-2014","tags":{"0":"dynamic","1":"easy","2":"ltime10","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SEQCOUNT","time":{"view_start_date":1396168200,"submit_start_date":1396168200,"visible_start_date":1396168200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/mandarin/SEQCOUNT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/russian/SEQCOUNT.pdf">Russian</a>.</h3>
<p>Consider the sequence of <b>K</b> natural numbers: <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>K</sub></b>. Tooru thinks that this sequence is nice if and only if:
<ul>
<li><b>a<sub>1</sub></b>+<b>a<sub>2</sub></b>+...+<b>a<sub>K</sub></b> = <b>N</b></li>
<li><b>a<sub>1</sub></b> &lt; <b>a<sub>2</sub></b> &lt; ... &lt; <b>a<sub>K</sub></b></li>
<li><b>a<sub>i+1</sub></b> - <b>a<sub>i<sub></sub></sub></b> &lt;= <b>D</b> for every natural <b>i</b>, smaller than <b>K</b></li>
<li><b>a<sub>1</sub></b> &lt;= <b>D</b>
</li></ul>
</p><p><br /><br />
You are given <b>N</b>, <b>K</b> and <b>D</b>. Please, count the number of nice sequences for her. This number can be huge, so we ask you to output it modulo <b>10<sup>9</sup>+7</b>.
</p>
<h3>Input</h3>
<p>The first and only line of the input consists of the integers <b>N</b>, <b>K</b> and <b>D</b>, separated by a single space.</p>
<h3>Output</h3>
<p>Output the number of nice sequences on the first line of the output modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
10 4 1

<b>Output:</b>
1
</pre><h3>Explanation</h3>
<p>The only suitable sequence is (1, 2, 3, 4).</p>
<h3>Scoring</h3>
<p>1 &lt;= <b>N</b>, <b>K</b>, <b>D</b> &lt;= 10 : 17 points.<br /><br />
1 &lt;= <b>N</b>, <b>K</b>, <b>D</b> &lt;= 400 : 23 points.<br /> 1 &lt;= <b>N</b>, <b>K</b>, <b>D</b> &lt;= 2000 : 20 points.<br /><br />
1 &lt;= <b>N</b>, <b>K</b>, <b>D</b> &lt;= 10<sup>5</sup> : 40 points.</p>
