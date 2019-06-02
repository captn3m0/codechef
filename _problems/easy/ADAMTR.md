---
category_name: easy
problem_code: ADAMTR
problem_name: 'Ada Matrix'
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
problem_author: alei
problem_tester: null
date_added: 14-01-2019
tags:
    - '2'
    - alei
    - dfs
    - graph
editorial_url: 'https://discuss.codechef.com/problems/ADAMTR'
time:
    view_start_date: 1548009002
    submit_start_date: 1548009002
    visible_start_date: 1548009002
    end_date: 1735669800
    current: 1559472934
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK102/hindi/ADAMTR.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK102/mandarin/ADAMTR.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK102/russian/ADAMTR.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK102/vietnamese/ADAMTR.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK102/bengali/ADAMTR.pdf) as well. Ada has two matrices $A$ and $B$, each with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$). Ada may perform the following operation any number of times (including zero): choose an integer $i$ ($1 \\le i \\le N$), then swap row $i$ and column $i$ in matrix $A$. (Formally, for each valid $j$, she swaps $A\_{i, j}$ with $A\_{j, i}$.) Is it possible to transform matrix $A$ into matrix $B$? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains $N$ space-separated integers $A\_{i, 1}, A\_{i, 2}, \\ldots, A\_{i, N}$. - $N$ more lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains $N$ space-separated integers $B\_{i, 1}, B\_{i, 2}, \\ldots, B\_{i, N}$. ### Output For each test case, print a single line containing the string `"Yes"` if it is possible to transform $A$ into $B$ or `"No"` if it is impossible (without quotes). ### Constraints - $1 \\le T \\le 10^{5}$ - $1 \\le N \\le 2^{10}$ - $1 \\le A\_{i, j}, B\_{i, j} \\le 10^9$ for each valid $i, j$ - the sum of $N^2$ over all test cases does not exceed $3 \\cdot 10^{6}$ ### Example Input ``` 1 3 1 2 3 4 5 6 7 8 9 1 2 7 4 5 8 3 6 9 ``` ### Example Output ``` Yes ``` ### Explanation \*\*Example case 1:\*\* We can swap the second row with the second column and in the resulting matrix, swap the first row with the first column.
