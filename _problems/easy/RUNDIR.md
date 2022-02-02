---
category_name: easy
problem_code: RUNDIR
problem_name: 'Run Direction'
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
problem_author: alei
problem_tester: null
date_added: 15-04-2018
tags:
    - alei
    - binary
    - cook93
    - easy
    - greedy
editorial_url: 'https://discuss.codechef.com/problems/RUNDIR'
time:
    view_start_date: 1524421800
    submit_start_date: 1524421800
    visible_start_date: 1524421800
    end_date: 1735669800
    current: 1525198941
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problem statement in [Mandarin chinese](http://www.codechef.com/download/translated/COOK93/mandarin/RUNDIR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK93/vietnamese/RUNDIR.pdf).

Suzumo is the coach of the ChefLand OI team. Physical condition is very important in any olympiad, so he wants to make the children run a bit as a warmup. The team consists of $N$ children numbered $1$ through $N$ standing at some positions on the $x$-axis. For each valid $i$, the initial $x$-coordinate of the $i$-th kid is $x\_i$, the running velocity of the $i$-th kid is constant and equal to $v\_i$. Suzumo wants to assign a running direction (left or right, i.e. in the direction of decreasing or increasing $x$-coordinate) to each kid; the children start running at time $0$ in the assigned directions. Afterwards, Suzumo will measure the smallest time $t$ at which some kid passes another one. Help Suzumo compute the maximum time $t$ if he can assign the directions arbitrarily! \*\*Note:\*\* Child $i$ \*passes\* child $j$ at time $t\_{ij}$ if their coordinates satisfy $x\_i x\_j$ at any time $t &gt; t\_{ij}$, or if they satisfy $x\_i &gt; x\_j$ at any time $t t\_{ij}$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $x\_i$ and $v\_i$. ### Output For each test case, print a single line containing one real number — the maximum possible time $t$, or $-1$ if it is possible to assign directions in such a way that no kid ever passes another. Your answer will be considered correct if it has an absolute or relative error less than or equal to $10^{-6}$. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 50$ - $1 \\le x\_i, v\_i \\le 10^9$ for each valid $i$ - no two children have the same initial positions ### Example Input ``` 1 3 10 10 20 30 30 10 ``` ### Example Output ``` 0.5 ``` ### Explanation \*\*Example case 1:\*\* One optimal assignment of directions is left, right, right.
