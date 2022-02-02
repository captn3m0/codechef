---
{"languages_supported":{"0":"NA"},"title":"SQUAGAME","category":"NA","old_version":true,"problem_code":"SQUAGAME","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Fat Tony and Fit Tony are playing the square painting game. There are n squares drawn on a plane. The sides of the squares are parallel to the axes. Squares don't intersect, but some of them can be inside others. In his turn a player can choose any square and paint it's internal area black. All squares inside the painted one are also painted black. The player can't paint the squares that were already painted. The loser is the player who can't make a turn. Determine the winner of the game if both players play optimally and Fat Tony's turn is the first. Also if Fat Tony can win the game determine which square he has to paint on his first turn in order to win. If there are many squares which guarantee victory to Fat Tony choose the one with the smallest number.

<h3>Input</h3>
</p><p>The first line of input contains t - the number of test cases. Each test case starts with n - the number of squares. Next n lines consist of three integers each x, y, a - the coordinates of the lowest left corner of the sqaure and the length of it's sides. The squares in the input are numbered from 1 to n in the order they are listed.

<h3>Constraints</h3>
</p><p>1 &lt;= t &lt;= 10<br />
1 &lt;= n &lt;= 50000<br />
The total number of squares over all test cases in one file won't exceed 250000.<br />
x, y won't exceed 10<sup>8</sup> in absolute value.
a will be positive and less than 10<sup>8</sup>.

<h3>Output</h3>
</p><p>For each test case print "Fat x", where x - is the number of square which needs to be painted on the first turn in order to win (if there are many such square chose the one with the smallest number), if Fat Tony wins or "Fit" if Fit Tony wins.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
5
0 0 10
15 15 1
1 1 3
5 5 1
14 14 3
2
1 1 1
3 3 1

<b>Output:</b>
Fat 2
Fit

</pre></p>    