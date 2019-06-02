---
category_name: easy
problem_code: DBFB
problem_name: 'Dibs on Fibs'
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
problem_author: anuj_2106
problem_tester: null
date_added: 1-05-2018
tags:
    - anuj_2106
    - easy
    - fibonacci
    - may18
editorial_url: 'https://discuss.codechef.com/problems/DBFB'
time:
    view_start_date: 1526290200
    submit_start_date: 1526290200
    visible_start_date: 1526290200
    end_date: 1735669800
    current: 1559472942
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MAY18/mandarin/DBFB.pdf), [Russian](http://www.codechef.com/download/translated/MAY18/russian/DBFB.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY18/vietnamese/DBFB.pdf) as well.

You are given two sequences $A$ and $B$, each with size $M$, and an integer $N$. Consider the following pseudocode: ``` result := 0 for i := 1 to M for j := 1 to M array fib\[1..max(2, N)\] fib\[1\] := A\[i\] fib\[2\] := B\[j\] for k := 3 to N fib\[k\] := fib\[k-1\] + fib\[k-2\] result := result + fib\[N\] ``` Compute the final value of the variable `result`. Since it can be very large, compute its remainder modulo $10^9+7$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-seperated integers $M$ and $N$. - The second line contains $M$ space-seperated integers $A\_1, A\_2, \\dots, A\_M$. - The third line contains $M$ space-seperated integers $B\_1, B\_2, \\dots, B\_M$. ### Output For each test case, print the final value of `result` modulo $10^9+7$. ### Constraints - $1 \\le T \\le 10$ - $1 \\le M \\le 10^5$ - $1 \\le N \\le 10^5$ - $0 \\le A\_i, B\_i \\le 10^9$ for each valid $i$ ### Subtasks \*\*Subtask #1 (20 points):\*\* $1 \\le N, M \\le 100$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 1 3 3 1 2 3 4 5 6 ``` ### Example Output ``` 63 ``` ### Explanation \*\*Example case 1:\*\* The innermost loop is ran for 9 pairs of initial values: $(1,4), (1,5), (1,6), (2,4), (2,5), (2,6), (3,4), (3,5), (3,6)$. The corresponding values added to `result` are $5, 6, 7, 6, 7, 8, 7, 8, 9$, and their sum is 63.
