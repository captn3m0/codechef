---
{"category_name":"medium","problem_code":"MATRIX2","problem_name":"Matrix","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"Rubanenko","date_added":"20-07-2013","tags":{"0":"dynamic","1":"ltime03","2":"simple","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/MATRIX2","time":{"view_start_date":1377419508,"submit_start_date":1377419508,"visible_start_date":1377419423,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a matrix <b>A</b> that consists of <b>N</b> rows and <b>M</b> columns. Every number in the matrix is either zero or one. Calculate the number of such triples (<b>i</b>, <b>j</b>, <b>h</b>) where for all the pairs (<b>x</b>, <b>y</b>), where both <b>x</b> and <b>y</b> belong to [<b>1</b>; <b>h</b>] if <b>y >= x</b>, <b>A[i+x-1][j+y-1]</b> equals to one. Of course, the square (<b>i</b>, <b>j</b>, <b>i+h-1</b>, <b>j+h-1</b>) should be inside of this matrix. In other words, we're asking you to calculate the amount of square submatrices of a given matrix which have ones on and above their main diagonal.</p>
<h3>Input</h3>
<p>The first line of the input consists of two integers - <b>N</b> and <b>M</b>.<br /><br />
The following <b>N</b> lines describe the matrix. Each line consists of <b>M</b> characters that are either zero or one.</p>
<h3>Output</h3>
<p>Output should consist of a single integer - the answer to the problem.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2 3
011
111

<b>Output:</b>
6
</pre><h3>Scoring</h3>
<p>Subtask 1 (9 points): 1 &lt;= <b>N,M</b> &lt;= 2000, All the numbers in the matrix are equal to one.<br /><br />
Subtask 2 (12 points): 1 &lt;= <b>N,M</b> &lt;= 10. <br /><br />
Subtask 3 (34 points): 1 &lt;= <b>N,M</b> &lt;= 30. <br /><br />
Subtask 4 (17 points): 1 &lt;= <b>N,M</b> &lt;= 150. <br /><br />
Subtask 5 (28 points): 1 &lt;= <b>N,M</b> &lt;= 2000. <br /></p>
