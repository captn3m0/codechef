---
category_name: easy
problem_code: BUCKETWA
problem_name: 'Get a Bucket of Water'
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
    current: 1559472936
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.A straight river $R$ is flowing nearby. Your house $H$ is located on the same side of river as your piece of land $L$ where you would like to supply a bucket of water taken from the river. Perpendicular distances of your house and piece of land from the flowing river are $d\_H$ and $d\_L$ units respectively. Perpendicular distance of the lines from $H$ to the river and $L$ to the river is $d\_R$. Find the distance you will have to cover for reaching the river bank from your house with an empty bucket, and then reaching your piece of land with bucket filled with water in minimum time. Speed of walking with a bucket filled with water is $k$ times slower than speed of walking with bucket without water. ###Input - Each instance of the problem is a single line with four positive numbers $d\_H$, $d\_L$, $d\_R$ and $k$, each less than 100000, given in a single line. - Input stream ends with four zeros in the last line. - Input contains no more than 1000 test cases. ###Output - For each instance output a single number representing the distance from $H$ to $L$ touching $R$, which you will have to cover if you are minimizing the total time taken. The answer will be correct if your solution is within $10^{-2}$ of the expected solution. ###Sample Input ``` 6 7 10 3 0 0 0 0 ``` ###Sample Output ``` 17.31 ```
