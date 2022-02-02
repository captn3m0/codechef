---
{"languages_supported":{"0":"NA"},"title":"DIGITS2","category":"NA","old_version":true,"problem_code":"DIGITS2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Chef has called on you many times in the past to solve unusual tasks that
seem irrelevant to cooking, and today is no different.
Today Chef demands that you find integers whose product of digits is equal to a given integer,
but in bases besides 10.
Given a string S, you are to determine the smallest positive integer I such that there
exists a base B&gt;1 for which the product of the digits of I
gives the integer represented by S.
For example, if S="11", then the smallest I is 8, because the base 3
representation of I is 22, and in base 3 2*2=11.
</p>
<p>Formally, your task is this: find the smallest integer I such that there exists
an integer B&gt;1 and integers A<sub>i</sub> for which:
<ul>
<li>A<sub>n</sub>*B<sup>n</sup>+A<sub>n-1</sub>*B<sup>n-1</sup>+...+A<sub>1</sub>*B+A<sub>0</sub> = I</li>
<li>0≤A<sub>i</sub>&lt;B for all i</li>
<li>A<sub>n</sub>≠0</li>
<li>A<sub>n</sub>*A<sub>n-1</sub>*...*A<sub>1</sub>*A<sub>0</sub> = 
S<sub>m</sub>*B<sup>m</sup>+S<sub>m-1</sub>*B<sup>m-1</sup>+...+S<sub>1</sub>*B<sup>1</sup>+S<sub>0</sub>,
where S<sub>m</sub> is the leftmost character of S, and S<sub>0</sub> is the rightmost character of S.</li>
<li>0≤S<sub>i</sub>&lt;B for all i</li>
</ul>
</p>

<h3>Input</h3>
<p>Input begins with an integer T, the number of test cases (at most 50).
Each test case consists of a single line containing a string S
comprised of 0-9 and A-Z characters.
Characters A-Z represent the decimal values 10-35, respectively.  S will have between 1 and 4 characters, and the first character will not be 0.
</p>

<h3>Output</h3>
<p>For each test case, output a single integer on a line, giving the minimum
value of I (printed in decimal).
It is guaranteed that I will fit in a 64-bit integer.</p>

<h3>Sample Input</h3>
<pre>4
9
11
7Q2
PIES
</pre>

<h3>Sample Output</h3>
<pre>9
8
15227
7845414
</pre>    