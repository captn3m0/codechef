---
category_name: medium
problem_code: XM
problem_name: 'XOR Magic'
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
    - R
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: vivek_1998299
problem_tester: null
date_added: 17-05-2019
tags:
    - dynamic
    - ltime72
    - precomputation
    - prefix
    - taran_1407
    - vivek_1998299
time:
    view_start_date: 1558803600
    submit_start_date: 1558803600
    visible_start_date: 1558803600
    end_date: 1735669800
    current: 1559472986
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/LTIME72/hindi/XM.pdf), \[Bengali\](http://www.codechef.com/download/translated/LTIME72/bengali/XM.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/LTIME72/mandarin/XM.pdf), \[Russian\](http://www.codechef.com/download/translated/LTIME72/russian/XM.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME72/vietnamese/XM.pdf) as well. Vivek loves to play with sequences and XORs, so he challenges you to solve the following problem. You are given a sequence $A\_1, A\_2, \\ldots, A\_N$. You should answer $Q$ queries. In each query, you are given a subsequence $A\_L, A\_{L+1}, \\ldots, A\_R$; the answer to this query is $\\sum\_{i=L}^R A\_i \\oplus (i-L)$, where $\\oplus$ denotes the bitwise XOR operator. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. - The next $Q$ lines describe queries. Each of these lines contains two space-separated integers $L$ and $R$. ### Output For each query, print a single line containing one integer ― the answer to the query. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 10^5$ - $1 \\le Q \\le 10^5$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ - $1 \\le L \\le R \\le N$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le N, Q \\le 1,000$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 1 3 2 3 1 2 1 3 2 3 ``` ### Example Output ``` 3 4 ``` ### Explanation The answer to the first query is $A\_1 \\oplus 0 + A\_2 \\oplus 1 + A\_3 \\oplus 2 = 3$.
