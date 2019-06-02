---
category_name: school
problem_code: JDELAY
problem_name: 'Judging Delay'
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
date_added: 28-09-2018
tags:
    - cakewalk
    - kingofnumbers
    - ltime64
    - simulation
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/JDELAY'
time:
    view_start_date: 1538240402
    submit_start_date: 1538240402
    visible_start_date: 1538240402
    end_date: 1735669800
    current: 1559472927
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Bengali\](http://www.codechef.com/download/translated/LTIME64/bengali/JDELAY.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/LTIME64/mandarin/JDELAY.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME64/russian/JDELAY.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME64/vietnamese/JDELAY.pdf) as well. You have been recently hired as a developer in CodeChef. Your first mission is to implement a feature that will determine the number of submissions that were judged late in a contest. There are $N$ submissions, numbered $1$ through $N$. For each valid $i$, the $i$-th submission was submitted at time $S\_i$ and judged at time $J\_i$ (in minutes). Submitting and judging both take zero time. Please determine how many submissions received their verdicts after a delay of more than $5$ minutes. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of the input contains a single integer $N$. - $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $S\_i$ and $J\_i$. ### Output For each test case, print a single line containing one integer — the number of submissions for which the judging was delayed by more than 5 minutes. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 100$ - $1 \\le S\_i \\le J\_i \\le 300$ for each valid $i$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 1 5 1 3 4 4 4 10 1 11 2 7 ``` ### Example Output ``` 2 ``` ### Explanation \*\*Example case 1:\*\* The delays of the respective submissions are $2$ minutes, $0$ minutes, $6$ minutes, $10$ minutes and $5$ minutes. Only submissions $3$ and $4$ are delayed by more than $5$ minutes, hence the answer is $2$.
