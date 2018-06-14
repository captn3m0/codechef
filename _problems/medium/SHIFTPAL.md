---
category_name: medium
problem_code: SHIFTPAL
problem_name: 'Shifted Palindrome'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 23-05-2018
tags:
    - easy
    - hashing
    - kingofnumbers
    - kingofnumbers
    - ltime60
    - string
    - xellos0
editorial_url: 'https://discuss.codechef.com/problems/SHIFTPAL'
time:
    view_start_date: 1527354000
    submit_start_date: 1527354000
    visible_start_date: 1527354000
    end_date: 1735669800
    current: 1528985561
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME60/mandarin/SHIFTPAL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME60/vietnamese/SHIFTPAL.pdf) as well.

You are given a string $S$. A cyclic shift of $S$ is a string formed by moving a number of characters from the beginning of $S$ to its end (in the same order). Formally, for an integer $k$ ($0 \\le k \\lt N$), the $k$-th cyclic shift is a string $R$ with length $N$ such that: - $R\_i = S\_{i+k}$ for each $1 \\le i \\le N-k$ - $R\_i = S\_{i-N+k}$ for each $N-k+1 \\le i \\le N$ A string is palindromic if it is equal to its own reverse string. Compute the number of palindromic cyclic shifts of the given string. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single string $S$. ### Output For each test case, print a single line containing one integer — the number of palindromic shifts. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le |S| \\le 2\\cdot 10^5$ - $|S|$ contains only lowercase English letters - the sum of $|S|$ in all test cases does not exceed $2\\cdot 10^5$ ### Subtasks \*\*Subtask #1 (20 points):\*\* the sum of $|S|$ in all test cases does not exceed $100$ \*\*Subtask #2 (20 points):\*\* the sum of $|S|$ in all test cases does not exceed $5,000$ \*\*Subtask #3 (60 points):\*\* original constraints ### Example Input ``` 1 aabb ``` ### Example Output ``` 2 ``` ### Explanation \*\*Example case 1:\*\* The two palindromic cyclic shifts of "aabb" are "abba" and "baab".
