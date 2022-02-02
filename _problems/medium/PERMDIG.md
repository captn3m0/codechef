---
{"languages_supported":{"0":"NA"},"title":"PERMDIG","category":"NA","old_version":true,"problem_code":"PERMDIG","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p align="justify"> </p>
<p>You are given three positive integers <b>A</b>, <b>B</b> and <b>C</b> written in base <b>X &lt;= 10</b> without leading zeros. In how many ways you can permute the digits of <b>A</b> and permute the digits of <b>B</b> such that their sum will be equal to <b>C</b> (in base <b>X</b> of course)? Leading zeros after permutation are allowed. So for example for <b>A=101</b> written in some base all possible ways to permute its digits are: <b>011, 101, 110</b>. <br /><br /> <b>Remark.</b> For positive integer <b>A</b> and base <b>X &gt;= 2</b> the digits of <b>A</b> in base <b>X</b> are uniquely determined by the equality <b>A = A<sub>k</sub> * X<sup>k</sup> + A<sub>k-1</sub> * X<sup>k - 1</sup> + ... + A<sub>1</sub> * X + A<sub>0</sub> </b> and inequalities <b>0 &lt;= A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>k</sub> &lt; X</b> and <b>A<sub>k</sub> &gt; 0 </b>. Then <b>A</b> is written as <b>0...0A<sub>k</sub>A<sub>k-1</sub>...A<sub>1</sub>A<sub>0</sub></b> in base <b>X</b>. Here an arbitrary non-negative number of leading zeros is allowed. If there are no leading zeros we say that <b>A</b> is written in canonical form.</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains four space separated positive integers <b>X, A, B</b> and <b>C</b>, where <b>A, B, C</b> is written in base <b>X</b> without leading zeros (that is in canonical form).</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of possible permutations of digits of <b>A</b> and <b>B</b> such that their sum is equal to <b>C</b>.</p>
<h3>Constraints</h3>
<p><b> 1 &lt;= T &lt;= 10 <br /> 2 &lt;= X &lt;= 10 <br /> 1 &lt;= len(A), len(B), len(C) &lt;= 80/X <br /></b> where <b>len(N)</b> stands for  the number of digits of number <b>N</b> when it is written in base <b>X</b> in canonical form.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
2 10 10 11
3 2 2 11
10 101 12 23
10 10 100 1000
10 43716 70251864 71130699

<b>Output:</b>
2
1
1
0
4
</pre>
<h3>Explanation</h3>
<p>In the first case the appropriate ways are 01+10=11 and 10+01=11.</p>
<p>In the third case the only appropriate way is 011+12=23.</p>    