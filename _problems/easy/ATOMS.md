---
{"languages_supported":{"0":"NA"},"title":"ATOMS","category":"NA","old_version":true,"problem_code":"ATOMS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Let X be the set of all integers between 0 and n-1. Suppose we have a collection S<sub>1</sub>, S<sub>2</sub>, ..., S<sub>m</sub> of subsets of X. Say an atom A is a subset of X such that for each S<sub>i</sub> we have either A is a subset of S<sub>i</sub> or A and S<sub>i</sub> do not have any common elements.

</p><p>
Your task is to find a collection A<sub>1</sub>, ..., A<sub>k</sub> of atoms such that every item in X is in some A<sub>i</sub> and no two A<sub>i</sub>, A<sub>j</sub> with i ≠ j share a common item. Surely such a collection exists as we could create a single set {x} for each x in X. A more interesting question is to minimize k, the number of atoms.

<h3>Input</h3>
</p><p>
The first line contains a single positive integer t ≤ 30 indicating the number of test cases. Each test case begins with two integers n,m where n is the size of X and m is the number of sets S<sub>i</sub>. Then m lines follow where the i'th such line begins with an integer v<sub>i</sub> between 1 and n (inclusive) indicating the size of S<sub>i</sub>. Following this are v<sub>i</sub> distinct integers between 0 and n-1 that describe the contents of S<sub>i</sub>.

</p><p>
You are guaranteed that 1 ≤ n ≤ 100 and 1 ≤ m ≤ 
30. Furthermore, each number between 0 and n-1 will appear in at least one set S<sub>i</sub>.
<h3>Output</h3>
</p><p>
For each test case you are to output a single integer indicating the minimum number of atoms that X can be partitioned into to satisfy the constraints.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
5 2
3 0 1 2
3 2 3 4
4 3
2 0 1
2 1 2
2 2 3

<b>Output:</b>
3
4
</pre></p>    