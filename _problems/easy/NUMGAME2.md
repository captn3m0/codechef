---
{"languages_supported":{"0":"NA"},"title":"NUMGAME2","category":"NA","old_version":true,"problem_code":"NUMGAME2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Alice and Bob play the following game.They choose a number N to play with.The runs are as follows :
<br /><br />
1.Bob plays first and the two players alternate.
<br /><br />
2.In his/her turn ,a player can subtract from N any prime     number(including 1) less than N.The number thus obtained is the new N.
<br /><br />
3.The person who cannot make a move in his/her turn loses the game.
<br /><br />
Assuming both play optimally,who wins the game ?
<h3>Input format:</h3>
</p><p>The first line contains the number of test cases T.Each of the next lines contains an integer N.
<h3>Output format:</h3>
</p><p>Output T lines one for each test case,containing "ALICE" if Alice wins the game ,or "BOB" if Bob wins the game.
<h3>Example</h3>
<pre>
<b>Sample Input:</b>
2
1
2
<br />
<b>Sample Output:</b>
ALICE
BOB
<br />
<b>Constraints:</b>
1 &lt;= T &lt;= 1000000
1 &lt;= N &lt;= 1000000000
</pre>
<br />
Note : For the first test case, Bob cannot make any move and hence Alice wins the game. For the second test case, Bob subtracts 1 from N. Now, Alice cannot make a move and loses the game.</p>    