---
category_name: easy
problem_code: BUCKETS
problem_name: 'Choosing from Buckets'
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
problem_author: arpa
problem_tester: null
date_added: 25-12-2018
tags:
    - arpa
    - dynamic
    - ltime67
    - probability
editorial_url: 'https://discuss.codechef.com/problems/BUCKETS'
time:
    view_start_date: 1546103100
    submit_start_date: 1546103100
    visible_start_date: 1546103100
    end_date: 1735669800
    current: 1559472936
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTM67TST/mandarin/BUCKETS.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTM67TST/bengali/BUCKETS.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTM67TST/hindi/BUCKETS.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTM67TST/russian/BUCKETS.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTM67TST/vietnamese/BUCKETS.pdf) as well. There are $N$ buckets numbered $1$ through $N$. The buckets contain balls; each ball has a color between $1$ and $K$. Let's denote the number of balls with color $j$ that are initially in bucket $i$ by $a\_{i, j}$. For each $i$ from $1$ to $N-1$ (in this order), someone draws a ball uniformly at random from bucket $i$ and puts it into bucket $i+1$, then continues to draw the next ball. After putting a ball in bucket $N$, this person draws a ball, again uniformly at random, from bucket $N$. For each color from $1$ to $K$, find the probability that the ball drawn from bucket $N$ has this color. ### Input - The first line of the input contains two space-separated integers $N$ and $K$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains $K$ space-separated integers $a\_{i, 1}, a\_{i, 2}, \\ldots, a\_{i, K}$. ### Output Print a single line containing $K$ space-separated real numbers. For each valid $i$, the $i$-th of these numbers should denote the probability that the last drawn ball has color $i$. your answer will be considered correct if absolute or relative error does not exceed $10^{-6}$ ### Constraints - $1 \\le N, K \\le 1,000$ - $0 \\le a\_{i, j} \\le 10$ for each valid $i, j$ - initially, there is at least one ball in bucket $1$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le N, K \\le 100$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 2 0 1 1 1 ``` ### Example Output ``` 0.333333 0.666667 ``` ### Explanation
