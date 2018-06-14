---
category_name: easy
problem_code: VSN
problem_name: Vision
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: nots0fast
problem_tester: mgch
date_added: 4-04-2018
tags:
    - binary
    - cross
    - easy
    - geometry
    - june18
    - likecs
    - nots0fast
    - nots0fast
time:
    view_start_date: 1528709405
    submit_start_date: 1528709405
    visible_start_date: 1528709405
    end_date: 1735669800
    current: 1528985559
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JUNE18/mandarin/VSN.pdf), [Russian](http://www.codechef.com/download/translated/JUNE18/russian/VSN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE18/vietnamese/VSN.pdf) as well.

You are given two points $P$ and $Q$ and an opaque sphere in a three-dimensional space. The point $P$ is not moving, while $Q$ is moving in a straight line with constant velocity. You are also given a direction vector $d$ with the following meaning: the position of $Q$ at time $t$ is $Q(t) = Q(0) + d \\cdot t$, where $Q(0)$ is the initial position of $Q$. It is guaranteed that $Q$ is not visible from $P$ initially (at time $t=0$). It is also guaranteed that $P$ and $Q$ do not touch the sphere at any time. Find the smallest positive time $t\_v$ when $Q$ is visible from $P$, i.e. when the line segment connecting points $P$ and $Q$ does not intersect the sphere. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains 13 space-separated integers. - The first three integers $P\_x, P\_y, P\_z$ denote the coordinates of $P$. - The next three integers $Q\_x, Q\_y, Q\_z$ denote the initial coordinates of $Q$. - The next three integers $d\_x, d\_y, d\_z$ denote the components of the direction vector $d$. - The last four integers $c\_x, c\_y, c\_z, r$ denote the coordinates of the centre of the sphere and its radius. ### Output For each test case, print a single line containing one real number — the time $t\_v$. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$. It is guaranteed that $t\_v$ exists and does not exceed $10^9$. ### Constraints - $1 \\le T \\le 10^5$ - the absolute values of coordinates of all points do not exceed $2\\cdot10^9$ - $1 \\le r \\le 10^9$ ### Subtasks \*\*Subtask #1 (25 points):\*\* $P\_z = Q\_z = d\_z = c\_z = 0$ \*\*Subtask #2 (75 points):\*\* original constraints ### Example Input ``` 1 3 0 0 -10 -10 0 0 10 0 0 -3 0 3 ``` ### Example Output ``` 1.0000000000 ```
