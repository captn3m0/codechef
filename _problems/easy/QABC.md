---
category_name: easy
problem_code: QABC
problem_name: 'Chef and Operations'
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
problem_author: mgch
problem_tester: null
date_added: 11-10-2018
tags:
    - mgch
    - observations
    - simple
    - snckql19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/QABC'
time:
    view_start_date: 1539698400
    submit_start_date: 1539698400
    visible_start_date: 1539698400
    end_date: 1735669800
    current: 1559472957
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19QLTST/hindi/QABC.pdf) ,\[Mandarin chinese\](http://www.codechef.com/download/translated/S19QLTST/mandarin/QABC.pdf) , \[Russian\](http://www.codechef.com/download/translated/S19QLTST/russian/QABC.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19QLTST/vietnamese/QABC.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19QLTST/bengali/QABC.pdf) as well. Chef has two sequences $A$ and $B$, each with length $N$. He can apply the following magic operation an arbitrary number of times (including zero): choose an index $i$ ($1 \\le i \\le N-2$) and add $1$ to $A\_i$, $2$ to $A\_{i+1}$ and $3$ to $A\_{i+2}$, i.e. change $A\_i$ to $A\_i+1$, $A\_{i+1}$ to $A\_{i+1}+2$ and $A\_{i+2}$ to $A\_{i+2}+3$. Chef asks you to tell him if it is possible to obtain sequence $B$ from sequence $A$ this way. Help him! ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. - The third line contains $N$ space-separated integers $B\_1, B\_2, \\dots, B\_N$. ### Output For each test case, print a single line containing the string `"TAK"` if it is possible to reach sequence $B$ or `"NIE"` otherwise. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^5$ - $0 \\le A\_i \\le 10^8$ for each valid $i$ - $0 \\le B\_i \\le 10^8$ for each valid $i$ - the sum of $N$ for all test cases does not exceed $5 \\cdot 10^5$ ### Example Input ``` 2 5 0 0 0 0 0 1 2 4 2 3 5 0 0 0 0 0 1 2 4 2 4 ``` ### Example Output ``` TAK NIE ``` ### Explanation \*\*Example case 1:\*\* Chef can apply the operation at index $i = 3$ and get the sequence $(0,0,1,2,3)$. Afterwards, he can apply that operation at index $i = 1$ and get the sequence $(1,2,4,2,3) = B$. \*\*Example case 2:\*\* It is impossible to reach sequence $B$.
