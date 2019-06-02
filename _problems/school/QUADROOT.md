---
category_name: school
problem_code: QUADROOT
problem_name: 'Roots of a Quadratic Equation'
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
problem_author: tanmay28
problem_tester: null
date_added: 1-06-2018
tags:
    - tanmay28
time:
    view_start_date: 1527923700
    submit_start_date: 1527923700
    visible_start_date: 1527923700
    end_date: 1735669800
    current: 1559472930
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Write a program to take the values for A, B, C of a quadratic equation $A \* X^2 + B \* X + C = 0$ and then find all the roots of the equation. It is guaranteed that A $\\neq$ 0 and that the equation has at least one real root. $x1= \\frac{-b + \\sqrt{(b^2 - 4ac)}}{2a}$ $x2= \\frac{-b - \\sqrt{(b^2 - 4ac)}}{2a}$ ###Input: - First line will contain the value of $A$ - Second line will contain the value of $B$ - Third line will contain the value of $C$ ###Output: Output two lines. First line contains the value of root 1 (x1) and second line contains the value of root 2 (x2). Your output will be considered to be correct if the difference between your output and the actual answer is not more than $10^{-6}$. ###Constraints - $-1000 \\leq A \\leq 1000$ - $-1000 \\leq B \\leq 1000$ - $-1000 \\leq C \\leq 1000$ ###Sample Input: 1 -8 15 ###Sample Output: 5 3
