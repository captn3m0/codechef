---
{"languages_supported":{"0":"NA"},"title":"DORADM01","category":"NA","old_version":true,"problem_code":"DORADM01","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Johnny is playing Lights Out, an electronic game consisting of an NxN grid of lights. Initially, each light may be on or off. Pressing a light will toggle it and the lights non-diagonally adjacent to it. 
</p><p>The object of the game is to try and get all the lights turned off. It is not always possible, and what's more, Johnny's game is faulty. Pressing some lights has no effect. (They can still be turned on and off if they are next to working lights.)
</p><p>Help Johnny write a program that checks whether a puzzle can be solved or not, given the initial description of the grid and the positions of the faulty lights.

<h3>Input</h3>
</p><p>The first line contains a number t (about 10), the number of test cases. Each test case has the following form:
</p><p>The first line contains two numbers N and K (2 &lt;= N &lt;= 200, 0 &lt;= K &lt;= N). Each line in the next N lines contains N characters '0' or '1' representing the initial state of the grid. '1' denotes a light that is on and '0' a light that is off.
</p><p>Each line in the next K lines contains 2 integers, i and j (1 &lt;= i, j &lt;= N), representing the row and column of a faulty light. Rows are numbered from the top and columns from the left.

<h3>Output</h3>
</p><p>For each test case, print YES if there is a solution, otherwise print NO.

<h3>Example</h3>

<pre>
<b>Input:</b>
2

3 1
010
111
010
2 2

4 2
1110
1110
1001
1101
2 2
4 3

<b>Output:</b>
NO
YES
</pre></p>    