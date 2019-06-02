---
category_name: school
problem_code: TABLET
problem_name: 'Buying New Tablet'
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
date_added: 16-02-2019
tags:
    - ad
    - cakewalk
    - cook103
    - implementation
    - kingofnumbers
editorial_url: 'https://discuss.codechef.com/problems/TABLET'
time:
    view_start_date: 1550428202
    submit_start_date: 1550428202
    visible_start_date: 1550428202
    end_date: 1735669800
    current: 1559472931
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK103/hindi/TABLET.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK103/mandarin/TABLET.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK103/russian/TABLET.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK103/vietnamese/TABLET.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK103/bengali/TABLET.pdf) as well. Chef decided to buy a new tablet. His budget is $B$, so he cannot buy a tablet whose price is greater than $B$. Other than that, he only has one criterion — the area of the tablet's screen should be as large as possible. Of course, the screen of a tablet is always a rectangle. Chef has visited some tablet shops and listed all of his options. In total, there are $N$ available tablets, numbered $1$ through $N$. For each valid $i$, the $i$-th tablet has width $W\_i$, height $H\_i$ and price $P\_i$. Help Chef choose a tablet which he should buy and find the area of such a tablet's screen, or determine that he cannot buy any tablet. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $B$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains three space-separated integers $W\_i$, $H\_i$ and $P\_i$. ### Output For each test case, print a single line. If Chef cannot buy any tablet, it should contain the string `"no tablet"` (without quotes). Otherwise, it should contain a single integer — the maximum area of the screen of a tablet Chef can buy. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 100$ - $1 \\le B \\le 1,000,000$ - $1 \\le P\_i \\le 1,000,000$ for each valid $i$ - $1 \\le W\_i, H\_i \\le 10,000$ for each valid $i$ ### Example Input ``` 3 3 6 3 4 4 5 5 7 5 2 5 2 6 3 6 8 5 4 9 1 10 5 5 10 ``` ### Example Output ``` 12 no tablet 25 ``` ### Explanation \*\*Example case 1:\*\* The first tablet (with screen area $3 \\cdot 4 = 12$) is the best option for Chef, since Chef cannot afford the second one and the third one has a smaller screen. \*\*Example case 2:\*\* Chef's budget is $6$, but all tablets have higher prices, so Chef cannot buy any tablet. \*\*Example case 3:\*\* The price of the only tablet is exactly equal to Chef's budget, so he is able to buy it.
