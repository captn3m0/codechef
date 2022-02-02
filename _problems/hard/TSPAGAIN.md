---
{"languages_supported":{"0":"NA"},"title":"TSPAGAIN","category":"NA","old_version":true,"problem_code":"TSPAGAIN","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
There are N cities numbered from 0..N-1. A salesman is located at city 0. He wishes to visit all cities exactly once and return back to city 0. There are K toll booths. Each toll booth has a certain range of functioning. The parameters for toll k are given as x_k and y_k. If the salesman travels from city i to j, he has to pay 1 dollar toll fee to each toll p having x_p &gt;= i and y_p &lt;= j. Calculate the cheapest way for the salesman to complete his tour.

<h3>
Input :
</h3>
The first line contains T the number of test cases. T test cases follow. The first line of each test case contains two space seperated integers N and K. Each of the next K lines contains 2 integers, the ith line containing x_i and y_i (0 &lt;= x_i,y_i &lt; N). A blank line seperates two test cases.

<h3>
Output :
</h3>
Output T lines, one for each test case, containing the required answer.

<h3>
Sample Input :</h3>
<pre>
2
3 2
2 0
0 2

3 4
1 0
2 1
0 1
1 2

</pre>

<h3>
Sample Output :</h3>
<pre>
3
6

</pre>

<h3>
Constraints :</h3>
<pre>
1 &lt;= T &lt;= 50
2 &lt;= n &lt;= 1000
1 &lt;= K &lt;= 10000
</pre></p>    