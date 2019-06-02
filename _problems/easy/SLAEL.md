---
category_name: easy
problem_code: SLAEL
problem_name: 'Second Largest Element'
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
problem_author: sahil070197
problem_tester: null
date_added: 20-10-2018
tags:
    - sahil070197
time:
    view_start_date: 1540578600
    submit_start_date: 1540578600
    visible_start_date: 1540578600
    end_date: 1735669800
    current: 1559472959
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Find the length of the longest contiguous segment in an array, in which if a given element $K$ is inserted, $K$ becomes the second largest element of that subarray. ###Input: - The first line will contain $T$, number of test cases. Then the test cases follow. - The first line of each test case contains two integers $N$ and $K$. - The next line contains N space-separated integers Ai denoting the elements of the array. ###Output: Print a single line corresponding to each test case — the length of the largest segment. ###Constraints - $1 \\leq T \\leq 10$ - $1 \\leq N \\leq 10^6$ - $1 \\leq Ai, K \\leq 10^9$ - Sum of N across all test cases doesn't exceed $10^6$ ###Sample Input: 2 5 3 2 4 2 4 2 8 5 9 3 5 7 8 11 17 2 ###Sample Output: 5 3 ###EXPLANATION: If 3 is inserted at anywhere in the array, it is the second largest element. Hence the maximum length is 5. If 5 is inserted anywhere between 1st and 4th element, it is the second largest element. The length of such subarray is 3.
