---
{"languages_supported":{"0":"NA"},"title":"ODDBIN","category":"NA","old_version":true,"problem_code":"ODDBIN","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p align="justify">
</p><p>If P(x) is a polynomial in x with integer coefficients, let W(P(x)) = number of odd coefficients of P(x).</p>
<p>Given a<sub>1</sub>, a<sub>2,</sub> ... , a<sub>m</sub>, find W( (1+x)<sup>a<sub>1</sub></sup> + (1+x)<sup>a<sub>2</sub></sup> + ... + (1+x)<sup>a<sub>m</sub></sup> ).</p>

<h3>Input</h3>
<p>First line contains TC, the number of test cases.<br />Each test case consists of a single line in the format: <br />m a<sub>1</sub> a<sub>2</sub> ... a<sub>m</sub></p>
<h3><strong>Limits</strong></h3>
<p>1 &lt;= m &lt;= 15<br />0 &lt;= a<sub>i</sub> &lt; 2<sup>60</sup><br />1 &lt;= TC &lt;= 1000</p>

<h3>Output</h3>
<p>Output one line per test case, the value W( (1+x)<sup>a<sub>1</sub></sup> + (1+x)<sup>a<sub>2</sub></sup> + ... + (1+x)<sup>a<sub>m</sub></sup> ).</p>
<h3>Example</h3>

<pre><strong>Input:</strong> <br />4<br />1 1<br />1 3<br />2 1 3<br />3 1 2 3
<br /><strong>Output:</strong> <br />2<br />4<br />2<br />2<br /><br /></pre>
<h3>Explanation</h3>
<pre>(1+x) + (1+x)<sup>3</sup> = 2 + 4x + 3x<sup>2</sup> + x<sup>3</sup>. Hence the output for "2 1 3" is 2. (2 odd coefficients)<br />(1+x) + (1+x)<sup>2</sup> + (1+x)<sup>3</sup> = 3 + 6x + 4x<sup>2</sup> + x<sup>3</sup>. Hence the output for "3 1 2 3" is 2.<br /></pre>    