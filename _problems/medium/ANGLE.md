---
category_name: medium
problem_code: ANGLE
problem_name: 'Nearest Angle'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 23-05-2018
tags:
    - binary
    - easy
    - kingofnumbers
    - snckpe19
    - taran_1407
    - trigonometry
editorial_url: 'https://discuss.codechef.com/problems/ANGLE'
time:
    view_start_date: 1541269800
    submit_start_date: 1541269800
    visible_start_date: 1541269800
    end_date: 1735669800
    current: 1559472967
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Russian\](http://www.codechef.com/download/translated/S19PETST/russian/ANGLE.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19PETST/vietnamese/ANGLE.pdf), \[Hindi\](http://www.codechef.com/download/translated/S19PETST/hindi/ANGLE.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S19PETST/mandarin/ANGLE.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19PETST/bengali/ANGLE.pdf) as well. You are given a sequence of positive integers $A\_1, A\_2, \\ldots, A\_N$. You must choose three elements $A\_x, A\_y, A\_z$ ($x$, $y$, $z$ should be pairwise distinct) such that there is a non-degenerate triangle $\\mathsf{XYZ}$ with the following properties: - $|\\mathsf{XY}| = A\_z$, $|\\mathsf{XZ}| = A\_y$, $|\\mathsf{YZ}| = A\_x$ - the angle $|\\angle \\mathsf{YXZ}| = \\theta$ satisfies $\\cos\\theta \\ge P/Q$ In addition, the angle $\\theta$ should be maximum possible. Find any such triangle or determine that it does not exist. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $P$ and $Q$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output If there is no solution, print a single line containing one integer $-1$. Otherwise, print a single line containing three space-separated integers $x$, $y$ and $z$. If there are multiple possible solutions, you may output any one. ### Constraints - $1 \\le T \\le 5$ - $1 \\le N \\le 1,000$ - $1 \\le A\_i \\le 10,000$ for each valid $i$ - $1 \\le Q \\le 10,000$ - $|P| \\lt Q$ ### Example Input ``` 2 4 1 2 6 6 6 7 3 5 7 1 3 8 ``` ### Example Output ``` 1 2 3 -1 ```
