---
category_name: medium
problem_code: NQNF
problem_name: 'No Queries No Fun'
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
problem_author: allllekssssa
problem_tester: null
date_added: 16-08-2018
tags:
    - allllekssssa
    - convex
    - cook
    - cook97
    - medium
    - sqrt
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/NQNF'
time:
    view_start_date: 1534703400
    submit_start_date: 1534703400
    visible_start_date: 1534703400
    end_date: 1735669800
    current: 1559472978
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK97/mandarin/NQNF.pdf), [Russian](http://www.codechef.com/download/translated/COOK97/russian/NQNF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK97/vietnamese/NQNF.pdf) as well.

Maybe Fulu is not so good at writing codes for median elements, but solving problems with queries is really easy for him. Today, he decided to give you one hard problem with queries from his national contest. You are given two sequences $A$ and $B$, each with length $N$ ($1$-indexed), and $Q$ queries. There are four types of queries: - $1\\; l\\; r$ — find $\\mathrm{max}(A\_l, A\_{l+1}, \\dots, A\_r)$ - $2\\; l\\; r$ — increase $A\_l, A\_{l+1}, \\dots, A\_r$ by $B\_l, B\_{l+1}, \\dots, B\_r$, i.e. for each $i$ ($l \\le i \\le r$), change $A\_i$ to $A\_i+B\_i$ - $3\\; l\\; r\\; x$ — for each $l \\le i \\le r$, increase $B\_i$ by $x$ - $4\\; l\\; r\\; x$ — for each $l \\le i \\le r$, increase $A\_i$ by $x$ Can you quickly process the queries? ### Input - The first line of the input contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$ denoting the initial sequence $A$. - The third line contains $N$ space-separated integers $B\_1, B\_2, \\dots, B\_N$ denoting the initial sequence $B$. - The following $Q$ lines describe queries. Each of these lines starts with an integer $t$ denoting the type of the query. If $1 \\le t \\le 2$, it is followed by a space and two space-separated integers $l$ and $r$. If $3 \\le t \\le 4$, it is followed by a space and three space-separated integers $l$, $r$ and $x$. ### Output For each query of the first type, print a single line containing one integer — the maximum element in the subsequence $A\_{l..r}$. ### Constraints - $1 \\le N, Q \\le 10^5$ - $|A\_i| \\le 10^9$ for each valid $i$ - $|B\_i| \\le 10^9$ for each valid $i$ - $|x| \\le 10^9$ - $1 \\le l \\le r \\le N$ ### Example Input ``` 3 6 1 4 2 3 1 2 1 1 3 2 1 3 3 1 1 -2 2 1 3 4 1 2 3 1 1 2 ``` ### Example Output ``` 4 9 ``` ### Explanation Initially, $A = \[1, 4, 2\]$ and $B = \[3, 1, 2\]$. - In the first query, we should find the maximum element of $A$, which is $4$. - After the second query, $A = \[4, 5, 4\]$. - After the third query, $B = \[1, 1, 2\]$. - After the fourth query, $A = \[5, 6, 6\]$. - After the fifth query, $A = \[8, 9, 6\]$. - In the sixth query, we should find the maximum of $A\_1$ and $A\_2$, which is $9$.
