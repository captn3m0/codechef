---
category_name: school
problem_code: CUTBOARD
problem_name: 'Cut the Board'
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
    - cakewalk
    - chess
    - cook93
editorial_url: 'https://discuss.codechef.com/problems/CUTBOARD'
time:
    view_start_date: 1524421800
    submit_start_date: 1524421800
    visible_start_date: 1524421800
    end_date: 1735669800
    current: 1525198928
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problem statement in [Mandarin chinese](http://www.codechef.com/download/translated/COOK93/mandarin/CUTBOARD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK93/vietnamese/CUTBOARD.pdf).

Suzumo has a chessboard with $N$ rows and $M$ columns. In one step, he can choose two cells of the chessboard which share a common edge (that has not been cut yet) and cut this edge. Formally, the chessboard is \*split\* into two or more pieces if it is possible to partition its cells into two non-empty subsets $S\_1$ and $S\_2$ ($S\_1\\cap S\_2 = \\emptyset$, $|S\_1|+|S\_2|=NM$) such that there is no pair of cells $c\_1, c\_2$ ($c\_1 \\in S\_1, c\_2 \\in S\_2$) which share a common edge that has not been cut. Suzumo does not want the board to split into two or more pieces. Compute the maximum number of steps he can perform while satisfying this condition. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $M$. ### Output For each test case, print a single line containing one integer — the maximum possible number of steps. ### Constraints - $1 \\le T \\le 64$ - $1 \\le N, M \\le 8$ ### Example Input ``` 4 2 4 3 3 6 8 7 5 ``` ### Example Output ``` 3 4 35 24 ``` ### Explanation \*\*Example case 1:\*\* ![](https://codechef_shared.s3.amazonaws.com/download/upload/COOK93/CUTBOARD.png)The edges cut by Suzumo in one optimal solution are marked by red lines.
