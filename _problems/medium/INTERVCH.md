---
category_name: medium
problem_code: INTERVCH
problem_name: 'Digit Bounded Numbers'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: deadwing97
problem_tester: null
date_added: 19-12-2018
tags:
    - cook101
    - deadwing97
    - dynamic
    - inclusion
editorial_url: 'https://discuss.codechef.com/problems/INTERVCH'
time:
    view_start_date: 1545589802
    submit_start_date: 1545589802
    visible_start_date: 1545589802
    end_date: 1735669800
    current: 1559472975
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/CK101TST/hindi/INTERVCH.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/CK101TST/mandarin/INTERVCH.pdf), \[Russian\](http://www.codechef.com/download/translated/CK101TST/russian/INTERVCH.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/CK101TST/vietnamese/INTERVCH.pdf) and \[Bengali\](http://www.codechef.com/download/translated/CK101TST/bengali/INTERVCH.pdf) as well. You are given $N$ intervals $\[L\_1, R\_1\], \[L\_2, R\_2\], \\ldots, \[L\_N, R\_N\]$. Consider $N$ integers $x\_1, x\_2, \\ldots, x\_N$ such that: - $x\_i \\in \[L\_i, R\_i\]$ for each valid $i$ - all decimal digits of $S = x\_1 + x\_2 + x\_3 + \\ldots + x\_N$ (without leading zeroes) lie between $A$ and $B$ inclusive In how many different ways can you pick the sequence $x\_1, x\_2, \\ldots, x\_N$? Since this number may be very large, compute it modulo $10^9+7$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $A$ and $B$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains two space-separated integers $L\_i$ and $R\_i$. ### Output For each test case, print a single line contains one integer — the number of ways to choose $x\_1, x\_2, \\ldots, x\_N$, modulo $10^9+7$. ### Constraints - $1 \\le T \\le 200$ - $1 \\le N \\le 7$ - $0 \\le A \\le B \\le 9$ - $0 \\le L\_i \\le R\_i \\lt 10^9$ for each valid $i$ - if $T \\gt 1$, then $N \\le 3$ ### Example Input 1 2 2 4 1 3 1 3 ### Example Output 6
