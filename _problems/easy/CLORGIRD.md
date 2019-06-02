---
category_name: easy
problem_code: CLORGIRD
problem_name: 'Coloring the Grid'
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
date_added: 26-10-2018
tags:
    - grid
    - implementation
    - kingofnumbers
    - ltime65
    - simple
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/CLORGIRD'
time:
    view_start_date: 1540659601
    submit_start_date: 1540659601
    visible_start_date: 1540659601
    end_date: 1735669800
    current: 1559472940
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME65/mandarin/CLORGIRD.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME65/bengali/CLORGIRD.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME65/hindi/CLORGIRD.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME65/russian/CLORGIRD.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME65/vietnamese/CLORGIRD.pdf) as well. You are given a grid with $N$ rows and $M$ columns; each cell of this grid is either empty or contains an obstacle. Initially, all cells are colorless. You may perform the following operation an arbitrary number of times (including zero): choose a $2\\times 2$ square in the grid and color all four of its cells. Each cell may be colored any number of times. You want all empty cells to be colored and all cells containing obstacles to be colorless. Find out if this state can be achieved. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - The following $N$ lines describe the grid. Each of these lines contains a string with length $M$ containing only characters '.' (denoting an empty cell) and '#' (denoting a cell with an obstacle). ### Output For each test case, print a single line containing the string `"YES"` if it possible to color the grid in the required way or `"NO"` if it is impossible (without quotes). ### Constraints - $1 \\le T \\le 10,000$ - $2 \\le N, M \\le 10^3$ - the sum of $N\\cdot M$ over all test cases does not exceed $5,000,000$ ### Subtasks \*\*Subtask #1 (30 points):\*\* only the first row of the grid may contain obstacles \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 3 3 ..# ... ... 3 3 ... .#. ... ``` ### Example Output ``` YES NO ```
