---
category_name: medium
problem_code: LCSTSUB
problem_name: 'Longest Constrained Subsequence'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kr_abhinav
problem_tester: null
date_added: 2-04-2018
tags:
    - kr_abhinav
time:
    view_start_date: 1522873800
    submit_start_date: 1522873800
    visible_start_date: 1522873800
    end_date: 1735669800
    current: 1525454400
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given two arrays of length N. Array A = $A$1, $A$2, ..., $A$N. Array L = $L$1, $L$2, ..., $L$N. For every k such that $1 \\leq k \\leq N$, you have to find the length of the longest possible subsequence in the first k elements of array A such that if $A$j immediately follows $A$i in the subsequence, then $|A$j$-A$i$| \\leq L$j Please note that the input is \_\_encrypted\_\_. Read Input section for information. \_\_It is advised to use fast I/O methods\_\_ ###Input: - First line contains a single integer $N$, the no of elements of the arrays. - The i-th of the next N lines contains two values, $A’$i and $L’$i, the encrypted values of $A$i and $L$i. Suppose that the (i-1)-th output was $Ans$i-1, then $A$i = $Ans$i-1 $XOR$ $A’$i, and $L$i = $Ans$i-1 $XOR$ $L’$i, where $XOR$ denotes the bitwise xor operator. Assume $Ans$0 = 0. ###Output: Output N integers, each in a new line, the i-th of which should be the length of the longest possible subsequence uptil $A$i. ###Constraints - $1 \\leq N \\leq 10^5$ - $1 \\leq A$i$ \\leq 10^9$ - $1 \\leq L$i$ \\leq 10^9$ - $0 \\leq A'$i$ \\leq 2\*10^9$ - $0 \\leq L'$i$ \\leq 2\*10^9$ ###Sample Input: 5 1 1 3 0 6 1 5 2 4 0 ###Sample Output: 1 2 3 3 4 ###EXPLANATION: The decrypted query is:- 5 1 1 2 1 4 3 6 1 7 3 The largest possible subsequences are:- 1) {1} 2) {1,2} 3) {1,2.4} 4) {1,2,4} 5) {1,2,4,7}
