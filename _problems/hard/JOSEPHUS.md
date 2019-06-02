---
category_name: hard
problem_code: JOSEPHUS
problem_name: 'Josephus Again'
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
    current: 1559472990
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Perhaps you know about the famous Josephus problem where some hapless people are standing in a circle waiting to be executed. Here, our problem is a little bit different in which computational efficiency is more important. After losing a battle, $n$ soldiers, with unique integer IDs $1, 2, \\ldots, n$ are standing in a circle. Counting from 1 (The soldier with ID 1 is counted 1) every $k^{th}$ ($1 \\leq k \\leq 1000$) soldier is taken to prison and later executed, and from the next soldier counting goes on until just one soldier survives. Find the ID of the last soldier taken to prison (the soldier who was taken to the prison immediately before the last surviving soldier). ###Input - For each instance of the problem, there will be a single line of input which contains two space separated integers $n$ and $k$. - Input ends with a line containing two zeros. - There will be maximum 120 such instances. - For all instances, $2 \\leq n \\leq 10^{12}$ and $1 \\leq k \\leq 1000$. ###Output - For each instance your program should output the ID of the last soldier taken to prison in a single line. ###Sample Input ``` 10 3 4 2 0 0 ``` ###Sample Output ``` 10 3 ``` ###Explanation \*\*Testcase 1\*\*: The order in which the people are executed is as follows: 3, 6, 9, 2, 7, 1, 8, 5, 10, and then 4 is the last soldier who survives. So the one immediately before that is 10, which is the answer.
