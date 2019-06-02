---
category_name: easy
problem_code: SFXPAL
problem_name: 'Suffix Palindromes'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: bciobanu
problem_tester: null
date_added: 18-11-2018
tags:
    - bciobanu
    - combinatorics
    - easy
    - modular
    - snckel19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/SFXPAL'
time:
    view_start_date: 1544295600
    submit_start_date: 1544295600
    visible_start_date: 1544295600
    end_date: 1735669800
    current: 1559472959
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19ELTST/hindi/SFXPAL.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/S19ELTST/mandarin/SFXPAL.pdf), \[Russian\](http://www.codechef.com/download/translated/S19ELTST/russian/SFXPAL.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19ELTST/vietnamese/SFXPAL.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19ELTST/bengali/SFXPAL.pdf) as well. Consider an alphabet with $S$ characters. Find the number of strings with length $N$ containing only characters from this alphabet which do not have any palindromic suffix with length greater than $1$. Since this number may be very large, compute it modulo $M$. ### Input The first and only line of the input contains three space-separated integers $N$, $S$ and $M$. ### Output Print a single line containing one integer — the number of strings. ### Constraints - $1 \\le N \\le 1,000$ - $1 \\le S \\le M - 1$ - $2 \\le M \\le 2^{30} - 1$ - $M$ is a prime ### Example Input ``` 3 3 13 ``` ### Example Output ``` 12 ``` ### Explanation Let's suppose that the alphabet is $\\{a, b, c\\}$. Then, the strings are "cca", "cab", "bba", "aac", "acb", "cba", "bac", "ccb", "bbc", "aab", "bca", "abc".
