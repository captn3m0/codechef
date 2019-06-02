---
category_name: easy
problem_code: KCOMPRES
problem_name: 'Coordinate Compression '
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
problem_author: likecs
problem_tester: null
date_added: 20-09-2017
tags:
    - aug18
    - binary
    - likecs
    - likecs
    - medium
    - segment
editorial_url: 'https://discuss.codechef.com/problems/KCOMPRES'
time:
    view_start_date: 1534152605
    submit_start_date: 1534152605
    visible_start_date: 1534152605
    end_date: 1735669800
    current: 1559472949
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/AUG18/hindi/KCOMPRES.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/AUG18/mandarin/KCOMPRES.pdf), [Russian](http://www.codechef.com/download/translated/AUG18/russian/KCOMPRES.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG18/vietnamese/KCOMPRES.pdf) as well.

You are given a sequence of integers $A\_1, A\_2, \\dots, A\_N$. For an integer $K$, let's define a \*$K$-compressed\* sequence $B\_1, B\_2, \\dots, B\_N$ as follows: - for each valid $i$, $B\_i$ is a positive integer - for each valid $i$, if there are exactly $X$ numbers smaller than or equal to $A\_i$ in the subsequence $A\_{\\mathop{max}(1, i-K)}, \\dots, A\_{\\mathop{min}(N, i+K)}$, then there must be exactly $X$ numbers smaller than or equal to $B\_i$ in the subsequence $B\_{\\mathop{max}(1, i-K)}, \\dots, B\_{\\mathop{min}(N, i+K)}$ - $B\_1 + B\_2 + \\dots + B\_N$ is minimum possible You may notice that for $K = N-1$ or $K = N$, this becomes the well-known technique of coordinate compression. For example, consider the sequence $A = \[4, 2, 8, 1, 4, 3, 8, 1\]$. If we choose $K = 1$, then the $K$-compressed sequence will be $B = \[2, 1, 2, 1, 2, 1, 2, 1\]$. The sum of its elements is $12$, which is the minimum. For a given integer $S$, find the number of values of $K$ ($0 \\le K \\le N$) such that the sum of elements of the $K$-compressed sequence does not exceed $S$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $S$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the number of values of $K$ such that the sum of the compressed sequence is $\\le S$. ### Constraints - $1 \\le T \\le 3$ - $1 \\le N \\le 10^5$ - $1 \\le S \\le 10^9$ - $0 \\le A\_i \\le 10^9$ for each valid $i$ ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le N \\le 100$ \*\*Subtask #2 (30 points):\*\* $1 \\le N \\le 1,000$ \*\*Subtask #3 (60 points):\*\* original constraints ### Example Input ``` 2 4 8 2 7 1 12 8 20 4 2 8 1 4 3 8 1 ``` ### Example Output ``` 2 4 ``` ### Explanation \*\*Example case 1:\*\* The possible values of $K$ are $0$ and $1$.
