---
category_name: medium
problem_code: RECOVER
problem_name: 'Recover Square'
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
problem_author: bciobanu
problem_tester: null
date_added: 25-11-2018
tags:
    - bciobanu
    - constructive
    - medium
    - observations
    - pruning
    - snckel19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/RECOVER'
time:
    view_start_date: 1544295600
    submit_start_date: 1544295600
    visible_start_date: 1544295600
    end_date: 1735669800
    current: 1559472981
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19ELTST/hindi/RECOVER.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/S19ELTST/mandarin/RECOVER.pdf), \[Russian\](http://www.codechef.com/download/translated/S19ELTST/russian/RECOVER.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19ELTST/vietnamese/RECOVER.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19ELTST/bengali/RECOVER.pdf) as well. A long time ago, a grid with $N$ rows and $N$ columns had mysteriously vanished. The cells of this grid contain integers $1$ through $N\\cdot N$ in some order. You do not know this order, but some information remains to this day: $M$ pairs of cells with Manhattan distance $1$ or $2$. You should find a grid satisfying the following conditions (or decide that it does not exist): - The cells of the grid contain all integers from $1$ to $N^2$. - For each given pair $(u, v)$, the cells containing $u$ and $v$ have Manhattan distance $1$ or $2$. - There are no other pairs of cells with Manhattan distance $1$ or $2$. If there are multiple possible solutions, you may find any one. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - Each of the following $M$ lines contains two space-separated integers $u$ and $v$ describing a pair of cells at distance $1$ or $2$. ### Output For each test case: - If there is no solution, print a single line containing the integer $-1$. - Otherwise, print $N$ lines containing $N$ space-separated integers each. The $j$-th integer on the $i$-th line should denote the number in the $i$-th row and $j$-th column of the grid. ### Constraints - $1 \\le T \\le 200$ - $1 \\le N \\le 200$ - $0 \\le M \\le 3 \\cdot 10^5$ - $1 \\le u, v \\le N^2$ - $u \\neq v$ - all pairs $(u, v)$ are distinct - the sum of $M$ over all test cases does not exceed $10^6$ ### Example Input ``` 2 2 6 1 3 1 4 1 2 3 4 3 2 4 2 3 6 3 8 3 1 3 9 3 5 3 2 8 1 ``` ### Example Output ``` 1 3 2 4 -1 ``` ### Explanation \*\*Example case 1:\*\* Note that there are many possible solutions. \*\*Example case 2:\*\* A solution satisfying all constraints on given pairs may exist, but there would always be some other pair of cells with distance $1$ or $2$ too.
