---
{"languages_supported":{"0":"NA"},"title":"WINDOW2","category":"NA","old_version":true,"problem_code":"WINDOW2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>

After Chef successfully built a modern <b>(L, K)</b>-window on the attic wall he decided to expand the notion of the <b>(L, K)</b>-window in some other areas. Now he considers a rectangular grid that contains only zeroes and ones and has size <b>N x M</b>. He considers the <b>(L, K)</b>-window here as any submatrix of size <b>L x K</b> that contains only ones. Formally he defines <b>(L, K)</b>-window as any <b>(K+L)</b>-tuple <b>(R<sub>1</sub>, ..., R<sub>L</sub>, C<sub>1</sub>, ..., C<sub>K</sub>)</b> such that <b>1 &lt;= R<sub>1</sub> &lt; ... &lt; R<sub>L</sub> &lt;= N</b>, <b>1 &lt;= C<sub>1</sub>  &lt; ... &lt; C<sub>K</sub> &lt;= M</b> and <b>A[R<sub>i</sub>][C<sub>j</sub>]=1</b> for all <b>1 &lt;= i &lt;= L, 1&lt;= j &lt;= K</b>. Here <b>A[r][c]</b> is the <b>c</b>-th element of the <b>r</b>-th row of considered rectangular grid.
<br /><br />
Why does Chef call some <b>(K+L)</b>-tuple of numbers by the window? Just mark all points <b>(R<sub>i</sub>,C<sub>j</sub>)</b> (<b>1 &lt;= i &lt;= L, 1&lt;= j &lt;= K</b>) on the plane and join by line segments all pairs of points that has equal abscises or ordinates and you will see that this picture is like a window.
<br /><br />
Now Chef considers some particular <b>N x M</b> grid and wants to calculate the total number of <b>(L, K)</b>-windows in this rectangular grid. Help him. Since this number can be very large calculate the result modulo <b>1000000080798150871</b>.

<h3>Input</h3>
</p><p> The first line contains a single positive integer <b>T &lt;= 100</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains four positive integers <b>N, M, L, K</b>, where <b>L, N &lt;= 1000, K, M &lt;=3</b>. Next <b>N</b> lines describe the rectangular grid considered by Chef. Each of these lines contains <b>M</b> symbols. Every symbol is either one or zero.

<h3>Output</h3>
</p><p> For each test case, output a single line containing the total number of <b>(L, K)</b>-windows for the given grid modulo <b>1000000080798150871</b>.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3 2 2 1
11
01
10
3 3 2 2
111
101
111

<b>Output:</b>
2
5
</pre>

<h3>Explanation</h3>
In the first case it is just the number of pairs of cells with value 1 that have the same column number.
<br /><br />
In the second case we have the following <b>(2, 2)</b>-windows:
<br />
(First row, Second row, First column, Third column)
<br />
(First row, Third row, First column, Second column)
<br />
(First row, Third row, First column, Third column)
<br />
(First row, Third row, Second column, Third column)
<br />
(Second row, Third row, First column, Third column)</p>    