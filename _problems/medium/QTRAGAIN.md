---
category_name: medium
problem_code: QTRAGAIN
problem_name: 'Queries on tree again'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 25-11-2017
tags:
    - admin2
    - data
    - easy
    - gwr17rol
time:
    view_start_date: 1516482000
    submit_start_date: 1516482000
    visible_start_date: 1516482000
    end_date: 1735669800
    current: 1525454400
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You have a rooted tree with **N** nodes which are numbered from 1 to **N**. It is rooted at node 1. Each node has a value associated with it, which is 0 initially. The distance between two nodes is the number of edges in the unique path between them. You need to support the following two operations:

- Update operation at node **x** with value **y**: 
    - Add 2**y** to node **x**.
    - Consider every node in the subtree of **x**, and suppose d is distance from **x** to the node. If **y** - d ≥ 0, add 2(**y** - d) to the value associated with that node.
    - Consider all the ancestors of **x**, and suppose d is distance from **x** to the ancestor. If **y** - d ≥ 0, add 2(**y** - d) to the value associated with that ancestor.
- Query operation at node **x**: 
    - Output the current value associated with node **x**, modulo 109 + 7.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N, Q** denoting the number of nodes, and the number of operations respectively.
- Each of the next **N** - 1 lines contains two space-separated integers: **u**, **v**, denoting that there is an edge between nodes **u** and **v** in the tree.
- Each of the next **Q** lines contain description of an operation, which will be of one of these formats: 
    - Update operation: You will be given three space-separated integers: 1, **x**, **y**.
    - Query operation: You will be given two space-separated integers: 2, **x**.

### Output

For each Query operation, output a single integer in a new line corresponding to the answer of the query.

### Constraints

- 1 ≤ **T** ≤ 106
- 1 ≤ **N** ≤ 105
- 1 ≤ **Q** ≤ 1.5 \* 106
- 1 ≤ **u**, **v**, **x** ≤ **N**
- 1 ≤ **y** ≤ 60
- Sum of **N** over all test cases in a single file ≤ 106
- Sum of **Q** over all test cases in a single file ≤ 1.5 \* 106

### Example

<pre>
<b>Input</b>
1
4 8
1 2
2 3
2 4
1 1 2
1 2 3
1 3 1
1 4 2
2 1
2 2
2 3
2 4

<b>Output</b>
9
13
7
9
</pre>
### Explanation

Let the values associated with the nodes be v1, v2, v3, and v4.

- Initially, v1 = 0, v2= 0, v3 = 0, and v4 = 0
- After first update operation, v1 = 4, v2= 2, v3 = 1, and v4 = 1
- After second update operation, v1 = 4 + 4, v2= 2 + 8, v3 = 1 + 4, and v4 = 1 + 4
- After third update operation, v1 = 4 + 4, v2= 2 + 8 + 1, v3 = 1 + 4 + 2, and v4 = 1 + 4
- After fourth update operation, v1 = 4 + 4 + 1, v2= 2 + 8 + 1 + 2, v3 = 1 + 4 + 2, and v4 = 1 + 4 + 4

So after this, we have v1 = 9, v2 = 13, v3 = 7, and v4 = 9, and this is outputted in the following query operations.
