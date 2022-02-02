---
{"languages_supported":{"0":"NA"},"title":"EQUATIO","category":"NA","old_version":true,"problem_code":"EQUATIO","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p><div align="center"><b>x*y = a + b*lcm(x,y) + c*gcd(x,y)</b></div>

</p><p></p><p>It's easy: you are to write a program which for given <b>a</b>, <b>b</b> and <b>c</b> finds the number of pairs of positive integers (<b>x</b>, <b>y</b>) satisfying this equation.

</p><p>Here <b>*</b> stands for multiplication, <b>gcd(x,y)</b> stands for the greatest common divisor of <b>x</b> and <b>y</b>, while <b>lcm(x,y)</b> stands for the least common multiple of <b>x</b> and <b>y</b>.

<h3>Input</h3>
</p><p>The first line of the input file contains one integer <b>T</b> -- the number of test cases (no more than 10). Each of the next <b>T</b> lines contains exactly three space-separated integers <b>a</b>, <b>b</b> and <b>c</b> (0 ≤ <b>a</b>, <b>b</b>, <b>c</b> ≤ 10<sup>6</sup>).

<h3>Output</h3>
</p><p>For each test case output one line containing the sought number of solutions to the equation. If there is an infinite number of solutions, output <b>-1</b> instead.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
2 1 1
160 0 90
300 7 5

<b>Output:</b>
2
8
4

<b>Explanation:</b>
</pre>
In the first test case, the only pairs are (2,4) and (4,2).</p>    