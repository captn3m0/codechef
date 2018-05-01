---
category_name: easy
problem_code: POSTTREE
problem_name: 'Post Tree'
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
problem_author: gainullinildar
problem_tester: melfice
date_added: 26-05-2017
tags:
    - dfs
    - easy
    - gainullinildar
    - lca
    - ltime48
editorial_url: 'https://discuss.codechef.com/problems/POSTTREE'
time:
    view_start_date: 1495899840
    submit_start_date: 1495899840
    visible_start_date: 1495899840
    end_date: 1735669800
    current: 1497284100
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME48/mandarin/POSTTREE.pdf), [Russian](http://www.codechef.com/download/translated/LTIME48/russian/POSTTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME48/vietnamese/POSTTREE.pdf) as well.

You are given a rooted tree on **N** vertices. The nodes are numbered from 1 to **N**, and Node 1 is the root. Each node u has an associated value attached to it: **Au**.

For each vertex v, we consider the path going upwards from v to the root. Suppose that path is v1, v2, .., vk, where v1 = v and vk = 1. The cost of any node on this path is equal to the minimum value among all the nodes to its left in the path sequence, including itself. That is, cost(vi) = min1 {**Avj**}. And the cost of the path is the sum of costs of all the nodes in it.

For every node in the tree, find the cost of the path from that node to the root.

### Input

- The first line of the input contains a single integer, **N**, denoting the number of nodes in the tree.
- The next line contains **N**-1 integers, the i-th of which denotes the parent of node i+1.
- The next line contains **N** integers, the i-th of which denotes **Ai**.

### Output

Output a single line containing **N** integers, the i-th of which should be the cost of the path from node i to the root.

### Constraints

- 1 ≤ **N** ≤ 100,000
- -1,000,000,000 ≤ **Av** ≤ 1,000,000,000

### Subtasks

- Subtask #1 (30 points): 1 ≤ **N** ≤ 2000
- Subtask #2 (70 points): Original constraints.

### Example

<pre><b>Input:</b>
8
1 1 1 1 5 8 6
1 2 3 4 5 15 70 10

<b>Output:</b> 
1 3 4 5 6 21 96 26
</pre>### Explanation

For example, take a look at the path from vertex 7: The path is 7 -> 8 -> 6 -> 5 -> 1.

Cost(7) has no choice but to be **A7**. So Cost(7) = 70.

 Cost(8) will be minimum of **A7** and **A8**, which turns out to be **A8**. So Cost(8) = 10.

 Cost(6) = minimum {**A7, A8, A6**} = minimum {70, 10, 15} = 10.

 Cost(5) = minimum {70, 10, 15, 5} = 5.

 Cost(1) = minimum {70, 10, 15, 5, 1} = 1.

So, the cost of the path from 7 to the root is 70 + 10 + 10 + 5 + 1 = 96.
