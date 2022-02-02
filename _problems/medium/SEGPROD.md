---
{"category_name":"medium","problem_code":"SEGPROD","problem_name":"Product on the segment by modulo ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"CPP 4.3.2","9":"CPP 6.3","10":"CPP14","11":"CS2","12":"D","13":"ERL","14":"FORT","15":"FS","16":"GO","17":"HASK","18":"ICK","19":"ICON","20":"JAVA","21":"JS","22":"kotlin","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"rust","41":"SCALA","42":"SCM chicken","43":"SCM guile","44":"SCM qobi","45":"ST","46":"swift","47":"TCL","48":"TEXT","49":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"altruist_","problem_tester":null,"date_added":"22-08-2017","tags":{"0":"altruist_","1":"medium","2":"nov17"},"editorial_url":"https://discuss.codechef.com/problems/SEGPROD","time":{"view_start_date":1510579800,"submit_start_date":1510579800,"visible_start_date":1510579800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/mandarin/SEGPROD.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/russian/SEGPROD.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/vietnamese/SEGPROD.pdf">Vietnamese</a> as well.</h3>


<p>Given an array <b> A </b> of <b> N </b> integers and an integer <b> P </b> ( not necessarily prime ). You are required to answer <b> Q </b> queries, <b>i</b>-th query is described by two numbers <b>L<sub>i</sub>, R<sub>i</sub></b>, the answer to the query is the product of all numbers in array A from index <b>L<sub>i</sub></b> to index </b>R<sub>i</sub></b> modulo <b>P</b>. You have to answer the queries in online mode, that is you can't know a query before you answer all queries that are before it.</p>
<p> </p>


<h3>Input</h3>
<p>the first line contains one integer <b> T </b>, the number of test-cases.</p>

<p>the first line of each test-case contains <b> N, P, Q </b>.</p>

<p>the third line contains <b>N</b> space-separated integers, the of elements array <b> A </b>.</p>

<p>the fourth line contains array <b>B</b> which consists of floor(Q/64) + 2 integers </b>. Let's number the queries starting from 0. If <b>i</b> is divisible by 64 then: 
</br>
<b> L<sub>i</sub> = (B<sub>i / 64</sub> + x) mod N, R<sub>i</sub> = (B<sub>i / 64 + 1</sub> + x) mod n </b>.<br>
Otherwise: <b> L<sub>i</sub> = (L<sub>i-1</sub> + x) mod N, R<sub>i</sub> =  (R<sub>i-1</sub> + x) mod N </b>. If <b> L<sub>i</sub> > R<sub>i</sub> </b> you should swap them. here x is equal to 0 if it's the first query, otherwise it's equal to the answer of the previous query plus 1 modulo <b>P</b>.

<h3>Output</h3>
<p>After each test-case you have to print one number - the value of x after the the last query modulo P</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>2 * 10<sup>7</sup></b></li>
<li><b>2</b> ≤ <b>P</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>0</b> ≤ <b> A <sub> i </sub> </b> ≤ <b>10<sup>9</sup></b></li>
<li><b>0</b> ≤ <b>B<sub> i </sub> </b> ≤ <b>n - 1</b></li>
<li>The sum of <b>N</b> over all testcases does not exceed 10<sup>6</sup> and sum of <b>Q</b> over all testcases does not exceed 2 * 10<sup>7</sup> </li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1</b> (20 points) : <b>P</b> is prime and all numbers of A in range [1; <b>P</b> - 1]</li> 
<li><b>Subtask 1</b> (20 points) : <b>P = <b>x<sup>k</sup></b></b> where x is prime and k is integer   and all numbers of A in range [1; <b>P</b> - 1]</li> 
<li><b>Subtask 3</b> (60 points) : Original constraints </li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
6 113 3
1 2 3 4 5 6
1 4
6 113 70
1 2 3 4 5 6
1 4 3


<b>Output:</b>
8
21
</pre>