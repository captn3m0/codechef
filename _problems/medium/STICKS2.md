---
category_name: medium
problem_code: STICKS2
problem_name: Sticks
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
date_added: 29-05-2017
tags:
    - binary
    - cook96
    - implementation
    - kingofnumbers
    - logic
editorial_url: 'https://discuss.codechef.com/problems/STICKS2'
time:
    view_start_date: 1532284205
    submit_start_date: 1532284205
    visible_start_date: 1532284205
    end_date: 1735669800
    current: 1559472983
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK96/mandarin/STICKS2.pdf), [Russian](http://www.codechef.com/download/translated/COOK96/russian/STICK2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK96/vietnamese/STICKS2.pdf) as well.

Chef and his little brother are playing with sticks. Initially, Chef has $N$ sticks with lengths $A\_1, A\_2, \\dots, A\_N$. He should give his little brother at least $K$ of these sticks. Afterwards, Chef's brother should choose four sticks and use them to form a rectangle (a square is also a rectangle). Chef does not want his brother to break any of the sticks, so each of the chosen sticks should be one side of the rectangle. Chef's little brother wants the rectangle he makes to have the maximum possible area, while Chef wants it to have the minimum possible area. Therefore, Chef wants to choose the sticks to give his brother in such a way that they cannot be used to form a rectangle; if it's impossible, then he wants to choose the sticks in such a way that the maximum area of a rectangle his little brother can form is minimum possible. Can you find the area of the resulting rectangle (or determine that it won't be possible to form any) if both Chef and his little brother play optimally? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the area of the resulting rectangle or $-1$ if Chef can give his brother sticks that cannot be used to form any rectangle. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 10^5$ - $0 \\le K \\le N$ - the sum of $N$ over all test cases does not exceed $10^5$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ ### Example Input ``` 2 7 6 1 2 3 1 2 2 1 5 4 1 2 1 2 3 ``` ### Example Output ``` 2 -1 ``` ### Explanation \*\*Example case 1:\*\* Chef should give his brother all sticks except one. Regardless of the length of that one stick, Chef's brother can choose sticks with lengths $1, 2, 1, 2$ to create a rectangle with area $1 \\cdot 2 = 2$. \*\*Example case 2:\*\* If Chef gives his brother sticks with lengths $2, 1, 2, 3$, then there is no way to form a rectangle.
