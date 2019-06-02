---
category_name: easy
problem_code: TEAMMATE
problem_name: 'Finding Teammate'
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
    - combinatorics
    - easy
    - kingofnumbers
    - snckql19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/TEAMMATE'
time:
    view_start_date: 1539698400
    submit_start_date: 1539698400
    visible_start_date: 1539698400
    end_date: 1735669800
    current: 1559472962
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19QLTST/hindi/TEAMMATE.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S19QLTST/mandarin/TEAMMATE.pdf), \[Russian\](http://www.codechef.com/download/translated/S19QLTST/russian/TEAMMATE.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19QLTST/vietnamese/TEAMMATE.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19QLTST/bengali/TEAMMATE.pdf) as well. Snackdown 2019 is coming! Since Snackdown is a contest of teams with up to two members, everyone is looking for a teammate. There are $N$ contestants (numbered $1$ through $N$) who want to participate in Snackdown; let's denote the skill level of the $i$-th contestant by $S\_i$. These people want to pair up in $N/2$ teams; each team should consist of two people. Clearly everyone wishes for their teammate to be as skilled as possible, so everyone wants to maximize their teammate's skill level. We call a pairing (an unordered $N/2$-tuple of teams) \*valid\* if there are no two teams consisting of people $(A, B)$ and $(C, D)$ such that $S\_D \\gt S\_B$ and $S\_A \\gt S\_C$ — in that case, $A$ and $D$ would both prefer to be on the same team rather than with their current teammates. Find the number of valid pairings. Since this number can be large, compute it modulo $1,000,000,007$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $S\_1, S\_2, \\dots, S\_N$. ### Output For each test case, print a single line containing one integer — the number of valid pairings modulo $1,000,000,007$. ### Constraints - $1 \\le T \\le 1,000$ - $2 \\le N \\le 10^5$ - $N$ is even - the sum of $N$ for all test cases does not exceed $10^6$ - $1 \\le S\_i \\le 10^6$ for each valid $i$ ### Example Input ``` 2 4 1 7 3 8 4 2 3 2 2 ``` ### Example Output ``` 1 3 ``` ### Explanation \*\*Example case 1:\*\* The only valid pairing is for contestant $2$ to be paired with contestant $4$ (so contestants $1$ and $3$ form the other team). \*\*Example case 2:\*\* Since person $2$ has the highest skill level and all others have the same skill levels, person $2$ can choose anyone among the other three as a teammate. The remaining two people also form a team, so the number of pairings is $3$.
