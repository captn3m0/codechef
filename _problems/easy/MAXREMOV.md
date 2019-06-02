---
category_name: easy
problem_code: MAXREMOV
problem_name: 'Max Range Queries'
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
problem_author: iamabjain
problem_tester: null
date_added: 13-02-2019
tags:
    - ad
    - cook103
    - iamabjain
editorial_url: 'https://discuss.codechef.com/problems/MAXREMOV'
time:
    view_start_date: 1550428202
    submit_start_date: 1550428202
    visible_start_date: 1550428202
    end_date: 1735669800
    current: 1559472950
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK103/hindi/MAXREMOV.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK103/mandarin/MAXREMOV.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK103/russian/MAXREMOV.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK103/vietnamese/MAXREMOV.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK103/bengali/MAXREMOV.pdf) as well. You have $C = 100,000$ cakes, numbered $1$ through $C$. Each cake has an integer height; initially, the height of each cake is $0$. There are $N$ operations. In each operation, you are given two integers $L$ and $R$, and you should increase by $1$ the height of each of the cakes $L, L+1, \\ldots, R$. One of these $N$ operations should be removed and the remaining $N-1$ operations are then performed. Chef wants to remove one operation in such a way that after the remaining $N-1$ operations are performed, the number of cakes with height exactly $K$ is maximum possible. Since Chef is a bit busy these days, he has asked for your help. You need to find the maximum number of cakes with height exactly $K$ that can be achieved by removing one operation. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - Each of the next $N$ lines contains two space-separated integers $L$ and $R$ describing one operation. ### Output For each test case, print a single line containing one integer — the maximum possible number of cakes with height $K$. ### Constraints - $1 \\le T \\le 100$ - $2 \\le N \\le 10^5$ - $1 \\le K \\le N$ - $1 \\le L \\le R \\le 10^5$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Example Input ``` 1 3 2 2 6 4 9 1 4 ``` ### Example Output ``` 3 ``` ### Explanation \*\*Example case 1:\*\* Let's look at what happens after an operation is removed. - Removing operation $1$: The heights of cakes $4$ through $9$ increase by $1$. Then, the heights of cakes $1$ through $4$ increase by $1$. The resulting sequence of heights is $\[1, 1, 1, 2, 1, 1, 1, 1, 1\]$ (for cakes $1$ through $9$; the other cakes have heights $0$). The number of cakes with height $2$ is $1$. - Removing operation $2$: The resulting sequence of heights of cakes $1$ through $9$ is $\[1, 2, 2, 2, 1, 1, 0, 0, 0\]$. The number of cakes with height $2$ is $3$. - Removing operation $3$: The resulting sequence of heights of cakes $1$ through $9$ is $\[0, 1, 1, 2, 2, 2, 1, 1, 1\]$. The number of cakes with height $2$ is $3$. The maximum number of cakes with height $2$ is $3$.
