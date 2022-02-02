---
{"languages_supported":{"0":"NA"},"title":"KNIGHTS","category":"NA","old_version":true,"problem_code":"KNIGHTS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Dave recently mastered the problem of placing N queens on a chessboard so
that no two queens attack eachother.
Now he wants to see how many knights he can place on a chessboard so
that no two knights attack eachother.
Normally this would be a simple task, but some of the squares of the
chessboard have been marked as unusable and hence cannot have a knight placed
on them.</p>
<p>Recall that a knight can attack another knight if their vertical distance
is 2 and their horizontal distance is 1, or if their vertical distance is 1 and
their horizontal distance is 2.  Only one knight may be placed on each square
of the chessboard</p>

<h3>Input</h3>
<p>The first line of input contains an integer T (0&lt;T≤50), the number of test cases to follow.</p>
<p>Each test case will begin with a line containing 2 integers M and N (0&lt;M,N≤30), 
denoting the number of rows and columns, respectively.
M lines follow, each containing exactly N characters.
The j-th character of the i-th line is '.' if a knight may be placed in the j-th column of the i-th
row, and '#' if the square is unusable.</p>

<h3>Output</h3>
<p>For each test case, output on a single line the maximum number of knights that may be placed
on the chessboard such that no two attack eachother.</p>

<h3>Sample input:</h3>
<pre><code>2
2 4
....
....
5 5
..#..
#..#.
##...
...##
.....
</code></pre>

<h3>Sample output:</h3>
<pre>4
11

</pre>

<p>The following image represents the chessboard and a possible solution to the second test case:<br />
<img src="http://www.codechef.com/download/board.png" alt="nn#_n
#n_#n
##__n
_n_##
nnn_n" /></p>    