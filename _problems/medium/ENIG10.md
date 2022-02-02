---
{"category_name":"medium","problem_code":"ENIG10","problem_name":"Xorangements","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kr_abhinav","problem_tester":null,"date_added":"27-03-2018","tags":{"0":"kr_abhinav"},"time":{"view_start_date":1522873800,"submit_start_date":1522873800,"visible_start_date":1522873800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Given a positive integer <b>N</b>, find a possible arrangement of the integers from 0 to <b>N</b> -1 such that the binary representation of every number (except the first) differs at most at one bit from the binary representation of the number before it. Or tell that it’s impossible to get such an arrangement.</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains a single integer <b>N</b>.</li>
</ul>

<h3>Output</h3>
<p>For every testcase print <b>N</b> integers on a single line, the required sequence. If there are multiple possible answers, print any one.<br/> If no such sequence is possible, print -1.
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 2000</li>
<li>1 ≤ <b>N</b> ≤ 100000</li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 2000000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5
1
2
3
4
5

<b>Output:</b>
0 
0 1 
2 0 1 
0 1 3 2 
4 0 1 3 2 
</pre>

<h3>Explanation</h3>
<p>Binary representation of the numbers in the output for <b>N</b>=5 are :</p>
<p>100, 000, 001, 011, and 010.</p>