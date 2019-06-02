---
category_name: school
problem_code: PCJ18A
problem_name: 'Chef and Secret Ingredient'
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
problem_author: madhav_1999
problem_tester: null
date_added: 28-07-2018
tags:
    - madhav_1999
    - madhav_1999
    - pcj
    - prakhar17252
    - proconjunior
    - tanmay28
editorial_url: 'https://discuss.codechef.com/problems/PCJ18A'
time:
    view_start_date: 1534176000
    submit_start_date: 1534176000
    visible_start_date: 1534176000
    end_date: 1735669800
    current: 1559472928
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Today Chef wants to evaluate the dishes of his $N$ students. He asks each one to cook a dish and present it to him. Chef loves his secret ingredient, and only likes dishes with at least $X$ grams of it. Given $N$, $X$ and the amount of secret ingredient used by each student $A\_i$, find out whether Chef will like at least one dish. ###Input: - First line will contain $T$, number of testcases. Then the testcases follow. - The first line of each testcase contains two integers $N$ (number of students) and $X$ (minimum amount of secret ingredient that a dish must contain for Chef to like it). - The next line contains $N$ space separated integers, $A\_i$ denoting the amount of secret ingredient used by the students in their dishes. ###Output: For each testcase, print a single string "YES" if Chef likes at least one dish. Otherwise, print "NO". (Without quotes). ###Constraints: - $1 \\leq T \\leq 100$ - $1 \\leq N \\leq 1000$ - $1 \\leq X \\leq 1000000$ - $1 \\leq A\_i \\leq 1000000$ ###Sample Input: 3 5 100 11 22 33 44 55 5 50 10 20 30 40 50 5 45 12 24 36 48 60 ###Sample Output: NO YES YES
