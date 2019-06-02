---
category_name: medium
problem_code: IAI
problem_name: 'Intervals and Intersections'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: vivek_1998299
problem_tester: null
date_added: 17-05-2019
tags:
    - convex
    - ltime72
    - medium
    - prefix
    - segment
    - taran_1407
    - vivek_1998299
time:
    view_start_date: 1558803600
    submit_start_date: 1558803600
    visible_start_date: 1558803600
    end_date: 1735669800
    current: 1559472974
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/LTIME72/hindi/IAI.pdf), \[Bengali\](http://www.codechef.com/download/translated/LTIME72/bengali/IAI.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/LTIME72/mandarin/IAI.pdf), \[Russian\](http://www.codechef.com/download/translated/LTIME72/russian/IAI.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME72/vietnamese/IAI.pdf) as well. Vivek believes that this problem is the hardest problem ever and no one can solve it. Please prove him wrong. You are given a sequence $A\_1, A\_2, \\ldots, A\_N$ and $M$ intervals $\[L\_1, R\_1\], \[L\_2, R\_2\], \\ldots, \[L\_M, R\_M\]$. For any subset $S$ of these intervals: - If $S$ is non-empty, let's define $L = \\mathrm{max}\_{i \\in S}\\,(L\_i)$ and $R = \\mathrm{min}\_{i \\in S}\\,(R\_i)$. - The set $S$ is \*disjoint\* if $S$ is empty or $L \\gt R$. Otherwise, the intersection of the intervals from this set is the interval $\[L, R\]$. - If $S$ is not disjoint, its value is $\\sum\_{j=L}^{R} (j-L+1) \\cdot A\_j$. Find the maximum of values of all non-disjoint subsets of the given intervals. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. - $M$ lines follow. For each $i$ ($1 \\le i \\le M$), the $i$-th of these lines contains two space-separated integers $L\_i$ and $R\_i$. ### Output For each test case, print a single line containing one integer ― the maximum value of a non-disjoint subset. ### Constraints - $1 \\le T \\le 5$ - $1 \\le N \\le 10^5$ - $1 \\le M \\le 5 \\cdot 10^4$ - $|A\_i| \\le 10^6$ for each valid $i$ - $1 \\le L \\le R \\le N$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le M \\le 3 \\cdot 10^3$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 3 2 -2 1 -2 1 2 2 3 3 2 2 3 4 1 2 2 3 ``` ### Example Output ``` 1 11 ``` ### Explanation \*\*Example case 1:\*\* It is optimal to choose the intervals $\[1, 2\]$ and $\[2, 3\]$. Their intersection is the interval $\[2, 2\]$ (so the set of these two intervals is not disjoint) and its value is $A\_2 \\cdot 1 = 1$.
