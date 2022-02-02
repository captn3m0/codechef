---
{"languages_supported":{"0":"NA"},"title":"RESN05","category":"NA","old_version":true,"problem_code":"RESN05","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Let G(S) denote the sum of the elements of set S and F(n) be the sum of G(s) for all subsets of the set consisting of the first n natural numbers. 

For example, F(3) = (1) + (2) + (3) + (1 + 2) + (1 + 3) + (2 + 3) + (1 + 2 + 3) = 24.



Given n, calculate F(1) + F(2) + ... + F(n).

<h3>Input</h3>
</p><p>
The first line contains the number of test cases T (&lt;= 1000). Each of the next T lines contains an integer n. (1 &lt;= n &lt;= 1000000000).
<h3>Output</h3>
</p><p>
Output T lines, one corresponding to each test case. Since the answers can get very big, output the answer modulo 8388608
<h3>Example</h3>

<pre>
<b>Input:</b>
3
1
2
3
<b>Output:</b>
1
7
31
</pre></p>    