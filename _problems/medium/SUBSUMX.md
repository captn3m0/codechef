---
category_name: medium
problem_code: SUBSUMX
problem_name: 'Subset Sums Revisited'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: deadwing97
problem_tester: null
date_added: 13-12-2018
tags:
    - deadwing97
time:
    view_start_date: 1544985000
    submit_start_date: 1544985000
    visible_start_date: 1544985000
    end_date: 1735669800
    current: 1559472983
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a sequence $A$ of $N$ integers: $(A\_1, A\_2, \\ldots, A\_N)$. From this sequence, you create another sequence of size $N$: $B = (B\_1, B\_2, \\ldots, B\_N)$, where $B\_i = 2^{A\_i}$. You are also given an integer $K$. You need to output the number of subsequences of $B$ whose sum is exactly $K$. Since the answer might be huge, output it modulo $10^9+7$. ###Input - The first line contains the number of testcases in file $T$ - Each testcase is described as follows: - The first line contains two integers, $N$ and $K$. - The second line contains $N$ space separated integers: $A\_1, A\_2, \\ldots, A\_N$ ###Output Output $T$ lines each containing a single integer which should be the answer. ###Constraints - $1 \\leq T \\leq 200$ - $1 \\leq N \\leq 100$ - $0 \\leq A\_i \\leq 60$ - $1 \\leq K
