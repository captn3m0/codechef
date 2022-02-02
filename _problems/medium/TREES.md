---
{"languages_supported":{"0":"NA"},"title":"TREES","category":"NA","old_version":true,"problem_code":"TREES","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Given a tree, you need to count how many subtrees exist such that the length of the longest path in the subtree is at most K.
</p>

<p>
Input :
</p>


The first line contains the number of test cases T.
T test cases follow. For each test case, the first line contains N and K. The following N - 1 lines contain two integers ai and bi, indicating an edge between nodes ai and bi in the tree. There is a blank line after each test case.
<br /><br />

<p>
Output :
</p>

<p>
Output T lines, one corresponding to each test case, containing the required answer.
</p>

<pre>
Sample Input :
2
3 1
0 1
1 2

6 3
0 1
1 2
2 3
2 4
3 5

</pre>

<pre>
Sample Output :
5
23

</pre>

<pre>
Constraints :
1 &lt;= T &lt;= 2000
2 &lt;= N &lt;= 60
0 &lt;= ai,bi &lt; N
1 &lt;= K &lt;= N - 1
</pre>    