---
category_name: medium
problem_code: OPTSPL
problem_name: 'Optimal Splitting'
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
    - R
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kalpitk
problem_tester: null
date_added: 23-03-2019
tags:
    - kalpitk
time:
    view_start_date: 1555270200
    submit_start_date: 1555270200
    visible_start_date: 1555270200
    end_date: 1735669800
    current: 1559472978
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Given a tree with n nodes. Split it into 3 parts such that all the three parts are connected components in original graph and each node is exactly present in one of the parts and the following function is minimised: Let s1,s2,s3 be the sizes of the 3 parts (or connected components) then $f=|s1-s2|+|s2-s3|+|s1-s3|$ Also calculate the number of ways of splitting the tree. Two ways are considered different if different sets of edges is removed. ###Input: - First line will contain $n$, number of vertices in the tree. - Each of the next $n-1$ lines contain two space separated integers $u$ and $v$ denoting an edge between u and v ###Output: Output in a single line two space centered integers denoting the optimal value of function and number of ways to achieve it. ###Constraints - $3 \\leq n \\leq 100000$ ###Sample Input 1: 5 1 2 2 3 3 4 4 5 ###Sample Output 1: 2 3 ###Sample Input 2: 9 1 2 1 3 3 4 3 5 4 6 4 7 5 8 5 9 ###Sample Output 2: 0 1 ###EXPLANATION: For first input, Optimum Splitting=\[1\]+\[2,3\]+\[4,5\] or \[1,2\]+\[3\]+\[4,5\] or \[1,2\]+\[3,4\]+\[5\] Hence number of ways=3 and f=|2-1|+|2-2|+|2-1|=2 For second, Optimum Splliting=\[1,2,3\]+\[4,6,7\]+\[5,8,9\] Hence number of ways=1 and f=|3-3|+|3-3|+|3-3|=0
