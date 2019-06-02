---
category_name: school
problem_code: CHFAR
problem_name: 'Chef and Sequence'
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
date_added: 27-10-2018
tags:
    - math
    - mgch
    - simple
    - snck1b19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/CHFAR'
time:
    view_start_date: 1540827000
    submit_start_date: 1540827000
    visible_start_date: 1540827000
    end_date: 1735669800
    current: 1559472924
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Russian\](http://www.codechef.com/download/translated/S191BTST/russian/CHFAR.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/S191BTST/vietnamese/CHFAR.pdf) , \[Hindi\](http://www.codechef.com/download/translated/S191BTST/hindi/CHFAR.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S191BTST/mandarin/CHFAR.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S191BTST/bengali/CHFAR.pdf) as well. Chef has a sequence of positive integers $A\_1, A\_2, \\dots, A\_N$. He has only one question for you: is it possible to change at most $K$ elements of this sequence to arbitrary positive integers in such a way that the condition $$A\_1^2 + A\_2^2 + \\dots + A\_N^2 \\le A\_1 + A\_2 + \\dots + A\_N$$ holds? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing the string `"YES"` if it is possible to satisfy the given condition or `"NO"` otherwise. ###Constraints - $1 \\le T \\le 1,000$ - $1 \\le K \\le N \\le 10^4$ - $1 \\le A\_i \\le 10$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^5$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 1 2 2 1 2 ``` ### Example Output ``` YES ``` ### Explanation \*\*Example case 1:\*\* It is possible to change $A\_2$ to $1$. This gives $A = \[1, 1\]$, for which the given condition holds, so the answer is `"YES"`.
