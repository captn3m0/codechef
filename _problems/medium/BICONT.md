---
category_name: medium
problem_code: BICONT
problem_name: 'Edge Addition'
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
problem_author: jtnydv25
problem_tester: null
date_added: 19-11-2018
tags:
    - jtnydv25
time:
    view_start_date: 1545075122
    submit_start_date: 1545075122
    visible_start_date: 1545075122
    end_date: 1735669800
    current: 1559472967
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/DEC18/hindi/BICONT.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/DEC18/vietnamese/BICONT.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/DEC18/mandarin/BICONT.pdf) , \[Russian\](http://www.codechef.com/download/translated/DEC18/russian/BICONT.pdf) and \[Bengali\](http://www.codechef.com/download/translated/DEC18/bengali/BICONT.pdf) as well. You are given a tree with $N$ nodes. For each unordered pair of distinct nodes $(i, j)$ such that there is no edge between nodes $i$ and $j$, we add an edge between these nodes with probability $1/2$. For each $i$ ($1 \\le i \\le N$), let $p\_i$ be the probability that the resulting graph has exactly $i$ 2-edge-connected components and let $R\_i = p\_i \\cdot 2^{(N-1)(N-2)/2}$. You should compute $R\_i$ modulo $10^9+7$ for each $i$ from $1$ to $N$. ### Input - The first line of the input contains a single integer $N$. - Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between vertices $u$ and $v$. ### Output Print a single line containing $N$ space-separated integers $R\_1, R\_2, \\dots, R\_N$. ### Constraints - $1 \\le N \\le 200$ ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le N \\le 20$ \*\*Subtask #2 (90 points):\*\* original constraints ### Example Input ``` 3 1 2 2 3 ``` ### Example Output ``` 1 0 1 ``` ### Explanation The only edge that can be added is $(1, 3)$. If this edge is added, there will be one biconnected component; otherwise, there will be three biconnected components. Therefore, $p\_1 = p\_3 = 1/2$ and $p\_2 = 0$.
