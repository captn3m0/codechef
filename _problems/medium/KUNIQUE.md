---
{"languages_supported":{"0":"NA"},"title":"KUNIQUE","category":"NA","old_version":true,"problem_code":"KUNIQUE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>A sequence of N integers is called K-unique if, when it is split into N/K subsequences of K contiguous elements, each subsequence consists of K distinct integers.</p>

<p>For example, consider this sequence of 6 integers.<br />
(2, 10, 2, 8, 3, 6)</p>

<p>This sequence is 2-unique, because when you split it into 3 subsequences each of 2 contiguous elements as below,<br />
(2, 10), (2, 8), (3, 6),</p>

<p>each subsequence consists of 2 distinct integers.</p>

<p>You are given a sequence of N integers, and a positive integer K. Find a permutation of the sequence that is K-unique.</p>

<h3>Input</h3>
<p>The first line contains a single integer T, the number of test cases. T test cases follow. The first line of each test case contains two integers N and K. The next line contains a sequence of N integers a<sub>i</sub>, where a<sub>i</sub> is the i-th element of the sequence.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing a permutation of the sequence that is K-unique. The elements of the sequence should be separated by a single space. If there are several solutions, output the lexicographically smallest one. If there is no solution, output -1.</p>

<h3>Constraints</h3>
<ul>
<li>1 &lt;= T &lt;= 5</li>
<li>1 &lt;= N &lt;= 50000</li>
<li>1&lt;= K&lt;= N</li>
<li>N will be divisible by K</li>
<li>0 &lt;= a<sub>i</sub> &lt;= 1000000000</li>
</ul>

<h3>Example</h3>
<b>Input:</b>
<pre>
3
1 1
42
4 2
4 7 7 7
6 2
2 10 2 8 3 6
</pre>
<br />
<b>Output:</b>
<pre>
42
-1
2 3 2 6 8 10
</pre>    