---
category_name: easy
problem_code: CHFCH
problem_name: 'Chef Challenge'
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
date_added: 22-02-2019
tags:
    - greedy
    - kingofnumbers
    - ltime69
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/CHFCH'
time:
    view_start_date: 1550941202
    submit_start_date: 1550941202
    visible_start_date: 1550941202
    end_date: 1735669800
    current: 1559472939
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME69/mandarin/CHFCH.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME69/bengali/CHFCH.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME69/hindi/CHFCH.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME69/russian/CHFCH.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME69/vietnamese/CHFCH.pdf) as well. Chef's brother Chefu is a competitive programmer. Every day, he practices for ICPC (International Chefs' Programming Contest) by solving problems. Today, Chef challenged his brother to solve a certain problem, promising to bake an apple pie for him if he succeeds. Chefu has successfully solved the problem, but can you solve it? You are given an integer sequence $A\_1, A\_2, \\ldots, A\_N$. In one move, you must select two adjacent elements of this sequence (i.e. $A\_i$ and $A\_{i+1}$ for some valid $i$) and swap them. Let's call a sequence \*orderly\* if it contains a \*\*contiguous\*\* subsequence with length at least $K$ such that all of its elements have identical values. Find the minimum number of moves required to make the given sequence orderly or determine that it is impossible. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output For each test case, print a single line containing one integer — the minimum required number of moves, or $-1$ if it is impossible to make the sequence orderly. ### Constraints - $1 \\le T \\le 1,000$ - $2 \\le K \\le N \\le 300,000$ - $1 \\le A\_i \\le 300,000$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $N \\le 100$ - the sum of $N$ over all test cases does not exceed $1,000$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 8 3 1 2 2 1 3 3 2 1 5 3 1 1 2 2 3 ``` ### Example Output ``` 3 -1 ```
