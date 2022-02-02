---
{"languages_supported":{"0":"NA"},"title":"LAMQUGAM","category":"NA","old_version":true,"problem_code":"LAMQUGAM","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><div class="primary-colum-width-left">
<div class="prob">
<p>Code and Chef play a game on the set of all points with positive integer  coordinates of the usual coordinate plane. Initially the lame queen  stands in the point with coordinates <b>(x<sub>0</sub>, y<sub>0</sub>)</b> or shortly: in the point <b>(x<sub>0</sub>, y<sub>0</sub>)</b>. Players alternate moves. <b>Code moves first.</b> During each move the player can move the queen from the point <b>(x, y)</b> to the point <b>(x - a, y)</b>, <b>(x, y - a)</b> or <b>(x - a, y - a)</b> for some positive integer <b>a</b>,  provided that the new point has positive coordinates. But since the  queen is lame she possibly can't make all diagonal moves. Namely she can  move from the point <b>(x, y)</b> to the point <b>(x - a, y - a)</b> only if <b>a</b> is divisible by <b>d</b>, where <b>d</b> is some positive integer that is called the queen lameness. So if <b>d = 2</b> the queen can move diagonally from the point <b>(x, y)</b> only to the points <b>(x - 2, y - 2), (x - 4, y - 4), (x - 6, y - 6)</b> and so on. However if <b>d = 1</b> then the queen becomes the usual chess queen. <b> The first player who can't make a valid move loses the game. </b> Both players play optimally in their respective moves. <br /><br /> After playing this game for some time Chef realizes that he loses almost  always. Now he wants to know what is the probability that he wins if  initial point <b>(x<sub>0</sub>, y<sub>0</sub>)</b> is chosen randomly from the rectangle <b>x<sub>1</sub> &lt;= x<sub>0</sub> &lt;= x<sub>2</sub>, y<sub>1</sub> &lt;= y<sub>0</sub> &lt;= y<sub>2</sub></b>. But I should warn that he wants to know this for a large number of rectangles.</p>
<h3>Input</h3>
<p>The first line contains two space separated positive integers <b>d</b> and <b>T</b>, the queen lameness and the number of rectangles for which Chef wants to know the answer. Each of the next <b>T</b> lines contains four space separated positive integers <b>x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub> </b> the coordinates of rectangle corners.</p>
<h3>Output</h3>
<p>For each rectangle from the input file, output a single line  containing the probability in the form of an irreducible fraction that  Chef wins if the initial cell is chosen randomly from this rectangle.</p>
<h3>Constraints</h3>
<p><b> 1 &lt;= d &lt;= 20 <br /> 1 &lt;= T &lt;= 100000 <br /> 1 &lt;= x<sub>1</sub> &lt;= x<sub>2</sub> &lt;= 200000 <br /> 1 &lt;= y<sub>1</sub> &lt;= y<sub>2</sub> &lt;= 200000 </b></p>
<h3>Example</h3>
<pre><b>Input:</b>
1 4
1 1 4 4
2 4 5 8
3 7 10 10
5 8 5 8

<b>Output:</b>
3/16
1/10
1/32
1/1
</pre>
<h3>Explanation</h3>
For the first rectangle Chef wins in three cases out of 16. Namely when the starting point is <b>(1,1), (2,3)</b> or <b>(3,2)</b>.</div>
</div>
<p>The fourth rectangle is lucky. It contains only one point and this one is winning for Chef.</p>    