---
{"languages_supported":{"0":"NA"},"title":"MVCOIN","category":"NA","old_version":true,"problem_code":"MVCOIN","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>There is a line with 1000 cells numbered from 1 to 1000 from left to right and <b>N</b> coins placed on it. Coin <b>i</b> is placed at cell <b>X<sub>i</sub></b>, and no two coins are placed at the same cell.

</p><p>Bob would like to move the coins to the <b>N</b> leftmost cells of the line. To do this, he is allowed to take a coin from any cell <b>T</b> and move it to cell <b>T</b>-<b>j</b>, where <b>j</b> is an integer between 1 and <b>K</b>, inclusive. This action is possible only if:
<ul><li> cell <b>T</b>-<b>j</b> actually exists and doesn't contain a coin;
</li><li> each of the cells <b>T</b>-<b>j</b>+1, ..., <b>T</b>-1 contains a coin.</li></ul><br />

</p><p>One coin movement takes exactly one second. Find the smallest time in which Bob can achieve his goal.

<h3>Input</h3>
</p><p>The first line of the input file contains one integer <b>T</b> -- the number of test cases (no more than 10). Then <b>T</b> test cases follow, and every test case is described by two lines: the first of them contains two integers <b>N</b> and <b>K</b> (1 &lt;= <b>N</b>, <b>K</b> &lt;= 1000), the second of them contains <b>N</b> integers <b>X<sub>1</sub></b>, ..., <b>X<sub>N</sub></b> in strictly increasing order (1 &lt;= <b>X<sub>i</sub></b> &lt;= 1000).

<h3>Output</h3>
</p><p>For each test case output one line containing the requested minimal time for Bob to put all the coins to the left side of the line.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3 2
2 4 7
5 3
1 2 3 4 5

<b>Output:</b>
5
0

<b>Explanation:</b>
</pre>
In the first example Bob can move the coin from cell 7 consequently to cells 6, 5, 3 and 1, then move the coin from cell 4 to cell 3. In the second example there is nothing to move.</p>    