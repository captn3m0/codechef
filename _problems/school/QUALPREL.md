---
category_name: school
problem_code: QUALPREL
problem_name: 'Qualifying to Pre-Elimination'
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
date_added: 10-10-2018
tags:
    - cakewalk
    - kingofnumbers
    - snckql19
    - sorting
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/QUALPREL'
time:
    view_start_date: 1539698400
    submit_start_date: 1539698400
    visible_start_date: 1539698400
    end_date: 1735669800
    current: 1559472930
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19QLTST/hindi/QUALPREL.pdf) ,\[Mandarin chinese\](http://www.codechef.com/download/translated/S19QLTST/mandarin/QUALPREL.pdf) , \[Russian\](http://www.codechef.com/download/translated/S19QLTST/russian/QUALPREL.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19QLTST/vietnamese/QUALPREL.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19QLTST/bengali/QUALPREL.pdf) as well. Snackdown 2019 is coming! There are two rounds (round A and round B) after the qualification round. From both of them, teams can qualify to the pre-elimination round. According to the rules, in each of these two rounds, teams are sorted in descending order by their score and each team with a score greater or equal to the score of the team at the $K=1500$-th place advances to the pre-elimination round (this means it is possible to have more than $K$ qualified teams from each round in the case of one or more ties after the $K$-th place). Today, the organizers ask you to count the number of teams which would qualify for the pre-elimination round from round A for a given value of $K$ (possibly different from $1500$). They provided the scores of all teams to you; you should ensure that all teams scoring at least as many points as the $K$-th team qualify. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-separated integers $S\_1, S\_2, \\dots, S\_N$. ### Output For each test case, print a single line containing one integer — the number of qualified teams. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le K \\le N \\le 10^5$ - $1 \\le S\_i \\le 10^9$ for each valid $i$ - the sum of $N$ for all test cases does not exceed $10^6$ ### Example Input ``` 2 5 1 3 5 2 4 5 6 4 6 5 4 3 2 1 ``` ### Example Output ``` 2 4 ```
