---
category_name: medium
problem_code: KPERFMAT
problem_name: 'K Perfect Matchings'
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
problem_author: admin2
problem_tester: null
date_added: 20-06-2018
tags:
    - admin2
time:
    view_start_date: 1529692200
    submit_start_date: 1529692200
    visible_start_date: 1529692200
    end_date: 1735669800
    current: 1559472975
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a bipartite graph $G = (U, V , E)$, and an integer $K$. $U$ and $V$ are the two bipartitions of the graph such that |$U$| = |$V$| = $N$ , and $E$ is the edge set. The vertices of $U$ are {$1, 2, . . . , N$ } and that of $V$ are {$N + 1, N + 2, . . . , 2N$ }. You need to find out whether the total number of different perfect matchings in $G$ is strictly greater than $K$ or not. Recall that a perfect matching is a subset of $E$ such that every vertex of the graph belongs to exactly one edge in the subset. Two perfect matchings are considered to be different even if one edge is different. ###Input First line of the input contains three integers: $N$, $M$ and $K$, which represent |$U$| (which is also equal to |$V$|), |$E$| and the queried threshold respectively. The i-th of the next $E$ lines contains two numbers $L\_i$ and $R\_i$ which denote the i-th edge is between the vertices $L\_i$ and $R\_i$. ###Output A single line containing “Yes” if the number of perfect matchings is greater than $K$, and “No” othewise. ###Constraints - $1 \\leq N \\leq 100$ - $1 \\leq M \\leq 600$ - $0 \\leq K \\leq 10^5$ - $1 \\leq L\_i \\leq N \\lt R\_i \\leq 2 \* N$ ###Subtasks ###Subtask 1 (10 Points): - $K = 0$ ###Subtask 2 (30 Points): - $1 \\leq N \\leq 50$ - $1 \\leq M \\leq 100$ - $0 \\leq K \\leq 300$ ###Subtask 3 (60 Points): - No further constraints. ###Sample Input 1 3 5 2 1 4 2 6 2 5 3 5 3 6 ###Sample Output 1 No ###Sample Input 2 3 5 1 1 4 2 6 2 5 3 5 3 6 ###Sample Output 2 Yes ###Explanation: \*Explanation 1:\* The graph is as follows: ![drawing](https://codechef_shared.s3.amazonaws.com/download/upload/IOITC181/Image1.png)There are exactly two perfect matchings in this graph: {(1, 4), (2, 5), (3, 6)} and {(1, 4), (2, 6), (3, 5)}. The number of perfect matchings is not $\\gt K$, and hence the output is “No”. \*Explanation 2:\* The graph is the same as previous one, and the same 2 perfect matchings are present. But now, $K$ is 1. Therefore, the number of perfect matchings is > $K$, and hence the output is “Yes”.
