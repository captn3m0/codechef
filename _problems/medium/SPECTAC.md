---
category_name: medium
problem_code: SPECTAC
problem_name: 'Spectacular Activity Selection'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: andrei1998
problem_tester: null
date_added: 2-11-2018
tags:
    - activity
    - andrei1998
    - combinatorics
    - dynamic
    - greedy
    - medium
    - snckpe19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/SPECTAC'
time:
    view_start_date: 1541269800
    submit_start_date: 1541269800
    visible_start_date: 1541269800
    end_date: 1735669800
    current: 1559472982
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Russian\](http://www.codechef.com/download/translated/S19PETST/russian/SPECTAC.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19PETST/vietnamese/SPECTAC.pdf), \[Hindi\](http://www.codechef.com/download/translated/S19PETST/hindi/SPECTAC.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S19PETST/mandarin/SPECTAC.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19PETST/bengali/SPECTAC.pdf) as well. In between cooking lunch and dinner, Chef has decided to take some time off to read about the \[Activity Selection Problem\] (https://en.wikipedia.org/wiki/Activity\_selection\_problem). In that problem, there are $M$ time intervals $\[l\_1, r\_1\], \[l\_2, r\_2\], \\ldots, \[l\_M, r\_M\]$. A solution to the problem is a maximum subset of these intervals such that no two intervals from this subset have a common point (sharing an endpoint is also forbidden), i.e. a set containing the maximum possible number of such intervals. Since solving this problem proved to be too easy, Chef is now wondering: in how many ways could he pick a set of $M$ distinct intervals such that all of their endpoints belong to the set $\\{1, 2, \\ldots, N\\}$ and the number of intervals in the solution to the Activity Selection Problem for this set is exactly $K$? Since the result may be very large, compute it modulo $MOD$. ### Input The first and only line of the input contains four space-separated integers $N$, $M$, $K$ and $MOD$. ### Output Print a single line containing one integer — the number of sets of intervals which satisfy all constraints, modulo $MOD$. ### Constraints - $1 \\le K \\le N \\le 50$ - $1 \\le M \\le \\mathrm{min}(50, N(N + 1)/2)$ - $100 \\le MOD \\le 10^9 + 7$ - $MOD$ is a prime ### Example Input ``` 2 2 1 997 ``` ### Example Output ``` 2 ``` ### Explanation There are exactly two possible ways to pick the intervals: - $\[1, 1\]$ and $\[1, 2\]$ - $\[2, 2\]$ and $\[1, 2\]$ ### Example Input ``` 2 2 2 997 ``` ### Example Output ``` 1 ``` ### Explanation We must pick intervals $\[1, 1\]$ and $\[2, 2\]$. ### Example Input ``` 30 25 20 997 ``` ### Example Output ``` 687 ```
