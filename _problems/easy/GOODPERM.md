---
category_name: easy
problem_code: GOODPERM
problem_name: 'Good Permutations'
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
date_added: 16-06-2018
tags:
    - barenuz
    - brute
    - cook95
    - permutation
    - simple
editorial_url: 'https://discuss.codechef.com/problems/GOODPERM'
time:
    view_start_date: 1529260205
    submit_start_date: 1529260205
    visible_start_date: 1529260205
    end_date: 1735669800
    current: 1559472945
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK95/mandarin/GOODPERM.pdf), [Russian](http://www.codechef.com/download/translated/COOK95/russian/GOODPERM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK95/vietnamese/GOODPERM.pdf) as well.

You have a sequence $a$ with length $N$ created by removing some elements (possibly zero) from a permutation of numbers $(1, 2, \\dots, N)$. When an element is removed, the length of the sequence doesn't change, but there is an empty spot left where the removed element was. You also have an integer $K$. Let's call a permutation $p\_1, p\_2, \\dots, p\_N$ \*good\* if: - it is possible replace empty spots in $a$ by numbers in such a way that we obtain the permutation $p$ - the number of positions $i$ ($1 \\lt i \\le N$) such that $p\_i \\gt p\_{i-1}$ is equal to $K$ Your task is to find the number of good permutations. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\dots, a\_N$. Each element of this sequence is either $0$ (indicating an empty spot previously occupied by a removed element) or an integer between $1$ and $N$ inclusive. ### Output For each test case, print a single line containing one integer — the number of good permutations. ### Constraints - $1 \\le T \\le 300$ - $0 \\le K \\lt N \\le 8$ - each integer between $1$ and $N$ inclusive appears in $a$ at most once ### Example Input ``` 1 3 1 2 0 0 ``` ### Example Output ``` 2 ``` ### Explanation \*\*Example case 1:\*\* The two possible good permutations are $(2,3,1)$ and $(2,1,3)$.
