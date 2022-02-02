---
{"category_name":"medium","problem_code":"QNUMBER","problem_name":"Queries About Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kamranmaharov ","problem_tester":"laycurse","date_added":"15-07-2012","tags":{"0":"factors","1":"kamranmaharov","2":"number","3":"sep12"},"editorial_url":"http://discuss.codechef.com/problems/QNUMBER","time":{"view_start_date":1347360315,"submit_start_date":1347360315,"visible_start_date":1347355800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef loves number theory very much. Now it is time to solve a new kind of problem.
<p>There is given a natural number <b>N</b>. Chef has to answer <b>Q</b> queries of the form <b>T K</b>.
<p>Here <b>T</b> is the type of query and <b>K</b> is the natural number.
<br>If <b>T=</b>1, Chef must find the number of natural numbers which is divisor of both <b>N</b> and <b>K</b>.
<br>If <b>T=</b>2, Chef must find the number of natural numbers which is divisor of <b>N</b> and is divisible by <b>K</b>.
<br>If <b>T=</b>3, Chef must find the number of natural numbers which is divisor of <b>N</b> and is not divisible by <b>K</b>.
<br><br>Chef can solve all these queries, but you will be hungry for night if this happens, because Chef will not have free time to cook a meal. Therefore you compromise with him and decided that everyone must do his/her own job. You must program and Chef must cook.

<h3>Input</h3>
<p>There will be 2 numbers in the first line: <b>N</b> and <b>Q</b>. 
<br><b>Q</b> lines follow with 2 numbers each: <b>T</b> and <b>K</b>

<h3>Output</h3>
<p>For each of the <b>Q</b> lines you must output the result for corresponding query in separat line.

<h3>Example</h3>

<pre>
<b>Input:</b>
12 6
1 6
1 14
2 4
2 3
3 12
3 14

<b>Output:</b>
4
2
2
3
5
6

</pre>

<h3>Explanation</h3>
Numbers for each query:
<br>{1,2,3,6}
<br>{1,2}
<br>{4,12}
<br>{3,6,12}
<br>{1,2,3,4,6}
<br>{1,2,3,4,6,12}


<h3>Constraints</h3>
1<=<b>N</b><=10<sup>12</sup>
<br>1<=<b>Q</b><=5*10<sup>5</sup>
<br>1<=<b>T</b><=3
<br>1<=<b>K</b><=10<sup>12</sup>
