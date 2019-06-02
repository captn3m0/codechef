---
category_name: medium
problem_code: STRTF
problem_name: 'Strange Transform'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: bciobanu
problem_tester: null
date_added: 1-11-2018
tags:
    - bciobanu
    - bitwise
    - medium
    - meet
    - precomputation
    - snckpe19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/STRTF'
time:
    view_start_date: 1541269800
    submit_start_date: 1541269800
    visible_start_date: 1541269800
    end_date: 1735669800
    current: 1559472983
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Russian\](http://www.codechef.com/download/translated/S19PETST/russian/STRTF.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19PETST/vietnamese/STRTF.pdf), \[Hindi\](http://www.codechef.com/download/translated/S19PETST/hindi/STRTF.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S19PETST/mandarin/STRTF.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19PETST/bengali/STRTF.pdf) as well. You are given an integer sequence $A\_1, A\_2, \\ldots, A\_N$. Let's define a transformation $f$. Applying $f$ on $A$ gives a new sequence $f(A) = \[B\_1, B\_2, \\ldots, B\_N\]$, where $B\_N = A\_N$ and $B\_i = A\_i \\oplus A\_{i+1}$ for each valid $i$. Next, let's denote the sequence obtained by starting with $A$ and applying the transformation $k$ times by $f^k(A)$. Formally, $f^0(A) = A$ and $f^{k+1}(A) = f(f^k(A))$ for any integer $k \\ge 0$. You should answer $Q$ queries. In each query, you are given two integers $K$ and $X$; the answer to this query is $f^K(A)\_X$, i.e. the $X$-th element of the sequence $f^K(A)$. ### Input - The first line of the input contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. - Each of the next $Q$ lines contains two space-separated integers $K$ and $X$ describing one query. ### Output For each query, print a single line containing one integer — the answer to this query. ### Constraints - $1 \\le N, Q \\le 2 \\cdot 10^5$ - $0 \\le A\_i \\le 10^9$ for all valid $i$ - $0 \\le K \\le 10^9$ - $1 \\le X \\le N$ ### Example Input ``` 7 7 1 7 5 2 27 48 11 1 3 2 4 2 5 2 7 3 1 3 3 10000 7 ``` ### Example Output ``` 7 50 16 11 1 44 11 ```
