---
category_name: easy
problem_code: CHGCDG
problem_name: 'Chef and GCD Game '
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
problem_author: kefaa
problem_tester: null
date_added: 20-07-2018
tags:
    - cook96
    - gcd
    - implementation
    - kefaa
    - math
    - pre
    - sieve
editorial_url: 'https://discuss.codechef.com/problems/CHGCDG'
time:
    view_start_date: 1532284205
    submit_start_date: 1532284205
    visible_start_date: 1532284205
    end_date: 1735669800
    current: 1559472940
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK96/mandarin/CHGCDG.pdf), [Russian](http://www.codechef.com/download/translated/COOK96/russian/CHGCDG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK96/vietnamese/CHGCDG.pdf) as well.

Chef has a sequence $A$ consisting of $N$ positive integers. He is playing a game with this sequence. The goal of the game is to maximize the greatest common divisor of all elements of the sequence. Chef may perform the following operation an arbitrary number of times (including zero): - Choose a positive integer $d$ and a valid index $i$ such that $A\_i$ is divisible by $d^2$. - Divide $A\_i$ by $d^2$. - Choose a valid index $j$ (not necessarily different from $i$) and multiply $A\_j$ by $d$. Help Chef and find the maximum GCD of all integers in the sequence he could obtain if he plays optimally! ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the maximum possible value of the greatest common divisor of all elements of the sequence. ### Constraints - $1 \\le T \\le 5$ - $1 \\le N \\le 10^5$ - $1 \\le A\_i \\le 10^6$ for each valid $i$ ### Example Input ``` 2 2 1 25 5 27 3 15 1024 15 ``` ### Example Output ``` 1 6 ```
