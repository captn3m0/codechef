---
{"languages_supported":{"0":"NA"},"title":"SNCK03","category":"NA","old_version":true,"problem_code":"SNCK03","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><pre><br /><b>[Problem Idea : Varun Jalan]</b></pre>
<p>You are given K indices, A[1], A[2], ... , A[K].</p>
<p>A[1] &lt; A[2] &lt; ... &lt; A[K].</p>
<p>A[1] = 1 and A[K] = N.</p>
<p>A permutation of the numbers between 1 and N is called valid if :</p>
<p>The numbers in the permutation between indices A[1] and A[2] (inclusive) form an increasing sequence, the numbers in the permutation between indices A[2] and A[3] (inclusive) form a decreasing sequence, those between A[3] and A[4] (inclusive) form an increasing sequence and so on.</p>
<p>Count the number of valid permutations.</p>
<h3>Input:</h3>
<p>There will be multiple test cases. The first line contains the number of test cases T. There follow 2*T lines, 2 lines for each test case. The first line for each test case contains the numbers N and K. The second line contains K space seperated numbers, ie. A[1] to A[K].</p>
<h3>Output:</h3>
<p>Output T lines, one for each test case.  All answers should be output modulo 1000000007.</p>
<h3>Constraints :</h3>
<p>T &lt;= 111</p>
<p>2 &lt;= N &lt;= 20000</p>
<p>2 &lt;= K &lt;= 22</p>
<p>K &lt;= N</p>
<p>A[1] &lt; A[2] &lt; ... &lt; A[K].</p>
<p>A[1] = 1 and A[K] = N.</p>
<p>Time Limit : 20 seconds.</p>
<h3>Sample Input :</h3>
<pre>3
3 3
1 2 3
4 3
1 3 4
10 6
1 2 5 7 8 10
</pre>
<h3>Sample Output :</h3>
<pre>2
3
6166
</pre>
<h3>Note :</h3>
<p>For the first test case,</p>
<p>(1 3 2) and (2 3 1) are the valid permutations.</p>
<p>For the second test case,</p>
<p>(1 2 4 3), (1 3 4 2) and (2 3 4 1) are the valid permutations.</p>
<p></p>    