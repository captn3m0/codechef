---
{"languages_supported":{"0":"NA"},"title":"DOMNOCUT","category":"NA","old_version":true,"problem_code":"DOMNOCUT","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Consider rectangular grid that composed of <b>N</b> rows and <b>M</b> columns. <b>Colored domino tiling</b> of the grid is some way to put lowercase English letter in each cell of the grid provided that each cell has exactly one neighbor with the same letter as in this cell. Two cells of the grid are neighbors if they share a common side. Each letter represents some color. <b>Cut</b> of colored domino tiling is vertical or horizontal line that divides the grid in two colored domino tilings. In other words this line should not pass between two adjacent cells with the same color. <br /><br /> For given <b>N</b> and <b>M</b> you should find the colored domino tiling that has the minimal possible number of cuts. If there are several solutions you should find among them the tiling that uses the minimal possible number of colors in it. If your tiling requires <b>K</b> colors then use first <b>K</b> lowercase letters of English alphabet as colors. If there are still several solutions then find any such tiling.</p>
<h3>Input</h3>
<p>The first line contains a positive integer <b>T</b>, the number of test cases. In the following lines, <b>T</b> test cases follow. Every test case is a single line that contains two space separated positive integers, <b>N</b> and <b>M</b>, the sizes of the grid.</p>
<h3>Output</h3>
<p>For each test case output in the first line the word <b>"IMPOSSIBLE"</b> without quotes if there are no tilings of the grid with <b>N</b> rows and <b>M</b> columns. Otherwise output in the first line two space separated integers, the minimal number of cuts and minimal number of colors in required tiling and then in the next <b>N</b> lines output the tiling itself. Each of these <b>N</b> lines must be composed of exactly <b>M</b> lowercase English letters.</p>
<h3>Constraints</h3>
<p>1 &lt;= T &lt;= 3000 <br /> 1 &lt;= N, M &lt;= 500 <br /> sum of N*M in the file &lt;= 2,000,000</p>
<h3>Sample input</h3>
<pre>5
1 1
2 2
2 3
4 3
5 5

</pre>
<h3>Sample output</h3>
<pre>IMPOSSIBLE
1 2
ab
ab
1 3
aab
ccb
1 3
aab
ccb
baa
bcc
IMPOSSIBLE
</pre>
<p></p>    