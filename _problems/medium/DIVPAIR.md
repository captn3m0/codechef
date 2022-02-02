---
{"category_name":"medium","problem_code":"DIVPAIR","problem_name":"Divisible Pairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"subra","date_added":"11-03-2012","tags":{"0":"may12","1":"medium","2":"rustinpiece"},"editorial_url":"http://discuss.codechef.com/problems/DIVPAIR","time":{"view_start_date":1336722978,"submit_start_date":1336722978,"visible_start_date":1336728600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Given <b>N</b> and <b>M</b> Dexter wants to know how many pairs <b>a,b(1 &lt;= a &lt; b &lt;=N)</b> are there such that <b>(a+b)</b> is divisible by <b>M</b>.
For example when <b>N=4</b> and <b>M=3</b>, there are 2 possible pairs the sum of which is divisible by <b>M</b>  and they are (1,2) and (2,4).


<h3>Input</h3>
</p><p>
First line of input contains <b>T(&lt;=100000)</b> which is the number of test cases. Each of the next <b>T</b> lines contains two integers <b>N(1 &lt;= N &lt;= 10^9)</b> and <b>M(2 &lt;= M &lt;= 10^9)</b>.

<h3>Output</h3>
</p><p>
Output one line per testcase, the number of pairs <b>(a,b)</b> as described before.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
2 3
4 3
1 6

<b>Output:</b>
1
2
0

</pre></p>