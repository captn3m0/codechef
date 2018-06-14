---
category_name: hard
problem_code: TSUM2
problem_name: 'Sum on Tree'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: ratingoverflow
problem_tester: null
date_added: 12-05-2018
tags:
    - centroid
    - convex
    - geometry
    - hard
    - lines
    - ltime60
    - ratingoverflow
editorial_url: 'https://discuss.codechef.com/problems/TSUM2'
time:
    view_start_date: 1527354000
    submit_start_date: 1527354000
    visible_start_date: 1527354000
    end_date: 1735669800
    current: 1528985564
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME60/mandarin/TSUM2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME60/vietnamese/TSUM2.pdf) as well.

You are given a tree with $N$ nodes (numbered $1$ through $N$) and $N-1$ edges. Each node has a value; let's denote the value of node $x$ by $W\_x$. Next, let's define the value of a simple path $v\_1, v\_2, \\dots, v\_k$ as $\\sum\_{i=1}^k i \\cdot W\_{v\_i}$. A simple path in a tree is a sequence of nodes $v\_1, v\_2, \\dots, v\_k$ such that: - $k \\ge 1$ - there is an edge between nodes $v\_i$ and $v\_{i+1}$ for each $i$ ($1 \\le i \\le k-1$) - $v\_i \\neq v\_j$ for each $i, j$ ($1 \\le i, j \\le k$) such that $i \\neq j$ You should find the maximum of values of all simple paths in the given tree. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $W\_1, W\_2, \\dots, W\_N$. - Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between nodes $u$ and $v$. ### Output For each test case, print a single line containing one integer — the maximum value of a simple path. ### Constraints - $2 \\le N \\le 50,000$ - the sum of $N$ over all test cases does not exceed $400,000$ - $1 \\le u, v \\le N$ - $u \\neq v$ - $|W\_i| \\le 1,000$ for each valid $i$ - the graph described in the input is a tree ### Subtasks \*\*Subtask #1 (30 points):\*\* the tree is a binary tree rooted at node 1 \*\*Subtask #2 (30 points):\*\* - the length (number of nodes) of any simple path in the tree is at most $200$ - the sum of $N$ over all test cases does not exceed $100,000$ \*\*Subtask #3 (40 points):\*\* original constraints ### Example Input ``` 3 5 1 2 3 4 5 1 2 2 3 3 4 3 5 2 -1 -1 1 2 3 1 1000 -30 1 3 2 3 ``` ### Example Output ``` 34 -1 2941 ```
