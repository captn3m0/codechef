---
category_name: hard
problem_code: ABSDIFFS
problem_name: 'Absolute Difference Sum'
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
problem_author: admin3
problem_tester: null
date_added: 20-12-2018
tags:
    - admin3
time:
    view_start_date: 1545503400
    submit_start_date: 1545503400
    visible_start_date: 1545503400
    end_date: 1735669800
    current: 1559472988
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Little Sajal went to school and learned how to calculate score of an integer. Score of an integer is defined as the sum of absolute value of difference of all pair of digits in this integer. For example, score of 214 is $|2 - 1| \\ + \\ |1 - 4| \\ + \\ |2-4| = 6$. As Sajal is very smart, he quickly learned it and as an exercise the teacher gave him a task, he will be given two integers $L$ and $R$, and he will be asked to calculate the sum of scores of all integers between $L$ and $R$ (inclusive). As this task is a little bit hard for Sajal, he wants your help. ###Input - The first number will be the number of test cases $T$ ($T \\leq 10^4$). - Then there will be $T$ lines, each line containing two integers $L$ and $R$ ($1 \\leq L \\leq R \\leq 10^{18}$). ###Output - For each test case, your program should output the desired sum in a single line. As the sum can be very large, output it modulo 1000000007. ###Sample Input ``` 5 214 214 12 16 1 9 257 260 112 112 ``` ###Sample Output ``` 6 15 0 48 2 ```
