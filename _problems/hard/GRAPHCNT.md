---
category_name: hard
problem_code: GRAPHCNT
problem_name: 'Counting on a directed graph'
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
problem_author: ztxz16
problem_tester: kevinsogo
date_added: 25-03-2015
tags:
    - dominator
    - may15
    - medium
    - ztxz16
editorial_url: 'http://discuss.codechef.com/problems/GRAPHCNT'
time:
    view_start_date: 1431941400
    submit_start_date: 1431941400
    visible_start_date: 1431941400
    end_date: 1735669800
    current: 1493556724
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY15/mandarin/GRAPHCNT.pdf) and [Russian](http://www.codechef.com/download/translated/MAY15/russian/GRAPHCNT.pdf).

Given an directed graph with **N** nodes (numbered from 1 to **N**) and **M** edges, calculate the number of unordered pairs **(X, Y)** such there exist two paths, one from node 1 to node **X**, and another one from node 1 to node **Y**, such that they don't share any node except node 1.

### Input

There is only one test case in one test file.

The first line of each test case contains two space separated integers **N, M**. Each of the next M lines contains two space separated integers **u, v** denoting a directed edge of graph G, from node **u** to node **v**. There are no multi-edges and self loops in the graph.

### Output

Print a single integer corresponding to the number of unordered pairs as asked in the problem..

### Constraints and Subtasks

- **1 ≤ N ≤ 105**
- **0 ≤ M ≤ 5 \* 105**

**Subtask 1: (30 points)**

- The graph is a [Directed Acyclic Graph (DAG)](http://en.wikipedia.org/wiki/Directed_acyclic_graph) i.e. there is no cycle in the graph.

**Subtask 2: (20 points)**

- N \* M ≤ 50000000

**Subtask 3 (50 points)**

- No additional constraints

### Example

<pre><b>Input:</b>
6 6
1 2
1 3
1 4
2 5
2 6
3 6

<b>Output:</b>
14

</pre>### Explanation
There are 14 pairs of vertices as follows: 
 (1,2) 
 (1,3) 
 (1,4) 
 (1,5) 
 (1,6) 
 (2,3) 
 (2,4) 
 (2,6) 
 (3,4) 
 (3,5) 
 (3,6) 
 (4,5) 
 (4,6) 
 (5,6)
