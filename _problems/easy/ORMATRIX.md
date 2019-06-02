---
category_name: easy
problem_code: ORMATRIX
problem_name: 'OR Matrix'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 20-07-2018
tags:
    - array
    - cook96
    - implementation
    - kingofnumbers
    - simple
editorial_url: 'https://discuss.codechef.com/problems/ORMATRIX'
time:
    view_start_date: 1532284205
    submit_start_date: 1532284205
    visible_start_date: 1532284205
    end_date: 1735669800
    current: 1559472953
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK96/mandarin/ORMATRIX.pdf), [Russian](http://www.codechef.com/download/translated/COOK96/russian/ORMATRIX.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK96/vietnamese/ORMATRIX.pdf) as well.

You are given a matrix of integers $A$ with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Each element of this matrix is either $0$ or $1$. A \*move\* consists of the following steps: - Choose two different rows $r\_1$ and $r\_2$ or two different columns $c\_1$ and $c\_2$. - Apply the bitwise OR operation with the second row/column on the first row/column. Formally, if you chose two rows, this means you should change $A\_{r\_1, k}$ to $A\_{r\_1, k} \\lor A\_{r\_2, k}$ for each $1 \\le k \\le M$; if you chose two columns, then you should change $A\_{k, c\_1}$ to $A\_{k, c\_1} \\lor A\_{k, c\_2}$ for each $1 \\le k \\le N$. For each element of the matrix, compute the minimum number of moves required to make it equal to $1$ or determine that it is impossible. Note that these answers are independent, i.e. we are starting with the initial matrix for each of them. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains $M$ integers $A\_{i, 1}, A\_{i, 2}, \\dots, A\_{i, M}$ NOT separated by spaces. ### Output For each test case, print $N$ lines. For each valid $i$, the $i$-th of these lines should contain $M$ space-separated integers; for each valid $j$, the $j$-th of these integers should be the minimum number of moves required to make $A\_{i, j}$ equal to $1$, or $-1$ if it is impossible. ###Constraints - $1 \\le T \\le 100$ - $1 \\le N, M \\le 1,000$ - $A\_{i, j} \\in \\{0, 1\\}$ for each valid $i, j$ - the sum of $N \\cdot M$ for all test cases does not exceed $1,000,000$ ### Example Input ``` 1 3 3 010 000 001 ``` ### Example Output ``` 1 0 1 2 1 1 1 1 0 ```
