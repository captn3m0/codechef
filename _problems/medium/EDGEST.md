---
category_name: medium
problem_code: EDGEST
problem_name: 'Edges in Spanning Trees'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: altruist_
problem_tester: null
date_added: 1-04-2018
tags:
    - altruist_
    - heavy
    - may18
    - segment
editorial_url: 'https://discuss.codechef.com/problems/EDGEST'
time:
    view_start_date: 1526290200
    submit_start_date: 1526290200
    visible_start_date: 1526290200
    end_date: 1735669800
    current: 1528987027
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MAY18/mandarin/EDGEST.pdf), [Russian](http://www.codechef.com/download/translated/MAY18/russian/EDGEST.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY18/vietnamese/EDGEST.pdf) as well.

You are given two spanning trees $T\_1$ and $T\_2$ on the same set of $N$ vertices (numbered $1$ through $N$). For each edge $e\_1$ in $T\_1$, you have to calculate the number of edges $e\_2 \\in T\_2$ which satisfy the following conditions: - $T\_1 - e\_1 + e\_2$ (the graph formed by removing the edge $e\_1$ from $T\_1$ and adding the edge $e\_2$) is a spanning tree - $T\_2 - e\_2 + e\_1$ is also a spanning tree ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge in $T\_1$ between vertices $u$ and $v$. - The following $N-1$ lines describe the edges of $T\_2$ in the same format. ### Output For each test case, print $N-1$ space-separated integers — the number of valid edges $e\_2$ for each edge $e\_1 \\in T\_1$ (in the order in which they are given on the input). ### Constraints - $1 \\le T \\le 10$ - $2 \\le N \\le 2 \\cdot 10^5$ - the sum of $N$ over all test cases does not exceed $2 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (20 points):\*\* the sum of $N$ over all test cases does not exceed $10^4$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 1 4 1 2 1 3 1 4 1 2 2 3 3 4 ``` ### Example Output ``` 1 1 1 ```
