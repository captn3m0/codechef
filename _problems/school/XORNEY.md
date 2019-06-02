---
category_name: school
problem_code: XORNEY
problem_name: 'XOR! Wait for it'
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
problem_author: tds115
problem_tester: null
date_added: 24-12-2018
tags:
    - cakewalk
    - pelt2019
    - tds115
    - tds115
time:
    view_start_date: 1547476200
    submit_start_date: 1547476200
    visible_start_date: 1547476200
    end_date: 1735669800
    current: 1559472932
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available."I have only one rule, never submit partially correct code" -Barney Stinson The religious act which Barney and his friends hold most sacred, XORING the natural numbers in the given range. This time Barney is a bit busy with picking up some girls, so he asked you to help him. He gave you two numbers $L$ and $R$, you have to find if XOR of all the numbers in range L to R (L,R both inclusive) is odd or even. Warning!! Large Input-Output. Please use Fast IO. ###Input: - The first line will contain $T$, number of testcases. - Each testcase contains a single line of input, two integers $L, R$. ###Output: For each testcase, in the new line print "Odd" if the XOR in the range is odd, else print "Even". ###Constraints - $1 \\leq T \\leq 10^6$ - $1 \\leq L \\leq R \\leq 10$$18$\###Sample Input: 4 1 4 2 6 3 3 2 3 ###Sample Output: Even Even Odd Odd ###EXPLANATION: Test case -1 -> XOR (1,2,3,4) =4 Test case -2 -> XOR (2,3,4,5,6) =6 Test case -3 -> XOR (3) =3 Test case -4 -> XOR (2,3) =1
