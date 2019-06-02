---
category_name: medium
problem_code: SUBNUM
problem_name: 'Subset Numbering'
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
date_added: 6-04-2019
tags:
    - kalpitk
time:
    view_start_date: 1555270200
    submit_start_date: 1555270200
    visible_start_date: 1555270200
    end_date: 1735669800
    current: 1559472983
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Given a subset of digits S and a number N, find the smallest positive number which contains only the digits from S and is a multiple of N or -1 if solution does not exists. ###Input: - First line contains integer $t$, denoting the number of test cases - First line of each test case contains two integers, $m, N$, denoting size of set S and the number whose multiple you have to find. - Next Line of the test case consists of $m$ distinct space-separated integers denoting the digits in set $S$. ###Output: - For each test case, output single line with answer to the test case. ###Constraints - $1 \\leq T \\leq 30$ - $1 \\leq |S| \\leq 10$ - $1 \\leq N \\leq 10^5$ ###Sample Input: 2 3 123 2 4 6 3 101 0 3 2 ###Sample Output: 246 202 ###Explanation: For first case, 246 is the smallest positive multiple of 123 that has only digits from set {2,4,6}
