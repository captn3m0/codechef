---
category_name: medium
problem_code: WALKTREE
problem_name: 'Not So Random Walks'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - PYP3
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: usaxena95
problem_tester: null
date_added: 16-12-2018
tags:
    - usaxena95
time:
    view_start_date: 1545157800
    submit_start_date: 1545157800
    visible_start_date: 1545157800
    end_date: 1735669800
    current: 1559472986
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef found a rooted tree with $N$ nodes. The nodes are labelled from $1$ to $N$. Node with label $1$ was marked as the root. $R$ is the adjacency list representing the tree, which includes only children, but not the parent of every node. Denote $K(i)$ as the number of children of $i^{th}$ node. Denote $R(i, j)$ as the $j^{th}$ child of the $i^{th}$ node ( $0 \\leq j \\lt K(i)$). Chef also found the piece of code lying below the tree. ``` void dfs(v, iter) { if (visit\[v\] == 0) visit\[v\] = iter; if (K(v) != 0) { special\_child = R(v, F(v)); dfs(special\_child, iter); F(v) = (F(v) + 1) % K(v); } } initialize F(i) = 0; initialize visit\[i\] = 0; done = false; iter = 0; while (!done) { iter = iter + 1; dfs(1, iter); done = true; for (i = 1; i
