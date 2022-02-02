---
{"languages_supported":{"0":"NA"},"title":"LASTDIG","category":"NA","old_version":true,"problem_code":"LASTDIG","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>For a non-negative integer N, define S(N) as the sum of the odd digits of N
plus twice the sum of the even digits of N.
For example, S(5)=5, S(456)=2*4+5+2*6=25, and S(314159)=3+1+2*4+1+5+9=27.
Define D(N) as the last digit of S(N).
So D(5)=5, D(456)=5, and D(314159)=7.
Given 2 non-negative integers A and B, compute the sum of D(N) over all N between A and B, inclusive.
</p>
<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.
T lines follow, each containing 2 integers A and B.</p>
<h3>Output</h3>
<p>For each test case, output a single integer indicating the corresponding sum.</p>
<h3>Sample Input</h3>
<pre>3
1 8
28 138
314159 314159
</pre>
<h3>Sample Output</h3>
<pre>36
495
7
</pre>
<h3>Constraints</h3>
<ul>
<li>T ≤ 1000</li>
<li>0 ≤ A ≤ B ≤ 400,000,000</li>
</ul>    