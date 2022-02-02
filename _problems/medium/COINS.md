---
{"languages_supported":{"0":"NA"},"title":"COINS","category":"NA","old_version":true,"problem_code":"COINS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p>In Byteland they have a very strange monetary system.</p>
<p>Each Bytelandian gold coin has an integer number written on it. A coin n can be exchanged in a bank into three coins: n/2, n/3 and n/4. But these numbers are all rounded down (the banks have to make a profit).</p>
<p>You can also sell Bytelandian coins for American dollars. The exchange rate is 1:1. But you can not buy Bytelandian coins.</p>
<p>You have one gold coin. What is the maximum amount of American dollars you can get for it?</p>
<h3>Input</h3>
<p>The input will contain several test cases (not more than 10). Each testcase is a single line with a number n, 0 &lt;= n &lt;= 1 000 000 000. It is the number written on your coin.</p>
<h3>Output</h3>
<p>For each test case output a single line, containing the maximum amount of American dollars you can make.</p>
<h3>Example</h3>
<pre><b>Input:</b>
12
2

<b>Output:</b>
13
2
</pre><p>You can change 12 into 6, 4 and 3, and then change these into $6+$4+$3 = $13.  If you try changing the coin 2 into 3 smaller coins, you will get 1, 0 and 0, and later you can get no more than $1 out of them. It is better just to change the 2 coin directly into $2.   </p>
    