---
category_name: hard
problem_code: POLYSTR
problem_name: 'Polygon and String'
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
date_added: 15-12-2018
tags:
    - admin2
time:
    view_start_date: 1545157800
    submit_start_date: 1545157800
    visible_start_date: 1545157800
    end_date: 1735669800
    current: 1559472992
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a list of $n$ points $p\_0, p\_1, ..., p\_{n-1}$ in convex position (ie. all of the points are vertices of their convex hull), such that no three points are collinear and no two points have the same $x$ or $y$ coordinate, so for any $i,j$ we have $x\_i \\not = x\_j$ and $y\_i \\not = y\_j$ where $p\_i = (x\_i, y\_i)$ and $p\_j= (x\_j, y\_j)$. You will be given a number of queries. Each query is a string $S = s\_0 s\_1 \\ldots s\_{n-2}$ of length $n-1$ composed of only the letters $U$ and $D$. For each string, your task is to find a permutation of the points, $p\_{\\sigma(0)}, p\_{\\sigma(1)}, ..., p\_{\\sigma(n-1)}$, such that for $i = 0, 1, ..., n-2 $ we have: - If the $s\_i$ is a $U$ then y coordinate of $p\_{\\sigma(i)}$ is less than the y coordinate of $p\_{\\sigma(i+1)}$ - If the $s\_i$ is a $D$ then y coordinate of $p\_{\\sigma(i)}$ is larger than the y coordinate of $p\_{\\sigma(i+1)}$ Furthermore, we require that the line segments $\\overline{p\_{\\sigma(i)} p\_{\\sigma(i+1)}}$ for $i = 0, 1, ..., n-2$ intersect with each other only at their end points (if at all). It is guaranteed that such a permutation exists. If there are multiple solutions, you can output any one. Note: The vertices in the input are not guaranteed to be in any particular order. ### Input - The first line of the input consists of two integers $n$ and $m$, the number of points and the number of queries respectively. - The next $n$ lines contain pairs of space separated integers, corresponding to the $x$ and $y$ coordinate of the point. - The next $m$ lines contain the queries, which are strings of length $n-1$. ### Output For each query, print out on a new line the permutation $\\sigma(0), \\sigma(1), ..., \\sigma(n-1)$ as a list of space separated integers. ###Constraints - $3 \\le n \\le 5000$ - $1 \\le n \\cdot m \\le 10000$ - $0 \\le x, y \\le 10^7$ ### Example Input ``` 3 2 2 2 3 4 1 1 UU UD ``` ### Example Output ``` 2 0 1 2 1 0 ``` ###Explanation \*\*Testcase 1:\*\* The outputted permutation corresponds to this: !\[Initial\](https://codechef\_shared.s3.amazonaws.com/download/Images/TST18GWR/POLYSTR/1.png =375x375) \*\*Testcase 2:\*\* The outputted permutation corresponds to this: !\[Initial\](https://codechef\_shared.s3.amazonaws.com/download/Images/TST18GWR/POLYSTR/2.png =375x375)
