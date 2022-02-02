---
{"languages_supported":{"0":"NA"},"title":"NICEQUAD","category":"NA","old_version":true,"problem_code":"NICEQUAD","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>There are n points with integer coordinates. We can form different quadrangles out of them by taking four different points and connecting them with lines. Let   s call a quadrangle ABCD nice if and only if:</p>
<ul>
<li>Ax &gt; 0 and Ay &gt; 0;</li>
<li>Bx &gt; 0 and By &lt; 0;</li>
<li>Cx &lt; 0 and Cy &lt; 0;</li>
<li>Dx &lt; 0 and Dy &gt; 0;</li>
<li>ABCD has an integer area.</li>
</ul><br />
<p>Your task is to count all different nice quadrangles that can be formed on the given points.</p>

<h3>Input</h3>
<p>The first line of input file contains number t     the number of test cases. Then the description of each test case follows. The first line of each test case contains number n     the number of points. Then n lines follow each consisting of two integers x, y     the coordinates of a point. No two points in the same test case coincide.

<h3>Constraints</h3>
</p><p>1 &lt;= t &lt;= 10<br />
1 &lt;= n &lt;= 30000<br />
-30000 &lt;= x, y &lt;= 30000

<h3>Output</h3>
</p><p>For each test case print the number of nice quadrangles that can be formed using given points.

<h3>Example</h3>

<pre>
<b>Input:</b>
1
6
1 1
2 2
-1 -1
-2 2
2 -1
-3 -4

<b>Output:</b>
2

</pre></p>    