---
category_name: easy
problem_code: GCDMOD
problem_name: 'Modular GCD'
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
problem_author: likecs
problem_tester: null
date_added: 16-10-2017
tags:
    - aug18
    - easy
    - exponentiation
    - gcd
    - likecs
    - likecs
editorial_url: 'https://discuss.codechef.com/problems/GCDMOD'
time:
    view_start_date: 1534152605
    submit_start_date: 1534152605
    visible_start_date: 1534152605
    end_date: 1735669800
    current: 1559472944
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/AUG18/hindi/GCDMOD.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/AUG18/mandarin/GCDMOD.pdf), [Russian](http://www.codechef.com/download/translated/AUG18/russian/GCDMOD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG18/vietnamese/GCDMOD.pdf) as well.

At ShareChat, there are are plenty of interesting problems to solve. Here is one of them. Given integers $A$, $B$ and $N$, you should calculate the \[GCD\](https://en.wikipedia.org/wiki/Greatest\_common\_divisor) of $A^N + B^N$ and $|A - B|$. (Assume that $GCD(0, a) = a$ for any positive integer $a$). Since this number could be very large, compute it modulo $1000000007$ ($10^9 + 7$). ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains three space-separated integers $A$, $B$ and $N$. ### Output For each test case, print a single line containing one integer — the required GCD modulo $10^9 + 7$. ### Constraints - $1 \\le T \\le 10$ - $1 \\le A, B, N \\le 10^{12}$ - $B \\le A$ ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le A, B, N \\le 10$ \*\*Subtask #2 (40 points):\*\* $1 \\le A, B, N \\le 10^9$ \*\*Subtask #3 (50 points):\*\* original constraints ### Example Input ``` 2 10 1 1 9 1 5 ``` ### Example Output ``` 1 2 ``` ### Explanation \*\*Example case 1:\*\* $GCD(10^1 + 1^1, 10 - 1) = GCD(11, 9) = 1$ \*\*Example case 2:\*\* $GCD(9^5 + 1^5, 9 - 1) = GCD(59050, 8) = 2$
