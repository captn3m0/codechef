---
{"languages_supported":{"0":"NA"},"title":"DPOWPERM","category":"NA","old_version":true,"problem_code":"DPOWPERM","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Let <b>N</b> be a positive integer and <b>S = {1, 2, 3, ..., N}</b>. For a given positive integer <b>d</b> the function <b>f : S --&gt; S</b> is called <b>d</b>-power permutation if there exists a bijection <b>g : S --&gt; S</b> such that <b>g ( g ( ... g ( x ) ... ) ) = f(x)</b> for each <b>x</b> from <b>S</b> , where <b>g</b> is repeated exactly <b>d</b> times.
</p><p></p><p>
You are given some bijection <b>f : S --&gt; S</b> and a positive integer <b>D</b>. You need to find the number of those <b>d &lt;= D</b> such that <b>f</b> is <b>d</b>-power permutation.

<h3>Input</h3>
</p><p> The first line contains a single positive integer <b>T &lt;= 10</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains two positive integers <b>N</b> and <b>D</b>, where <b>N &lt;= 700</b> and <b>D &lt;= 10<sup>18</sup></b>. The second line contains <b>N</b> space-separated integers. <b>i</b><sup>th</sup> number in the second line is the value <b>f(i)</b>. It is guaranteed that <b>f</b> is bijection from <b>S</b> onto <b>S</b>.

<h3>Output</h3>
</p><p> For each test case, output a single line containing the answer for the corresponding test case.

<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 6
1 2 3
5 10
2 1 4 5 3

<b>Output:</b>
6
3
</pre>

<h3>Explanation</h3>
In the second case the appropriate values of <b>d</b> is 1, 5 and 7.</p>    