---
{"languages_supported":{"0":"NA"},"title":"TRIP","category":"NA","old_version":true,"problem_code":"TRIP","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
You are starting out on a long (really long) trip. On the way, there are N gas stations, the locations of which are given as a_1,a_2,...,a_N. Initially you are located at the gas station at a_1, and your destination is at location a_N. Your car can only store enough fuel to travel atmost M units without refilling. You can stop at any station and refill the car by any amount. Now you wish to plan your trip such that the number of intermediate stops needed to reach the destination is minimum, and also how many ways are there to plan your trip accordingly.

<h3>
Input :
</h3>
The first line two space seperated integers N and M. N lines follow, and the ith line has the value a_i (0 &lt;= a_i &lt;= 1000000000). The input will be such that a solution will always exist.

<h3>
Output :
</h3>
Output two space seperated integers : The least number of stops, and the number of ways to plan the trip which uses the least number of stops. Output this value modulo 1000000007.

<h3>
Sample Input :</h3>
<pre>
6 3
0
1
3
4
7
10
</pre>

<h3>
Sample Output :</h3>
<pre>
3 2
</pre>

<h3>
Constraints :</h3>
<pre>
2 &lt;= N &lt;= 1000000
1 &lt;= M &lt;= 1000
a_1 &lt; a_2 &lt; .. &lt; a_N

</pre></p>    