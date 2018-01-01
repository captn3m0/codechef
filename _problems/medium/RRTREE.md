---
category_name: medium
problem_code: RRTREE
problem_name: Tree
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: Rubanenko
problem_tester: utkarsh_lath
date_added: 14-09-2013
tags:
    - Rubanenko
    - bit
    - cook38
    - hard
    - heavy
    - segtree
    - tree
editorial_url: 'http://discuss.codechef.com/problems/RRTREE'
time:
    view_start_date: 1379874600
    submit_start_date: 1379874600
    visible_start_date: 1379874600
    end_date: 1735669800
    current: 1493557924
layout: problem
---
All submissions for this problem are available.You are given a tree that is built in a following way: initially there is single vertex **1**. All the other vertices are added one by one, from vertex **2** to vertex **N**, by connecting it to one of those that have been added before. You are to find the _diameter_ of the tree after adding each vertex. Let the distance between vertex **u** and **v** be the minimal number of edges you have to pass to get from **u** to **v**, then _diameter_ is the maximum distance between any two pairs **(u,v)** that have already been added to the tree.

### Input

The input consists of several Test cases. The file line of input contains an integer **T**, the number of test cases. **T** test cases follow.
The first line of each test case contains an integer **N**, then **N-1** lines follow: **ith** line contains an integer **Pi**, which means that vertex **i+1** is connected to the vertex **Pi**.

### Output

For each test case, output **N-1** lines - the diameter after adding vertices **2, 3,..,N**

### Constraints


8. 1 ≤ T ≤ 15
9. 1 ≤ N ≤ 105
10. Pi ≤ i
11. Sum of **N** over all test cases in a file does not exceed **2 \* 105**### Example
  
  ```
  <b>Input:</b>
  2
  3
  1
  1
  5
  1
  2
  3
  3
  
  <b>Output:</b>
  1
  2
  1
  2
  3
  3
  
  ```
