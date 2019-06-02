---
category_name: easy
problem_code: NICARRAY
problem_name: 'Niceness of the Arrays'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 26-10-2018
tags:
    - admin2
    - backtracking
    - combinatorics
    - easy
    - ltime65
    - modular
    - permutation
    - taran_1407
time:
    view_start_date: 1540659601
    submit_start_date: 1540659601
    visible_start_date: 1540659601
    end_date: 1735669800
    current: 1559472952
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME65/mandarin/NICARRAY.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME65/bengali/NICARRAY.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME65/hindi/NICARRAY.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME65/russian/NICARRAY.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME65/vietnamese/NICARRAY.pdf) as well. Let's define the \*niceness\* of a sequence of positive integers $X\_1, X\_2, \\dots, X\_N$ as the sum of greatest common divisors of all pairs of its elements, i.e. $$\\sum\_{i=1}^N \\sum\_{j=i+1}^N \\mathrm{gcd}(X\_i, X\_j)\\;.$$ For example, the niceness of the sequence $\[1, 2, 2\]$ is $gcd(1, 2) + gcd(1, 2) + gcd(2, 2) = 4$. You are given a sequence $A\_1, A\_2, \\dots, A\_N$; each of its elements is either a positive integer or missing. Consider all possible ways to replace each missing element of $A$ by a positive integer (not necessarily the same for each element) such that the sum of all elements is equal to $S$. Your task is to find the total niceness of all resulting sequences, i.e. compute the niceness of each possible resulting sequence and sum up all these values. Since the answer may be very large, compute it modulo $10^9 + 7$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $S$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. Missing elements in this sequence are denoted by $-1$. ### Output For each test case, print a single line containing one integer — the total niceness modulo $10^9 + 7$. ### Constraints - $1 \\le T \\le 20$ - $1 \\le N, S \\le 50$ - $1 \\le A\_i \\le 50$ or $A\_i = -1$ for each valid $i$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $1 \\le N, S \\le 18$ - $1 \\le A\_i \\le 18$ or $A\_i = -1$ for each valid $i$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 3 3 3 1 1 -1 4 8 1 -1 -1 3 3 10 -1 -1 -1 ``` ### Example Output ``` 3 23 150 ``` ### Explanation \*\*Example case 1\*\*: There is only one possible way to fill in the missing element; the resulting sequence is $\[1, 1, 1\]$. Its niceness is $3$. \*\*Example case 2\*\*: There is only three possible ways to fill in the missing elements; the resulting sequences are $\[1, 1, 3, 3\]$, $\[1, 3, 1, 3\]$, and $\[1, 2, 2, 3\]$. The sum of their niceness is $8 + 8 + 7 = 23$.
