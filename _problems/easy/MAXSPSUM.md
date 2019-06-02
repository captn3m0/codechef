---
category_name: easy
problem_code: MAXSPSUM
problem_name: 'Maximum Special Sum'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: vishal_nnd0
problem_tester: null
date_added: 23-04-2019
tags:
    - vishal_nnd0
time:
    view_start_date: 1556307900
    submit_start_date: 1556307900
    visible_start_date: 1556307900
    end_date: 1735669800
    current: 1559472950
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Given an array of size $N$ and two integers $K$ and $S$, the special sum of a subarray is defined as follows: (Sum of all elements of the subarray) \* ($K$ - $p$ \* $S$) Where $p$ = number of distinct prime factors of “product of all elements of the subarray”. Find the maximum special sum by considering all non-empty subarrays of the given array. ###Input - First line contains 3 integers $N$, $K$ and $S$. - Second line contains $N$ integers, the elements of the array. ###Output Output a single integer. The maximum special sum considering all non-empty subarrays of the array. ###Constraints: - $ 1 \\leq N, K, S \\leq 10^5 $ - $ 0 \\leq K / S \\leq 20 $ - $ 1 \\lt $ Any element of array $ \\lt 10^5 $ ###Sample Input 4 10 2 14 2 7 15 ###Sample Output 138 ###Sample Explanation Consider the subarray {14, 2, 7} Total number of distinct prime factors in it is 2 (2 and 7). Therefore, value of special sum is (14 + 2 + 7) \* (10 - 2 \* 2) = 138. This is the subarray with the maximum special sum.
