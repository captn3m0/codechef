---
category_name: hard
problem_code: MULHANOI
problem_name: 'Again Multi-Peg Tower of Hanoi'
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
problem_author: admin3
problem_tester: null
date_added: 19-12-2018
tags:
    - admin3
time:
    view_start_date: 1545503400
    submit_start_date: 1545503400
    visible_start_date: 1545503400
    end_date: 1735669800
    current: 1559472991
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.In CSE courses we frequently cite the Tower of Hanoi problem to make the concept of recursive procedures clear. In an ordinary Tower of Hanoi problem there are three pegs $S\_1, S\_2$, and $S\_3$. Initially, circular disks with holes are mounted on $S\_1$ with smaller disks on top of larger ones. All the disks are of different diameters. The task is to shift all the disks to $S\_3$, always shifting one disk from top of a tower to top of another tower, and never ever placing a larger disk on top of a smaller one. To solve the problem of $n$ disks one is forced to shift the top ($n-1$) disks from $S\_1$ to the only intermediate peg $S\_2$, then shift the largest disk from $S\_1$ to $S\_3$, and finally shift the remaining ($n-1$) disks from $S\_2$ to $S\_3$, without violating the aforementioned constraints. But in a Multi-peg Tower of Hanoi problem with $p \\ge 3$ pegs, we have ($p-2$) intermediate pegs. The problem is to shift the disks from the source peg to the destination peg in minimum number of moves. There is a \*\*presumed optimal strategy\*\* that asserts that: - A certain optimal number of disks ($n\_1$) should be shifted to an intermediate peg $S\_i$. - The remaining ($n-n\_1$) disks should reach the destination without using the peg $S\_i$, that is using only ($p-1$) pegs. - Disks on $S\_i$ must now reach the destination using all $p$ pegs. You have to figure out what $n\_1$ you need to choose at every step to minimize the total number of steps. And among all such strategies for $n$ disks and $p$ pegs, let the maximum number of moves a disk requires to reach the destination peg be $k$ (i.e., some of the disks require less than $k$ moves while some of the disks need exactly $k$ moves). Given $n$ and $p$, we are interested to know the maximum number of disks each of which requires exactly $k$ moves to reach the destination. ###Input - For every problem instance, there will be a single line containing two space separated integers $n$, $p$ ($1 \\leq n \\leq 100$ and $3 \\leq p \\leq 10$). - Input ends with $n = 0, p=0$. - There will not be more than 1000 instances. ###Output - For every problem instance, print in a separate line the maximum number of disks each of which requires the maximum number of moves to reach the destination. ###Sample Input ``` 7 3 10 4 0 0 ``` ###Sample Output ``` 1 4 ```
