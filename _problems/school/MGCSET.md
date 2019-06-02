---
category_name: school
problem_code: MGCSET
problem_name: 'Magic Set'
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
problem_author: barenuz
problem_tester: null
date_added: 1-07-2018
tags:
    - barenuz
    - july18
    - simple
editorial_url: 'https://discuss.codechef.com/problems/MGCSET'
time:
    view_start_date: 1531733410
    submit_start_date: 1531733410
    visible_start_date: 1531733410
    end_date: 1735669800
    current: 1559472929
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JULY18/mandarin/MGCSET.pdf), [Russian](http://www.codechef.com/download/translated/JULY18/russian/MGCSET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY18/vietnamese/MGCSET.pdf) as well.

Katya has a sequence of integers $a\_1, a\_2, \\dots, a\_n$ and an integer $m$. She defines a \*good\* sequence of integers as a non-empty sequence such that the sum of the elements in each of its non-empty subsequences is divisible by $m$. Katya wants to know the number of good subsequences of the sequence $a$. Can you help her? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $n$ and $m$. - The second line contains $n$ space-separated integers $a\_1, a\_2, \\dots, a\_n$. ### Output For each test case, print a single line containing one integer — the number of good subsequences. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le n \\le 30$ - $1 \\le m \\le 1,000$ - $1 \\le a\_i \\le 1,000$ for each valid $i$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le n \\le 5$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 2 3 1 2 2 3 1 3 ``` ### Example Output ``` 0 1 ``` ### Explanation \*\*Example case 1:\*\* There are no good subsequences. \*\*Example case 2:\*\* There is exactly one good subsequence of $a$: $\[3\]$.
