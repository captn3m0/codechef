---
category_name: medium
problem_code: MDN
problem_name: Median
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
problem_author: nots0fast
problem_tester: null
date_added: 21-11-2018
tags:
    - nots0fast
time:
    view_start_date: 1543078801
    submit_start_date: 1543078801
    visible_start_date: 1543078801
    end_date: 1735669800
    current: 1559472977
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME66/mandarin/MDN.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME66/bengali/MDN.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME66/hindi/MDN.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME66/russian/MDN.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME66/vietnamese/MDN.pdf) as well. You are given an integer sequence $A\_1, A\_2, \\dots, A\_N$ and integers $K$ and $M$. For $1 \\le i \\le j \\le N$, let's define $S(i, j)$ as the number of ways to choose exactly $K$ elements of the contiguous subsequence $A\_i, A\_{i+1}, \\dots, A\_j$ in such a way that the median of these $K$ elements is $\\ge M$. Find the sum of $S(i, j)$ over all $i, j$ such that $1 \\le i \\le j \\le N$. Since this sum may be large, calculate it modulo $10^9+7$. ### Input - The first line of the input contains three space-separated integers $N$, $K$ and $M$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output Print a single line containing one integer — $\\sum\_{i=1}^N \\sum\_{j=i}^N S(i, j)$ modulo $10^9+7$. ### Constraints - $1 \\le N \\le 10^5$ - $3 \\le K \\le 100$ - $K$ is an odd number - $1 \\le M \\le 200$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ - all elements of $A$ are pairwise distinct ### Subtasks \*\*Subtask #1 (30 points):\*\* - $1 \\le N \\le 80$ - $3 \\le K \\le 80$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 4 3 2 1 2 3 4 ``` ### Example Output ``` 6 ``` ### Explanation $S(1,1) = S(1,2) = S(2,2) = S(2,3) = S(3,3) = S(3,4) = S(4,4) = 0$, $S(1,3) = S(2,4) = 1$ and $S(1,4) = 4$.
