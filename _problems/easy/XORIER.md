---
category_name: easy
problem_code: XORIER
problem_name: 'War of XORs'
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
problem_author: priyanshi_
problem_tester: null
date_added: 23-08-2018
tags:
    - easy
    - observations
    - priyanshi_
    - sept18
    - xor
editorial_url: 'https://discuss.codechef.com/problems/XORIER'
time:
    view_start_date: 1537176602
    submit_start_date: 1537176602
    visible_start_date: 1537176602
    end_date: 1735669800
    current: 1559472963
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/SEPT18/hindi/CHEFZERO.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/SEPT18/bengali/XORIER.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/SEPT18/mandarin/XORIER.pdf) , \[Russian\](http://www.codechef.com/download/translated/SEPT18/russian/XORIER.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/SEPT18/vietnamese/XORIER.pdf) as well. Chef is stuck at the following problem. Help him solve it! Chef has a sequence of integers $A\_1, A\_2, \\dots, A\_N$. He should find the number of pairs $(i, j)$ such that $1 \\le i \\lt j \\le N$ and the bitwise XOR of $A\_i$ and $A\_j$ can be written as a sum of two (not necessarily different) prime numbers with the same parity (both odd or both even). ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-seprated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the number of valid pairs. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 10^5$ - $1 \\le A\_i \\le 10^6$ for each valid $i$ ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le N \\le 10^3$ \*\*Subtask #2 (90 points):\*\* original constraints ### Example Input ``` 1 5 2 4 8 1 3 ``` ### Example Output ``` 3 ``` ### Explanation \*\*Example case 1:\*\* The three valid pairs are $(1, 2)$, $(1, 3)$ and $(2, 3)$. For example, $A\_1 \\oplus A\_2 = 2 \\oplus 4 = 6 = 3+3$.
