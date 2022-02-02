---
{"category_name":"medium","problem_code":"SNCK05","problem_name":"SUM12","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TEXT","46":"WSPC"},"max_timelimit":"10 - 20","source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"16-11-2009","tags":{"0":"admin"},"time":{"view_start_date":1360584657,"submit_start_date":1360584657,"visible_start_date":1360584128,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>"...a composition of a positive integer n is a way of writing n as a sum of strictly positive integers. Two sums which differ in the order of their summands are deemed to be different compositions, while they would be considered to be the same partition."<br />

- Quote from Wikipedia<br /><br />

How many compositions of a number n are with summands either 1 or 2.
</p><br />

<h3>Input</h3>
<p>The first line contains a number, the number of test cases (&lt;= 1000000). Each subsequent line contains a number n (&lt;= 1000000000).
</p><br />

<h3>Output</h3>
<p>For test case print the solution mod 1000000007 on a new line.
</p><br />

<h3>Example</h3>

<pre>
<b>Input:</b>
3
2
4
6

<b>Output:</b>
1
3
8
</pre>