---
{"languages_supported":{"0":"NA"},"title":"TPRODUCT","category":"NA","old_version":true,"problem_code":"TPRODUCT","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Given a complete binary tree with the height of H, we index the nodes respectively top-down and left-right from 1. The i-th node stores a positive integer V<sub>i</sub>. Define P<sub>i</sub> as follows: P<sub>i</sub>=V<sub>i</sub> if the i-th node is a leaf, otherwise P<sub>i</sub>=max(V<sub>i</sub>*P<sub>L</sub>, V<sub>i</sub>*P<sub>R</sub>), where L and R are the indices of the left and right children of i, respectively. Your task is to caculate the value of P<sub>1</sub>.
</p>

<h3>Input</h3>
<p>There are several test cases (fifteen at most), each formed as follows:
<ul>
<li>The first line contains a positive integer H (H ≤ 15).</li>
<li>The second line contains 2<sup>H</sup>-1 positive integers (each having a value of 10<sup>9</sup> at most), the i-th integer shows the value of V<sub>i</sub>.</li>
</ul>
The input is ended with H = 0.
</p>

<h3>Output</h3>
<p>For each test case, output on a line an integer which is the respective value of P<sub>1</sub> found, by modulo of 1,000,000,007.
</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
1 2 3
3
3 1 5 2 6 4 7
0

<b>Output:</b>
3
105

</pre>

Explanation:<br />
The second test case is constructed as follows:
<pre><code>
     3
    / \
   /   \
  1     5
 / \   / \
2   6 4   7
</code></pre>    