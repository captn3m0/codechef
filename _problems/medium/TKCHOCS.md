---
{"languages_supported":{"0":"NA"},"title":"TKCHOCS","category":"NA","old_version":true,"problem_code":"TKCHOCS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p align="justify">Did you know that chocolate chip cookie was invented by accident ? They even declared May 15 as National Chocolate Chip day :). Po and Mantis love choco chips and they want to collect them on the board. The board is in the shape of a right-angled triangle having <b>N</b> rows, with i cells in the i<sup>th</sup> row ( 1-based indices, as shown below for N=4 ). Cell (i,j) refers to the cell in j<sup>th</sup> column in the i<sup>th</sup> row.</p>
<p align="justify">Po starts from the top-most cell (1,1) and from a cell (i,j) Po can move to any of the cells (i+1,j-1), (i+1,j) or (i+1,j+1) in one step, if it exists. Mantis starts from the right-most cell (N,N) and from a cell (i,j) Mantis can move to any of the cells (i-1,j-1), (i,j-1) or (i+1,j-1) in one step, if it exists. When Po or Mantis are in a cell, they can collect all the choco chips in it. They both want to reach the bottom-left cell (N,1) after collecting as many choco chips as possible. Find the maximum number of choco chips they can collect i.e., maximize the sum of chips collected by each of them.</p>
<table border="0">

<tr>
<td></td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
</tr>
<tr>
<td>1</td>
<td><i>Po</i><br />(1,1)</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>2</td>
<td>(2,1)</td>
<td>(2,2)</td>
<td></td>
<td></td>
</tr>
<tr>
<td>3</td>
<td>(3,1)</td>
<td>(3,2)</td>
<td>(3,3)</td>
<td></td>
</tr>
<tr>
<td>4</td>
<td>(4,1)<br /> <i>Exit</i></td>
<td>(4,2)</td>
<td>(4,3)</td>
<td>(4,4)<br /> <i>Mantis</i></td>
</tr>

</table>
<h3>Input</h3>
<p align="justify">First line contains an integer T (number of test cases, around 10 ). T cases follow. Each case starts with a line having an integer N ( 2 &lt;= N &lt;= 500 ). N lines follow with ith line having i non-negative integers from range [0 - 1,000,000], number of chips in each cell as explained above.</p>
<h3>Output</h3>
<p align="justify">For each case, output the maximum number of choco chips Po and Mantis can collect, in a separate line.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
1
1 1
3
1
2 5
1 3 1

<b>Output:</b>
3
11
</pre>
<p><br /> <b>Explanation:</b><br /> Case 2 : Po can visit (1,1) -&gt; (2,2) -&gt; (3,1) and Mantis can visit (3,3) -&gt; (3,2) -&gt; (3,1). Note that if both step in to a same cell, we must count the choco chips in it only once in the final answer. The cell (3,1) is reached by both, but the 1 choco chip in it must be added only once ( of course :) ).</p>
<p><i>Warning : Large input / output. You may have to use efficient input / output methods if you are using languages with heavy input / output overload. Eg: Prefer using scanf/printf to cin/cout for C/C++ </i></p>
<p></p>    