---
category_name: school
problem_code: CSUM
problem_name: 'Chef and Sum'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: l_returns
problem_tester: null
date_added: 28-05-2019
tags:
    - l_returns
time:
    view_start_date: 1541359800
    submit_start_date: 1541359800
    visible_start_date: 1541359800
    end_date: 1735669800
    current: 1559472925
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Given an array $A$ of size $N$ and an integer $K$ , check if there exist any pair of index $i,j$ such that $A\_i + A\_j = K$ and $i \\neq j$ ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. - The first line of each test case contains two space separated integer $N$ and $K$ respectively. - The second line of each test case contains $N$ space separated integers $A\_i$. ### Output For each test case, print a single line containing answer \*\*"Yes"\*\* or \*\*"No"\*\* (without quotes). ### Constraints - $1 \\le T \\le 100$ - $2 \\le N \\le 10^4$ - $1 \\le K \\le 10^9$ - $1 \\le A\_i \\le 10^9$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $2 \\le N \\le 100$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 3 4 3 1 2 1 3 4 6 1 2 1 3 5 1 5 4 1 2 3 ``` ### Example Output ``` Yes No No ``` ### Explanation \*\*Example case 1:\*\* $A\_1 + A\_2 = 3$. \*\*Example case 2:\*\* Pair having $A\_i + A\_j = 6$ doesn't exist. \*\*Example case 3:\*\* Pair having $A\_i + A\_j = 1$ doesn't exist.
