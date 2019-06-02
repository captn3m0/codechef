---
category_name: school
problem_code: CEQUAL
problem_name: 'Chef and Distinct Numbers'
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
    current: 1559472924
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Given an array $A$ of size $N$ , check if there exist any pair of index $i,j$ such that $A\_i = A\_j$ and $i \\neq j$ ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. - The first line of each test case contains integer $N$. - The second line of each test case contains $N$ space separated integers $A\_i$. ### Output For each test case, print a single line containing answer \*\*"Yes"\*\* or \*\*"No"\*\* (without quotes). ### Constraints - $1 \\le T \\le 100$ - $2 \\le N \\le 10^5$ - $1 \\le A\_i \\le 10^9$ - Sum of $N$ over all test cases doesn't exceed $10^6 $ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $2 \\le N \\le 100$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 4 1 2 1 3 5 5 4 1 2 3 ``` ### Example Output ``` Yes No ``` ### Explanation \*\*Example case 1:\*\* $A\_1$ and $A\_3$ both have value 1. \*\*Example case 2:\*\* All values are pairwise distinct.
