---
category_name: medium
problem_code: YFG
problem_name: 'Y Figures'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: kr_abhinav
problem_tester: null
date_added: 26-03-2018
tags:
    - codemelange
    - dsu
    - kr_abhinav
    - medium
    - sack
editorial_url: 'https://discuss.codechef.com/problems/YFG'
time:
    view_start_date: 1522873800
    submit_start_date: 1522873800
    visible_start_date: 1522873800
    end_date: 1735669800
    current: 1525454402
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a tree with **N** nodes, numbered from 1 to **N**. It is rooted at node 1, and each node i is labelled with a positive integer **labeli**.

‘Y Figures’ of a node X are defined as the number of ordered triplets of nodes (A, B, C) satisfying:

- **labelA** = **labelB** = **labelC** = **labelX**.
- A is an ancestor of X.
- B and C are in the subtree of X and LCA(B,C) = X.
- A, B, C, X are pairwise distinct.

You need to answer Q queries of the form ‘X Z’. For each query, Change the label of node X to Z and report the number of ‘Y Figures’ of the node X.

**Note:** Changes are not persistent. Each query is independent of every other query.

It is advised to use fast I/O methods.

### Input

- First Line of Input consists of a single integer **T**, the number of test cases.
- First line of every test case contains of two Integers, **N** and **Q**, denoting number of nodes in the tree and the number of queries respectively.
- The second line of input consists of **N** integers, where the i-th integer represents **labeli**, the label of node i (1-indexed).
- The next **N - 1** lines contain two integers, **a** and **b**, denoting that an edge exists between node **a** and node **b**.
- The next **Q** lines contain two integers, **X** and **Z** where **X** is the node and **Z** is the new label of the node for the current query.

### Output

- For every testcase, output **Q** lines, where each line is the answer to each query in the order of input.

### Constraints

- 1 ≤ **T** ≤ 1000
- 1 ≤ Sum of all **N** ≤ 200000
- 1 ≤ **a**, **b** ≤ **N**
- 1 ≤ **X** ≤ **N**
- 1 ≤ Sum of all **Q** ≤ 100000
- 1 ≤ **Z, labeli** ≤ 1000000000

### Example

<pre><b>Input:</b>
1
6 2
1 1 1 1 1 1
1 2
2 3
3 4
2 5
2 6
2 1
2 2

<b>Output:</b>
10
0
</pre>
### Explanation

For query ‘2 1’, the satisfying triplets are (1,3,5), (1,3,6), (1,4,5), (1,4,6), (1,5,6), (1,5,3), (1,5,4), (1,6,5), (1,6,3) and (1,6,4).

For query ‘2 2’, there are no satisfying triplets.
