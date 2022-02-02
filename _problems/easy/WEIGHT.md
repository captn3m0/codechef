---
{"languages_supported":{"0":"NA"},"title":"WEIGHT","category":"NA","old_version":true,"problem_code":"WEIGHT","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><h3>Statement</h3>

Let us denote an <b>n</b> digit decimal number by a<sub>1</sub>a<sub>2</sub>a<sub>3</sub>...a<sub>n</sub> with the condition that each a<sub>i</sub> should be between 0 and 9 inclusive except a<sub>1</sub> which should be between 1 and 9 inclusive. The weight of such a number is defined as the sum of absolute difference between adjacent numbers. Precisely the weight can be defined as,<br />
<pre>

	weight = 0
	For i = 1 to n-1
  		weight = weight + ABS(a<sub>i+1</sub> - a<sub>i</sub>)


</pre>
Here ABS is the absolute value of the argument.<br />
Given <i>n</i> and a weight <i>w</i>, find all the <i>n</i> digit numbers having a weight <i>w</i>. Since the answer could be very large, print the answer modulo 1000007.<br />
<br />
<h3>Input Format:</h3><br />
The first line contains one integer <b>t</b>, the number of testcases. (1 &lt;= <b>t</b> &lt;= 150) <br />
This will be followed by <b>t</b> lines each consisting of numbers <b>n</b> and <b>w</b>.<br />
<br />
<h3>Constraints:</h3><br />
<ul>
<li>2 &lt;= <b>n</b> &lt;= 20</li>
<li><b>0</b> &lt;= <b>w</b> &lt;= 200</li>
</ul>
<br />
<h3>Output Format:</h3><br />
For each test case print the answer modulo 1000007 in a separate line.<br />
<br />
<h3>Sample Input:</h3><br />
<pre>
2
10 0
2 1
</pre>
<h3>Sample Output:</h3><br />
<pre>
9
17
</pre>    