---
{"languages_supported":{"0":"NA"},"title":"ARRAYTRM","category":"NA","old_version":true,"problem_code":"ARRAYTRM","tags":{"0":"NA"},"layout":"problem"}
---

<p>
Given n numbers, you can perform the following operation any number of times : Choose any subset of the numbers, none of which are 0. Decrement the numbers in the subset by 1, and increment the numbers not in the subset by K. 
</p>

<p>
Is it possible to perform operations such that all numbers except one of them become 0 ?
</p>

<p>
Input :
</p>

<p>
The first line contains the number of test cases T. 2*T lines follow, 2 for each case. The first line of a test case contains the numbers n and K. The next line contains n numbers, a_1...a_n.
</p>

<p>
Output :
</p>

<p>
Output T lines, one corresponding to each test case. For a test case, output "YES" if there is a sequence of operations as described, and "NO" otherwise.
</p>


<pre>
Sample Input :
3
2 1
10 10
3 2
1 2 2
3 2
1 2 3

</pre>

<pre>
Sample Output :
YES
YES
NO

</pre>

<pre>
Constraints :
1 &lt;= T &lt;= 1000
2 &lt;= n &lt;= 100
1 &lt;= K &lt;= 10
0 &lt;= a_i &lt;= 1000
</pre>    