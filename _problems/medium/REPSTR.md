---
{"languages_supported":{"0":"NA"},"title":"REPSTR","category":"NA","old_version":true,"problem_code":"REPSTR","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Given a string S (containing at most 10<sup>5</sup> lowercase English letters). You are requested to find out from continuous substrings a string having length from L to H, which appears the most times; if there are more than one answer, find the most length.</p>

<h3>Input</h3>
<p>There are several test cases (fifteen at most), each formed as follows:
<ul>
<li>The first line contains two positive integers L, H.</li>
<li>The second line contains the string S.</li>
</ul>
The input is ended with L = H = 0.
</p>

<h3>Output</h3>
<p>For each test case, output on a line two integers which are the number of times appearing and the length of the found string, respectively.</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
3 5
aabcbcbca
3 5
baaaababababbababbab
1 4
abcd
0 0


<b>Output:</b>
2 4
6 3
1 4
</pre>

<h3>Explanation</h3>
Case #1: <b>bcbc</b> occurs twice - at position 3 and position 5 (occurrences may overlap).<br />
Case #2: <b>bab</b> occurs 6 times.<br />
Case #3: <b>abcd</b> occurs 1 time.<br />    