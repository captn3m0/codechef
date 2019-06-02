---
category_name: easy
problem_code: CHEFADD
problem_name: 'Chef and Strange Addition'
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
problem_author: mgch
problem_tester: null
date_added: 16-10-2018
tags:
    - bitwise
    - dynamic
    - easy
    - mgch
    - snck1a19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/CHEFADD'
time:
    view_start_date: 1540092600
    submit_start_date: 1540092600
    visible_start_date: 1540092600
    end_date: 1735669800
    current: 1559472938
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S191ATST/hindi/CHEFADD.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S191ATST/mandarin/CHEFADD.pdf), \[Russian\](http://www.codechef.com/download/translated/S191ATST/russian/CHEFADD.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S191ATST/vietnamese/CHEFADD.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S191ATST/bengali/CHEFADD.pdf) as well. Chef likes to solve difficult tasks. This time, he tried to solve the Big Famous Unsolvable $A+B=C$. One of his friends played a prank on Chef and randomly shuffled the bits in $A$ and $B$ (independently in each number). However, the funny thing is that the sum of the resulting numbers remained $C$ even after shuffling. Chef is now wondering: in how many ways is it possible to shuffle the bits of $A$ and the bits of $B$ such that their sum after shuffling is equal to $C$? Let's denote the integers obtained by shuffling the bits of $A$ and $B$ by $A\_s$ and $B\_s$ respectively; two ways $(A\_{s1}, B\_{s1})$ and $(A\_{s2}, B\_{s2})$ are considered distinct if $A\_{s1} \\neq A\_{s2}$ or $B\_{s1} \\neq B\_{s2}$. It is allowed to add any number (possibly zero) of leading zeroes, i.e. bits $0$, to $A$ and any number of leading zeroes to $B$ before shuffling the bits. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains three space-separated integers $A$, $B$ and $C$. ### Output For each test case, print a single line containing one integer — the number of ways to shuffle the bits. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le A, B, C \\le 10^9$ - $A+B = C$ ### Subtasks \*\*Subtask #1 (50 points):\*\* $1 \\le A, B, C \\le 10^5$ \*\*Subtask #2 (50 points):\*\* original constraints ### Example Input ``` 2 1 2 3 369 428 797 ``` ### Example Output ``` 2 56 ``` ### Explanation \*\*Example case 1:\*\* We can consider $A=01$ and $B=10$ in binary. Then, there are two possible ways: swapping the two bits of $A$ and the two bits of $B$ ($A\_s=10$, $B\_s=01$ in binary, $2$ and $1$ in decimal representation) or not shuffling any bits.
