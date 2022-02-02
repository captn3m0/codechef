---
{"languages_supported":{"0":"NA"},"title":"PUZZLES","category":"NA","old_version":true,"problem_code":"PUZZLES","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>When things slow down in the kitchen, the Chef likes to do puzzles he finds in the newspaper until more orders arrive. Today, a new type of puzzle has been featured and the Chef needs help solving it.</p>
<p>In this puzzle, a series of groups of non-zero integers are given where each group has exactly three integers. Furthermore, for each positive integer k, the number of groups including k plus the number of groups including -k does not exceed 3. The goal is to assign, for each positive integer k, either the character 'T' or 'F' so that every group of three integers has</p>
<ul>
<li>at least one negative integer k such that |k| is assigned 'F', or</li>
<li>at least one positive integer k such that k is assigned 'T'</li>
</ul>
<p> </p>
<p>Finally, you are guaranteed that the absolute values the three integers in any particular group are all distinct. Now, newspaper puzzles are only fun if they are solvable so you are guaranteed that there is a solution. Your task is to find such an assignment of 'T' or 'F' values to the positive integers meeting the above requirements.</p>
<h3>Input</h3>
<p>The first line consists of a single integer denoting the number of test cases (at most 30). The first line for each test case consists of two integers C and V. Following this are C lines, one per group of integers in the puzzle. Each such line consisting of 3 non-zero integers between -V and V. Furthermore, the absolute values of these three integers are distinct.</p>
<p>Finally, the input is such that for every integer k, the total number of groups containing either k or -k is at most 3.</p>
<p>Bounds: 1 ≤ C ≤ 1000 and 3 ≤ V ≤ 3000.</p>
<h3>Output</h3>
<p>The output for each test case is a single line consisting of V characters 'T' or 'F'. These characters should appear consecutively with no spaces between. The i'th such character is what positive integer i is assigned. This should be done so that each group of three integers has the property described above.</p>
<p>If an integer k between 1 and V does not have either k or -k appearing in a group of three integers then you should still assign it a character 'T' or 'F'. Finally, if there are multiple solutions then any will do.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
1 2 3
1 -2 -3
-1 2 -3
2 7
5 -2 1
3 -1 2

<b>Output:</b>
TFF
TFTFFTF
</pre>
<h3>Explanation of Output</h3>
<p>In the first case, the first two groups include 1 which is assigned 'T', and the last group contains -3 and 3 is assigned 'F' so all groups meet the criteria. In the second case, the first group has 1 which is assigned 'T' and the second group has 3 which is also assigned 'T' so all groups in this test case also meet the criteria.</p>
<p></p>    