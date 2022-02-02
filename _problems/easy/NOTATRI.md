---
{"languages_supported":{"0":"NA"},"title":"NOTATRI","category":"NA","old_version":true,"problem_code":"NOTATRI","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p><b>A tutorial for this problem is available <a title="here" href="/wiki/tutorial-not-triangle">here</a></b>.</p>
<p>You have N (3 ≤ N ≤ 2,000) wooden sticks, which are labeled from 1 to N. The i-th stick has a length of L<sub>i</sub> (1 ≤ L<sub>i</sub> ≤ 1,000,000). Your friend has challenged you to a simple game: you will pick three sticks at random, and if your friend can form a triangle with them (degenerate triangles included), he wins; otherwise, you win. You are not sure if your friend is trying to trick you, so you would like to determine your chances of winning by computing the number of ways you could choose three sticks (regardless of order) such that it is impossible to form a triangle with them.</p>
<h3>Input</h3>
<p>The input file consists of multiple test cases. Each test case starts with the single integer N, followed by a line with the integers L<sub>1</sub>, ..., L<sub>N</sub>. The input is terminated with N = 0, which should not be processed.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of triples.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
4 2 10
3
1 2 3
4
5 2 9 6
0

<b>Output:</b>
1
0
2

</pre>
<p>For the first test case, 4 + 2 &lt; 10, so you will win with the one available triple. For the second case, 1 + 2 is equal to 3; since degenerate triangles are allowed, the answer is 0.</p>
<p></p>    