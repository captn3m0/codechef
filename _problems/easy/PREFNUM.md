---
category_name: easy
problem_code: PREFNUM
problem_name: 'Prefix Numbers'
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
problem_author: admin2
problem_tester: null
date_added: 17-12-2018
tags:
    - admin2
time:
    view_start_date: 1545157800
    submit_start_date: 1545157800
    visible_start_date: 1545157800
    end_date: 1735669800
    current: 1559472956
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given two positive integers $x, y$. Find the smallest positive integer $z$ such that $z$ contains $x$ as a prefix (in base 10) and $z$ is divisible by $y$. If the smallest such $z > 10^{18}$, print -1. ### Input - The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows. - The first line of each test case contains two space-separated integers $x, y$. ### Output For each test case, output an integer $z$ corresponding to the answer of the problem. If $z > 10^{18}$, output -1 instead. ###Constraints - $1 \\le T \\le 10^5$ - $1 \\le x, y \\leq 10^{18}$ ### Example Input ``` 2 2 3 12 5 ``` ### Example Output ``` 21 120 ``` ###Explanation: \*\*Testcase 1\*\*: 21 has 2 as a prefix, and is divisible by 3. Hence this is a valid $z$. You can check that no smaller integer satisfies these conditions, and hence the answer is 21. \*\*Testcase 2\*\*: 120 has 12 as a prefix, and is divisible by 5. Hence this is a valid $z$. You can check that no smaller integer satisfies these conditions, and hence the answer is 120.
