---
{"languages_supported":{"0":"NA"},"title":"HPARITY","category":"NA","old_version":true,"problem_code":"HPARITY","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p align="justify">In an N-dimensional grid the co-ordinates of a cell are denoted as X<sub>1</sub>, X<sub>2</sub>, ..., X<sub>N</sub>. Any cell with negative co-ordinate are colored white. The origin cell (the one with all zero co-ordinates) is colored as black. The color of a cell in (X<sub>1</sub>, X<sub>2</sub>, ..., X<sub>N</sub>) depends on the N cells with co-ordinates (X<sub>1</sub>-1, X<sub>2</sub>, ..., X<sub>N</sub>), (X<sub>1</sub>, X<sub>2</sub>-1, ..., X<sub>N</sub>), ....,  (X<sub>1</sub>, X<sub>2</sub>, ..., X<sub>N</sub>-1). The cell is colored white if and only if the number of black colored cells among these N co-ordinates are even, otherwise the cell is colored black.</p>

<p align="justify">You are given the starting and ending co-ordinate of sub-hypercube. You need to compute how many hyper cells in this sub hypercube are colored black.</p>


<h3>Input</h3>
<p align="justify">First line of the input contains T the number of test cases. Each test case starts with a line containing N the dimension of the hypercube. The second line contains N integers denoting the co-ordinate of the starting cell of the hypercube. The third line contains N integers denoting the co-ordinate of the ending cell of the hypercube.</p>

<h3>Output</h3>
<p align="justify">For each test case, output the number of black colored cells in the given hypercube. Since the result can be too big so output the result modulo 1000000009.</p>

<h3>Example</h3>
<br />
<b>Input</b>
<pre>3
3
4 0 4
7 9 8
2
0 3
10 9
4
0 3 0 2
6 8 1 5

</pre>
<b>Output:</b>
<pre>9
32
22

</pre>
<b>Constraints</b>
<pre>T &lt; 51
0 &lt; N &lt; 9</pre>
<p align="justify">All the co-ordinates will be non negative integers with at most 15 digits.</p>    