---
category_name: school
problem_code: THREEFR
problem_name: 'Three Friends'
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
problem_author: admin2
problem_tester: null
date_added: 25-10-2018
tags:
    - admin2
    - cakewalk
    - equations
    - ltime65
    - math
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/THREEFR'
time:
    view_start_date: 1540659601
    submit_start_date: 1540659601
    visible_start_date: 1540659601
    end_date: 1735669800
    current: 1559472931
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME65/mandarin/THREEFR.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME65/bengali/THREEFR.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME65/hindi/THREEFR.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME65/russian/THREEFR.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME65/vietnamese/THREEFR.pdf) as well. There are three friends; let's call them A, B, C. They made the following statements: - A: "I have $x$ Rupees more than B." - B: "I have $y$ rupees more than C." - C: "I have $z$ rupees more than A." You do not know the exact values of $x, y, z$. Instead, you are given their absolute values, i.e. $X = |x|$, $Y = |y|$ and $Z = |z|$. Note that $x$, $y$, $z$ may be negative; "having $-r$ rupees more" is the same as "having $r$ rupees less". Find out if there is some way to assign amounts of money to A, B, C such that all of their statements are true. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains three space-separated integers $X$, $Y$ and $Z$. ### Output For each test case, print a single line containing the string `"yes"` if the presented scenario is possible or `"no"` otherwise (without quotes). ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le X, Y, Z \\le 1,000$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $1 \\le T \\le 30$ - $1 \\le X, Y, Z \\le 3$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 1 2 1 1 1 1 ``` ### Example Output ``` yes no ``` ### Explanation \*\*Example 1\*\*: One possible way to satisfy all conditions is: A has $10$ rupees, B has $9$ rupees and C has $11$ rupees. Therefore, we have $x = 1$, $y = -2$, $z = 1$. \*\*Example 2\*\*: There is no way for all conditions to be satisfied.
