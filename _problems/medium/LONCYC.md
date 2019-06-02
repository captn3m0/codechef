---
category_name: medium
problem_code: LONCYC
problem_name: 'Lonely Cycles'
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
problem_author: sanroylozan
problem_tester: null
date_added: 27-07-2018
tags:
    - aug18
    - cycle
    - dfs
    - likecs
    - medium
    - sanroylozan
    - sanroylozan
editorial_url: 'https://discuss.codechef.com/problems/LONCYC'
time:
    view_start_date: 1534152605
    submit_start_date: 1534152605
    visible_start_date: 1534152605
    end_date: 1735669800
    current: 1559472975
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/AUG18/hindi/LONCYC.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/AUG18/mandarin/LONCYC.pdf), [Russian](http://www.codechef.com/download/translated/AUG18/russian/LONCYC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG18/vietnamese/LONCYC.pdf) as well.

The structure of the company ShareChat can be described by a simple graph (without multiedges and self-loops) with $N$ vertices numbered $1$ through $N$ and $M$ edges numbered $1$ through $M$. Each vertex of this graph is part of at most one simple cycle. For each edge, you should find the number of simple paths that contain this edge and only contain at most one edge which belongs to a cycle. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - $M$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $u$ and $v$, denoting the vertices connected by edge $i$. ### Output For each test case, print $M$ lines. For each $i$ ($1 \\le i \\le M$), the $i$-th of these lines should contain a single integer — the number of paths for edge $i$. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 2 \\cdot 10^5$ - $1 \\le u, v \\le N$ - the sum of $N+M$ for all test cases does not exceed $5 \\cdot 10^6$ ### Subtasks \*\*Subtask #1 (20 points):\*\* - the sum of answers for all edges in all test cases is smaller than $150 \\cdot 10^6$ - the sum of $N+M$ for all test cases does not exceed $5 \\cdot 10^5$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 2 7 7 1 2 2 3 3 4 2 5 3 5 5 6 6 7 3 3 1 2 2 3 3 1 ``` ### Example Output ``` 6 4 6 6 6 10 6 1 1 1 ```
