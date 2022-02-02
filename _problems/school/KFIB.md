---
{"category_name":"school","problem_code":"KFIB","problem_name":"K Fibonnaci","languages_supported":{"0":"C","1":"CPP 4.3.2","2":"CPP 6.3","3":"CPP14","4":"JAVA","5":"PYPY","6":"PYTH","7":"PYTH 3.5"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"adhyyan1252","problem_tester":null,"date_added":"10-11-2017","tags":{"0":"adhyyan1252"},"time":{"view_start_date":1510331400,"submit_start_date":1510331400,"visible_start_date":1510331400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> </p>
<p>Problem description.</p>
<p> </p>


Chef recently had been studying about Fibonacci numbers and wrote a code to print out the kth term of the Fibonacci series(1, 1, 2, 3, 5, 8, 13….).  He was wondering whether he could write a program to generate the <b>kth</b> term for similar series. 
More specifically : <b>T(n, k) is 1 if n <= k and T(n, k) = T(n-1, k) + T(n-2, k) + T(n-3, k) … + T(n-k, k) if n > k </b>. 
Given n and k output <b>T(n, k)%(1000000007)</b> as the answer could be very large

<h3>Input</h3>
Two integers, <b>N</b> and <b>K</b>

<h3>Output</h3>
<p>Output description.</p>
One integer, the nth term of the series mod 1000000007
<p> </p>

<h3>Constraints</h3>
<li><b>1</b> ≤ <b>N, K</b> ≤ <b>2*10<sup>5</sup></b></li>
<h3>Example</h3>
<pre><b>Input:</b>
7 5

<b>Output:</b>
9
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1. The series is as follows {1, 1, 1, 1, 1, 5, 9}