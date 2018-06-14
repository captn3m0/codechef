---
category_name: hard
problem_code: CHEFPIC
problem_name: 'Picnic with Chef'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: hloya_ygrt
problem_tester: null
date_added: 11-05-2018
tags:
    - binary
    - bit
    - cook94
    - geometry
    - hloya_ygrt
    - scanline
    - squares
editorial_url: 'https://discuss.codechef.com/problems/CHEFPIC'
time:
    view_start_date: 1526841000
    submit_start_date: 1526841000
    visible_start_date: 1526841000
    end_date: 1735669800
    current: 1528987028
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK94/mandarin/CHEFPIC.pdf), [Russian](http://www.codechef.com/download/translated/COOK94/russian/CHEFPIC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK94/vietnamese/CHEFPIC.pdf) as well.

Chef decided to make a big picnic. He chose a beautiful place for this special event. Then, Chef placed $N$ picnic baskets on the ground at some points. The only thing remaining is placing some picnic blankets underneath the baskets in such a way that each basket lies on at least one blanket (the blankets are allowed to overlap and each basket may lie on more than one blanket). Each picnic blanket can be represented as an axis-aligned square. Chef may place any number of blankets on the ground, arbitrarily and independently choosing the side length of each blanket. However, for each blanket, there must be at least three baskets lying on it. Your task is to help Chef with the preparations by minimizing the size of the largest blanket. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$ denoting the number of baskets. - Each of the following $N$ lines contains two space-separated integers $X$ and $Y$ denoting the coordinates of one basket. ### Output For each test case, print a single line containing one integer — the minimum possible side length of the largest blanket (the blanket with the maximum side length). ### Constraints - $1 \\le T \\le 5$ - $3 \\le N \\le 10^4$ - $0 \\le X, Y \\le 10^9$ ### Example Input ``` 2 4 1 1 1 2 2 2 3 5 3 1 1 11 1 1 43 ``` ### Example Output ``` 3 42 ``` ### Explanation \*\*Example case 1:\*\* Chef can place two picnic blankets on the ground. The first blanket has two opposite corners at points $(1, 1)$ and $(2, 2)$, the second blanket at points $(1, 2)$ and $(4, 5)$. Then, the largest blanket (blanket 2) has side length $3$.
