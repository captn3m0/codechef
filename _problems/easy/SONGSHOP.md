---
category_name: easy
problem_code: SONGSHOP
problem_name: 'Music Shopping'
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
    - R
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: erfaniaa
problem_tester: null
date_added: 21-03-2019
tags:
    - cook104
    - dynamic
    - easy
    - erfaniaa
editorial_url: 'https://discuss.codechef.com/problems/SONGSHOP'
time:
    view_start_date: 1553452200
    submit_start_date: 1553452200
    visible_start_date: 1553452200
    end_date: 1735669800
    current: 1559472959
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK104/hindi/SONGSHOP.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK104/mandarin/SONGSHOP.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK104/russian/SONGSHOP.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK104/vietnamese/SONGSHOP.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK104/bengali/SONGSHOP.pdf) as well. As everybody knows, Reza Shiri is the favourite Iranian artist. Since we love Reza Shiri and his songs, we never download them for free. Reza Shiri’s songs must be purchased from authorised stores. However, what if there is not enough money to buy all the songs? There are $N$ songs (numbered $1$ through $N$) and $M$ albums (numbered $1$ through $M$) available. For each valid $i$, the $i$-th song has \*greatness\* $v\_i$, price $p\_i$ and belongs to the album $a\_i$. For each valid $i$, the $i$-th album has price $b\_i$. If we buy an album, then all songs from this album count as bought. It is also possible to buy any songs individually. Your task is simple ― given the budget $P$ (the amount of money we have), calculate the maximum total greatness of songs we can buy. The total greatness is defined as the sum of greatness values of all distinct songs that are bought (either individually or as part of albums). ### Input - The first line of the input contains three space-separated integers $N$, $M$ and $P$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains three space-separated integers $a\_i$, $p\_i$ and $v\_i$. - The last line contains $M$ space-separated integers $b\_1, b\_2, \\ldots, b\_M$. ### Output Print a single line containing one integer ― the maximum total greatness of songs we can afford to buy. ### Constraints - $1 \\le N, M, P \\le 1,000$ - $1 \\le b\_i, p\_i \\le P$ for each valid $i$ - $1 \\le v\_i \\le 10^6$ for each valid $i$ - $1 \\le a\_i \\le M$ for each valid $i$ ### Example Input ``` 5 2 24 1 7 2 1 5 2 1 4 1 2 9 1 2 13 2 10 15 ``` ### Example Output ``` 7 ```
