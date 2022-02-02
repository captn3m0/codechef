---
{"category_name":"medium","problem_code":"KOL16E","problem_name":"Divide Me Please","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":2,"source_sizelimit":40000,"problem_author":"kol_adm","problem_tester":null,"date_added":"21-12-2016","tags":{"0":"kol_adm"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>There are some short-cut ways to check divisibility of numbers in base 10. Here are some examples:</p>
<ol>
	<li>Remember divisibility testing of 3 in base 10? It was simple, right? We need to add all the digits and then check if it is divisible by 3. Call this method <b>"1-sum"</b>.</li>
	<li>In case of testing of 11, we need to add all digits by alternating their signs. For example, 1354379988104 = 11*123125453464 and (4-0+1-8+8-9+9-7+3-4+5-3+1) = 0, which is divisible by 11 (0 = 0*11).  Lets call this method <b>"1-altersum"</b>.</li>
    <li>In case of 7, we need to add all 3-digit-groups by alternating their signs. For example, <b>8</b>618<b>727</b>529<b>993</b> = 7*1231246789999 and (<b>993</b>-529+<b>727</b>-618+<b>8</b>) = 581, which is divisible by 7 (581 = 7*83). Similarly, we call this method <b>"3-altersum"</b>.</li>	
	<li>In similar Manner, 13’s checking is <b>"3-altersum"</b>.</li>
</ol>

<p>In this problem, we are interested to see divisibility checking of <b>only</b> prime numbers in base 10. For a prime <b>P</b>, you need to find the smallest positive integer <b>N</b> such that <b>P’s divisibility testing</b> is <b>"N-sum"</b> or <b>"N-altersum"</b>.</p>

<h3>Input</h3>

<p>At first you will be given <b>T (T ≤ 1000)</b>, the number of test cases. Then <b>T</b> lines will follow. In each line there will be single integer <b>P (P ≤ 2<sup>31</sup>-1 = 2147483647)</b>, the prime number (<b>P</b> is a prime number <b>NOT</b> equal to <b>2</b> or <b>5</b>).</p>

<h3>Output</h3>
<p>For each line of input, produce exactly one line of output like either "Case &lt;test-case>: &lt;N>-sum" or "Case &lt;test-case>: &lt;N>-altersum". Please see sample input and output for details.</p>
<h3>Sample</h3> <pre><b>Input</b>
<p>4
3
7
11
13</p>
<b>Output</b>
<p>Case 1: 1-sum
Case 2: 3-altersum
Case 3: 1-altersum
Case 4: 3-altersum</p>
</pre>
