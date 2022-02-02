---
{"languages_supported":{"0":"NA"},"title":"MULTQ3","category":"NA","old_version":true,"problem_code":"MULTQ3","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
There are N numbers a[0],a[1]..a[N - 1]. Initally all are 0. You have to perform two types of operations :
</p>

<p>
1) Increase the numbers between indices A and B by 1. This is represented by the command "0 A B"
</p>

<p>
2) Answer how many numbers between indices A and B are divisible by 3. This is represented by the command "1 A B".
</p>

<p>
Input :
</p>
<p>
The first line contains two integers, N and Q. Each of the next Q lines are either of the form "0 A B" or "1 A B" as mentioned above.
</p>

<p>
Output :
</p>
<p>
Output 1 line for each of the queries of the form "1 A B" containing the required answer for the corresponding query.
</p>

<pre>
Sample Input :
4 7
1 0 3
0 1 2
0 1 3
1 0 0
0 0 3
1 3 3
1 0 3

</pre>
<pre>
Sample Output :
4
1
0
2

</pre>

<pre>
Constraints :
1 &lt;= N &lt;= 100000
1 &lt;= Q &lt;= 100000
0 &lt;= A &lt;= B &lt;= N - 1
</pre>    