---
category_name: school
problem_code: SPLST
problem_name: 'Split Stones'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: fekete
problem_tester: null
date_added: 25-07-2018
tags:
    - cakewalk
    - fekete
    - fekete
    - likecs
    - ltime62
editorial_url: 'https://discuss.codechef.com/problems/SPLST'
time:
    view_start_date: 1532797200
    submit_start_date: 1532797200
    visible_start_date: 1532797200
    end_date: 1735669800
    current: 1559472931
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/LTIME62/hindi/SPLST.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/LTIME62/mandarin/SPLST.pdf), [Russian](http://www.codechef.com/download/translated/LTIME62/russian/SPLST.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME62/vietnamese/SPLST.pdf) as well.

There are three piles of stones. The first pile contains $a$ stones, the second pile contains $b$ stones and the third pile contains $c$ stones. You must choose one of the piles and split the stones from it to the other two piles; specifically, if the chosen pile initially contained $s$ stones, you should choose an integer $k$ ($0 \\le k \\le s$), move $k$ stones from the chosen pile onto one of the remaining two piles and $s-k$ stones onto the other remaining pile. Determine if it is possible for the two remaining piles (in any order) to contain $x$ stones and $y$ stones respectively after performing this action. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains five space-separated integers $a$, $b$, $c$, $x$ and $y$. ### Output For each test case, print a single line containing the string "YES" if it is possible to obtain piles of the given sizes or "NO" if it is impossible. ### Constraints - $1 \\le T \\le 100$ - $1 \\le a, b, c, x, y \\le 10^9$ ### Subtasks \*\*Subtask #1 (20 points):\*\* $1 \\le a, b, c, x, y \\le 100$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 4 1 2 3 2 4 3 2 5 6 5 2 4 2 6 2 6 5 2 12 1 ``` ### Example Output ``` YES NO YES NO ``` ### Explanation \*\*Example case 1:\*\* You can take the two stones on the second pile, put one of them on the first pile and the other one on the third pile. \*\*Example case 2:\*\* You do not have enough stones. \*\*Example case 3:\*\* You can choose the first pile and put all stones from it on the second pile.
