---
category_name: easy
problem_code: PLUS
problem_name: 'Maximum Plus'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 24-05-2018
tags:
    - 2darray
    - dynamic
    - easy
    - kingofnumbers
    - precomputation
editorial_url: 'https://discuss.codechef.com/problems/PLUS'
time:
    view_start_date: 1527354000
    submit_start_date: 1527354000
    visible_start_date: 1527354000
    end_date: 1735669800
    current: 1528985556
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME60/mandarin/PLUS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME60/vietnamese/PLUS.pdf) as well.

You are given a grid of (not necessarily non-negative) integers $G$ with $N$ rows and $M$ columns. Let's denote the integer in the cell $(i, j)$ of this grid by $G\_{i,j}$; the rows and columns use 1-based indexing. Formally, let's call a non-empty subset of cells of the grid a \*plus sign\* if: - it is connected - there is a central cell $(i, j)$ which belongs to the subset - each other (non-central) cell from the subset is either in row $i$ or column $j$ - the central cell is adjacent to 4 other cells in all 4 directions You should find the maximum possible sum of integers written in the cells belonging to a plus sign in the grid. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains $M$ space-separated integers $G\_{i,1}, G\_{i,2}, \\dots, G\_{i, M}$. ### Output For each test case, print a single line containing one integer — the maximum sum of a plus sign. ### Constraints - $1 \\le T \\le 100$ - $3 \\le N, M \\le 1,000$ - the sum of $N$ in all test cases does not exceed $1,000$ - the sum of $M$ in all test cases does not exceed $1,000$ - $|G\_{i,j}| \\le 1,000,000$ for each valid $i, j$ ### Subtasks \*\*Subtask #1 (20 points):\*\* - the sum of $N$ in all test cases does not exceed $100$ - the sum of $M$ in all test cases does not exceed $100$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 1 3 4 1 1 1 1 -6 1 1 -4 1 1 1 1 ``` ### Example Output ``` 0 ```
