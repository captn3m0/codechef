---
category_name: school
problem_code: TWOVSTEN
problem_name: 'Two vs Ten'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: altruist_
problem_tester: kingofnumbers
date_added: 20-04-2018
tags:
    - altruist_
editorial_url: 'https://discuss.codechef.com/problems/TWOVSTEN'
time:
    view_start_date: 1524934802
    submit_start_date: 1524934802
    visible_start_date: 1524934802
    end_date: 1735669800
    current: 1525198930
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME59/mandarin/TWOVSTEN.pdf), [Russian](http://www.codechef.com/download/translated/LTIME59/russian/TWOVSTEN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME59/vietnamese/TWOVSTEN.pdf) as well.

Chef Two and Chef Ten are playing a game with a number $X$. In one turn, they can multiply $X$ by $2$. The goal of the game is to make $X$ divisible by $10$. Help the Chefs find the smallest number of turns necessary to win the game (it may be possible to win in zero turns) or determine that it is impossible. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single integer denoting the initial value of $X$. ### Output For each test case, print a single line containing one integer — the minimum required number of turns or $-1$ if there is no way to win the game. ### Constraints - $1 \\le T \\le 1000$ - $0 \\le X \\le 10^9$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 3 10 25 1 ``` ### Example Output ``` 0 1 -1 ```
