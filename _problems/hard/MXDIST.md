---
category_name: hard
problem_code: MXDIST
problem_name: 'Maximum Distance'
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
max_timelimit: '1.5 - 5'
source_sizelimit: '50000'
problem_author: bciobanu
problem_tester: null
date_added: 31-12-2018
tags:
    - bciobanu
    - convex
    - hard
    - jan19
    - rmq
    - rotating
    - sqrt
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/MXDIST'
time:
    view_start_date: 1547458202
    submit_start_date: 1547458202
    visible_start_date: 1547458202
    end_date: 1735669800
    current: 1559472991
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/JAN19/hindi/MXDIST.pdf), \[Bengali\](http://www.codechef.com/download/translated/JAN19/bengali/MXDIST.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/JAN19/mandarin/MXDIST.pdf), \[Russian\](http://www.codechef.com/download/translated/JAN19/russian/MXDIST.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/JAN19/vietnamese/MXDIST.pdf) as well. You are given $N$ points $(x\_1, y\_1), (x\_2, y\_2), \\ldots, (x\_N, y\_N)$. You should answer $Q$ queries. In each query, you are given a range $\[f, t\]$. Consider the points $(x\_f, y\_f), (x\_{f+1}, y\_{f+1}), \\ldots, (x\_t, y\_t)$; the answer to a query is the square of the maximum Euclidean distance between any two of these points. ### Input - The first line of the input contains a single integer $N$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains two space-separated integers $x\_i$ and $y\_i$. - The next line contains a single integer $Q$. - Each of the next $Q$ lines contains two space-separated integers $f$ and $t$ describing a query. ### Output For each query, print a single line containing one integer — the squared maximum distance. ### Constraints - $1 \\le N, Q \\le 2 \\cdot 10^5$ - $1 \\le f \\le t \\le N$ - $0 \\le x\_i, y\_i \\le 2 \\cdot 10^5$ for each valid $i$ ### Subtasks \*\*Subtask #1 (15 points):\*\* $1 \\le N, Q \\le 3,000$, \*\*TL=1.5s\*\* \*\*Subtask #2 (35 points):\*\* the coordinates of all points are chosen uniformly randomly, \*\*TL=5s\*\* \*\*Subtask #3 (50 points):\*\* original constraints, \*\*TL=5s\*\* ### Example Input ``` 11 1 2 2 2 3 0 3 1 3 3 3 4 3 1 3 0 3 3 4 2 5 2 5 5 11 9 11 3 8 4 7 9 10 ``` ### Example Output ``` 16 5 16 9 2 ```
