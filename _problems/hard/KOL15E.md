---
category_name: hard
problem_code: KOL15E
problem_name: 'Weird Paths in a tree'
languages_supported:
    - C
    - CPP14
    - JAVA
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: devuy11
problem_tester: null
date_added: 14-10-2015
tags:
    - acmkol15
    - devuy11
    - dynamic
    - medium
    - rooted
    - treeroot
editorial_url: 'http://discuss.codechef.com/problems/KOL15E'
time:
    view_start_date: 1446296400
    submit_start_date: 1446296400
    visible_start_date: 1446296400
    end_date: 1735669800
    current: 1525454408
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a tree. Each node of the tree is assigned a distinct value.

A path in the tree is considered weird if the values in the path increase and decrease alternatively.

For example: Consider a straight chain of nodes 1→3→2→4→5 with value assigned to any node **i** being **i** itself. Then the path 3→2→4, 1→3→2, etc. are weird whereas 1→3→2→4→5 is not weird because 2→4 and 4→5 are both increasing.

You are given **Q** queries. Each query contains the root of the tree, **R**, and an arbitrary node, **S**. For each query, you need to find the sum of all weird paths in the subtree rooted at **S** with respect to **R** being the root of the original tree. Sum of a path is defined as the sum of values assigned to all nodes on that path. As this sum could be very large, output it modulo **M**.

**Note:**- Paths of length 2 are always considered weird.
- A path is always defined for more than 1 node.

### Input

The first line of input contains 2 integers, **N** and **M**.

Second line contains **N** space separated numbers where the **i**th number denotes the value of the **i**th node. These **N** numbers are permutation of the sequence of numbers from **1** to **N**.

For the next **N-1** line, each line contains 2 numbers **a** and **b**, denoting that node **a** is connected to node **b**.

Next line contains a single integer **Q**, the number of queries to follow.

Lastly, **Q** lines follow, where each line contains two space separated integers, **R** and **S**.

### Output

For each query, output the sum modulo **M**.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **M** ≤ **105**
- **1** ≤ **R** ≤ **N**
- **1** ≤ **S** ≤ **N**
- **1** ≤ **Q** ≤ **105**

### Example

<pre><b>Input:</b>
6 100000
1 2 3 4 5 6
1 2
2 5
1 4
3 4
1 6
5
3 1
5 2
1 6
2 4
5 1

<b>Output:</b>
26
81
0
7
52

</pre>
### Explanation

**Query 1:** Nodes in the subtree 1 are \[1,2,5,6\]. Valid Paths are 5→2 , 2→1, 1→6, 2→1→6 . Corresponding sums are 7, 3, 7, and 9. Total sum is 26.

**Note:**- A Path lies in a subtree if all nodes on the path are in the subtree.
