---
category_name: medium
problem_code: CHN06
problem_name: 'King Animesh decides to have a voyage to the sun'
languages_supported:
    - C
    - CPP14
    - JAVA
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 17-01-2016
tags:
    - acm15chn
    - admin2
    - graph
    - perfect
time:
    view_start_date: 1453546800
    submit_start_date: 1453546800
    visible_start_date: 1453546800
    end_date: 1735669800
    current: 1493557565
layout: problem
---
All submissions for this problem are available.King Animesh has decided to go on a voyage to the Sun. He has decided to take only one of his courtiers with him. Everyone knows that the king has two favorite courtiers, Arjun and Praveen, and so they are competing between themselves to go with the King. Arjun is a great archer, so he has decided to impress the king by demonstrating his perfect abilities. Praveen is smart, he knows exactly what the King likes - Graphs of Perfection. Graphs of Perfection are weighted complete bipartite graphs with **2\*N** vertices, which have a property that **every Perfect Matching in the graph has the same cost**. The cost of a Perfect Matching is just the sum of costs of all the **N** edges in it.

Such graphs are rare, but Praveen had found one in the Forest of Perfection and he had kept it carefully in a box. The **N** nodes in the left column are labelled **{1,2, … ,N}**, and the **N** nodes in the right column are labelled **{N+1, N+2, … , 2\*N}**. The cost associated with an edge between node **u** in left column and node **v** in right column, is denoted by **Cuv**.

Unfortunately, when it is Praveen's turn to present the graph to the King, he realizes that his rival Arjun has made a hole in the box and as a result, some of the edges have fallen off. He tries to remain calm and presents the graph to the King claiming that he can assign costs to the missing edges in such a way that the graph becomes a Graph of Perfection again. Praveen knows that the remaining edges have a magical property - **there is a unique way to assign costs to the missing edges such that the graph becomes a Graph of Perfection**. But he doesn't tell that to the King, and so the King gets highly impressed by his claim and tells him to report the sum of the squares of all the **N2** edge costs modulo **109+7**. Alas! Praveen is not _that_ smart, but we hope you are! You are given the costs of the edges which are still in the box; please help Praveen find the required sum.

**Note:**

- A complete bipartite graph means that there is an edge between every node in the left column and every node in the right column.
- A Perfect Matching in this graph is a set of **N** edges such that no two edges among them have any end point in common.

### Input

- The first line contains two integers: **N** and **E**.
- The next **E** lines of the test case contain three integers each: **u**, **v** and **x**. This signifies Praveen knows the cost of the edge from vertex **u** in the left column to the vertex **v** in the right column, and that cost is equal to **x**. That is, **Cuv** = **x**
- It is guaranteed that there is a unique way to assign costs to the missing edges such that the given graph in the input becomes a Graph of Perfection.

### Output

- For each test case, output a single integer in a line, corresponding to the answer of the problem.

### Constraints

- 1 ≤ **N** ≤ **105**
- 1 ≤ **E** ≤ **106**
- 1 ≤ **u** ≤ **N**
- **N+1** ≤ **v** ≤ **2\*N**
- 1 ≤ **x** ≤ **105**, but note that the edge costs which are not in the input need not satisfy this constraint. That is, this constraint does not apply for the missing edges.

### Example

```
<b>Input:</b>
2 3
1 3 2
1 4 3
2 3 5

<b>Output:</b>
74

```
### Explanation

Out of the 4 edges, the costs of 3 edges are already given to us. The edge (2, 4) must cost 6 to satisfy the "All Perfect Matchings should have equal costs" constraint. Therefore, now, the sum of the squares of the costs of all the 4 edges is (22 + 32 + 52 + 62) = (4 + 9 + 25 + 36) = 74