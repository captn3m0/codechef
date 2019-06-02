---
category_name: easy
problem_code: GREG
problem_name: 'Greg and Grid'
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
    - R
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kalpitk
problem_tester: null
date_added: 24-03-2019
tags:
    - kalpitk
time:
    view_start_date: 1555270200
    submit_start_date: 1555270200
    visible_start_date: 1555270200
    end_date: 1735669800
    current: 1559472945
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Recently, Greg got a grid with n rows and m columns. Rows are indexed from 1 to n and columns are indexed from 1 to m. The cell $ ( i , j )$ is the cell of intersection of row i and column j. Each cell has a number written on it. The number written on cell $( i , j )$ is equal to $(i+j)$. Now, Greg wants to select some cells from the grid, such that for every pair of selected cells ,the numbers on the cells are co-prime. Determine the maximum number of cells that Greg can select.

### Input 

- Single line containing integers n and m denoting number of rows and number of columns respectively.

### Output

Single line containing the answer. ### Constraints

- $1 \\leq n,m \\leq 10^{6}$

### Sample Input

3 4 ### Sample Output

4
