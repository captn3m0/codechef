---
category_name: medium
problem_code: XORTABLE
problem_name: 'Xor Table'
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
date_added: 24-05-2018
tags:
    - backtracking
    - bitwise
    - constructive
    - graph
    - kingofnumbers
    - medium
    - snckel19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/XORTABLE'
time:
    view_start_date: 1544295600
    submit_start_date: 1544295600
    visible_start_date: 1544295600
    end_date: 1735669800
    current: 1559472987
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19ELTST/hindi/XORTABLE.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/S19ELTST/mandarin/XORTABLE.pdf), \[Russian\](http://www.codechef.com/download/translated/S19ELTST/russian/XORTABLE.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19ELTST/vietnamese/XORTABLE.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19ELTST/bengali/XORTABLE.pdf) as well. There are two integer sequences $A\_1, A\_2, \\dots, A\_N$ and $B\_1, B\_2, \\dots, B\_M$. You do not know the exact values of their elements, but you know that $L\_i \\le A\_i \\le R\_i$ for each valid $i$ and $P\_i \\le B\_i \\le Q\_i$ for each valid $i$. You also have a matrix $C$ with $N$ rows and $M$ columns. Some elements of $C$ are missing. For each element $C\_{i, j}$ ($1 \\le i \\le N$, $1 \\le j \\le M$) that is not missing, you know that $C\_{i, j} = A\_i \\oplus B\_j$ ($\\oplus$ denotes bitwise XOR). Your task is to find two sequences $A$ and $B$ satisfying all given conditions. If multiple solutions exist, you may find any one. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains two space-separated integers $L\_i$ and $R\_i$. - $M$ lines follow. For each $i$ ($1 \\le i \\le M$), the $i$-th of these lines contains two space-separated integers $P\_i$ and $Q\_i$. - $N$ more lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains $M$ space-separated integers $C\_{i, 1}, C\_{i, 2}, \\dots, C\_{i, M}$. Missing elements are denoted by $-1$. ### Output For each test case: - If no solution exists, print a single line containing the string `"NO"`. - Otherwise, print three lines. The first line should contain the string `"YES"`. The second line should contain $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. The third line should contain $M$ space-separated integers $B\_1, B\_2, \\dots, B\_M$. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N, M \\le 10^3$ - the sum of $N \\cdot M$ over all test cases does not exceed $10^6$ - $0 \\le L\_i \\le R\_i \\lt 2^{30}$ for each valid $i$ - $0 \\le P\_i \\le Q\_i \\lt 2^{30}$ for each valid $i$ - $-1 \\le C\_{i, j} \\lt 2^{30}$ for each valid $i, j$ ### Example Input ``` 2 3 3 2 4 3 4 4 6 1 3 4 7 6 8 2 7 4 5 0 3 4 1 2 2 2 4 6 5 7 3 9 2 4 3 6 6 5 ``` ### Example Output ``` YES 3 4 5 1 4 7 NO ```
