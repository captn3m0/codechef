---
category_name: easy
problem_code: CARDMGK
problem_name: 'Chef and Card Trick'
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
date_added: 18-10-2018
tags:
    - easy
    - kingofnumbers
    - observations
    - prefix
    - snck1a19
    - sorting
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/CARDMGK'
time:
    view_start_date: 1540092600
    submit_start_date: 1540092600
    visible_start_date: 1540092600
    end_date: 1735669800
    current: 1559472938
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S191ATST/hindi/CARDMGK.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S191ATST/mandarin/CARDMGK.pdf), \[Russian\](http://www.codechef.com/download/translated/S191ATST/russian/CARDMGK.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S191ATST/vietnamese/CARDMGK.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S191ATST/bengali/CARDMGK.pdf) as well. Chef is recently learning magic tricks that use a deck of cards. Each card in this deck has an integer written on it. Currently, he is learning how to make the deck sorted in non-decreasing order (from top to bottom) of the numbers on the cards using at most one shuffle move. A shuffle move means taking an arbitrary number of cards from the top of the deck and putting them at the bottom of the deck in the same relative order. For example, if we have a deck of cards with numbers $(5, 7, 3, 3, 8, 2)$, it is allowed to take the top three cards $(5, 7, 3)$ and put them at the bottom; the result is $(3, 8, 2, 5, 7, 3)$. You are trying to convince Chef that sometimes, it is impossible to sort the deck in non-decreasing order using at most one shuffle move. That is why you need to write a program that determines if it is possible to sort a given deck or not. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$ denoting the cards in the deck from top to bottom. ### Output For each test case, print a single line containing the string `"YES"` if it is possible to sort the deck or `"NO"` if it is impossible. ### Constraints - $1 \\le T \\le 100$ - $2 \\le N \\le 10^5$ - the sum of $N$ over all test cases does not exceed $10^6$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ ###Subtasks \*\*Subtask #1 (50 points):\*\* - $2 \\le N \\le 1,000$ - the sum of $N$ over all test cases does not exceed $10,000$ \*\*Subtask #2 (50 points):\*\* original constraints ### Example Input ``` 2 5 1 5 2 4 3 5 3 4 5 1 2 ``` ### Example Output ``` NO YES ```
