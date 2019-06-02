---
category_name: medium
problem_code: TREEMX
problem_name: 'Tree MEX'
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
problem_author: vijju123
problem_tester: null
date_added: 17-11-2018
tags:
    - vijju123
time:
    view_start_date: 1542546000
    submit_start_date: 1542546000
    visible_start_date: 1542546000
    end_date: 1735669800
    current: 1559472984
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Minimum excludant (or MEX for short) of a collection of integers is the smallest non-negative integer not present in the set. You have a tree $T$ with $n$ vertices. Consider an ordering $P = (v\_1, \\ldots, v\_n)$ of vertices of $T$. We construct a sequence $A(P) = (a\_1, \\ldots, a\_n)$ using the following process: - Set all $a\_i = -1$. - Process vertices in order $v\_1, \\ldots, v\_n$. For the current vertex $v\_i$ set $a\_i = \\mathrm{MEX}(a\_{u\_1}, \\ldots, a\_{u\_k})$, where $u\_1, \\ldots, u\_k$ is the set of neighbours of $v\_i$. For instance, let $n = 3$ and $T$ be the tree with edges $(1, 2)$ and $(2, 3)$. Then, for the ordering $P = (1, 2, 3)$ we obtain the sequence $A(P) = (0, 1, 0)$, while for the ordering $P = (2, 3, 1)$ we obtain $A(P) = (1, 0, 1)$. Consider all $n!$ orders $P$. How many different sequences $A(P)$ can we obtain? Print the answer modulo $10^9 + 7$. ###Input: The first line contains an integer $T$, denoting number of test cases. The first line of each test case contains an integer $n-$ the number of vertices in the tree ($1 \\leq n \\leq 10^5$). The following $n - 1$ lines describe the tree edges. Each of these lines contains two integers $u\_i, v\_i$ describing an edge between $u\_i$ and $v\_i$ ($1 \\leq u\_i, v\_i \\leq n$, $u\_i \\neq v\_i$). ###Output: Print the answer modulo $10^9 + 7$. ###Constraints - $1\\le T \\le 10$ - $1\\le n \\le 10^5$ - $1 \\le u\_i,v\_i \\le n$ - $u\_i \\neq v\_i$ ###Sample Input: ``` 1 5 1 2 2 3 3 4 4 5 ``` ###Sample Output: `6` ###EXPLANATION: For the sample case, the possible sequences $A(P)$ are $(0, 1, 0, 1, 0)$, $(0, 1, 2, 0, 1)$, $(0, 2, 1, 0, 1)$, $(1, 0, 1, 0, 1)$, $(1, 0, 1, 2, 0)$, $(1, 2, 0, 1, 0$).
