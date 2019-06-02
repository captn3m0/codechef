---
category_name: easy
problem_code: ANTMAT
problem_name: Antimatching
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
problem_author: vijju123
problem_tester: null
date_added: 17-11-2018
tags:
    - vijju123
time:
    view_start_date: 1542546000
    submit_start_date: 1542546000
    visible_start_date: 1542546000
    end_date: 1735669800
    current: 1559472934
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Vasya's older brother, Petya, attends an algorithm course in his school. Today he learned about matchings in graphs. Formally, a set of edges in a graph is called a \*matching\* if no pair of distinct edges in the set shares a common endpoint. Petya instantly came up with an inverse concept, an \*antimatching\*. In an antimatching, \*\*any\*\* pair of distinct edges should have a common endpoint. Petya knows that finding a largest matching in a graph is a somewhat formidable task. He wonders if finding the largest antimatching is any easier. Help him find the number of edges in a largest antimatching in a given graph. ###Input: The first line contains $T$, number of test cases per file. The first line of each test case contains two integers $n$ and $m-$ the number of vertices and edges of the graph respectively ($1 \\leq n \\leq 10^4$, $0 \\leq m \\leq 10^4$). The next $m$ lines describe the edges. The $i$-th of these lines contains two integers $u\_i$ and $v\_i-$ the indices of endpoints of the $i$-th edge ($1 \\leq u\_i, v\_i \\leq n$, $u\_i \\neq v\_i$). It is guaranteed that the graph does not contain self-loops nor multiple edges. It is not guaranteed that the graph is connected. ###Output: Print a single number per test case $-$ the maximum size of an antichain in the graph. ###Constraints - $1 \\leq T \\leq 10$ - $1 \\leq n \\leq 10^4$ - $0 \\leq m \\leq 10^4$ - $1 \\leq u\_i, v\_i \\leq n$ - $u\_i \\neq v\_i$ ###Sample Input: ``` 3 3 3 1 2 1 3 2 3 4 2 1 2 3 4 5 0 ``` ###Sample Output: ``` 3 1 0 ``` ###EXPLANATION: In the first sample all three edges form an antimatching. In the second sample at most one of the two edges can be included in an antimatching since they do not share common endpoints. In the third sample there are no edges, hence the answer is $0$.
