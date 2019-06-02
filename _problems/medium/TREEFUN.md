---
category_name: medium
problem_code: TREEFUN
problem_name: 'Tree Fun'
languages_supported:
    - C
    - 'CPP 4.9.2'
    - CPP14
    - JAVA
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: gennady.korotkevich
problem_tester: gamabunta
date_added: 18-10-2012
tags:
    - cook27
    - gennady
    - graph
    - lca
time:
    view_start_date: 1350845139
    submit_start_date: 1350845139
    visible_start_date: 1350845041
    end_date: 1735669800
    current: 1493557949
layout: problem
---
All submissions for this problem are available.David is a computer science student who loves his future profession. He is one of those who think that trees grow down, not up.

David likes connected undirected acyclic graphs, also known as trees. He especially likes solving problems about trees. Recently David found a piece of paper with a tree with **N** vertices drawn on it. He also found **M** queries on the same piece of paper, where each query was a non-empty list of some vertices of this tree. For each query, it was asked to find the number of vertices in the tree (which didn't belong to the list) such that if you removed this vertex and all edges incident to it from the tree, then all vertices from the list would belong to pairwise different connected components.

David spent seven unhappy days and six sleepless nights trying to solve this problem efficiently. He is still trying. As you're known to be a good problem solver, David's friend asked for your help. David won't sleep until he knows the answer to each query. Write a program which answers all the queries correctly.

### Input

The first line of the input contains a single integer **T**, the number of test cases (no more than 5). Each test case is described as follows. The first line contains two integers **N** and **M** (2 ≤ **N** ≤ 50000, 1 ≤ **M** ≤ 50000), the number of vertices in the tree and the number of queries, respectively. **N**-1 lines follow, describing the edges of the tree. The **ith** line contains two integers **Xi** and **Yi** (1 ≤ **Xi**, **Yi** ≤ **N**, **Xi** ≠ **Yi**), the indices of the vertices connected by the **ith** edge. Then **M** lines follow, describing the queries. The **ith** line contains an integer **Ki** (2 ≤ **Ki** ≤ **N**) followed by **Ki** distinct integers **Ai, j** (1 ≤ **Ai, j** ≤ **N**), the indices of the vertices in the **ith** query.

It is guaranteed that the given graph is a tree in all the test cases. The sum of all **Ki** in each test case doesn't exceed 100000.

### Output

For each test case output **M** lines containing a single integer each -- the answer to the corresponding query from the input.

### Example

<pre>
<b>Input:</b>
1
5 3
1 2
1 3
1 4
4 5
2 2 5
3 2 3 4
3 1 3 5

<b>Output:</b>
2
1
0
</pre>
### Explanation

In the first query, vertex 1 is such a vertex. If you remove vertex 1 and all the edges that connect 1 to other vertices, then vertices 2 and 5 will belong to separate connected components. Similarly, vertex 4 is also valid.

In the second query, vertex 1 is the only valid vertex. If you remove vertex 1 and all the edges that connect 1 to other vertices, then the connected components will be {2}, {3} and {4, 5}. It's easy to see that vertices 2 and 3 will belong to separate components, vertices 3 and 4 will belong to separate components, and vertices 2 and 4 will belong to separate components.

In the third query, you cannot remove a single vertex from the set {2, 4} (and the corresponding edges) so that any pair of vertices from the set {1, 3, 5} will be in separate connected components.
