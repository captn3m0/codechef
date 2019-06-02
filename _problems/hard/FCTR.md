---
category_name: hard
problem_code: FCTR
problem_name: Factorize
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
problem_author: rajat1603
problem_tester: null
date_added: 25-08-2018
tags:
    - carmichael
    - euler
    - factorization
    - hard
    - math
    - rajat1603
    - sept18
editorial_url: 'https://discuss.codechef.com/problems/FCTR'
time:
    view_start_date: 1537176602
    submit_start_date: 1537176602
    visible_start_date: 1537176602
    end_date: 1735669800
    current: 1559472990
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/SEPT18/hindi/FCTR.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/SEPT18/bengali/FCTR.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/SEPT18/mandarin/FCTR.pdf) , \[Russian\](http://www.codechef.com/download/translated/SEPT18/russian/FCTR.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/SEPT18/vietnamese/FCTR.pdf) as well. The Euler totient function $\\varphi(N)$ is defined as the number of integers between $1$ and $N$ (inclusive) which are coprime with $N$. You are given $N$ and $\\varphi(N)$. Calculate the prime factorization of $N$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $\\varphi(N)$. ### Output For each test case, print a line containing a single integer $K$ — the number of distinct prime factors of $N$. Then, print $K$ lines. For each valid $i$, the $i$-th of these lines should contain two space-separated integers $p\_i$ and $e\_i$ denoting a prime divisor of $N$ and its exponent. Specifically, the following conditions should hold: - $N = \\prod\_{i=1}^{K} p\_i^{e\_i}$ - $p\_i \\lt p\_{i+1}$ for each valid $i$ - $e\_i \\gt 0$ for each valid $i$ ### Constraints - $1 \\le T \\le 10$ - $2 \\le N \\le 10^{500}$ ### Subtasks \*\*Subtask #1 (5 points):\*\* $2 \\le N \\le 10^{14}$ \*\*Subtask #2 (25 points):\*\* $2 \\le N \\le 10^{50}$ \*\*Subtask #3 (70 points):\*\* $2 \\le N \\le 10^{500}$ ### Example Input ``` 2 6 2 8 4 ``` ### Example Output ``` 2 2 1 3 1 1 2 3 ```
