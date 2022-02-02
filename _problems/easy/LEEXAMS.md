---
{"category_name":"easy","problem_code":"LEEXAMS","problem_name":"Little Elephant and Exams","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"xcwgf666","date_added":"10-04-2012","tags":{"0":"brute","1":"easy","2":"probability","3":"sept13","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEEXAMS","time":{"view_start_date":1379323800,"submit_start_date":1379323800,"visible_start_date":1379323800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Little Elephant from the Zoo of Lviv hates exams. Since Little Elephant lives in Ukraine, he is going to take exams called 'ZNO'. Help him.</p>
<p>There will be <b>n</b> tickets on the table. Each ticket has a number written on it. The <b>i</b>-th ticket can be numbered <b>A<sub>i</sub></b> with probability <b>P<sub>i</sub></b> percent and with probability <b>100-P<sub>i</sub></b> percent it can be numbered <b>B<sub>i</sub></b>. It can not have any other number. A numbering of tickets on the table is correct if and only if all tickets have distinct ticket numbers.</p>

<p>Help Little Elephant find the probability that the numbering will be correct.</p>

<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. The first line of each test case contains a single integer <b>n</b> - the number of tickets on the table. <b>n</b> lines will follow. Each of these lines contains three integers: <b>P<sub>i</sub></b>,  <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b>.</p>

<h3>Output</h3>
<p>Output <b>T</b> lines, each containing a single real number - answer for the corresponding test case. Rounding errors less than <b>10<sup>-6</sup></b> will be ignored.

<h3>Constraints</h3>
</p><p>
1 &lt;= <b>T</b> &lt;= 10
</p><p>
1 &lt;= <b>n</b> &lt;= 50
</p><p>
1 &lt;= <b>A<sub>i</sub>, B<sub>i</sub></b> &lt;= 16
</p><p>
0 &lt;= <b>P<sub>i</sub></b> &lt;= 100

<h3>Example</h3>

<pre>
<b>Input:</b>
2
2
50 1 2
50 2 1
3
100 1 3
47 2 1
74 3 2

<b>Output:</b>
0.500000000
0.347800000

</pre></p>