---
{"languages_supported":{"0":"NA"},"title":"SHORT2","category":"NA","old_version":true,"problem_code":"SHORT2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Given a prime number <b>p</b>, find the number of pairs of integers (<b>a</b>, <b>b</b>) such that <b>p</b> &lt; <b>a</b>, <b>p</b> &lt; <b>b</b> and <b>ab</b> is divisible by <b>(a-p)(b-p)</b>.

<h3>Input</h3>
</p><p>The first line contains the number of test cases <b>t</b> (1 ≤ <b>t</b> ≤ 5). Then <b>t</b> test cases follow, each test case consists of a line containing one prime integer <b>p</b> (1 &lt; <b>p</b> &lt; 10<sup>12</sup>).

<h3>Output</h3>
</p><p>For each test case output one line containing the required number. It's guaranteed that this number won't exceed 2<sup>63</sup>-1.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
2
23
59

<b>Output:</b>
14
80
116

<b>Explanation:</b>
</pre>
</p><p>In the first test case the sought pairs are (3,3), (3,4), (3,5), (3,8), (4,3), (4,4), (4,6), (5,3), (5,12), (6,4), (6,8), (8,3), (8,6) and (12,5).</p>    