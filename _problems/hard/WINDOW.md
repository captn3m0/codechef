---
{"languages_supported":{"0":"NA"},"title":"WINDOW","category":"NA","old_version":true,"problem_code":"WINDOW","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>

Chef lives in a big house. Almost all is perfect in it except for one thing. Chef has an attic, but there is no window in it. Now, he wants to build a window there.
<br /><br />
The attic wall has the form of a right triangle. We can imagine it as a triangle on a coordinate plane with vertices <b>(0; 0), (N; 0), (N; N * A / B)</b>, where <b>N, A, B</b> are some positive integers. 
<br /><br />
As a modern guy Chef want to build a modern <b>(L, K)</b>-window on the attic wall. A modern <b>(L, K)</b>-window is made up of <b>L+1</b> vertical lines and <b>K+1</b> horizontal lines such that all their intersections lie on the attic wall. Here <b>L, K</b> are positive integers. 
<br /><br />
Formally he can choose <b>L+1</b> integers <b>0 &lt;= x[0] &lt; x[1] &lt; ... &lt; x[L] &lt;= N</b> and <b>K+1</b> integers <b>0 &lt;= y[0] &lt; y[1] &lt; ... &lt; y[K] &lt;= N*A/B</b> such that all points <b>(x[i], y[j])</b> lie on the wall. Then, rectangular grid with all these points as nodes is required window. 
<br /><br />
Chef is interested in knowing how many ways he can choose the window. But since this number can be very large he wants to find it modulo <b>900000011</b>. Help him.

<h3>Input</h3>
</p><p> The first line contains a single positive integer <b>T &lt;= 50</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains five positive integers <b>N, A, B, K, L</b>, where <b>N, A, B &lt;= 10^18</b> and <b>K, L &lt;= 10</b>.

<h3>Output</h3>
</p><p> For each test case, output a single line containing the number of ways to choose a window modulo <b>900000011</b>.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
4 2 3 1 1
4 3 2 2 2
1001 101 97 3 2

<b>Output:</b>
5
4
579415965
</pre>

<h3>Explanation</h3>
In the first case we need calculate the number of rectangles which lie in triangle with vertices <b>(0; 0), (4; 0), (4; 8/3)</b>. There exist 5 such rectangles. Among them 3 have size <b>1 x 1</b>. One has size <b>2 x 1</b> and one have size <b>1 x 2</b>.
<br /><br />
In the second case we have two rectangles <b>2 x 2</b> and one rectangle <b>2 x 3</b> where we can choose middle horizontal segment in two ways. So we have in total 4 possible choices.</p>    