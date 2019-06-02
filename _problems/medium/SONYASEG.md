---
category_name: medium
problem_code: SONYASEG
problem_name: 'Sonya and Segments'
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
problem_author: barenuz
problem_tester: null
date_added: 14-06-2018
tags:
    - barenuz
    - combinatorics
    - cook95
    - easy
    - geometry
    - line
    - looping
editorial_url: 'https://discuss.codechef.com/problems/SONYASEG'
time:
    view_start_date: 1529260205
    submit_start_date: 1529260205
    visible_start_date: 1529260205
    end_date: 1735669800
    current: 1559472982
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK95/mandarin/SONYASEG.pdf), [Russian](http://www.codechef.com/download/translated/COOK95/russian/SONYASEG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK95/vietnamese/SONYASEG.pdf) as well.

Sonya has $N$ segments on the $x$-axis. For each valid $i$, the $i$-th segment contains all points between $l\_i$ and $r\_i$ inclusive. Maks gave Sonya a magic number $K$. Sonya wants to choose exactly $K$ of her segments in such a way that the intersection of the chosen segments is empty, i.e. there is no point which is contained in each of the chosen segments. Find the number of ways in which Sonya can choose $K$ segments. Since this number can be large, Sonya only needs to know its remainder modulo $1000000007$ ($10^9+7$). ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $l\_i$ and $r\_i$. ### Output For each test case, print a single line containing one integer — the number of ways to choose the segments, modulo $1000000007$ ($10^9+7$). ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le K \\le N \\le 4\\cdot10^5$ - $1 \\le l\_i \\le r\_i \\le 10^9$ for each valid $i$ - the sum of $N$ for all test cases does not exceed $4\\cdot10^5$ ### Example Input ``` 1 5 2 1 4 2 5 5 10 4 7 8 9 ``` ### Example Output ``` 4 ``` ### Explanation \*\*Example case 1:\*\* We are looking for pairs of segments. The four pairs with empty intersections are $(1,3)$, $(1,5)$, $(2,5)$ and $(4,5)$.
