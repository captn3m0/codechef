---
category_name: easy
problem_code: XOMMON
problem_name: 'Longest Xommon Subsequence'
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
    current: 1559472963
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Given an array of $n$ integers : $ A\_1, A\_2,... , A\_n$, find the longest size subsequence which satisfies the following property: The xor of adjacent integers in the subsequence must be non-decreasing. ###Input: - First line contains an integer $n$, denoting the length of the array. - Second line will contain $n$ space separated integers, denoting the elements of the array. ###Output: Output a single integer denoting the longest size of subsequence with the given property. ###Constraints - $1 \\leq n \\leq 10^3$ - $0 \\leq A\_i \\leq 10^{18}$ ###Sample Input: 8 1 200 3 0 400 4 1 7 ###Sample Output: 6 ###EXPLANATION: The subsequence of maximum length is {1, 3, 0, 4, 1, 7} with Xor of adjacent indexes as {2,3,4,5,6} (non-decreasing)
