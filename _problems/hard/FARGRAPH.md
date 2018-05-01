---
category_name: hard
problem_code: FARGRAPH
problem_name: 'Far Graphs'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin3
problem_tester: kingofnumbers
date_added: 18-12-2017
tags:
    - admin3
    - cook90
    - graph
    - medium
editorial_url: 'https://discuss.codechef.com/problems/FARGRAPH'
time:
    view_start_date: 1516559400
    submit_start_date: 1516559400
    visible_start_date: 1516559400
    end_date: 1735669800
    current: 1525198966
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK90/mandarin/FARGRAPH.pdf), [Russian](http://www.codechef.com/download/translated/COOK90/russian/FARGRAPH.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK90/vietnamese/FARGRAPH.pdf) as well.

Consider a positive even integer **L** and **N** distinct integers **a1, a2, ..., aN** such that **| ai - aj |** ≤ **L** for all 1 ≤ **i**, **j** ≤ **N**. Now, we define a _far graph_ induced by **L** and **a1..N** as a graph with **N** vertices (numbered 1 through **N**) satisfying the following condition: for each pair of vertices **u** and **v**, there is an undirected edge between **u** and **v** if and only if **| au - av |** ≥ **L/2**.

Given a simple graph **G**, you should find integers **L** and **a1, a2, ..., aN** such that **G** is a far graph induced by them, or determine that no such integers exist.

### Input

- The first line of the input contains a single integer **T** denoting the number of testcases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **M** denoting the number of vertices and the number of edges in the input graph **G** respectively.
- Each of the following **M** lines contains two space-separated integers **u** and **v** denoting an edge between vertices **u** and **v**.

### Output

For each test case:- If it's impossible to choose valid numbers **L** and **a1, a2, ..., aN** such that the graph **G** is a far graph, print a single line containing a single string "No" (without quotes).
- Otherwise, print two lines.
- The first line should contain a single string "Yes" (without quotes).
- The second line should contain **N+1** space-separated integers **L, a1, a2, ..., aN** such that **G** is a far graph and the following constraints hold: 
  - 1 ≤ **L** ≤ 2 · 109
  - **L** is even
  - all **ai** are distinct
  - -109 ≤ **ai** ≤ 109 for each valid **i**
  
  It's guaranteed that if **G** is an induced far graph, then it's possible to choose **L, a1, a2, ..., aN** satisfying these constraints.
- If there are multiple solutions, you may output any one.

### Constraints

- 1 ≤ **T** ≤ 5
- 2 ≤ **N** ≤ 1000
- 1 ≤ **M** ≤ 106
- 1 ≤ **u**, **v** ≤ **N**
- the graph will not contain multiple edges or self-loops

### Example

<pre><b>Input:</b>
3
3 3
1 2
2 3
3 1
7 8
1 6
1 4
3 2
6 3
3 4
4 5
4 7
5 6
4 6
1 2
1 3
1 4
2 3
2 4
3 4

<b>Output:</b>
Yes
2 12 10 11
Yes
20 7 12 1 20 4 17 10
No
</pre>### Explanation

**Example case 1:** There are 3 vertices connected in a cycle. We can take **L** = 2, **a1** = 12, **a2** = 10 and **a3** = 11. Since | 12 - 10 | ≥ 1, | 10 - 11 | ≥ 1, and | 11 - 12 | ≥ 1, this means that there are edges between pairs of vertices (1, 2), (2, 3) and (3, 1) respectively. This is exactly the given graph, so the answer is "Yes", and we print these values.

**Example case 2:** The figure below shows the graph with the values mentioned in the sample output.

![](https://codechef_shared.s3.amazonaws.com/download/upload/ACM17GWR/FARGRAPH.png)We take **L** = 20. You can check that there is an edge between two vertices if and only if the values differ by at least **L/2** = 10.

**Example case 3:** No matter what values we try, we will not be able to get the input graph as the induced far graph. Hence the answer is "No".
