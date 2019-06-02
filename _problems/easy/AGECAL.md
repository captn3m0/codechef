---
category_name: easy
problem_code: AGECAL
problem_name: 'Age Calculator'
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
problem_author: arpa
problem_tester: null
date_added: 28-12-2018
tags:
    - arpa
    - implementation
    - ltime67
editorial_url: 'https://discuss.codechef.com/problems/AGECAL'
time:
    view_start_date: 1546103100
    submit_start_date: 1546103100
    visible_start_date: 1546103100
    end_date: 1735669800
    current: 1559472934
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTM67TST/mandarin/AGECAL.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTM67TST/bengali/AGECAL.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTM67TST/hindi/AGECAL.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTM67TST/russian/AGECAL.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTM67TST/vietnamese/AGECAL.pdf) as well. Chef's planet is called Javad. A year on Javad has $N$ months numbered $1$ through $N$. For each valid $i$, the $i$-th month has $a\_i$ days numbered $1$ through $a\_i$. On Javad, years that are divisible by $4$ are leap years - the last month of each leap year is one day longer (it has $a\_N + 1$ days). You are given Chef's birth date and the current date. Find the age of Chef in days, i.e. the number of days between Chef's birth date and the current date inclusive. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\ldots, a\_N$. - The third line contains three space-separated positive integers $y\_b$, $m\_b$ and $d\_b$ denoting the year, month and day of Chef's birth respectively. - The fourth line contains three space-separated positive integers $y\_c$, $m\_c$ and $d\_c$ denoting the current year, month and day respectively. ### Output For each test case, print a single line containing one integer — Chef's age in days. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 10,000$ - $1 \\le a\_i \\le 10,000$ for each valid $i$ - $1 \\le y\_b, y\_c \\le 100,000$ - $1 \\le m\_b, m\_c \\le N$ - $d\_b$ will be less than or equal to the days of the $m\_b$ month of the $y\_b$ year. - $d\_c$ will be less than or equal to the days of the $m\_c$ month of the $y\_c$ year. - the current date is equal to or greater than Chef's birth date ### Subtasks \*\*Subtask #1 (10 points):\*\* - $1 \\le y\_b, y\_c, N \\le 1,000$ - $1 \\le a\_i \\le 100$ for each valid $i$ \*\*Subtask #2 (90 points):\*\* original constraints ### Example Input ``` 4 5 1 2 3 4 5 2 1 1 3 5 1 2 3 3 1 1 1 2 2 2 2 1 1 3 1 1 3 2 1 5 1 4 3 4 6 3 5 6 10 1 1 ``` ### Example Output ``` 26 11 2 112 ```
