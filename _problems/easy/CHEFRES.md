---
category_name: easy
problem_code: CHEFRES
problem_name: 'Chef Restaurant '
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
date_added: 29-09-2018
tags:
    - binary
    - easy
    - kingofnumbers
    - line
    - ltime64
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/CHEFRES'
time:
    view_start_date: 1538240402
    submit_start_date: 1538240402
    visible_start_date: 1538240402
    end_date: 1735669800
    current: 1559472939
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Bengali\](http://www.codechef.com/download/translated/LTIME64/bengali/CHEFRES.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/LTIME64/mandarin/CHEFRES.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME64/russian/CHEFRES.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME64/vietnamese/CHEFRES.pdf) as well. Chef is a cook and he has recently opened a restaurant. The restaurant is open during $N$ time intervals $\[L\_1, R\_1), \[L\_2, R\_2), \\dots, \[L\_N, R\_N)$. No two of these intervals overlap — formally, for each valid $i$, $j$ such that $i \\neq j$, either $R\_i \\lt L\_j$ or $R\_j \\lt L\_i$. $M$ people (numbered $1$ through $M$) are planning to eat at the restaurant; let's denote the time when the $i$-th person arrives by $P\_i$. If the restaurant is open at that time, this person does not have to wait, but if it is closed, this person will wait until it is open. Note that if this person arrives at an exact time when the restaurant is closing, they have to wait for the next opening time. For each person, calculate how long they have to wait (possibly $0$ time), or determine that they will wait forever for the restaurant to open. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of the input contains two space-separated integers $N$ and $M$. - $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $L\_i$ and $R\_i$. - $M$ lines follow. For each valid $i$, the $i$-th of these lines contains a single integer $P\_i$. ### Output For each test case, print $M$ lines. For each valid $i$, the $i$-th of these lines should contain a single integer — the time person $i$ has to wait, or $-1$ if person $i$ has to wait forever. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N, M \\le 10^5$ - $1 \\le L\_i \\lt R\_i \\le 10^9$ for each valid $i$ - $1 \\le P\_i \\le 10^9$ for each valid $i$ - the intervals are pairwise disjoint - the sum of $N$ for all test cases does not exceed $3 \\cdot 10^5$ - the sum of $M$ for all test cases does not exceed $3 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - the sum of $N$ for all test cases does not exceed $1,000$ - the sum of $M$ for all test cases does not exceed $1,000$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 1 4 5 5 7 9 10 2 3 20 30 5 6 7 35 1 ``` ### Example Output ``` 0 0 2 -1 1 ```
