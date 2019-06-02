---
category_name: medium
problem_code: ALIENCOW
problem_name: 'Chef and Alien Invasion'
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
problem_author: usaxena95
problem_tester: null
date_added: 21-12-2018
tags:
    - usaxena95
time:
    view_start_date: 1545503400
    submit_start_date: 1545503400
    visible_start_date: 1545503400
    end_date: 1735669800
    current: 1559472967
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef has a rectangular field of dimensions $N \\times M$ which contains grass all over it. $(0,0)$ is made the bottom left corner of the field. $(N, M)$ is made the top right corner of the field. Aliens aim to destroy the field by sending a cow on the field which will eat all the grass. Chef, in order to protect the field constructs $K$ rectangular electric fences. An electric fence is represented by $x\_1\\space y\_1\\space x\_2\\space y\_2$. This denotes an electric fence along the perimeter of the rectangle with bottom left corner as $(x\_1, y\_1)$ and top right corner as $(x\_2, y\_2)$. The fences can touch or intersect with each other. The aliens will send the cow to a point $P$ on the field. From that point $P$ the cow will graze all the grass it can reach. The cow is intelligent enough to know that electric fence can kill it. Therefore it will never touch or cross an electric fence. Also the cow will never leave the field. The aliens can't see the fences from above and thus will send the cow to any point $(x, y)$ (not necessarily integer point) selected uniformly at random on the field. $(0 \\le x \\le N, 0 \\le y \\le M)$ Chef asks you to calculate the expected area of grass lost due to this alien invasion. Since the Chef doesn't like floating point numbers he wants you to tell the value of $P \\times Q^{-1} \\space mod \\space 10^9+7$. Here $\\frac{P}{Q} = $ expected grass area destroyed with $gcd(P,Q)=1$. Also $Q^{-1}$ is the modular multiplicative inverse of $Q$ with respect to $10^9+7$. ###Input: - First line will contain $T$, number of testcases. Then the testcases follow. - Each testcase three integers $N, M, K$ denoting the dimensions of field and the number of rectangular electric fences. Then $K$ lines follow. - Each line contains $4$ integers $x\_1\\space y\_1\\space x\_2\\space y\_2$ denoting the electric fence. ###Output: For each testcase, output in a single line answer to the problem. ###Constraints - $1 \\leq T \\leq 10$ - $1 \\le N,M \\le 10^9$ - $0 \\le x\_1 \\le x\_2 \\le N$ - $0 \\le y\_1 \\le y\_2 \\le M$ - $0 \\le K \\le 20$ ###Sample Input: ``` 2 10 10 4 0 0 5 5 5 5 10 10 0 5 5 10 5 0 10 5 9 9 2 0 0 9 6 0 3 9 9 ``` ###Sample Output: ``` 25 27 ``` ###EXPLANATION: \*\*Testcase 1\*\*: The Chef divides the whole field into $4$ equal parts. Therefore $\\frac{1}{4}^{th}$ of the field will be grazed by the cow wherever the cow lands. Expected area lost = $\\frac{10\\times 10}{4} = 25$. \*\*Testcase 2\*\*: The Chef using 2 fences divides the whole field into $3$ equal parts. Therefore $\\frac{1}{3}^{th}$ of the field will be grazed by the cow wherever the cow lands. Expected area lost = $\\frac{9\\times 9}{3} = 27$
