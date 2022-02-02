---
{"languages_supported":{"0":"NA"},"title":"LIFE","category":"NA","old_version":true,"problem_code":"LIFE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>In Conway's Game of Life, cells in a grid are used to simulate biological cells.
Each cell is considered to be either alive or dead.
At each step of the simulation
each cell's current status and number of living neighbors is used to determine the status
of the cell during the following step of the simulation.</p>
<p>In this one-dimensional version, there are N cells numbered 0 through N-1.
The number of cells does not change at any point in the simulation.
Each cell i is adjacent to cells i-1 and i+1.
Here, the indices are taken modulo N meaning cells 0 and N-1 are also adjacent to eachother.
At each step of the simulation, cells with exactly one living neighbor change their status
(alive cells become dead, dead cells become alive).
For example, if we represent dead cells with a '0' and living cells with a '1', consider
the state with 8 cells:<br />
<pre>01100101</pre>
<ul>
<li>Cells 0 and 6 have two living neighbors.</li>
<li>Cells 1, 2, 3, and 4 have one living neighbor.</li>
<li>Cells 5 and 7 have no living neighbors.</li>
</ul>
Thus, at the next step of the simulation, the state would be:<br />
<pre>00011101</pre>
</p>
<p>Given some state of the game, your task is to determine the state immediately preceding it.
In some cases there may be more than one answer or no possible answer.</p>

<h3>Input</h3>
<p>Input will begin with an integer T&lt;100, the number of test cases.
Each test case consists of a single line, with between 3 and 50 characters, inclusive.
Each character will be either '0' or '1'.
Each '0' represents a dead cell, and each '1' represents an alive cell.</p>

<h3>Output</h3>
<p>For each test case, output the state of the game that precedes the given state.
If there is no possible solution, print "No solution" (quotes for clarity only).
If there are multiple possible solutions, print "Multiple solutions" (quotes for clarity only).
</p>

<h3>Sample Input</h3>
<pre>4
00011101
000
000001
11110
</pre>

<h3>Sample Output</h3>
<pre>01100101
Multiple solutions
No solution
10010
</pre>    