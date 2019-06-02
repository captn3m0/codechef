---
category_name: easy
problem_code: WEIRD2
problem_name: 'Weird Question'
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
date_added: 26-10-2018
tags:
    - amortization
    - data
    - easy
    - kingofnumbers
    - ltime65
    - order
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/WEIRD2'
time:
    view_start_date: 1540659601
    submit_start_date: 1540659601
    visible_start_date: 1540659601
    end_date: 1735669800
    current: 1559472963
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME65/mandarin/WEIRD2.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME65/bengali/WEIRD2.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME65/hindi/WEIRD2.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME65/russian/WEIRD2.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME65/vietnamese/WEIRD2.pdf) as well. You are given an integer sequence $A$ with length $N$. Find the number of ordered pairs of positive integers $(a, b)$ such that $a$ occurs in $A$ at least $b$ times and $b$ occurs in $A$ at least $a$ times. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the number of pairs. ### Constraints - $1 \\le T \\le 1,000$ - $2 \\le N \\le 10^6$ - $1 \\le A\_i \\le 10^6$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $3 \\cdot 10^6$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $1 \\le N \\le 10^5$ - the sum of $N$ over all test cases does not exceed $3 \\cdot 10^5$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 3 5 1 2 3 4 5 5 1 1 2 2 3 5 3 3 2 2 2 ``` ### Example Output ``` 1 4 3 ```
