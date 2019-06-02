---
category_name: hard
problem_code: YAEXP
problem_name: 'Yet another expected value problem'
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
problem_author: jtnydv25
problem_tester: null
date_added: 21-12-2018
tags:
    - jtnydv25
time:
    view_start_date: 1545503400
    submit_start_date: 1545503400
    visible_start_date: 1545503400
    end_date: 1735669800
    current: 1559472995
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a matrix $A$ having $N$ rows and $M$ columns. You are also given an integer $K$. Initially all rows and columns are unprocessed. You initialize a variable `ans` to be $0$. You do the following experiment until all rows and columns have been processed: - From the list of unprocessed rows and columns, choose one uniformly at random. Let the sum of this selected row/column be $S$. Add $S^K$ to `ans`. - Mark the row/column processed, and make all of its elements $0$. You have to print the expected value of the variable `ans` in the end. If the expected value is $E$, print the value of $X = E \\times (n + m)! $ modulo $10^9 + 7$. It is guaranteed that $X$ will be an integer. ###Input: - First line will contain $N$, $M$, and $K$ - $i^{\\text{th}}$ of the next $N$ lines contains the $i^{\\text{th}}$ row of the matrix, that is space separated integers $A\_{i, 1}, A\_{i, 2}, \\cdots A\_{i, M}$ ###Output: Print the value of $X$ as described in the problem staement. ###Constraints - $ 1 \\leq N, M, K \\leq 50 $ - $ 0 \\leq A\_{i, j}
