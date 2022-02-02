---
{"category_name":"hard","problem_code":"QSTRING","problem_name":"Stringology is Magic","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"1 - 10","source_sizelimit":50000,"problem_author":"xiaodao","problem_tester":"shangjingbo","date_added":"6-09-2014","tags":{"0":"medium","1":"oct14","2":"suffix","3":"xiaodao"},"editorial_url":"http://discuss.codechef.com/problems/QSTRING","time":{"view_start_date":1413192600,"submit_start_date":1413192600,"visible_start_date":1413192600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/QSTRING.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/QSTRING.pdf">Russian</a>.</h3>
<p>You have been given a string <b>T</b> with <b>n</b> lowercase letters <b>T[1..n]</b>. For each substrings <b>T[l..r]</b>, we can assign them two values, <b>k1</b> and <b>k2</b>, which are defined as following.</p>
<ul>
<li><b>k1</b> is the number of different substrings which are lexicographically smaller than <b>T[l..r]</b>. There are <b>(n + 1) * n / 2</b> substrings in total.</li>
<li><b>k2</b> indicates the number of substrings which are as same as <b>T[l..r]</b> but have smaller left subscript than <b>l</b>.</li>
</ul>
<p>
In this problem, you need to answer the following two queries:
</p>
<ul>
<li>Select <b>k1</b> <b>k2</b>: report <b>l</b> and <b>r</b>, such that <b>T[l..r]</b> are assigned values <b>k1</b> and <b>k2</b>.</li>
<li>Rank <b>l</b> <b>r</b>: output the assigned <b>k1</b> and <b>k2</b> of <b>T[l..r]</b>.</li>
</ul>
<h3>Input</h3>
<p>
The first line contains a string <b>T</b> with <b>n</b> letters . The second line contains a number <b>m</b>, which represents for the totally number of queries.
</p>
<p>
Each of the following <b>m</b> lines contains a query. All queries are formed as "Select <b>k1</b> <b>k2</b>" or "Rank <b>l</b> <b>r</b>".
</p>
<h3>Output</h3>
<p>For each query, output the corresponding answer as the form "<b>l</b> <b>r</b>" or "<b>k1</b> <b>k2</b>" in a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>n</b> &lt;= <b>10^6</b></li>
<li><b>1</b> &lt;= <b>m</b> &lt;= <b>10^6</b></li>
<li><b>1</b> &lt;= <b>l</b> &lt;= <b>r</b> &lt;= <b>n</b></li>
<li><b>k1</b>, <b>k2</b> are legal</li>
<p>.
</p></ul>
<h3>Example</h3>
<pre><b>Input:</b>
aa
6
Select 1 1
Select 1 2
Select 2 1
Rank 1 1
Rank 2 2
Rank 1 2
</pre><pre><b>Output:</b>
1 1
2 2
1 2
1 1
1 2
2 1
</pre>