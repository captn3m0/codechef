---
category_name: easy
problem_code: PERIODIC
problem_name: 'Chef and Periodic Sequence'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 18-10-2018
tags:
    - easy
    - gcd
    - kingofnumbers
    - pattern
    - sequences
    - snck1a19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/PERIODIC'
time:
    view_start_date: 1540092600
    submit_start_date: 1540092600
    visible_start_date: 1540092600
    end_date: 1735669800
    current: 1559472954
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S191ATST/hindi/PERIODIC.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S191ATST/mandarin/PERIODIC.pdf), \[Russian\](http://www.codechef.com/download/translated/S191ATST/russian/PERIODIC.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S191ATST/vietnamese/PERIODIC.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S191ATST/bengali/PERIODIC.pdf) as well. Let's define a periodic infinite sequence $S$ ($0$-indexed) with period $K$ using the formula $S\_i = (i \\% K) + 1$. Chef has found a sequence of positive integers $A$ with length $N$ buried underground. He suspects that it is a contiguous subsequence of some periodic sequence. Unfortunately, some elements of $A$ are unreadable. Can you tell Chef the longest possible period $K$ of an infinite periodic sequence which contains $A$ (after suitably filling in the unreadable elements) as a contiguous subsequence? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. Unreadable elements are denoted by $-1$. ### Output For each test case, print a single line. - If the period can be arbitrarily large, this line should contain a single string `"inf"`. - Otherwise, if $A$ cannot be a contiguous subsequence of a periodic sequence, it should contain a single string `"impossible"`. - Otherwise, it should contain a single integer — the maximum possible period. ### Constraints - $1 \\le T \\le 100$ - $2 \\le N \\le 10^5$ - the sum of $N$ over all test cases does not exceed $10^6$ - for each valid $i$, $1 \\le A\_i \\le 10^6$ or $A\_i = -1$ ### Subtasks \*\*Subtask #1 (50 points):\*\* - $2 \\le N \\le 1,000$ - the sum of $N$ over all test cases does not exceed $10,000$ \*\*Subtask #2 (50 points):\*\* original constraints ### Example Input ``` 3 3 -1 -1 -1 5 1 -1 -1 4 1 4 4 6 7 -1 ``` ### Example Output ``` inf 4 impossible ```
