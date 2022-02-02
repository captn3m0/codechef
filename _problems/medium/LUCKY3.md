---
{"languages_supported":{"0":"NA"},"title":"LUCKY3","category":"NA","old_version":true,"problem_code":"LUCKY3","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p> Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky and <b>5</b>, <b>17</b>, <b>467</b> are not.

</p><p> Chef also use term <b>"lucky sum"</b>. Lucky sum is an operation between two integers. Let the first integer is <b>A</b>, <b>A[i]</b> equals <b>i-th</b> digit of <b>A</b> (0-base numeration, from right to left) and the second integer is <b>B</b>, <b>B[i]</b> equals to <b>i-th</b> digit of <b>B</b>. Then the lucky sum of <b>A</b> and <b>B</b> is equal to <b>C</b>, <b>C[i] = max(A[i], B[i])</b>. If <b>i</b> is greater than or equal to size of integer, the <b>i-th</b> digit is equal to <b>0</b>. For example, the lucky sum of <b>47</b> and <b>729</b> equals <b>749</b>, the lucky sum of <b>74</b> and <b>92</b> and <b>477</b> equals <b>497</b>.

</p><p> Chef has an array <b>W</b> of integers. Find a number of non-empty subsequences of <b>W</b> such that the lucky sum of integers in that subsequences is a lucky number.

</p><p> Subsequence of <b>W</b> is created by erasing some number (probably zero) elements from <b>W</b>.

<h3>Input</h3>
</p><p>First line contains one number <b>T</b>, number of test cases. Each test is formed as follows: first line contains integer <b>n</b> - number of integers in <b>W</b>, next line contains <b>n</b> integers - array <b>W</b> for corresponding test.

<h3>Output</h3>
</p><p>For each <b>T</b> test cases print one integer - result for the corresponding test.

<h3>Constraints</h3>
</p><p>
1 &lt;= <b>T</b> &lt;= 10
</p><p>
1 &lt;= <b>n</b> &lt;= 50
</p><p>
1 &lt;= <b>Wi</b> &lt; 10^9

<h3>Example</h3>

<pre>
<b>Input:</b>
2
2
4 7
3
43 87 44

<b>Output:</b>
3
2
</pre></p>    