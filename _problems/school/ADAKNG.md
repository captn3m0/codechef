---
category_name: school
problem_code: ADAKNG
problem_name: 'Ada King'
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
problem_author: alei
problem_tester: null
date_added: 13-01-2019
tags:
    - alei
    - bfs
    - cakewalk
    - conditionals
    - greedy
    - looping
editorial_url: 'https://discuss.codechef.com/problems/ADAKNG'
time:
    view_start_date: 1548009002
    submit_start_date: 1548009002
    visible_start_date: 1548009002
    end_date: 1735669800
    current: 1559472922
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK102/hindi/ADAKNG.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK102/mandarin/ADAKNG.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK102/russian/ADAKNG.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK102/vietnamese/ADAKNG.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK102/bengali/ADAKNG.pdf) as well. Chef Ada is training to defend her title of World Chess Champion. To train her calculation skills, Ada placed a <a>king</a> on a chessboard. Remember that a chessboard has $8$ rows and $8$ columns (for the purposes of this problem, both the rows and the columns are numbered $1$ through $8$); let's denote the square in row $r$ and column $c$ by $(r, c)$. A king on a square $(r, c)$ can move to another square $(r', c')$ if and only if $(r'-r)^2+(c'-c)^2 \\le 2$. Ada placed her king on the square $(R, C)$. Now, she is counting the number of squares that can be visited (reached) by the king in at most $K$ moves. Help Ada verify her answers. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains three space-separated integers $R$, $C$ and $K$. ### Output For each test case, print a single line containing one integer — the number of squares the king can visit. ### Constraints - $1 \\le T \\le 512$ - $1 \\le R, C, K \\le 8$ ### Example Input ``` 1 1 3 1 ``` ### Example Output ``` 6 ``` ### Explanation \*\*Example case 1:\*\* The king can stay on its original square or move to one of the squares circled in the following figure. !\[\](https://codechef\_shared.s3.amazonaws.com/download/Images/CK102TST/ADAKNG/ADAKNG.png)
