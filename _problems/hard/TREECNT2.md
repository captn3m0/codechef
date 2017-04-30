---
category_name: hard
problem_code: TREECNT2
problem_name: 'Counting on a Tree'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: laycurse
date_added: 9-02-2015
tags:
    - hard
    - march15
    - mobius_function
    - union
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/TREECNT2'
time:
    view_start_date: 1426498200
    submit_start_date: 1426498200
    visible_start_date: 1426498200
    end_date: 1735669800
    current: 1493556875
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH15/mandarin/TREECNT2.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH15/russian/TREECNT2.pdf).

You are given an unrooted tree with **N** nodes, numbered from **1** to **N**. Each edge of the tree has a positive integer, associated with it. Your goal is to calculate the number of unordered pairs **(S, T)** of tree's nodes such that the greatest common divisor of all the integers associated with the edges of the path between **S** and **T** is equal to one. Of course, we consider only the pairs where **S** isn't equal to **T**.

You are also given **Q** queries, where the **i**th query is described by two integer **Ai** and **Ci**. In the **i**th query, the number associated with the **Ai**th edge will be changed **Ci**. You also want to calculate the answer for the tree after each query.

### Input

There is only one test case in one test file.

The first line of input contains an integer **N**, denoting the number of nodes in the tree. The **i**th line of the next **N−1** lines contains the description of **i**th edge, where the line has three space-separated integers **X**, **Y** and **Z**. It means that **i**th edge connect nodes **X** and **Y**, and the associated integer is **Z**. Then the next line contains an integer **Q**, denoting the number of queries. The **i**th line of the next **Q** lines has two space-separated integers **Ai** and **Ci**.

### Output

In the first line, print the answer for the initial tree. Then print the answer for the tree after each query. Here the answer means that the number of unordered pairs **(S, T)** of the nodes such that the greatest common divisor of all the integers associated with the edges of the path between **S** and **T** is equal to one.

### Constraints and Subtasks

- **1 ≤ X, Y ≤ N**, and **X ≠ Y**
- **1 ≤ Z ≤ 106**
- **0 ≤ Q ≤ 100**
- **1 ≤ Ai ≤ N − 1**
- **1 ≤ Ci ≤ 106**
- The graph given in the input denotes a tree

**Subtask 1 (27 points)**

- **1 ≤ N ≤ 103**

**Subtask 2 (73 points)**

- **1 ≤ N ≤ 105**

### Example

```
<b>Input:</b>
5
1 2 10
1 3 6
3 4 15
3 5 15
2
4 5
1 7

<b>Output:</b>
2
3
4

```
### Explanation

The below figure shows the initial graph and the graph after each query.

**The initial tree.** The sought pairs are **(2, 4)** and **(2, 5)**. For example, in the path between nodes **2** and **4**, there are three integers **10, 6, 15** associated edges, and **GCD(10, 6, 15) = 1**.

**After query 1.** The sought pairs are **(1, 5)**, **(2, 4)** and **(2, 5)**.

**After query 2.** The sought pairs are **(1, 5)**, **(2, 3)**, **(2, 4)** and **(2, 5)**.

![](/download/extimages/99ba58eb796a1f68072bef90d1814da4.png)