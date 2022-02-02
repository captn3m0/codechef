---
{"languages_supported":{"0":"NA"},"title":"EXPCOMM","category":"NA","old_version":true,"problem_code":"EXPCOMM","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>

For a given prime number <b>p</b> find the number of all pairs <b>(m, n)</b> of positive integers such that <b>1 &lt;= m, n &lt;= p*(p-1)</b> and <b>p</b> divides <b>n<sup>m</sup> - m<sup>n</sup></b>. Output the result modulo <b>1000000007</b>.

<h3>Input</h3>
</p><p> The first line contains a single positive integer <b>T &lt;= 100</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a prime number <b>p </b>, where <b>2 &lt;= p &lt;= 10<sup>12</sup></b>.

<h3>Output</h3>
</p><p> For each test case, output a single line containing the answer for the corresponding test case.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
2
3

<b>Output:</b>
2
14

</pre>

<h3>Explanation</h3>
In the first test required pairs are (1, 1) and (2, 2).
<br /><br />
In the second test case required pairs are (1, 1), (1, 4), (2, 2), (2, 4), (3, 3), (3, 6), (4, 1), (4, 2), (4, 4), (4, 5), (5, 4), (5, 5), (6, 3) and (6, 6).</p>    