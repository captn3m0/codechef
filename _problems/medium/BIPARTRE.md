---
category_name: medium
problem_code: BIPARTRE
problem_name: 'Bipartite Graph from Trees'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3.5'
source_sizelimit: '50000'
problem_author: admin3
problem_tester: null
date_added: 23-07-2017
tags:
    - admin3
    - cook84
    - max
    - maxflow
    - medium
    - vivek1_007
editorial_url: 'https://discuss.codechef.com/problems/BIPARTRE'
time:
    view_start_date: 1500834600
    submit_start_date: 1500834600
    visible_start_date: 1500834600
    end_date: 1735669800
    current: 1514816592
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK84/mandarin/BIPARTRE.pdf), [russian](http://www.codechef.com/download/translated/COOK84/russian/BIPARTRE.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK84/vietnamese/BIPARTRE.pdf) as well.

You are given a rooted tree **T** with **N** vertices. The vertices are numbered from 1 to **N**, and vertex 1 is the root. You are also given **M** lists **A1**, **A2**, .., **AM**, where each **Ai** contains a subset of the vertices in **T**.

Consider a new bipartite graph G = (L, R, E), where L = {l1, l2, .., l**M**} and R = {r1, r2, .., r**N**} denote the two bi-partitions of the vertex set and E = { (li, rj), such that there exists a k which is an ancestor of j in **T**, and is also contained in **Ai**}. That is, there is an edge from li to rj if and only if **Ai** contains a vertex of **T** which is an ancestor of j in **T**.

**Note**: Vertex u is an ancestor of vertex v, if it is on the path from the root to v, both end points included.

You need to compute the size of the maximum matching in G.

### Input

- The first line contains a single integer, **Q**, which denotes the number of testcases. The description of each testcase follows.
- The first line of each testcase contains two integers: **N** and **M**, which denote the number of vertices in the tree and the number of lists respectively.
- The next line contains **N** - 1 integers: **P2**, **P3**, ..., **PN**, where **Pi** denotes the parent of vertex i in **T**.
- The i-th of the next **M** lines describes the i-th list **Ai**. The first integer in the line is |**Ai**|, which is the size of the i-th list. This is followed by |**Ai**| integers in the same line, which denote the elements of **Ai**.

### Output

- For each test case, output a single line containing the size of the maximum matching of the corresponding bipartite graph.

### Constraints

- 1 ≤ **Q** ≤ 4
- 1 ≤ **N** ≤ 5000
- 1 ≤ **M** ≤ 5000
- 1 ≤ **Pi** ≤ **N**
- 1 ≤ every element of a list ≤ **N**
- All the elements of a single list are distinct
- 1 ≤ Sum of sizes of all lists in one test case ≤ 10000

### Example

<pre><b>Input:</b>
1
12 8
4 1 1 2 7 8 4 2 12 12 4
1 7
1 7
2 6 11
2 8 11
2 10 8
2 12 8
2 8 10
2 7 12

<b>Output:</b>
6

</pre>### Explanation
The left bipartition of G contains 8 vertices: l1, l2, ..., l8 and the right bipartition contains 12: r1, r2, ..., r12. Some of the edges of this bipartite graph are:

(l1, r7), (l1, r6), (l2, r7), (l2, r6), (l3, r6), (l3, r11), (l4, r8), (l4, r7), (l4, r6), (l4, r11). There are more edges.

There is a matching of size 6 in this graph which consists of the edges { (l1, r6), (l2, r7), (l3, r11), (l4, r8), (l5, r10), (l6, r12)}. There is no larger matching and hence the answer is 6.
