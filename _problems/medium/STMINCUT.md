---
category_name: medium
problem_code: STMINCUT
problem_name: 'S-T Mincut'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: null
date_added: 21-09-2017
tags:
    - chemthan
    - gomory
    - may18
    - medium
    - minimum
editorial_url: 'https://discuss.codechef.com/problems/STMINCUT'
time:
    view_start_date: 1526290202
    submit_start_date: 1526290202
    visible_start_date: 1526290202
    end_date: 1735669800
    current: 1559472983
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MAY18/mandarin/STMINCUT.pdf), [Russian](http://www.codechef.com/download/translated/MAY18/russian/STMINCUT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY18/vietnamese/STMINCUT.pdf) as well.

In an undirected weighted graph, we define an $s - t$ \*mincut cost\* as the minimum sum of weights of edges which have to be removed from the graph so that there would be no path between vertices $s$ and $t$. You are given a two-dimensional array $A$ with size $N \\times N$. You are allowed to increase the value of each element of this array by any non-negative integer (these integers may be different for different elements). Afterwards, the array $A$ should satisfy the following condition: there is a graph $G$ with $N$ vertices (numbered $1$ through $N$) such that for each $i$ and $j$ ($1 \\le i, j \\le N$), the $i-j$ mincut cost in $G$ is equal to $A\_{ij}$. Let's define the \*cost\* of the above operation as the sum of all integers added to elements of the initial array $A$. Compute the minimum possible cost. \*\*Note that: We consider only non-negative weight graphs.\*\* ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains $N$ space-separated integers $A\_{i1}, A\_{i2}, \\dots, A\_{iN}$. ### Output For each test case, print a single line containing one integer — the minimum cost. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 1,000$ - $0 \\le A\_{ij} \\le 10^9$ for each valid $i, j$ - $A\_{ii} = 0$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $2,000$ ### Subtasks \*\*Subtask #1 (10 points):\*\* $A\_{ij} \\le 1$ for each valid $i, j$ \*\*Subtask #2 (40 points):\*\* $N \\le 100$ \*\*Subtask #3 (50 points):\*\* original constraints ### Example Input ``` 3 2 0 0 1 0 3 0 0 3 1 0 1 2 0 0 4 0 0 2 2 1 0 2 0 0 3 0 3 2 4 0 0 ``` ### Example Output ``` 1 3 13 ``` ### Explanation \*\*Example case 1:\*\* Of course, we must increase $A\_{12}$ by $1$, since $A\_{21} = 1$. This is sufficient; one possible graph $G$ is shown in the picture below. (Disconnecting vertices $1$ and $2$ costs $1$.) ![ex1](https://image.ibb.co/mpv6G7/ex1.png)\*\*Example case 2:\*\* Similarly, we must increase $A\_{12}$ by $1$, $A\_{31}$ by $1$ and $A\_{32}$ also by $1$. This is again sufficient and a possible graph $G$ is shown in the picture below. (Disconnecting vertices $1$ and $2$ costs $1$, disconnecting vertices $1, 3$ costs $3$ and disconnecting $2, 3$ costs $1$.) ![ex2](https://image.ibb.co/e79Yw7/ex2.png)
