---
category_name: medium
problem_code: COLORING
problem_name: 'Tree Coloring'
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
problem_author: ma5termind
problem_tester: xcwgf666
date_added: 29-03-2016
tags:
    - data
    - ltime35
    - ma5termind
    - queries
    - segment
    - tree
editorial_url: 'http://discuss.codechef.com/problems/COLORING'
time:
    view_start_date: 1462036200
    submit_start_date: 1462036200
    visible_start_date: 1462036200
    end_date: 1735669800
    current: 1493557596
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME35/mandarin/COLORING.pdf), [Russian](http://www.codechef.com/download/translated/LTIME35/russian/COLORING.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME35/vietnamese/COLORING.pdf) as well.

Chef has recently learnt about binary trees and immediately fell in love with them. His best friend Shasha has promised him to gift a binary tree only if he is able to show his love for binary trees by solving the following problem about binary trees.

Given a complete binary tree **T** consisting of **N** nodes labelled from 1 to **N**. The node with label **1** is the root of the tree. For a node labelled **v**, its' left child will be labelled as **2\*v** (provided it exists) and right child as **2\*v+1** (provided it exists).

Initially, all the nodes of tree are uncolored.

Chef has to perform **Q** queries on tree **T** where each query can have one of the following three types:

- **1 X K**Update the tree **T** such that node **X** becomes uncolored, all the nodes at distance **1** from **X** get colored with color **1**, all nodes at distance **2** from **X** get colored with color **2**, and so on up to nodes at distance **K** from **X**.
  
  Formally, color all nodes that are at distance **(1 ≤ D ≤ K)** units from node **X** with color **D** and make node **X** colourless.
  
  Please note that when we say node at distance **D** from node **X**, _you have to consider all the nodes in the tree, not just the ones in the subtree of **X**_.
- **2 X Y**Count the number of distinct colors on the unique simple path from node **X** to node **Y**.
- **3 X**Count the number of distinct colors in the subtree rooted at node **X**.

### Input

The first line of input contains two space separated integer numbers **N** and **Q** denoting the number of nodes in the tree **T** and number of queries to be processed respectively.

Each of the following **Q** lines contains a query of one of the above mentioned three types.

### Output

For each query of type **2** and **3**, print the sought answer.

### Constraints

- **1 ≤ N ≤ 105**
- **1 ≤ Q ≤ 50000**
- **1 ≤ X, Y ≤ N**
- **0 ≤ K ≤ 105**

### Subtasks

- Subtask 1 (32 pts) : **1 ≤ N, Q ≤ 1000**
- Subtask 2 (68 pts) : **original constraints**

### Example

<pre>
<b>Input</b>
<tt>10 10
2 3 5
3 1
1 2 2
2 3 5
1 3 2
2 3 5
3 1
1 7 5
3 1
2 3 5</tt>

<b>output</b>
<tt>0
0
2
2
2
5
4</tt>

</pre>