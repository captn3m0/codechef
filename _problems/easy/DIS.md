---
category_name: easy
problem_code: DIS
problem_name: Distances
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: watcher
problem_tester: null
date_added: 20-01-2019
tags:
    - constructive
    - graphs
    - ltime68
    - watcher
editorial_url: 'https://discuss.codechef.com/problems/DIS'
time:
    view_start_date: 1548522002
    submit_start_date: 1548522002
    visible_start_date: 1548522002
    end_date: 1735669800
    current: 1559472943
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME68/mandarin/DIS.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME68/bengali/DIS.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME68/hindi/DIS.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME68/russian/DIS.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME68/vietnamese/DIS.pdf) as well. Arya and Aryan live in a country called Nadaca. Nadaca consists of $N$ cities numbered $1$ through $N$, which are connected by some bidirectional roads. Each road has a positive (not necessarily integer) length. Arya lives in city $1$ and Aryan lives in city $N$. Arya claims that for each city $v$, the shortest path from city $1$ to city $v$ has length $a\_v$. Aryan does not disagree, but claims that for each city $v$, the shortest path from city $N$ to city $v$ has length $b\_v$. You are the wisest person they know, so they asked you to tell them if it is possible for their claims to be true, i.e. if a road network which fully satisfies their claims exists. Help them! ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\ldots, a\_N$. - The third line contains $N$ space-separated integers $b\_1, b\_2, \\ldots, b\_N$. ### Output For each test case, print a single line containing the string `"Yes"` if Arya's and Aryan's claims can be true or `"No"` otherwise. ### Constraints - $1 \\le T \\le 10^3$ - $2 \\le N \\le 10^6$ - $0 \\le a\_i, b\_i \\le 10^9$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (50 points):\*\* the sum of $N$ over all test cases does not exceed $10^3$ \*\*Subtask #2 (50 points):\*\* original constraints ### Example Input ``` 2 3 0 1 1 1 1 0 3 0 1 5 5 1 0 ``` ### Example Output ``` Yes No ```
