---
category_name: easy
problem_code: PRMDIV
problem_name: 'Prime divisors'
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
problem_author: fekete
problem_tester: null
date_added: 28-07-2018
tags:
    - easy
    - fekete
    - fekete
    - likecs
    - ltime62
    - sieve
editorial_url: 'https://discuss.codechef.com/problems/PRMDIV'
time:
    view_start_date: 1532797200
    submit_start_date: 1532797200
    visible_start_date: 1532797200
    end_date: 1735669800
    current: 1559472956
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/LTIME62/hindi/PRMDIV.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/LTIME62/mandarin/PRMDIV.pdf), [Russian](http://www.codechef.com/download/translated/LTIME62/russian/PRMDIV.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME62/vietnamese/PRMDIV.pdf) as well.

Let's denote $S(x)$ by the sum of prime numbers that divides $x$. You are given an array $a\_1, a\_2, \\ldots, a\_n$ of $n$ numbers, find the number of pairs $i, j$ such that $i \\neq j$, $a\_i$ divides $a\_j$ and $S(a\_i)$ divides $S(a\_j)$. ###Input: - First line will contain $T$, number of testcases. Then the testcases follow. - First line of each testcase contains one integer $n$ — number of elements of the array. - Second line of each testcase contains $n$ space-separated integers $a\_1, a\_2, \\ldots, a\_n$. ###Output: For each testcase, output in a single line number of pairs that each of it satisfies given conditions. ###Constraints - $1 \\leq T \\leq 100$ - $2 \\leq n, a\_i \\leq 10^6$ - the sum of $n$ for all test cases does not exceed $10^6$ ###Subtasks \*\*Subtask #2 (20 points):\*\* $2 \\leq n \\leq 100$, $2 \\leq a\_i \\leq 10^4$ \*\*Subtask #2 (80 points):\*\* original contsraints ###Sample Input: ``` 1 5 2 30 2 4 3 ``` ###Sample Output: ``` 6 ``` ###EXPLANATION: $S(2) = 2, S(30) = 2 + 3 + 5 = 10, S(4) = 2, S(3) = 3$. So using this information, the pairs of indicies are $(1,2)$, $(1, 3)$, $(1, 4)$, $(3, 1)$, $(3, 2)$, $(3, 4)$.
