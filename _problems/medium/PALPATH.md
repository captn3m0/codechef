---
category_name: medium
problem_code: PALPATH
problem_name: 'Palindromic Walks'
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
date_added: 24-12-2018
tags:
    - jtnydv25
time:
    view_start_date: 1546074900
    submit_start_date: 1546074900
    visible_start_date: 1546074900
    end_date: 1735669800
    current: 1559472978
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given an undirected graph $G$ with $N$ vertices and $M$ edges. The vertices are numbered from 1 to $N$. Each edge has associated with it, a character (a lowercase english alphabet) and a weight. You are given two \*\*distinct\*\* vertices $s$ and $t$. A palindrome is a string which reads the same forwards and backwards. Note that any string with length $1$ is also a palindrome. A walk is a sequence of edges (with repetitions allowed) such that every adjacent pair of edges in the sequence is incident on a common vertex. A walk is called a palindromic walk if the string formed by the concatenation of characters written on the edges of the walk taken in that order, is a palindrome. The cost of a walk is defined as the sum of weights of all the edges in the walk. Note that if an edge appears $p$ times in a walk, its weight has to be added $p$ times to the cost. You have to find the minimum cost of a palindromic walk from $s$ to $t$ or print $-1$ if no palindromic walk exists. Note that the graph \*\*might\*\* have multiple edges but won't have any self loops. ###Input: - First line will contain $T$, the number of testcases. Then the testcases follow. - The first line of each testcase contains $4$ space separated integers integers: $N, M, s, t$ denoting the number of vertices in the graph, number of edges in the graph, and the end vertices of the walk respectively. - Each of the next $M$ lines contains the description of an edge. It contains three space separated integers followed by a character: $u, v, w, c$, denoting an undirected edge between vertices $u$ and $v$, having weight $w$ and the character $c$ written on it. ###Output: For each testcase, output in a single line the minimum cost of a palindromic walk from $s$ to $t$, or $-1$ if no such walk exists. ###Constraints - $1 \\leq T \\leq 1000$ - $2 \\leq N \\leq 1000$ - $1 \\leq M \\leq 1000$ - Sum of $N$ over all testcases doesn't exceed $1000$ - Sum of $M$ over all testcases doesn't exceed $1000$ - $s \\neq t$ - $ 1 \\leq s, t \\leq n$ - Each character $c$ is a lowercase english letter. - $0 \\leq w \\leq 10^9 $. - $u \\neq v $ - $ 1 \\leq u, v \\leq n$ ###Sample Input: ``` 3 6 6 1 6 1 2 2 a 1 2 3 b 2 3 1 b 3 4 1 a 4 5 1 a 5 6 1 a 3 2 1 3 1 2 1 a 2 3 2 b 3 2 1 2 1 2 1 a 2 3 2 b ``` ###Sample Output: ``` 10 -1 1 ``` ###EXPLANATION: In the first testcase, we choose the walk $1 \\rightarrow 2 \\rightarrow 1 \\rightarrow 2 \\rightarrow 3 \\rightarrow 4 \\rightarrow 5 \\rightarrow 6$ with cost $2 + 2 + 2 + 1 + 1 + 1 + 1 = 10$ . The string formed by concatenation of characters is `aaabaaa`, which is a palindrome . \*\*Note\*\* that there are two edges between $1$ and $2$, one having character 'a' written on it and weight $2$ and the other having character 'b' written and weight $3$. In the second testcase, there is no palindromic walk from $1$ to $3$, hence $-1$ has to be printed. In the third testcase we can choose the walk $1 \\rightarrow 2$ having cost $1$ and giving a palindromic string `a`.
