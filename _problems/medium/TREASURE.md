---
category_name: medium
problem_code: TREASURE
problem_name: 'Treasure Hunt'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: ashishgup
problem_tester: null
date_added: 23-02-2019
tags:
    - ashishgup
    - gauss
    - march19
    - medium
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/TREASURE'
time:
    view_start_date: 1552469402
    submit_start_date: 1552469402
    visible_start_date: 1552469402
    end_date: 1735669800
    current: 1559472984
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAR19TST/hindi/TREASURE.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAR19TST/bengali/TREASURE.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAR19TST/mandarin/TREASURE.pdf), \[Russian\](http://www.codechef.com/download/translated/MAR19TST/russian/TREASURE.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAR19TST/vietnamese/TREASURE.pdf) as well. You are given a grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Let's denote the cell in row $r$ and column $c$ by $(r, c)$. Two cells of the grid are \*adjacent\* if they share a side. Some of the cells of this grid contain treasures. You do not know exactly which cells contain them, but an analysis of the grid, called a treasure hunt map, is available. For each cell $(i, j)$, you are given an integer $A\_{i, j}$ with the following meaning: - $A\_{i, j} = -1$: no information - $A\_{i, j} = 0$: there is an even number of cells containing a treasure which are adjacent to the cell $(i, j)$ - $A\_{i, j} = 1$: there is an odd number of cells containing a treasure which are adjacent to the cell $(i, j)$ A \*treasure layout\* is the set of all cells containing treasures. Find the number of possible treasure layouts that are consistent with all the given information. Since the answer may be large, compute it modulo $10^9 + 7$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains $M$ space-separated integers $A\_{i, 1}, A\_{i, 2}, \\ldots, A\_{i, M}$. ### Output For each test case, print a single line containing one integer — the number of treasure layouts modulo $10^9+7$. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N, M \\le 30$ - $|A\_{i, j}| \\le 1$ for each valid $i, j$ ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le N, M \\le 4$ \*\*Subtask #2 (20 points):\*\* - $1 \\le N \\le 30$ - $1 \\le M \\le 4$ \*\*Subtask #3 (70 points):\*\* original constraints ### Example Input ``` 1 3 2 1 -1 1 -1 1 0 ``` ### Example Output ``` 4 ```
