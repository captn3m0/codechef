---
category_name: easy
problem_code: BINTREE
problem_name: 'Shortest Path in Binary Trees'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: darkshadows
problem_tester: shiplu
date_added: 21-03-2014
tags:
    - april14
    - darkshadows
    - easy
    - tree
editorial_url: 'http://discuss.codechef.com/problems/BINTREE'
time:
    view_start_date: 1397468279
    submit_start_date: 1397468279
    visible_start_date: 1397467741
    end_date: 1735669800
    current: 1493558212
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL14/mandarin/BINTREE.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL14/russian/BINTREE.pdf).

Consider an infinite full binary tree (each node has two children except the leaf nodes) defined as follows. For a node labelled **v** its left child will be labelled **2\*v** and its right child will be labelled **2\*v+1**. The root is labelled as **1**.

You are given **N** queries of the form **i j**. For each query, you have to print the length of the shortest path between node labelled **i** and node labelled **j**.

### Input

First line contains **N**, the number of queries. Each query consists of two space separated integers **i** and **j** in one line.

### Output

For each query, print the required answer in one line.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **i,j** ≤ **109**

### Example

```
<b>Input:</b>
3
1 2
2 3
4 3

<b>Output:</b>
1
2
3

```
### Explanation

For first query, 1 is directly connected to 2 by an edge. Hence distance 1.