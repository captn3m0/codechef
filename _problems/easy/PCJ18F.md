---
category_name: easy
problem_code: PCJ18F
problem_name: 'Chef and Fencing'
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
problem_author: madhav_1999
problem_tester: null
date_added: 29-07-2018
tags:
    - madhav_1999
    - madhav_1999
    - pcj
    - prakhar17252
    - proconjunior
    - tanmay28
editorial_url: 'https://discuss.codechef.com/problems/PCJ18F'
time:
    view_start_date: 1534176000
    submit_start_date: 1534176000
    visible_start_date: 1534176000
    end_date: 1735669800
    current: 1559472954
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Today, Chef has a fencing job at hand and has to fence up a surface covering $N$ points. To minimize his work, he started looking for an algorithm that had him fence the least amount of length. He came up with the Convex Hull algorithm, but soon realized it gave him some random shape to fence. However, Chef likes rectangles and has a favourite number $M$. Help him find the minimum perimeter he has to fence if he wants to fence a rectangle, with slope of one of the sides as $M$, to cover all the points. ###Input: - The first line contains two integers $N$ and $M$, the number of points and the Chef's favourite Number. - The next n lines contain two space separated integers $X$ and $Y$, the coordinates of the point. ###Output: Print a single decimal number, denoting the perimeter of the rectangle. Answer will considered correct if it has absolute error less than $10^{-6}$. ###Constraints - $2 \\leq N \\leq 1000000$ - $-1000 \\leq M \\leq 1000$ - $-1000000 \\leq X \\leq 1000000$ - $-1000000 \\leq Y \\leq 1000000$ ###Sample Input: 4 1 0 1 0 -1 1 0 -1 0 ###Sample Output: 5.656854249492380 ### Note: - As the input size is large, it is recommended to use Fast IO.
