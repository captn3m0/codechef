---
{"category_name":"easy","problem_code":"CBALLS","problem_name":"Churu and Balls","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"antoniuk1","date_added":"9-06-2015","tags":{"0":"amitpandeykgp","1":"easy","2":"jan16","3":"primenumbers","4":"sieve"},"editorial_url":"http://discuss.codechef.com/problems/CBALLS","time":{"view_start_date":1452504600,"submit_start_date":1452504600,"visible_start_date":1452504600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/mandarin/CBALLS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/russian/CBALLS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/vietnamese/CBALLS.pdf">Vietnamese</a> as well.</h3>
<p>
Little Churu is a naughty child, who likes to play with balls. He has <b>N</b> buckets. Each bucket contains one or more balls. He has numbered his buckets <b>1</b> to <b>N</b> (both inclusive). He has an infinite supply of extra balls, apart from the ones already in the buckets. He wants to add zero or more number of balls to each of the buckets in such a way, that number of balls in the buckets are in a non-decreasing order, and their <a href="https://en.wikipedia.org/wiki/Greatest_common_divisor">GCD</a> is strictly greater than 1.
</p>
<p>
He wants to do it using the minimum number of extra balls. As he is too young to solve the problem, please help him with the solution.
</p>
<h3>Input</h3>
<ul>
<li>First line of input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>For each test case, first line contains an integer <b>N</b> denoting the number of buckets.</li>
<li>Second line of each test case contains <b>N</b> space separated integers, where the <b>i<sup>th</sup></b> denotes the number of balls in the <b>i<sup>th</sup></b> bucket.</li>
</ul>
<h3>Output</h3>
<p>For each test case, output a line containing a single integer — the answer for that test case.</p>
<h3>Constraints</h3>
<p>
<b>Subtask #1: 20 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 10, 1 ≤ N  ≤ 1000, 1 ≤ number of balls in a bucket  ≤ 1000</b></li>
</ul>

<p>
<b>Subtask #2: 80 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 10, 1 ≤ N  ≤ 10000, 1 ≤ number of balls in a bucket  ≤ 10000</b></li>
</ul>

<p><pre><b>Input:</b>
1
3
11 13 15

<b>Output:</b>
3
</pre></p>
<h3>Explanation</h3>
<p>
Add one ball to each of the buckets.
</p>
