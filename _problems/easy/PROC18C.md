---
category_name: easy
problem_code: PROC18C
problem_name: 'Awkward Pairs'
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
problem_author: meetsid20
problem_tester: null
date_added: 8-08-2018
tags:
    - meetsid20
time:
    view_start_date: 1534442400
    submit_start_date: 1534442400
    visible_start_date: 1534442400
    end_date: 1735669800
    current: 1559472957
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Aayush has recently started teaching Latin Dance. Today, he will be teaching Salsa. For this, he needs to divide the people attending his dance class into pairs. Usually in Salsa, the dance pairs consist of one girl and one boy. But Aayush doesn't find this convention very interesting. He is rather more concerned about the IQ of people who are members of the same pair. Precisely, if the sums of digits of the IQ score of the two people forming a pair are co-prime, then the pair will be $\\text{awkward}$ according to Aayush. For example IQ scores 12 (1+2=3) and 22 (2+2=4) form an awkward pair. The IQ scores of all the people attending the Salsa class are pairwise distinct. The lowest IQ is $\\text{L}$ and the largest IQ is $\\text{R}$. Moreover, there are exactly $\\text{R-L+1}$ people attending the Salsa class. Aayush wants to know the number of ways in which an awkward pair can be formed modulo $10^9+7$. Two ways are different if at least one of the members in the pairs formed is different. ###Input The first line contains a single interger $\\text{T}$ - the number of testcases. Each of the following $\\text{T}$ lines contains two space separated integers $\\text{L}$ and $\\text{R}$, as described in the problem. ###Output For every test case, print an integer answer modulo $10^9+7$. ###Constraints $1 \\leq \\text{T} \\leq 10$ $1 \\leq \\text{L, R} \\leq 10^{18}$ ###Sample Input 2 5 8 7 10 ###Sample Output 5 6
