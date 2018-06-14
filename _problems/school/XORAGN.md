---
category_name: school
problem_code: XORAGN
problem_name: 'Xor Again'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: deadcode4
problem_tester: null
date_added: 3-04-2018
tags:
    - deadcode4
    - easy
    - may18
    - xor
editorial_url: 'https://discuss.codechef.com/problems/XORAGN'
time:
    view_start_date: 1526290200
    submit_start_date: 1526290200
    visible_start_date: 1526290200
    end_date: 1735669800
    current: 1528985554
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MAY18/mandarin/XORAGN.pdf), [Russian](http://www.codechef.com/download/translated/MAY18/russian/XORAGN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY18/vietnamese/XORAGN.pdf) as well.

Chef recently discovered a function $XOR()$, which computes the XOR of all elements of a sequence: $$XOR(a\_{1..n}) = a\_1 \\oplus a\_2 \\oplus \\dots \\oplus a\_n\\,.$$ Chef has a sequence $A$ with size $N$. He generated a new sequence $B$ with size $N^2$ using the following formula: $$B\_{iN+j+1} = (A\_{i+1} + A\_{j+1}) \\quad \\forall\\; 0 \\le i, j \\lt N\\,.$$ Compute the value of $XOR(B)$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the answer to the problem. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 10^5$ - $2^0 \\le A\_i \\lt 2^{30}$ for each valid $i$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $1 \\le N \\le 500$ - $2^0 \\le A\_i \\lt 2^{10}$ for each valid $i$ \*\*Subtask #2 (70 points):\*\* $1 \\le N \\le 10^5$ ### Example Input ``` 1 2 1 2 ``` ### Example Output ``` 6 ``` ### Explanation \*\*Example case 1:\*\* The sequence $B$ is $\\{A\_1 + A\_1, A\_1 + A\_2, A\_2 + A\_1, A\_2 + A\_2\\} = \\{2, 3, 3, 4\\}$. The XOR of its elements is $B\_1 \\oplus B\_2 \\oplus B\_3 \\oplus B\_4 = 6$.
