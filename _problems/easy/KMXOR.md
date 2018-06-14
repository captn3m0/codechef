---
category_name: easy
problem_code: KMXOR
problem_name: 'Best Cake Ever'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: hloya_ygrt
problem_tester: null
date_added: 15-05-2018
tags:
    - constructive
    - cook94
    - hloya_ygrt
    - xor
editorial_url: 'https://discuss.codechef.com/problems/KMXOR'
time:
    view_start_date: 1526841000
    submit_start_date: 1526841000
    visible_start_date: 1526841000
    end_date: 1735669800
    current: 1528987025
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK94/mandarin/KMXOR.pdf), [Russian](http://www.codechef.com/download/translated/COOK94/russian/KMXOR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK94/vietnamese/KMXOR.pdf) as well.

Chef is baking a large cake! The cake consists of $N$ different ingredients numbered $1$ through $N$. Chef can choose how much of each ingredient to use in his cake recipe; let's denote the amount of the $i$-th ingredient used in the cake by $g\_i$. Chef can only measure ingredients in fixed whole units, so the amounts of all ingredients must be integers. In order to keep the cake inexpensive (and, of course, use each ingredient from the recipe), the chosen amounts of ingredients have to satisfy the condition $1 \\le g\_i \\le K$ (for each $1 \\le i \\le N$). The \*taste\* of the resulting cake is computed as the bitwise XOR of the amounts of all ingredients, i.e. $g\_1 \\oplus g\_2 \\oplus \\dots \\oplus g\_N$. For example, if $N=3$ and $g = \[1, 2, 5\]$, the taste of the cake is equal to $1 \\oplus 2 \\oplus 5 = 6$. Please help Chef and find one way to choose the amounts of all ingredients such that the taste of the cake is maximum possible. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $K$. ### Output For each test case, print a single line containing $N$ space-separated integers $g\_1, g\_2, \\dots, g\_N$ — the amounts of ingredients $1, 2, \\dots, N$. ### Constraints - $1 \\le T \\le 40$ - $1 \\le N \\le 10^4$ - $1 \\le K \\le 10^9$ ### Example Input ``` 2 3 5 4 3 ``` ### Example Output ``` 5 1 3 1 2 3 3 ``` ### Explanation \*\*Example case 1:\*\* The maximum possible taste of the cake is $5 \\oplus 1 \\oplus 3 = 7$. \*\*Example case 2:\*\* The maximum possible taste is $1 \\oplus 2 \\oplus 3 \\oplus 3 = 3$.
