---
{"languages_supported":{"0":"NA"},"title":"PARSIN","category":"NA","old_version":true,"problem_code":"PARSIN","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Chef Ciel is participating an arithmetic contest now.
Why?
Because of the top prize for the contest, a limited edition toaster oven.
</p>

<p>
She must calculate the values <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) of function named <i>sine partition function</i> to be the first place.
The sine partition function <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) is defined by
</p>
<img src="http://www.codechef.com/download/PARSIN.png" width="513" height="74" />

<p>
Examples are following:
</p>
<p>
 <strong>f</strong>(1, 3, <strong>X</strong>) = sin(3<strong>X</strong>)
</p>
<p>
 <strong>f</strong>(2, 3, <strong>X</strong>) = sin(0) sin(3<strong>X</strong>) + sin(<strong>X</strong>) sin(2<strong>X</strong>) + sin(2<strong>X</strong>) sin(<strong>X</strong>) + sin(3<strong>X</strong>) sin(0) = 2 sin(<strong>X</strong>) sin(2<strong>X</strong>)
</p>
<p>
 <strong>f</strong>(3, 1, <strong>X</strong>) = sin(0) sin(0) sin(<strong>X</strong>) + sin(0) sin(<strong>X</strong>) sin(0) + sin(<strong>X</strong>) sin(0) sin(0) = 0
</p>

<p>
Ciel is a great chef, however she is not good at arithmetic.
For given <strong>M</strong>, <strong>N</strong> and <strong>X</strong>, your work is calculating the value of <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>).
</p>

<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.
Then <strong>T</strong> test cases follow.
Each test case has 2 integers <strong>M</strong>, <strong>N</strong> and a real number <strong>X</strong>.
<strong>X</strong> has at most two digits after the decimal point.
</p>

<h3>Output</h3>
<p>
For each test case, print the value of <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>).
This value must have an absolute or relative error no more than 10^-1.
You can safely assume the magnitude of the answer is at most 10^300.
</p>

<h3>Constraints</h3>
<p>
1 &lt;= <strong>T</strong> &lt;= 10<br />
1 &lt;= <strong>M</strong> &lt;= 30<br />
1 &lt;= <strong>N</strong> &lt;= 1000000000 (10^9)<br />
0 &lt;= <strong>X</strong> &lt;= 6.28 &lt; 2*PI<br />
</p>

<h3>Sample Input</h3>
<pre>5
1 3 1.57
2 3 0
3 1 2.12
1 1 5
1 30 0.3</pre>

<h3>Sample Output</h3>
<pre>-0.99999714638
0
0
-0.959
0.412</pre>    