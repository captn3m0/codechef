---
{"languages_supported":{"0":"NA"},"title":"SEQUENCE","category":"NA","old_version":true,"problem_code":"SEQUENCE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
For a fixed integer n, let x<sub>1</sub>, x<sub>2</sub>, ..., x<sub>2<sup>n</sup></sub> be a sequence that contains each of the 2<sup>n</sup> different n bit integers exactly once. To be precise, we say an integer is an n bit integer if it can be expressed in binary with exactly n bits (with, perhaps, some leading zeros). We say the sequence is <i>gradual</i> if two consecutive numbers differ in exactly one bit when written in binary and the first and last numbers also differ in exactly one bit in their binary representations.

</p><p>
Your job is to generate such a sequence. This is normally a fairly standard exercise, but there is one extra constraint. For some reason, there are two particular n bit numbers a and b such that it is illegal to have a and b appear consecutively (in either order) in the sequence and it is illegal to have one of a or b at the start of the sequence and the other at the end.

</p><p>
For example, if n = 2, a = 1, and b = 3 then the sequence 0, 2, 3, 1 is not allowed since a and b are consecutive. The sequence 1, 0, 2, 3 is also not allowed since a is at the beginning and b is at the end. Finally, the sequence 0, 1, 2, 3 is also not allowed since two bits change when going from 1 to 2 and when going from 3 to 0.

<h3>Input</h3>
</p><p>The first line contains a single positive integer t ≤ 30 denoting the number of test cases to follow. Each test case consists of three numbers n, a, b. Here, n is the number of bits (between 1 and 15, inclusive) and a and b are distinct integers between 0 and 2<sup>n</sup>-1 (inclusive).

<h3>Output</h3>
</p><p>
The output for each test case is a single line consisting of a sequence of 2<sup>n</sup> integers. This should be such that the sequence is gradual according to the above description and contains all n bit integers. Furthermore, numbers a and b should not appear consecutively (in either order) nor does the start of the sequence contain one of a or b and the end contain the other. If there are many such sequences then any will do. On the other hand, if there is no such sequence then simply print a single line containing -1.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
2 0 1
3 1 2
3 5 7

<b>Output:</b>
-1
0 1 3 2 6 7 5 4
1 3 7 6 2 0 4 5

</pre></p>    