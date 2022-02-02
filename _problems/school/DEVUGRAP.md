---
{"category_name":"school","problem_code":"DEVUGRAP","problem_name":"Devu and Grapes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"xcwgf666","date_added":"20-04-2015","tags":{"0":"amitpandeykgp","1":"cakewalk","2":"gcd","3":"ltime24"},"editorial_url":"http://discuss.codechef.com/problems/DEVUGRAP","time":{"view_start_date":1433061000,"submit_start_date":1433061000,"visible_start_date":1433061000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME24/mandarin/DEVUGRAP.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME24/russian/DEVUGRAP.pdf">Russian</a>.</h3>
<p>
Grapes of Coderpur are very famous. Devu went to the market and saw that there were <b>N</b> people selling grapes. He didn’t like it because things were not very structured. So, he gave a task to Dhinwa to make things better. If Dhinwa successfully completes the task, Devu will be happy.
</p>
<p>
Devu wants to change the number of grapes in a bucket of zero or more sellers in such a way that the <a href="http://en.wikipedia.org/wiki/Greatest_common_divisor">GCD</a>  of all the number of grapes is divisible by K. Dhinwa can add or remove any number of grapes from each of the buckets. Adding or removing a grape will be counted as an operation. Also after the operation, none of the seller’s bucket should be empty.
</p>
<p>
Help Dhinwa in finding the minimum number of operations needed to make Devu happy.
</p>
<h3>Input</h3>
<ul>
<li>First line of input contains an integer <b>T</b> denoting the number of test cases.  </li>
<li>For each test case, first line will contain an integer <b>N</b> denoting the number of buckets and integer <b>K</b>. </li>
<li> Next line contains <b>N</b> space separated integers denoting the number of grapes in each of the bucket. </li>
</ul>
<h3>Output</h3>
<p>For each test case, print a single integer representing the answer of that test case.</p>
<h3>Constraints</h3>
<p>
<b>Subtask #1: 10 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 10, 1 ≤ N ,K ≤ 10,  1 ≤ number of grapes in a bucket ≤ 10</b></li>
</ul>

<p>
<b>Subtask #2: 10 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 10, 1 ≤ N,K  ≤ 100,  1 ≤ number of grapes in a bucket  ≤ 100</b></li>
</ul>

<p>
<b>Subtask #3: 80 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 10, 1 ≤ N  ≤ 10<sup>5</sup>,  1 ≤ K ≤  10<sup>9</sup>,  1 number of grapes in a bucket ≤ 10<sup>9</sup> </b></li>
</ul>

<h3>Example</h3>
<p><pre><b>Input:</b>
2
2 2
3 5
3 7
10 16 18

<b>Output:</b>
2
8
</pre></p>
<h3>Explanation</h3>
<p>
For the first test case, add or remove 1 grape in each of the bucket.
</p>
<p>
For the second test case, remove three grapes in the first bucket, remove two grapes from the second bucket and add three grapes in the third bucket.
</p>
