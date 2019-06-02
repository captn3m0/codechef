---
category_name: easy
problem_code: SUMNCR
problem_name: 'Summation over nCr'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: aditya10_
problem_tester: null
date_added: 25-12-2018
tags:
    - aditya10_
    - aditya10_
    - easy
    - implementation
    - observations
    - pelt2019
time:
    view_start_date: 1547476200
    submit_start_date: 1547476200
    visible_start_date: 1547476200
    end_date: 1735669800
    current: 1559472961
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available."I'm a fan of anything that tries to replace actual human contact." - Sheldon. After years of hard work, Sheldon was finally able to develop a formula which would diminish the real human contact. He found $k$ integers $n\_1,n\_2...n\_k$ . Also he found that if he could minimize the value of $m$ such that $\\sum\_{i=1}^k$$n$$i$$C$$m$$i$ is even, where $m$ = $\\sum\_{i=1}^k$$m\_i$, he would finish the real human contact. Since Sheldon is busy choosing between PS-4 and XBOX-ONE, he want you to help him to calculate the minimum value of $m$. ###Input: - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $k$. - Next line contains k space separated integers $n\_1,n\_2...n\_k$ . ###Output: For each test case output the minimum value of m for which $\\sum\_{i=1}^k$$n$$i$$C$$m$$i$ is even, where $m$=$m\_1$+$m\_2$+. . . $m\_k$ and $0$ $18$ ###Sample Input: 1 1 5 ###Sample Output: 2 ###EXPLANATION: $5$$C$$2$ = 10 which is even and m is minimum.
