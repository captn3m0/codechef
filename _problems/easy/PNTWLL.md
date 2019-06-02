---
category_name: easy
problem_code: PNTWLL
problem_name: 'Paint the Wall'
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
problem_author: sahil070197
problem_tester: null
date_added: 20-10-2018
tags:
    - sahil070197
time:
    view_start_date: 1540578600
    submit_start_date: 1540578600
    visible_start_date: 1540578600
    end_date: 1735669800
    current: 1559472954
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Professor Sahil is a master artist, he always finds creative ways to teach lessons to his students. Today in Painting class he took all the students of the class to a wall. Professor Sahil asked every student to paint the wall upto a certain integral height one by one (second boy starts once the first boy finishes painting) from the bottom with any color of their wish, except a student Mudit who was made to stand behind the wall and note down all the data i.e the height upto which each student painted and the color $Ci$ every student used. At the end of the painting session Professor asked Mudit to tell how many distinct colors are there on the wall. Mudit being a weak student asked you for help. Formally, given a wall of infinite height, initially unpainted. There occur $N$ operations, and in ith operation, the wall is painted upto height $Hi$ with color $Ci$. Suppose in jth operation (j>i) wall is painted upto height $Hj$ with color $Cj$ such that $Hj$ >= $Hi$, the $Cith$ color on the wall is hidden. At the end of $N$ operations, you have to find the number of distinct colors(>=1) visible on the wall. Help him find out the number of distinct colors on the wall. ###Input: - The first line consists of single integer $T$ denoting the number of test cases. - The second line contains 2 space separated integers $N$ and $M$, denoting the number of students and number of colors available (1 to $M$). - The third line contains $N$-space separated integers ($Hi$ ) denoting the height upto which each student painted the wall. - The fourth line contains $N$ space separated integers denoting the color ( $Ci$ ) the ith student used. ###Output: Print the number for distinct colors on the wall for each test case. ###Constraints - $1 \\leq T \\leq 100$ - $1 \\leq N ,M \\leq 10^5$ - \*\*Sum of N over all test cases
