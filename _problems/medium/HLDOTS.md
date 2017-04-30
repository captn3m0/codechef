---
category_name: medium
problem_code: HLDOTS
problem_name: 'Heavy-light Decompositions'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: furko
date_added: 23-01-2015
tags:
    - dynamic
    - ltime21
    - medium
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/HLDOTS'
time:
    view_start_date: 1424593800
    submit_start_date: 1424593800
    visible_start_date: 1424593800
    end_date: 1735669800
    current: 1493557686
layout: problem
---
All submissions for this problem are available.Heavy-light decomposition of a tree is a powerful tool that often helps in the most difficult tree data structure problems.

Heavy-light decomposition is to be built on a rooted tree. In this problem, the node with the number **1** should be considered the root of a tree. Heavy light decomposition is a colouring of edges of the tree. Each edge is either heavy or light. For each non leaf node (node having degree greater than 1), from all the edges emanating from it into the subtree rooted at this vertex should have exactly one heavy edge.

The heavy-light decomposition is called correct, if you can reach any node from the root node by using no more that **⌊ log2 N ⌋** _light_ edges, where **N** is the number of nodes in the tree.

Given a tree, calculate the number of its' correct heavy-light decompositions. As answer could be very large, please print it modulo **19101995**.

### Input

There is exactly one test case.

The first line of input consists of a single integer **N**, denoting the number of the nodes in the tree.

Each of the following **N - 1** lines contains a pair of integers, denoting the numbers of the nodes that are connected with an edge. The nodes are enumerated by positive integers in the range **\[1; N\]**.

### Output

Output the number of correct heavy-light decompositions of the given tree. Since this number can be huge, please output it modulo **19101995**.

### Constraints

- (Subtask 1): **1** ≤ **N** ≤ **20** - 21 point.
- (Subtask 2): **1** ≤ **N** ≤ **1000** - 34 points.
- (Subtask 3): **1** ≤ **N** ≤ **100000** - 45 points.

### Example

```
<b>Input:</b>
7
1 2
3 1
3 4
3 5
2 6
2 7

<b>Output:</b>
8

```
### Explanation

**Example case 1.** Input is a complete binary tree. It consists of 7 nodes, therefore you can't have more than **⌊log2 7⌋ = ⌊(2.80735492206)⌋ = 2**  light edges on the path from the root node to any other one. But the tree's height is 2, so you can choose the decomposition in any way you like. All the decompositions will be correct ones. There are three nodes that has outgoing edges from them (in the direction opposite to the root's one), their numbers are **1**, **2** and **3**. Each of them has 2 outgoing edges from which you can colour exactly one of them heavy, so overall you'll have 2 \* 2 \* 2 = 8 options of creating the correct heavy-light decompositions.