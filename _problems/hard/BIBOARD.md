---
category_name: hard
problem_code: BIBOARD
problem_name: 'Binary Board'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: ratingoverflow
problem_tester: mgch
date_added: 20-05-2018
tags:
    - hard
    - june18
    - likecs
    - minimum
    - ratingoverflow
    - ratingoverflow
time:
    view_start_date: 1528709405
    submit_start_date: 1528709405
    visible_start_date: 1528709405
    end_date: 1735669800
    current: 1528985564
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JUNE18/mandarin/BIBOARD.pdf), [Russian](http://www.codechef.com/download/translated/JUNE18/russian/BIBOARD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE18/vietnamese/BIBOARD.pdf) as well.

﻿﻿Chef loves single-colored squares, so he got a rectangular board with size $N \\times M$ consisting only of black cells and white cells. He calculates the \*cost\* of the board in the following manner: - Let's denote the number of ways to choose $k^2$ white cells which form a square with edge length $k$ (and edges parallel to the borders of the board) by $W\_k$. For example, a $2 \\times 3$ board consisting of 6 white cells and no black cells has $W\_1=6$, $W\_2=2$ and $W\_3=0$. - Similarly, let's denote the number of ways to choose $k^2$ black cells forming a square by $B\_k$. - Chef chose two sequences of non-negative integers $C\_W$ and $C\_B$, each with length $\\mathrm{min}(N, M)$. The cost of the board is defined as $$\\sum\_{i=1}^{\\mathrm{min}(N, M)} C\_{B, i} \\cdot B\_i + C\_{W, i} \\cdot W\_i\\,.$$ However, Chef accidentally spilled some sauce on the board while cooking, so the colors of some cells cannot be determined. Now he wants to repaint each of these cells using black or white paint. What is the maximum achievable cost of the resulting board? Note that he may paint different cells using different colors. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains a string with length $M$ describing the $i$-th row of the board — the character '0' stands for a white cell, '1' stands for a black cell and '?' stands for a cell with unknown color. - The following line contains $K=\\mathrm{min}(N, M)$ space-separated integers $C\_{W, 1}, C\_{W, 2}, \\dots, C\_{W, K}$. - The last line contains $K=\\mathrm{min}(N, M)$ space-separated integers $C\_{B, 1}, C\_{B, 2}, \\dots, C\_{B, K}$. ### Output For each test case, print a single line containing one integer — the maximum possible cost. ### Constraints - $1 \\le T \\le 5$ - $1 \\le N \\cdot M \\le 500$ - each string contains only characters '0', '1' and '?' - $0 \\le C\_{W, i} \\le 10^8$ for each valid $i$ - $0 \\le C\_{B, i} \\le 10^8$ for each valid $i$ ### Subtasks \*\*Subtask #1 (5 points):\*\* $1 \\le N \\cdot M \\le 10$ \*\*Subtask #2 (15 points):\*\* $1 \\le N \\cdot M \\le 40$ \*\*Subtask #3 (80 points):\*\* original constraints ### Example Input ``` 1 3 3 10? 01? ??? 1 1 1 2 2 2 ``` ### Example Output ``` 18 ``` ### Explanation \*\*Example case 1:\*\* Replacing each '?' by '1' gives the optimal answer.
