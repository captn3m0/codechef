---
category_name: hard
problem_code: UPDTREE
problem_name: 'Updating Edges on Trees'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3.5'
source_sizelimit: '50000'
problem_author: darkshadows
problem_tester: null
date_added: 15-09-2014
tags:
    - cook50
    - darkshadows
    - dfs
    - dynamic
    - lca
    - medium
editorial_url: 'http://discuss.codechef.com/problems/UPDTREE'
time:
    view_start_date: 1411324200
    submit_start_date: 1411324200
    visible_start_date: 1411324200
    end_date: 1735669800
    current: 1493556895
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [English](http://www.codechef.com/download/translated/COOK50/english/UPDTREE.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK50/mandarin/UPDTREE.pdf) and [Russian](http://www.codechef.com/download/translated/COOK50/russian/UPDTREE.pdf) as well.

You have a [tree](http://en.wikipedia.org/wiki/Tree_(graph_theory)) consisting of **N** vertices numbered **1** to **N**.

Initially each edge has a value equal to zero. You have to first perform **M1** operations and then answer **M2** queries. Note you have to first perform all the operations and then answer all queries after all operations have been done.


Operations are defined by:

**A B C D**: On the path between nodes numbered **A** and **B** increase the value of each edge by **1**, except for those edges which occur on the path between **C** and **D**. Note that there is an unique path between every pair of nodes ie. we don't consider values on edges for finding the path. All four values given in input will be distinct.



Queries are of the following type:

**E F**: Print the sum of values of all the edges on the path between two distinct nodes **E** and **F**. Again the path will be unique. />/>/>/>/>/>/>

### Input

Input description.

First line contains **N**, **M1** and **M2**. Each of the next **N-1** lines contain two integers **u v** denoting an undirected edge between node numbered **u** and **v**. Each of the next **M1** lines contain four integers **Ai Bi Ci Di**, denoting the operations. Each of the next **M2** lines contain two integers **Ei Fi** denoting the queries.

### Output

For each query, print the required answer in one line.

### Constraints

10. **1** ≤ **N** ≤ **105**
11. **1** ≤ **M1, M2** ≤ **5\*105**
12. **1** ≤ **Ai, Bi, Ci, Di, Ei, Fi** ≤ **N**
### Example

```
<b>Input:</b>
5 2 2
1 2
2 4
2 5
1 3
1 4 2 3
3 4 2 5
4 5
4 3

<b>Output:</b>
2
4

```
### Explanation

On first operation, value of edge (2-4) is increased by one. On second operation, value of edges (1-3), (1-2), (2-4) are increased by one.

**Warning:**Use fast input/output. Large input files.