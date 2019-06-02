---
category_name: school
problem_code: VALIDSTK
problem_name: 'Valid Stack Operations'
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
problem_author: admin3
problem_tester: null
date_added: 21-12-2018
tags:
    - admin3
time:
    view_start_date: 1545503400
    submit_start_date: 1545503400
    visible_start_date: 1545503400
    end_date: 1735669800
    current: 1559472932
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You have a stack which is initially empty. You receive instructions of the form 1 or 0. 1 denotes that you have to push in an element, and 0 denotes that you have to pop out an element. But of course you can pop something out only if it exists in the stack. So your job is to look at the instructions and see if they are valid (ie. you never have to pop from an empty stack), or not. ###Input - The first line of the input contains a single integers $T$, which denotes the number of testcases. - The first line of each testcase contains a single integer $n$, which denotes the number of instructions. - The second line contains $n$ space separated integers, which are all 0 or 1. ###Output - For each testcase output either "Valid" or "Invalid", in a new line. ###Constraints - $1 \\leq T \\leq 10$ - $1 \\leq n \\leq 10^5$ - All instructions are either 0 or 1. ###Sample Input ``` 2 5 1 1 0 0 1 5 1 0 0 1 1 ``` ###Sample Output ``` Valid Invalid ``` ###Explanation \*\*Testcase 2\*\*: You first push something, and then pop it out. So now you have an empty stack, but the next operation is a Pop, and hence this is Invalid.
