---
category_name: hard
problem_code: TRDST
problem_name: 'Yet Another Tree Problem'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: daniel_1999
problem_tester: null
date_added: 27-01-2019
tags:
    - centroid
    - daniel_1999
    - euler
    - feb19
    - hard
    - lca
    - partial
editorial_url: 'https://discuss.codechef.com/problems/TRDST'
time:
    view_start_date: 1550050202
    submit_start_date: 1550050202
    visible_start_date: 1550050202
    end_date: 1735669800
    current: 1559472994
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/FEB19TST/hindi/TRDST.pdf), \[Bengali\](http://www.codechef.com/download/translated/FEB19TST/bengali/TRDST.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/FEB19TST/mandarin/TRDST.pdf), \[Russian\](http://www.codechef.com/download/translated/FEB19TST/russian/TRDST.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/FEB19TST/vietnamese/TRDST.pdf) as well. You are given a connected graph with $N$ vertices (numbered $1$ through $N$) and $N - 1$ bidirectional edges. Also, you are given a sequence $K\_1, K\_2, \\ldots, K\_N$. Let's denote the distance between vertices $u$ and $v$ by $d(u, v)$. Next, for each valid $i$, let's define $D\_i$ as the maximum integer such that there are at least $K\_i$ vertices $v$ with $d(i, v) \\gt D\_i$. (It can be proven that such integers exist for the given constraints.) Your task is to find the values of $D\_1, D\_2, \\ldots, D\_N$. ### Input - The first line of the input contains a single integer $N$. - The second line contains $N$ space-separated integers $K\_1, K\_2, \\ldots, K\_N$. - Each of the next $N - 1$ lines contains two space-separated integeres $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge. ### Output Print a single line containing $N$ space-separated integers $D\_1, D\_2, \\ldots, D\_N$. ### Constraints - $1 \\le N \\le 10^5$ - $1 \\le K\_i \\le N - 1$ for each valid $i$ - $1 \\le u, v \\le N$ ### Subtasks \*\*Subtask #1 (20 points):\*\* $1 \\le N \\le 10^3$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 8 1 2 3 6 6 4 5 2 1 2 2 3 2 5 2 6 4 5 5 7 5 8 ``` ### Example Output ``` 2 1 2 1 0 1 1 2 ```
