---
category_name: easy
problem_code: CHEFPRMS
problem_name: 'Chef and Semi-Primes'
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
problem_author: mgch
problem_tester: null
date_added: 12-10-2018
tags:
    - easy
    - mgch
    - number
    - precomputation
    - sieve
    - snckql19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/CHEFPRMS'
time:
    view_start_date: 1539698400
    submit_start_date: 1539698400
    visible_start_date: 1539698400
    end_date: 1735669800
    current: 1559472939
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19QLTST/hindi/CHEFPRMS.pdf) ,\[Mandarin chinese\](http://www.codechef.com/download/translated/S19QLTST/mandarin/CHEFPRMS.pdf) , \[Russian\](http://www.codechef.com/download/translated/S19QLTST/russian/CHEFPRMS.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19QLTST/vietnamese/CHEFPRMS.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19QLTST/bengali/CHEFPRMS.pdf) as well. Chef likes prime numbers. However, there is one thing he loves even more. Of course, it's semi-primes! A \*semi-prime number\* is an integer which can be expressed as a product of two distinct primes. For example, $15 = 3 \\cdot 5$ is a semi-prime number, but $1$, $9 = 3 \\cdot 3$ and $5$ are not. Chef is wondering how to check if an integer can be expressed as a sum of two (not necessarily distinct) semi-primes. Help Chef with this tough task! ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single integer $N$. ### Output For each test case, print a single line containing the string `"YES"` if it is possible to express $N$ as a sum of two semi-primes or `"NO"` otherwise. ### Constraints - $1 \\le T \\le 200$ - $1 \\le N \\le 200$ ### Example Input ``` 3 30 45 62 ``` ### Example Output ``` YES YES NO ``` ### Explanation \*\*Example case 1:\*\* $N=30$ can be expressed as $15 + 15 = (3 \\cdot 5) + (3 \\cdot 5)$. \*\*Example case 2:\*\* $45$ can be expressed as $35 + 10 = (5 \\cdot 7) + (2 \\cdot 5)$. \*\*Example case 3:\*\* $62$ cannot be expressed as a sum of two semi-primes.
