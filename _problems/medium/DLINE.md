---
category_name: medium
problem_code: DLINE
problem_name: 'Drawing Lines'
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
problem_author: arpa
problem_tester: null
date_added: 25-12-2018
tags:
    - arpa
    - dynamic
    - ltime67
editorial_url: 'https://discuss.codechef.com/problems/DLINE'
time:
    view_start_date: 1546103100
    submit_start_date: 1546103100
    visible_start_date: 1546103100
    end_date: 1735669800
    current: 1559472971
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTM67TST/mandarin/DLINE.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTM67TST/bengali/DLINE.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTM67TST/hindi/DLINE.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTM67TST/russian/DLINE.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTM67TST/vietnamese/DLINE.pdf) as well. There is an infinite sheet of paper and a pen. At any time, the pen may be placed above a point $(x, y)$ on the paper or touching it at a point $(x, y)$; in both cases, we call the point $(x, y)$ the \*position\* of the pen. The initial position of the pen is $(0, 0)$. You may perform the following types of actions: - move the pen down until it touches the paper - lift the pen (if it was touching the paper); after this action, the pen is not touching the paper - move the pen from its current position $(x, y)$ to $(x-1, y)$ or $(x+1, y)$ - move the pen from its current position $(0, y)$ to $(0, y+1)$ Actions of the first two types take no time, an action of the third type takes $1$ second and an action of the fourth type takes $1$ second. Each action may be performed any number of times. You may only move the pen for at most $P$ seconds in total. Whenever the pen is moved from $(x\_1, y\_1)$ to $(x\_2, y\_2)$ while touching the paper, it draws a line segment between these points (inclusive). Drawing over a line segment repeatedly is allowed. You are given $N$ \*special\* line segments; each of them is parallel with the $x$-axis. A special line segment is \*fully drawn\* if each point belonging to it also belongs to some drawn line segment. Your goal is to fully draw as many special line segments as possible in $P$ seconds. How many can you fully draw? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $P$. - Each of the next $N$ lines contains three space-separated integers $y$, $s$ and $e$ denoting a special line segment between points $(s, y)$ and $(e, y)$ (including these points). ### Output For each test case, print a single line containing one integer — the maximum number of special segments you can fully draw. ### Constraints - $1 \\le T \\le 15$ - $1 \\le N \\le 1,000$ - $0 \\le s \\le e \\le 10^6$ - $0 \\le P \\le 10^6$ - $0 \\le y \\le 2,000$ - the special line segments do not touch or intersect ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le N \\le 10$ \*\*Subtask #2 (90 points):\*\* original constraints ### Example Input ``` 4 1 2 0 1 2 3 13 1 1 2 3 1 3 1 3 4 3 14 1 1 2 3 1 3 1 3 4 4 10 1 3 4 1 1 2 2 1 2 2 3 4 ``` ### Example Output ``` 1 2 3 3 ``` ### Explanation
