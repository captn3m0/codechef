---
category_name: medium
problem_code: POLITRI
problem_name: 'Points, Lines, Triangles and Graphs'
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
date_added: 12-12-2018
tags:
    - jtnydv25
editorial_url: 'https://discuss.codechef.com/problems/POLITRI'
time:
    view_start_date: 1544985000
    submit_start_date: 1544985000
    visible_start_date: 1544985000
    end_date: 1735669800
    current: 1559472979
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given an integer $k$. You want to choose $n$ points on the plane and join some pairs of those points with line segments (let us call them edges), such that : - $n \\lt 510$ - Any two points are distinct - No three points are collinear - The points have non-negative integer coordinates $\\leq 10^9$. - No two edges (drawn line segments) intersect at a point which is not an endpoint of either edge. - The number of triangles in the figure is exactly $k$. Note : A triangle means a triple of points such that there is an edge between any two of them. It is guaranteed that it is possible to select a set of points and line segments satisfying the above conditions. ###Input: - The only line of the input contains $k$, the number of required triangles. ###Output: - In first line print two integers, $n$ and $m$, the number of chosen points and number of line segments (edges) drawn between them. They must satisfy $1 \\leq n \\lt 510$ and $0 \\leq m \\leq \\frac{n(n-1)}{2}$ - $i^{\\text{th}}$ of the next $n$ lines should contain two space separated integers, $x\_i, y\_i$ denoting the $i^{th}$ chosen point. The coordinates must be non-negative and $\\leq 10^9$, i.e. $0 \\leq x\_i, y\_i \\le 10^9$. - $i^{\\text{th}}$ of the next $m$ lines should contain two integers $u\_i$ and $v\_i$, denoting a line segment connecting the $u\_i^{th}$ chosen point and the $v\_i^{th}$ chosen point. $ 1 \\leq u\_i, v\_i \\leq n$ should be satisfied. No edge should be printed more than once. If there are multiple solutions, you can print any of them. ###Constraints - $ 1 \\leq k \\leq 1500$ ###Sample Input: ``` 2 ``` ###Sample Output: ``` 4 5 0 0 0 1 1 0 1 1 1 2 1 3 2 3 2 4 3 4 ``` ###Explanation: The figure shows the configuration corresponding to the given output. It contains 4 points, and 5 edges. Clearly there are 2 triangles, as the input requires it to be. !\[After second second\](https://codechef\_shared.s3.amazonaws.com/download/Images/TST18KGP/POLITRI/1.png =275x275)
