---
category_name: hard
problem_code: DARTSEGM
problem_name: Darts
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: gainullinildar
problem_tester: kingofnumbers
date_added: 21-04-2018
tags:
    - gainullinildar
editorial_url: 'https://discuss.codechef.com/problems/DARTSEGM'
time:
    view_start_date: 1524934802
    submit_start_date: 1524934802
    visible_start_date: 1524934802
    end_date: 1735669800
    current: 1525454451
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME59/mandarin/DARTSEGM.pdf), [Russian](http://www.codechef.com/download/translated/LTIME59/russian/DARTSEGM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME59/vietnamese/DARTSEGM.pdf) as well.

Alice and Bob are playing a game. First, Alice throws $N$ darts at a board with dimensions $10^9 \\times 10^9$ at random. Each dart hits the board at a point (some of these points may coincide). Then, Bob should answer Alice's $Q$ questions. In each question, Alice chooses two integers $l$ and $r$; Bob should only consider all points hit in throws $l$ through $r$ (inclusive) and compute the distance between the farthest pair of these points. Help Bob find the answers to all queries. ### Input - The first line of the input contains a single integer $N$ denoting the number of points. - $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $x\_i$ and $y\_i$ denoting the coordinates of the point hit with the $i$-th dart. - The next line contains a single integer $Q$ denoting the number of queries. - Each of the following $Q$ lines contains two space-separated integers $l$ and $r$ describing one query. ### Output For each query, print a single line containing one integer — the square of the maximum distance. (It is guaranteed that this number is an integer.) ### Constraints - $1 \\le N, Q \\le 50,000$ - $1 \\le x\_i, y\_i \\le 10^9$ for each $i$ - $1 \\le l \\le r \\le N$ ### Subtasks \*\*Subtask #1 (20 points):\*\* $1 \\le N, Q \\le 200$ \*\*Subtask #2 (30 points):\*\* $1 \\le N, Q \\le 2000$ \*\*Subtask #3 (50 points):\*\* original constraints ### Example Input ``` 2 1 1 2 2 1 1 2 ``` ### Example Output ``` 2 ``` ### Test Case Generation In each test case, the points $(x\_1, y\_1), (x\_2, y\_2), \\dots, (x\_N, y\_N)$ are generated randomly uniformly from the $10^9 \\times 10^9$ square.
