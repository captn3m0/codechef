---
{"languages_supported":{"0":"NA"},"title":"MAXCROSS","category":"NA","old_version":true,"problem_code":"MAXCROSS","tags":{"0":"NA"},"layout":"problem"}
---

<p><b>The 'Clarification' in the problem  statement has been updated on July 2nd at 6:15pm</b> <br /><br />On the matrix A sized n  n, some cells were marked by crosses (X). For each cell (i,j) (with i     the row index, j     the column index), we define B(i,j) as the maximal number of continuous crosses    going across    the cell (i,j) in the same horizontal, vertical or diagonal; B(i,j)=0 if A(i,j) is empty ( '.' ). [ Empty cells are marked by '.'] .</p>
<p>Clarification:<br /> Continuous crosses going across cell (i,j) in horizontal direction = x1 + x2 - 1<br /> where x1 = highest possible x such that<br /> j + x - 1&lt;= n and A(i, j ... j + x - 1) are all 'X'<br /> and x2 = highest possible x such that<br /> j - x + 1 &gt; 0  and A(i, j - x + 1...j) are all 'X'<br /> <br /> Similarily we can extend the definition for vertical and diagonal directions.</p>
<h3>Task</h3>
<p>Given matrix A as input, calculate matrix B.</p>
<h3>Input</h3>
<p> </p>
<ul>
<li> The first line contains the integer n. </li>
<li> Then follow n lines , each containing n characters. The j-th character of the i-th line represents the cell (i,j) of the matrix A, with A(i,j)='X' if it contains a cross, or A(i,j)='.' if it is empty. </li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output n lines, each contains n integers, the j-th integer of the i-th line shows the value of B(i,j).<br /> <b><i>(Each integer on a same line must be separated by exactly one space character)</i></b></p>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>10<br />..X....XX.<br />XX.X..XX.X<br />.....XX..X<br />.XXX..X.X.<br />.....X..XX<br />....X....X<br />X.X....XX.<br />.X...X.X.X<br />X.X..X....<br />..XXXXX.XX<br /></pre>
<p><b>Output:</b></p>
<pre>0 0 2 0 0 0 0 3 3 0 <br />2 2 0 2 0 0 3 3 0 2 <br />0 0 0 0 0 3 3 0 0 2 <br />0 3 3 3 0 0 3 0 2 0 <br />0 0 0 0 0 3 0 0 2 2 <br />0 0 0 0 3 0 0 0 0 3 <br />4 0 3 0 0 0 0 2 3 0 <br />0 4 0 0 0 3 0 3 0 2 <br />3 0 4 0 0 3 0 0 0 0 <br />0 0 5 5 5 5 5 0 2 2<br /></pre>
<h3>Limitations</h3>
<p>0&lt;n   1 000</p>    