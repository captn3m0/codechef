---
{"languages_supported":{"0":"NA"},"title":"BUTTONS","category":"NA","old_version":true,"problem_code":"BUTTONS","tags":{"0":"NA"},"layout":"problem"}
---

<p>Each cell of an N x N grid is either a 0 or a 1. You are given two such N x N grids, the initial grid and the final grid. There is a button against each row and each column of the initial N x N grid. Pressing a row-button toggles the values of all the cells in that row, and pressing a column-button toggles the values of all the cells in that column. You are required to find the minimum number of button presses required to transform the grid from the initial configuration to the final configuration, and the buttons that must be pressed in order to make this transformation.
<br /><b>Edit:</b> When the initial and the final configurations are the same, print "0".

<h3>Input</h3>
</p><p>The first line contains t, the number of test cases (about 10). Then t test cases follow.<br /><br />

Each test case has the following form:<br />

    * The first line contains n, the size of the board (1 ≤ n ≤ 1000).<br />
    * n lines follow. The ith line contains n space separated integers representing the ith row of the initial grid. Each integer is either a 0 or a 1.<br />
    * n lines follow, representing the final grid, in the same format as above.<br />

<h3>Output</h3>
</p><p>For each test case, output the number of row-button presses, followed by the row buttons that must be pressed. Print the number of column-button presses next, followed by 0-indexed indices of the column buttons that must be pressed. The total number of button presses must be minimized.
<br />Output "-1" if it is impossible to achieve the final configuration from the initial configuration. If there is more than one solution, print any one of them.

<h3>Example</h3>

<pre>
<b>Input:</b>
1
3
0 0 0
1 1 0
1 1 0
1 1 0
1 1 1
1 1 1

<b>Output:</b>
1
0 
1
2 
</pre></p>    