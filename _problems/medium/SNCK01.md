---
{"languages_supported":{"0":"NA"},"title":"SNCK01","category":"NA","old_version":true,"problem_code":"SNCK01","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><pre><b>[Problem Idea : Varun Jalan]</b></pre>
<p>Two players A and B play the following game.</p>
<p>1) First, a matrix M of size N*M is chosen, and filled with non-zero numbers.</p>
<p>2) Player A starts the game and the players play alternately.</p>
<p>3) In his turn, a player chooses any row which has atleast one non zero nuumber in it. In this row, the leftmost non zero number is chosen. Let this number be K. The player subtracts any number between 1 and K inclusive from it.</p>
<p>4) The game ends when all the numbers in the matrix M are 0.</p>
<p>5) The player who plays last wins the game.</p>
<p>Given N,M and the initial matrix, determine who wins the game.</p>
<p>Assume that both players play optimally.</p>
<h3>Input:</h3>
<p>The first line contains the number of test cases T.</p>
<p>Each test case consists of 2 numbers N and M. There follow N lines each having M integers. The jth number on the ith line is the number M[i][j].</p>
<p>There is a blank line between consecutive test cases.</p>
<h3>Output:</h3>
<p>Output T lines, one for each case. Output "FIRST" if player A wins, else output "SECOND".</p>
<h3>Constraints :</h3>
<p>T &lt;= 1000</p>
<p>1 &lt;= N,M &lt;= 50</p>
<p>The initial matrix values are between 1 and 50 inclusive.</p>
<p>Time limit : 2 seconds.</p>
<h3>Sample Input :</h3>
<pre>3
2 2
1 1
1 1

1 3
2 1 1

2 2
3 2
3 2

</pre>
<h3>Sample Output:</h3>
<pre>SECOND
FIRST
SECOND
<br /><br /><br /></pre>
<p></p>    