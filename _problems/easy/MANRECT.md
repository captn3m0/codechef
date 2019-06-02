---
category_name: easy
problem_code: MANRECT
problem_name: 'Manhattan Rectangle'
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
problem_author: sanroylozan
problem_tester: null
date_added: 19-01-2019
tags:
    - equations
    - feb19
    - manhattan
    - medium
    - observations
    - sanroylozan
editorial_url: 'https://discuss.codechef.com/problems/MANRECT'
time:
    view_start_date: 1550050202
    submit_start_date: 1550050202
    visible_start_date: 1550050202
    end_date: 1735669800
    current: 1559472949
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/FEB19TST/hindi/MANRECT.pdf), \[Bengali\](http://www.codechef.com/download/translated/FEB19TST/bengali/MANRECT.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/FEB19TST/mandarin/MANRECT.pdf), \[Russian\](http://www.codechef.com/download/translated/FEB19TST/russian/MANRECT.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/FEB19TST/vietnamese/MANRECT.pdf) as well. \*\*This is an interactive problem.\*\* Chef has a secret rectangle. The sides of this rectangle are aligned with Cartesian axes $x$ and $y$. Let's denote the coordinates of the lower left corner of the rectangle by $(x\_l, y\_l)$ and the coordinates of the upper right corner by $(x\_u, y\_u)$; it is guaranteed that $x\_l, y\_l, x\_u, y\_u$ are non-negative integers. Your task is to find these coordinates. You may ask Chef at most $Q$ queries (providing your answer does not count as a query). In each query, you give Chef a point with integer coordinates $(x\_0, y\_0)$. Chef responds with the Manhattan distance of this point to the closest point in the secret rectangle, i.e. if we denote the set of points in the rectangle by $$S = \\left\\{(p, q) \\mid p, q \\in \\mathbb{Z} \\: \\text{and} \\: x\_l \\le p \\le x\_u \\: \\text{and} \\: y\_l \\le q \\le y\_u\\right\\} \\,,$$ then Chef answers with $$\\min\_{(p, q) \\in S} \\left| p - x\_0 \\right| + \\left| q - y\_0 \\right| \\,.$$ ### Interaction - First, your program should read a line containing a single integer ― the number of test cases $T$. The description of interaction for $T$ test cases follows. - For each test case, you may ask queries. To ask a query, print a line containing the character 'Q', a space and two space-separated integers $x\_0$ and $y\_0$ ($0 \\le x\_0, y\_0 \\le 10^9$). Then, you should read a line containing a single integer. If this integer is non-negative, it denotes the answer to your query. Otherwise, it means that you exceeded the limit on the number of queries, the coordinates you printed are invalid or some other error occured. - When you have found the secret rectangle, you should print a line containing the character 'A', a space and four space-separated integers $x\_l$, $y\_l$, $x\_u$ and $y\_u$. Then, you should read a single line containing one integer, which is $1$ if your answer was correct or negative if it was wrong. Note that when you read a negative integer, you should immediately terminate your program to receive a Wrong Answer verdict; otherwise, you may receive any verdict. Don't forget to flush the output after printing each line! ### Constraints - $1 \\le T \\le 500$ - $0 \\le x\_l \\le x\_u \\le 10^9$ - $0 \\le y\_l \\le y\_u \\le 10^9$ ### Subtasks \*\*Subtask #1 (10 points):\*\* - $T \\le 10$ - $x\_u, y\_u \\le 100$ - $Q = 12345$ \*\*Subtask #2 (40 points):\*\* $Q = 70$ \*\*Subtask #3 (50 points):\*\* $Q = 7$ ### Example ``` You Grader 1 Q 1 2 0 Q 3 4 0 Q 0 1 2 Q 4 5 2 A 1 2 3 4 1 ``` ### Explanation \*\*Example case 1:\*\* From answers to the first two queries, it is clear that the lower left and upper right corner of the rectangle lie at points $(1, 2)$ and $(3, 4)$ respectively.
