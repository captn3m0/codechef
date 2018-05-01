---
category_name: easy
problem_code: GCDDIV
problem_name: 'The hardest gcd problem'
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
problem_author: altruist_
problem_tester: kingofnumbers
date_added: 20-04-2018
tags:
    - altruist_
editorial_url: 'https://discuss.codechef.com/problems/GCDDIV'
time:
    view_start_date: 1524934802
    submit_start_date: 1524934802
    visible_start_date: 1524934802
    end_date: 1735669800
    current: 1525198887
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME59/mandarin/GCDDIV.pdf), [Russian](http://www.codechef.com/download/translated/LTIME59/russian/GCDDIV.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME59/vietnamese/GCDDIV.pdf) as well.

You are given a sequence $A\_1, A\_2, \\dots, A\_N$ of positive integers and an integer $K$. You are allowed to perform the following operation any number of times (including zero): - choose an index $j$ between $1$ and $N$ inclusive - choose a positive divisor $d$ of $A\_j$ such that $d \\le K$ - divide $A\_j$ by $d$ Determine if it is possible to modify the sequence $A$ in such a way that it would satisfy the following condition: there is no positive integer strictly greater than $1$ which divides every element of $A$. (In other words, the greatest common divisor of all elements of $A$ should be $1$.) ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing the string `"YES"` if it is possible to make the GCD of all elements of $A$ equal to $1$ or `"NO"` if it is impossible. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 10^5$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ - $1 \\le K \\le 10^9$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $1 \\le N, K \\le 100$ - $1 \\le A\_i \\le 100$ for each valid $i$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 3 6 10 15 30 3 4 5 10 20 ``` ### Example Output ``` YES NO ```
