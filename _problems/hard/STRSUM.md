---
category_name: hard
problem_code: STRSUM
problem_name: 'Pairwise String Sums'
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
problem_author: lg5293
problem_tester: null
date_added: 5-01-2019
tags:
    - hard
    - implementation
    - lg5293
    - observations
    - snckfl19
editorial_url: 'https://discuss.codechef.com/problems/STRSUM'
time:
    view_start_date: 1550311200
    submit_start_date: 1550311200
    visible_start_date: 1550311200
    end_date: 1735669800
    current: 1559472994
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/SNCKFL19/hindi/STRSUM.pdf), \[Bengali\](http://www.codechef.com/download/translated/SNCKFL19/bengali/STRSUM.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/SNCKFL19/mandarin/STRSUM.pdf), \[Russian\](http://www.codechef.com/download/translated/SNCKFL19/russian/STRSUM.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/STRSUM.pdf) as well. Consider the following task: - You are given $N$ non-empty strings $s\_1, s\_2, \\ldots, s\_N$. These strings are not necessarily distinct. - Let $L$ be the list of all strings formed by concatenating two of the given strings. More formally, start with an empty list and for each valid ordered pair $(i, j)$ such that $i \\neq j$, add the string $s\_i+s\_j$ ($+$ denotes string concatenation) to this list. There may be multiple copies of any string in $L$. - $L$ contains exactly $N \\cdot (N-1)$ strings. Print these strings in an arbitrary order. This problem is too easy, so you would like to solve the reverse problem: You are given $N \\cdot (N-1)$ strings $l\_1, l\_2, \\ldots, l\_{N(N-1)}$. Determine if these strings form a possible output for the above problem with some input sequence $s\_1, s\_2, \\ldots, s\_N$ and if they do, find one such input sequence. ### Input - The first line of the input contains a single integer $N$. - $N \\cdot (N-1)$ lines follow. For each $i$ ($1 \\le i \\le N \\cdot (N-1)$), the $i$-th of these lines contains a single string $l\_i$. ### Ouptut If there is no solution, print a single line containing the string `"No"` (without quotes). Otherwise, print $N+1$ lines. The first of these lines should contain the string `"Yes"` (without quotes). For each $i$ ($1 \\le i \\le N$), the $i$-th of the following $N$ lines should contain a single string $s\_i$. If there are multiple possible solutions, you may print any one. ### Constraints - $2 \\le N \\le 50$ - $2 \\le |l\_i| \\le 10^4$ for each valid $i$ - $\\sum\_{i=1}^{N(N-1)} |l\_i| \\le 2 \\cdot 10^4$ - each string contains only lowercase English letters ### Example Input 1 ``` 3 aba baa accc ccca cccba baccc ``` ### Example Output 1 ``` Yes ccc a ba ``` ### Example Input 2 ``` 2 ax xb ``` ### Example Output 2 ``` No ```
