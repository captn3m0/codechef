---
category_name: hard
problem_code: BTMNTREE
problem_name: 'Batman and Tree'
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
problem_author: barenuz
problem_tester: null
date_added: 14-06-2018
tags:
    - barenuz
    - cook95
    - dynamic
    - hard
    - lazypropagation
    - segment
editorial_url: 'https://discuss.codechef.com/problems/BTMNTREE'
time:
    view_start_date: 1529260205
    submit_start_date: 1529260205
    visible_start_date: 1529260205
    end_date: 1735669800
    current: 1559472988
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK95/mandarin/BTMNTREE.pdf), [Russian](http://www.codechef.com/download/translated/COOK95/russian/BTMNTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK95/vietnamese/BTMNTREE.pdf) as well.

Nazik gave Batman a tree with $N$ vertices (numbered $1$ through $N$). There are some robbers in the tree; of course, Batman wants to catch the robbers. Initially, Batman is in a vertex $s$ and his power is equal to $p$. During each of the next $M$ seconds, the following process happens: - A robber with power $r$ runs from a vertex $x$ straight to vertex $y$. - Batman either catches the robber or stays in his current vertex (and never catches this robber). - Batman can only catch the robber if Batman's power is strictly greater than the robber's power. - Let's denote Batman's current vertex by $s$ ($s=s\_i$ initially). To catch the robber, Batman must choose a vertex $g$ such that each vertex on the simple path between $x$ and $y$ (inclusive) lies also on the simple path between $s$ and $g$ (inclusive). If it is impossible to choose a vertex $g$ so that this condition is satisfied, Batman cannot catch this robber. - If Batman catches the robber, $g$ becomes his current vertex. - After Batman catches this robber, his power increases by $t$. Your task is to calculate the maximum power Batman can have after $M$ seconds if he chooses the robbers to catch optimally. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $s\_i$ and $p$. - Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge in the tree between vertices $u$ and $v$. - The next line contains a single integer $M$. - Each of the following $M$ lines contains four integers $x$, $y$, $r$ and $t$ describing a robber. ### Output For each test case, print a single line containing one integer — the maximum possible value of Batman's power after $M$ seconds. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N, M \\le 4\\cdot10^5$ - $1 \\le s\_i, u, v \\le N$ - the graph described on the input is a tree - $1 \\le x, y \\le N$ - $x \\neq y$ - $1 \\le p, r \\le 10^9$ - $|t| \\le 10^9$ - the sum of $N$ for all test cases does not exceed $4\\cdot10^5$ - the sum of $M$ for all test cases does not exceed $4\\cdot10^5$ ### Example Input ``` 1 6 1 4 1 2 2 3 2 4 4 5 1 6 5 6 4 3 8 1 2 3 2 4 6 5 -1 6 5 4 6 5 4 5 -3 ``` ### Example Output ``` 12 ``` ### Explanation \*\*Example case 1:\*\* - In the 2-nd second, Batman will go from vertex $s=1$ to vertex $g=5$. - In the 4-th second, Batman will go from vertex $s=5$ to vertex $g=6$. - Batman should ignore robbers moving in the 1-st, 3-rd and 5-th second.
