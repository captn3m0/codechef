---
{"languages_supported":{"0":"NA"},"title":"CHESSGM","category":"NA","old_version":true,"problem_code":"CHESSGM","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Dave is playing a game with three pawns on a long board. The board can be seen as an (semi-)infinitely long sequence of grid squares numbered starting from 0 with width 3. Thus, the squares on the board can be referred to using (i,j) where i &gt;= 0 and j = 0, 1 or 2. For this problem, the distance between two pawns is the distance along the first coordinate. For example, distance between pawns at (0,2) and (10,0) is 10.</p>
<p>The pawns are numbered 0, 1 and 2. Pawn j starts off at square (0, j) initially. In one move, a pawn can move one square to the right (increasing first coordinate, while second coordinate remains same). For example, a pawn can move from (4, 2) to (5,2). Another restriction is that  if  p &lt; q, then pawn q can never be to the right(higher first coordinate) of pawn p. Yet another restriction is that at any point of time, pawns p and p+1 (for p=0 or p=1) should not be separated by a distance more than D.</p>
<p>At the end of K moves, all the pawns should end up at the same first coordinate. Dave wants to know how many ways there are to complete this game. Help him!</p>

<h3>Input</h3>
<p>The first and only line contains two integers D, K (0 ≤ D ≤ 7; 0 ≤ K ≤ 10<sup>9</sup>).

<h3>Output</h3>
</p><p>Output an only integer which is the result calculated, by modulo of 1,000,000,007.

<h3>Example</h3>

<pre>
<b>Input:</b>
1 3
<b>Output:</b>
1

<b>Input:</b>
2 6
<b>Output:</b>
5
</pre></p>    