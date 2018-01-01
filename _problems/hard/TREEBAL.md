---
category_name: hard
problem_code: TREEBAL
problem_name: 'Tree Balancing'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 30-09-2016
tags:
    - binary
    - dynamic
    - hard
    - kingofnumbers
    - oct16
editorial_url: 'http://discuss.codechef.com/problems/TREEBAL'
time:
    view_start_date: 1476696600
    submit_start_date: 1476696600
    visible_start_date: 1476696600
    end_date: 1735669800
    current: 1493556996
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT16/mandarin/TREEBAL.pdf), [Russian](http://www.codechef.com/download/translated/OCT16/russian/TREEBAL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT16/vietnamese/TREEBAL.pdf) as well.

You are given a rooted tree of **N** vertices, the root is at vertex **1**. The **i**-th edge has two parameters associated with it, **Ci** denoting the cost of the edge and parameter **Di**.

You want to make cost of all the paths from the root to any leaf having equal costs. Cost of a path is sum of costs of all the edges on the path. For that, you can increase or decrease cost of any edge. The time taken in changing cost of **i**-th edge to **X** will be **Di × |X - Ci|**.

Find the minimum time required to make cost of all the paths from the root to all leaves equal. Furthmore, you should also output the new edge costs. If there are more than one possible solutions, you can print any of them.

Note that you can change costs of edges to negative, but all costs should be integers.

### Input

First line of input contains an integer **T** denoting number of test cases. **T** test cases follow.

First line of each test case contains an integer **N** denoting number of vertices in the tree.

Each of the next **N - 1** line contains four space separated integers **ui, vi, Ci, Di** denoting there is an edge between vertex **ui** and **vi** with parameters **Ci** and **Di** that are described in the statement.

### Output

For each test case, output **N** lines.

First line should contain an integer corresponding to minimum time required.

In next **N - 1** lines, **i**-th line should contain the updated cost of **i**-th edge.

### Constraints

- **1 ≤ T, N ≤ 200000**
- Denote the sum of **N** in all **T** test-cases with **S**
- **S ≤ 200000**
- **1 ≤ ui, vi ≤ N**
- **1 ≤ Ci, Di ≤ 106**

### Subtasks

- Subtask #1 (10 points) **S ≤ 200**, all nodes except node **1** are direct children of node **1**
- Subtask #2 (20 points) **S ≤ 200**
- Subtask #3 (20 points) **Di = 1** for all **i**
- Subtask #4 (50 points) original constraints

### Example

<pre>
<b>Input:</b>
1
5
1 2 5 4
1 3 15 15
2 4 3 2
2 5 5 1

<b>Output: </b>
19
5
15
10
10
</pre>