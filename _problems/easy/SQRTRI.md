---
category_name: easy
problem_code: SQRTRI
problem_name: 'A Triangle and Two Squares'
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
problem_author: admin2
problem_tester: null
date_added: 12-12-2018
tags:
    - admin2
time:
    view_start_date: 1544985000
    submit_start_date: 1544985000
    visible_start_date: 1544985000
    end_date: 1735669800
    current: 1559472961
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given two squares A and B. The square A has a side length of $a$ and B has a side length of $b$. The left-bottom point of square A is at $(0, 0)$ and the top-right at $(a, a)$. Square B's left-bottom point is $(x, y)$ and top-right is $(x + b, y + b)$. It's guaranteed that square B lies inside square A (may not be strictly inside, can touch too). In other words, $0 \\leq x, 0 \\leq y, (x + b \\leq a, y + b \\leq a)$. You have to tell whether you can construct a triangle T such that - All the vertices of the triangle lie on the boundary of square A. - One of its sides is parallel to one of the sides of the square A and this side should contain one of the sides of square B as a subsegment. That is, there should be a side of the triangle, say $T\_2T\_3$, which is parallel to one of the sides of square A, and which contains a side of square B, say $Q\_3Q\_4$. That is, the line segment $Q\_3Q\_4$ should lie within the line segment $T\_2T\_3$. - Square B is inside the triangle T (is allowed to touch the sides of T, but shouldn’t go outside the triangle T) ### Input - The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows. - The first line of each test case contains four space-separated integers $a, b, x, y$. ### Output For each test case, print a single line containing the string `yes` if it is possible to construct such a triangle, or `no` if it is impossible. ###Constraints - $1 \\le T \\le 10^5$ - $1 \\le b \\leq a \\le 10000$ - $0 \\le x, y \\le a - b$ ### Example Input ``` 4 4 1 1 2 3 1 1 2 3 1 0 0 3 2 1 1 ``` ### Example Output ``` yes yes yes no ``` ###Explanation \*\*Testcase 1\*\*: The following figure shows one possible way in which the triangle can be constructed: !\[Testcase 2\](https://codechef\_shared.s3.amazonaws.com/download/Images/TST18KGP/SQRTRI/1.png =475x475) Square A is P1 P2 P3 P4, square B is Q1 Q2 Q3 Q4 and the constructed triangle T is T1 T2 T3. \*\*Testcase 2\*\*: The following figure shows one possible way in which the triangle can be constructed: !\[Testcase 2\](https://codechef\_shared.s3.amazonaws.com/download/Images/TST18KGP/SQRTRI/2.png =475x475) Square A is P1 P2 P3 P4, square B is Q1 Q2 Q3 Q4 and the constructed triangle T is T1 T2 T3.
