---
category_name: easy
problem_code: CATSRATS
problem_name: 'Cats and Rats'
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
date_added: 16-03-2019
tags:
    - cook104
    - easy
    - erfaniaa
editorial_url: 'https://discuss.codechef.com/problems/CATSRATS'
time:
    view_start_date: 1553452200
    submit_start_date: 1553452200
    visible_start_date: 1553452200
    end_date: 1735669800
    current: 1559472937
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Vietnamese\](http://www.codechef.com/download/translated/COOK104/vietnamese/CATSRATS.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK104/mandarin/CATSRATS.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK104/bengali/CATSRATS.pdf) as well. There are $N$ cats (numbered $1$ through $N$) and $M$ rats (numbered $1$ through $M$) on a line. Each cat and each rat wants to move from some point to some (possibly the same) point on this line. Naturally, the cats also want to eat the rats when they get a chance. Both the cats and the rats can only move with constant speed $1$. For each valid $i$, the $i$-th cat is initially sleeping at a point $a\_i$. At a time $s\_i$, this cat wakes up and starts moving to a final point $b\_i$ with constant velocity and without any detours (so it arrives at this point at the time $e\_i = s\_i + |a\_i-b\_i|$). After it arrives at the point $b\_i$, it falls asleep again. For each valid $i$, the $i$-th rat is initially hiding at a point $c\_i$. At a time $r\_i$, this rat stops hiding and starts moving to a final point $d\_i$ in the same way as the cats ― with constant velocity and without any detours, arriving at the time $q\_i = r\_i + |c\_i-d\_i|$ (if it does not get eaten). After it arrives at the point $d\_i$, it hides again. If a cat and a rat meet each other (they are located at the same point at the same time), the cat eats the rat, the rat disappears and cannot be eaten by any other cat. A sleeping cat cannot eat a rat and a hidden rat cannot be eaten ― formally, cat $i$ can eat rat $j$ only if they meet at a time $t$ satisfying $s\_i \\le t \\le e\_i$ and $r\_j \\le t \\le q\_j$. Your task is to find out which rats get eaten by which cats. It is guaranteed that no two cats will meet a rat at the same time. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains three space-separated integers $a\_i$, $b\_i$ and $s\_i$. - $M$ more lines follow. For each $i$ ($1 \\le i \\le M$), the $i$-th of these lines contains three space-separated integers $c\_i$, $d\_i$ and $r\_i$. ### Output For each test case, print $M$ lines. For each valid $i$, the $i$-th of these lines should contain a single integer ― the number of the cat that will eat the $i$-th rat, or $-1$ if no cat will eat this rat. ### Constraints - $1 \\le T \\le 10$ - $0 \\le N \\le 1,000$ - $1 \\le M \\le 1,000$ - $1 \\le a\_i, b\_i, s\_i \\le 10^9$ for each valid $i$ - $1 \\le c\_i, d\_i, r\_i \\le 10^9$ for each valid $i$ - all initial and final positions of all cats and rats are pairwise distinct ### Example Input ``` 2 8 7 2 5 1 1 4 1 9 14 10 20 7 9 102 99 1 199 202 1 302 299 3 399 402 3 6 3 1 10 15 10 100 101 1 201 200 1 300 301 5 401 400 5 1000 1010 1020 8 8 2 8 2 12 18 2 22 28 4 32 38 4 48 42 2 58 52 3 68 62 1 78 72 3 3 6 3 13 19 3 21 25 3 31 39 3 46 43 4 59 53 2 65 61 4 79 71 2 ``` ### Example Output ``` 1 4 5 6 7 8 -1 1 2 3 4 5 6 7 8 ```
