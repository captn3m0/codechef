---
category_name: medium
problem_code: MAXPRODU
problem_name: 'Maximize Product'
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
date_added: 27-10-2018
tags:
    - admin3
    - differentiation
    - easy
    - math
    - proof
    - snck1b19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/MAXPRODU'
time:
    view_start_date: 1540827000
    submit_start_date: 1540827000
    visible_start_date: 1540827000
    end_date: 1735669800
    current: 1559472977
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Russian\](http://www.codechef.com/download/translated/S191BTST/russian/MAXPRODU.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/S191BTST/vietnamese/MAXPRODU.pdf), \[Hindi\](http://www.codechef.com/download/translated/S191BTST/hindi/MAXPRODU.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S191BTST/mandarin/MAXPRODU.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S191BTST/bengali/MAXPRODU.pdf) as well. You are given two integers $N$ and $K$. Consider all ways to represent $N$ as the sum of exactly $K$ distinct positive integers $x\_1, x\_2, \\dots, x\_K$ — in other words, $x\_i \\gt 0$ for each valid $i$, $x\_i \\neq x\_j$ for each valid $i \\neq j$ and $x\_1 + x\_2 + \\ldots + x\_K = N$ should hold. You have to find the maximum possible value of the product $(x\_1^2 - x\_1) \\cdot (x\_2^2 - x\_2) \\cdot \\ldots \\cdot (x\_K^2 - x\_K)$. Because this number could be huge, compute it modulo $10^9 + 7$. If $N$ cannot be represented as the sum of any $K$ distinct positive integers, output $-1$ instead. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $K$. ### Output For each test case, print a single line containing one integer — the maximum product, or $-1$ if $N$ cannot be represented in the given way. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^9$ - $1 \\le K \\le 10^4$ ### Subtasks \*\*Subtask #1 (50 points):\*\* - $1 \\le N \\le 500$ - $1 \\le K \\le 500$ \*\*Subtask #2 (50 points):\*\* original constraints ### Example Input ``` 2 5 2 6 2 ``` ### Example Output ``` 12 24 ``` ### Explanation \*\*Example case 1:\*\* We want two distinct positive integers whose sum is $5$. There are only two possibilities: $(1, 4)$ and $(2, 3)$. The corresponding products are $(1^2 - 1) \\cdot (4^2 - 4) = 0$ and $(2^2 - 2) \\cdot (3^2 - 3) = 2 \\cdot 6 = 12$. The maximum is $12$, which is the answer. \*\*Example case 2:\*\* We want two distinct positive integers whose sum is $6$. There are only two possibilities again: $(1, 5)$ and $(2, 4)$. Their corresponding products are $0$ and $24$ and the maximum is $24$.
