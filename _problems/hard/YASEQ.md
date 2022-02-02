---
{"languages_supported":{"0":"NA"},"title":"YASEQ","category":"NA","old_version":true,"problem_code":"YASEQ","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
You are given the first N terms of a sequence.
The remaining terms of the sequence are defined as follows:
<blockquote>
A [ i ] = number of j such that 0 ≤ j &lt; i and A[ j ] ≥ i - j
</blockquote>
The sequence is indexed starting at 0.
The first N terms of the sequence will each be equal to N-1, N, or N+1.</p>
<p>In addition to the first terms of the sequence, you will be given a number of queries.
For each query you are to calculate the value of the sequence at that index.</p>

<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.
Each test case begins with 2 integers N and Q on a line,
followed by a line with N integers (each equal to N-1, N, or N+1),
then a line with Q non-negative integers.</p>

<h3>Output</h3>
<p>For each test case, output Q integers on a line, one per query,
indicating the respective element of the sequence.</p>

<h3>Sample Input</h3>
<pre>3

3 4
3 3 3
100 1000 1000000 1

4 11
3 4 4 5
0 1 2 3 4 5 6 7 8 9 10

5 4
5 6 5 6 5
6 14 22 29
</pre>

<h3>Sample Output</h3>
<pre>3 3 3 3
3 4 4 5 3 4 4 4 4 4 4
5 5 5 5
</pre>

<h3>Constraints</h3>
<ul>
<li>T≤100</li>
<li>0&lt;N≤100000</li>
<li>0&lt;Q≤100000</li>
<li>Each query will be between 0 and 10^15, inclusive</li>
<li>The sum of N+Q over all test cases will not exceed 500000</li>
</ul>

<em>Warning: Large input/output.</em>    