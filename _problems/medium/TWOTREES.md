---
category_name: medium
problem_code: TWOTREES
problem_name: 'A tale of two trees'
languages_supported:
    - C
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '1.2'
source_sizelimit: '50000'
problem_author: balajiganapath
problem_tester: null
date_added: 30-10-2017
tags:
    - balajiganapath
time:
    view_start_date: 1509900600
    submit_start_date: 1509900600
    visible_start_date: 1509900600
    end_date: 1735669800
    current: 1525454400
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.There are two trees; tree 1 has **N1** nodes which are numbered from 1 to **N1**, and tree 2 has **N2** nodes which are numbered from 1 to **N2**. Each tree is rooted at its node 1.

You should perform the following operation: choose an arbitrary node **u** in tree 2, remove the subtree of node **u** (the subtree formed by node **u** and all its direct or indirect descendants) from tree 2 and add the subtree to any leaf of tree 1 (ie. **u** should become a child of some leaf in tree 1). Note that **u** can also be the root of tree 2. Afterwards, discard the rest of tree 2 and keep only the modified tree 1. How many distinct trees can you obtain by performing this operation exactly once?

Note that tree 1 will remain rooted in its own node 1. Two trees are considered identical if you can reorder (without changing the root) the children in each node and renumber the nodes (except the root) to make them equal. (Intuitively, the structure of the trees must be same - we're dealing with rooted, unlabelled, unordered isomorphic trees.)

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space-separated integers **N1** and **N2** denoting the number of nodes in tree 1 and tree 2 respectively.

The second line contains **N1 - 1** space-separated integers **A2**, **A3**, ..., **AN1** with each **Ai** denoting the parent of node **i** in tree 1

The third line contains **N2 - 1** space-separated integers **B2**, **B3**, ..., **BN2** with each **Bi** denoting the parent of node **i** in tree 2

### Output

For each test case, output a single line containing the number of distinct trees obtained by performing the above operation exactly once.

### Constraints

- **1** ≤ **T** ≤ **105**
- **2** ≤ **N1, N2** ≤ **105**
- The sum of **N1** across all test cases does not exceed **106**
- The sum of **N2** across all test cases does not exceed **106**
- **1** ≤ **Ai**, **Bi** < **i**

### Example

<pre><b>Input:</b>
2
3 3
1 1
1 1
3 4
1 1
1 1 2

<b>Output:</b>
2
3
</pre>### Explanation

**Example case 1.** There are two distinct trees that can be formed: the first type is making the entire tree 2 a child of one of the 2 leaves of tree 2 and the other being making one of the leaves of tree 2 a child of one of the leaves of tree 1. Note that which leaf doesn't matter as they can be rearranged to obtain the other way (i.e. if we add it to left leaf, then it is same as adding to the right leaf as we can rearrange the leafs to make it same)

**Example case 2.** The 3 distinct trees are formed by: make the entire tree 2, subtree rooted at node 2 or any of the leaf of tree 2 the child of a leaf of tree 1
