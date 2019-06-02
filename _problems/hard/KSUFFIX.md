---
category_name: hard
problem_code: KSUFFIX
problem_name: 'K-th Lexicographical Suffix'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: null
date_added: 7-02-2019
tags:
    - chemthan
time:
    view_start_date: 1550311200
    submit_start_date: 1550311200
    visible_start_date: 1550311200
    end_date: 1735669800
    current: 1559472991
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/SNCKFL19/hindi/KSUFFIX.pdf), \[Bengali\](http://www.codechef.com/download/translated/SNCKFL19/bengali/KSUFFIX.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/SNCKFL19/mandarin/KSUFFIX.pdf), \[Russian\](http://www.codechef.com/download/translated/SNCKFL19/russian/KSUFFIX.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/KSUFFIX.pdf) as well. You are given an integer sequence $a\_1, a\_2, \\ldots, a\_N$ and an integer $M$. You should answer $Q$ queries. In each query: - You are given two integers $d$ and $k$. Let's define a modified sequence $b\_1, b\_2, \\ldots, b\_N$ as $b\_i = (a\_i + d) \\% M$ for each valid $i$. - Next, for each $i$ ($1 \\le i \\le N$), let's define the $i$-th suffix of this sequence as the subsequence $b\_i, b\_{i+1}, \\ldots, b\_N$. - The answer to this query is the number of the $k$-th lexicographically smallest suffix of sequence $b$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $M$ and $Q$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\ldots, a\_N$. - Each of the following $Q$ lines contains two space-separated integers $d$ and $k$ describing a query. ### Output For each query, print a single line containing one integer — the answer to that query. ### Constraints - $1 \\le T \\le 10^5$ - $1 \\le N, Q$ - the sum of $N$ over all test cases does not exceed $10^5$ - the sum of $Q$ over all test cases does not exceed $5 \\cdot 10^5$ - $1 \\le M \\le 10^9$ - $0 \\le a\_i \\lt M$ for each valid $i$ - $0 \\le d \\le 10^9$ - $1 \\le k \\le N$ ### Example Input ``` 1 5 6 3 1 4 2 1 1 4 4 2 3 1 1 ``` ### Example Output ``` 1 1 5 ``` ### Explanation In the first query, the sequence $b$ is $\[5, 2, 0, 5, 5\]$. The lexicographically sorted sequence of its suffixes is $\[0, 5, 5\], \[2, 0, 5, 5\], \[5\], \[5, 2, 0, 5, 5\], \[5, 5\]$, so the answer is suffix number $1$: $\[5, 2, 0, 5, 5\]$. In the second query, the sequence $b$ is $\[3, 0, 4, 3, 3\]$. In the third query, the sequence $b$ is $\[2, 5, 3, 2, 2\]$.
