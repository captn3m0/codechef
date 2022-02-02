---
{"languages_supported":{"0":"NA"},"title":"SUMSLOPE","category":"NA","old_version":true,"problem_code":"SUMSLOPE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
A digit in a number N is a minima if it is lesser than both the digits adjacent to it. Similarly, a digit is a maxima if it is greater than both the digits adjacent to it. The slope of N is the number of digits in N (leaving out the first and the last digit) which are either a minima or a maxima. Given A and B, count the sum of the slopes of all numbers between A and B.
</p>

<p>
Input :
</p>
<p>
The first line contains the number of test cases T. Each of the next T lines contains two integers A and B.
</p>

<p>
Output :
</p>
<p>
Output T lines one for each test case, containing the required sum for the corresponding test case.
</p>

<pre>
Sample Input :
3
101 101
1 100
100 150

</pre>

<pre>
Sample Output :
1
0
19

</pre>
<pre>
Constraints :
1 &lt;= T &lt;= 50000
1 &lt;= A &lt;= B &lt;= 1000000000000000 (10^15)
</pre>    