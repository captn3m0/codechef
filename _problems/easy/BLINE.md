---
category_name: easy
problem_code: BLINE
problem_name: 'BLACK LINE'
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
problem_author: vishal_nnd0
problem_tester: null
date_added: 16-04-2019
tags:
    - vishal_nnd0
time:
    view_start_date: 1556307900
    submit_start_date: 1556307900
    visible_start_date: 1556307900
    end_date: 1735669800
    current: 1559472936
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.This is an \*\*interactive problem\*\*. It means that every time you output something, you must finish with a newline character and flush the output. For example, in C++ use the $fflush(stdout)$ function, in Java — call $System.out.flush()$, in Python — $sys.stdout.flush()$, and in Pascal — $flush(output)$. Only after flushing the output will you be able to read from the input again. There exists a string of length $N$ which consists only of \*\*W\*\* (white) and \*\*B\*\* (black). Given that there exist $l1$, $r1$, $l2$, $r2$ such that ($ 1 \\leq l1 \\leq r1 \\lt r1 + 1 \\lt l2 \\leq r2 \\leq N $) and $A\[i\]$ = ‘\*\*B\*\*’ (for $ l1\\leq i \\leq r1 $ and $ l2 \\leq i \\leq r2 $) and $A\[i\]$ = ‘\*\*W\*\*’ (otherwise). These $l1$ to $r1$ and $l2$ to $r2$ are considered as two blocks. You have to ask \*not more than\* 250 queries to find the values of these $l1, r1, l2, r2$. ###Instructions: There will be two types of queries. - \*\*1 l r\*\* where $l$ and $r$ are two integers $1 \\leq l \\leq r \\leq N$ to ask how many blocks (completely or partially lie in between $l$ and $r$ both inclusive). A block intersecting with even one index with $\[l, r\]$ is said to lie partially. Output of the interactive code will be among 0, 1, 2 which you should read from input. - \*\*2 l1 r1 l2 r2\*\* where $l1, r1, l2, r2$ are the required values which is the final answer you should print (only once at the end). ###Input : Only input is an integer $N$ denoting the length of the array. ###Constraints - $3 \\leq N \\leq 10^{18} $ ###Sample Input:    Your Program   System         9     1 1 3         1     1 4 8         2     2 3 4 8 8    \###Explanation The given string is \*\*WWBBWWWBW\*\*
