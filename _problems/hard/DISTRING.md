---
category_name: hard
problem_code: DISTRING
problem_name: 'Distinct Rows in Submatrices'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: jtnydv25
problem_tester: null
date_added: 24-09-2018
tags:
    - dsu
    - hard
    - jtnydv25
    - lcp
    - oct18
    - suffix
editorial_url: 'https://discuss.codechef.com/problems/DISTRING'
time:
    view_start_date: 1540027803
    submit_start_date: 1540027803
    visible_start_date: 1540027803
    end_date: 1735669800
    current: 1559472990
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/OCT18/hindi/DISTRING.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/OCT18/bengali/DISTRING.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/OCT18/mandarin/DISTRING.pdf) , \[Russian\](http://www.codechef.com/download/translated/OCT18/russian/DISTRING.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/OCT18/vietnamese/DISTRING.pdf) as well. Let's define the \*strength\* of a matrix as the number of distinct rows in it. Two rows $a\_1, a\_2, \\dots, a\_n$ and $b\_1, b\_2, \\dots, b\_n$ are distinct if there is an index $i$ such that $a\_i \\neq b\_i$. You are given an integer matrix $A$ with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). A submatrix of $A$ is formed as the intersection of rows $r\_1$ through $r\_2$ and columns $c\_1$ through $c\_2$ for any $r\_1 \\le r\_2, c\_1 \\le c\_2$. Find the sum of the strengths of all submatrices of $A$. ### Input - The first line of the input contains two space-separated integers $N$ and $M$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains $M$ space-separated integers $A\_{i, 1}, A\_{i, 2}, \\dots, A\_{i, M}$. ### Output Print a single line containing one integer — the sum of strengths of all the submatrices. ### Constraints - $1 \\le N \\cdot M \\le 500,000$ - $ 1 \\le A\_{i,j} \\le 10^9$ for each valid $i, j$ ### Subtasks \*\*Subtask #1 (20 points):\*\* $1 \\le N \\cdot M \\le 1,000$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 2 2 1 1 1 2 ``` ### Example Output ``` 11 ``` ### Explanation The submatrices are ``` 1 1 1 2 1 1 1 2 1 1 1 2 1 1 1 2 ``` with strengths $1, 1, 1, 1, 1, 1, 1, 2, 2$ respectively. The sum of these strengths is $11$.
