---
category_name: school
problem_code: ADASCOOL
problem_name: 'Ada School'
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
date_added: 31-08-2018
tags:
    - alei
    - conditionals
    - logic
    - matrices
    - simple
editorial_url: 'https://discuss.codechef.com/problems/ADASCOOL'
time:
    view_start_date: 1548009002
    submit_start_date: 1548009002
    visible_start_date: 1548009002
    end_date: 1735669800
    current: 1559472922
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK102/hindi/ADASCOOL.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK102/mandarin/ADASCOOL.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK102/russian/ADASCOOL.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK102/vietnamese/ADASCOOL.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK102/bengali/ADASCOOL.pdf) as well. Ada's classroom contains $N \\cdot M$ tables distributed in a grid with $N$ rows and $M$ columns. Each table is occupied by exactly one student. Before starting the class, the teacher decided to shuffle the students a bit. After the shuffling, each table should be occupied by exactly one student again. In addition, each student should occupy a table that is adjacent to that student's original table, i.e. immediately to the left, right, top or bottom of that table. Is it possible for the students to shuffle while satisfying all conditions of the teacher? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $M$. ### Output For each test case, print a single line containing the string `"YES"` if it is possible to satisfy the conditions of the teacher or `"NO"` otherwise (without quotes). ### Constraints - $1 \\le T \\le 5,000$ - $2 \\le N, M \\le 50$ ### Example Input ``` 2 3 3 4 4 ``` ### Example Output ``` NO YES ``` ### Explanation \*\*Example case 2:\*\* The arrows in the following image depict how the students moved. !\[\](https://codechef\_shared.s3.amazonaws.com/download/Images/CK102TST/ADASCOOL/ADASCOOL.png)
