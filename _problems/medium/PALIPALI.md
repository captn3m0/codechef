---
{"languages_supported":{"0":"NA"},"title":"PALIPALI","category":"NA","old_version":true,"problem_code":"PALIPALI","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
A string is called beautiful if it has the form <b>AA<sup>r</sup>AA<sup>r</sup></b> where <b>A</b> is some non-empty string and <b>A<sup>r</sup></b> is the reversed <b>A</b>.
You are given a string <b>S</b> composed only of lowercase letters of the English alphabet. Find the number of its beautiful substrings. Equal substrings in different positions are considered different. For example, the string <b>aaaaa</b> has <b>2</b> different substrings because we have beautiful substring <b>aaaa</b> in two different positions.

<h3>Input</h3>
</p><p> The first line contains a single integer <b>T &lt;= 10</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a non-empty string composed only of lowercase letters of the English alphabet. The length of the string is not greater than <b>100000</b>.

<h3>Output</h3>
</p><p> For each test case, output a single line containing the number of beautiful substrings of the corresponding string.

<h3>Example</h3>

<pre>
<b>Input:</b>
6
aaaa
aaaaa
abbaabba
abbaabb
abaaba
xxyyxxxxyyxx

<b>Output:</b>
1
2
1
0
0
2
</pre></p>    