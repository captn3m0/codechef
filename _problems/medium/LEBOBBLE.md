---
{"category_name":"medium","problem_code":"LEBOBBLE","problem_name":"Little Elephant and Bubble Sort","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"laycurse","date_added":"10-05-2012","tags":{"0":"july12","1":"medium","2":"probability","3":"segment","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEBOBBLE","time":{"view_start_date":1342000231,"submit_start_date":1342000231,"visible_start_date":1341999849,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Little Elephant loves bubble sorting.</p>
<p>Bubble sorting for any array <b>A</b> of <b>n</b> integers works in the   following way:  <i> </i></p>
<p><i> var int i, j; <br /> for i from n downto 1 <br /> { <br /> for j from 1 to i-1  <br /> {  <br /> if (A[j] > A[j+1]) <br /> swap(A[j], A[j+1]) <br /> } <br />} </i></p>
<p>You are given an array <b>B</b> of <b>n</b> integers. Then the array <b>A</b> is created using array <b>B</b> as following : for each <b>i</b> (<b>1 &lt;= i &lt;= n</b>), we set <b>A<sub>i</sub></b> = <b>B<sub>i</sub> + d</b> with the   probability <b>P<sub>i</sub></b>, otherwise <b>A<sub>i</sub></b> =   <b>B<sub>i</sub></b>.</p>
<p>Help Little Elephant to find the expect number of swaps that bubble sorting   will make when the array <b>A</b> is sorted with the above bubble sorting   algorithm.</p>
<h3>Input</h3>
<p>First line of the input contains single integer <b>T</b> - the number of test   cases. <b>T</b> test cases follows. First line of each test case contains pair of   integers <b>n</b> and <b>d</b>. Next line of each test case contains   <b>n</b> integers - array <b>B</b>. Next line contains <b>n</b> integers -   array <b>P</b>.</p>
<h3>Output</h3>
<p>In <b>T</b> lines print <b>T</b> real numbers - the answers for the   corresponding test case. Please round all numbers to exactly 4 digits after   decimal point.</p>
<h3>Constraint</h3>
<p>1 &lt;= <b>T</b> &lt;= 5</p>
<p>1 &lt;= <b>n</b> &lt;= 50000</p>
<p>1 &lt;= <b>B<sub>i</sub>, d</b> &lt;= 10^9</p>
<p>0 &lt;= <b>P<sub>i</sub>,</b> &lt;= 100</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 7
4 7
50 50
4 7
5 6 1 7
25 74 47 99

<b>Output:</b>
0.2500
1.6049

</pre>