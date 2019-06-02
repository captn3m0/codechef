---
category_name: medium
problem_code: TREF
problem_name: 'Tree Flow'
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
    - R
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: allllekssssa
problem_tester: null
date_added: 28-03-2019
tags:
    - allllekssssa
    - dynamic
    - greedy
    - ltime70
    - medium
    - observations
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/TREF'
time:
    view_start_date: 1553965202
    submit_start_date: 1553965202
    visible_start_date: 1553965202
    end_date: 1735669800
    current: 1559472986
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Djenka has a rooted tree with $N$ nodes (numbered $1$ through $N$) and $N-1$ edges; node $1$ is the root. For each $i$ ($1 \\le i \\le N-1$), the $i$-th edge connects node $i$ with its parent node $p\_i$ and it has capacity $c\_i$. Each node can store an arbitrary non-negative amount of water. The capacity of each edge denotes the maximum amount of water which can flow across this edge in one second ― if $x$ units of water flow from one endpoint of this edge ($x$ may be any non-negative real number not exceeding the capacity of the edge) at a time $t$, then $x$ units of water flow into the other endpoint of this edge at time $t+1$. At the beginning (at time $0$), there is an infinite amount of water in the root and all other nodes are empty. For each node at any time, you may choose the amount of water that flows from it to each of its children in an arbitrary way (possibly a different amount of water for different children), as long the amount of water flowing across each edge does not exceed its capacity and the total amount of water flowing from this node does not exceed the amount of water which is currently stored in it. For each leaf of the tree (a leaf is a node without children), all water that flows into this node remains stored in it. Djenka is interested in the minimum time (in seconds) such that it is possible to have at least $X$ units of water in total stored in the leaves at this time, i.e. the sum of amounts of water stored in all leaves is at least $X$. Can you help Djenka find it? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $X$. - The second line contains $N-1$ space-separated integers $p\_2, p\_3, \\ldots, p\_N$. - The third line contains $N-1$ space-separated integers $c\_2, c\_3, \\ldots, c\_N$. ### Output For each test case, print a single line containing one integer ― the minimum time needed to store enough water in leaves. ### Constraints - $1 \\le T \\le 10^3$ - $2 \\le N \\le 10^3$ - $1 \\le X \\le 10^9$ - $1 \\le p\_i \\lt i$ for each valid $i$ - $1 \\le c\_i \\le 10^9$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $5 \\cdot 10^4$ ### Subtasks \*\*Subtask #1 (20 points):\*\* - $1 \\le N, X \\le 20$ - $1 \\le c\_i \\le 20$ for each valid $i$ \*\*Subtask #2 (35 points):\*\* - $1 \\le N \\le 100$ - $1 \\le X \\le 1,000$ - $1 \\le c\_i \\le 1,000$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^3$ \*\*Subtask #3 (45 points):\*\* original constraints ### Example Input ``` 1 4 5 1 2 2 3 2 1 ``` ### Example Output ``` 3 ```
