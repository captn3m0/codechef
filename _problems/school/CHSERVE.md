---
category_name: school
problem_code: CHSERVE
problem_name: 'Chef and Serves'
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
problem_author: abdul135
problem_tester: null
date_added: 17-09-2018
tags:
    - abdul135
    - cakewalk
    - oct18
editorial_url: 'https://discuss.codechef.com/problems/CHSERVE'
time:
    view_start_date: 1540027803
    submit_start_date: 1540027803
    visible_start_date: 1540027803
    end_date: 1735669800
    current: 1559472925
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/OCT18/hindi/CHSERVE.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/OCT18/bengali/CHSERVE.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/OCT18/mandarin/CHSERVE.pdf) , \[Russian\](http://www.codechef.com/download/translated/OCT18/russian/CHSERVE.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/OCT18/vietnamese/CHSERVE.pdf) as well. In a regular table tennis match, the player who serves changes every time after 2 points are scored, regardless of which players scored them. Chef and Cook are playing a different match — they decided that the player who serves would change every time after $K$ points are scored instead (again regardless of which players scored them). When the game starts, it's Chef's turn to serve. You are given the current number of points scored by Chef and Cook ($P\_1$ and $P\_2$ respectively). Find out whether Chef or Cook has to serve next. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains three space-separated integers $P\_1$, $P\_2$ and $K$. ### Output For each test case, print a single line containing the string `"CHEF"` if it is Chef's turn or `"COOK"` if it is Cook's turn. ### Constraints - $1 \\le T \\le 10^5$ - $1 \\le K \\le 10^{9}$ - $0 \\le P\_1, P\_2 \\le 10^{9}$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 3 1 3 2 0 3 2 34 55 2 ``` ### Example Output ``` CHEF COOK CHEF ``` ### Explanation \*\*Example case 1:\*\* Chef serves for the first two points, Cook serves for the next two, so Chef has to serve again now.
