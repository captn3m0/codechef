---
category_name: challenge
problem_code: MATCHIT
problem_name: '(Challenge) Chef and Matching Game'
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
problem_author: whzzt
problem_tester: null
date_added: 1-01-2019
tags:
    - whzzt
time:
    view_start_date: 1547458202
    submit_start_date: 1547458202
    visible_start_date: 1547458202
    end_date: 1735669800
    current: 1559472996
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/JAN19/hindi/MATCHIT.pdf), \[Bengali\](http://www.codechef.com/download/translated/JAN19/bengali/MATCHIT.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/JAN19/mandarin/MATCHIT.pdf), \[Russian\](http://www.codechef.com/download/translated/JAN19/russian/MATCHIT.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/JAN19/vietnamese/MATCHIT.pdf) as well. These days, Chef has been playing a game. The game is played on a grid with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$); let's denote the cell in row $r$ and column $c$ by $(r, c)$. $2M$ cells $(X\_1, Y\_1), (X\_2, Y\_2), \\ldots, (X\_{2M}, Y\_{2M})$ in the grid are marked. Chef wants to add exactly $M$ paths between pairs of distinct marked cells in such a way that no two paths intersect. A path from cell $(X\_i, Y\_i)$ to cell $(X\_j, Y\_j)$ is a sequence of \*\*distinct\*\* cells $(U\_1, V\_1), (U\_2, V\_2), \\ldots, (U\_L, V\_L)$ such that $(X\_i, Y\_i)$ is the first cell and $(X\_j, Y\_j)$ the last cell in this sequence and for each valid $i$, cells $(U\_i, V\_i)$ and $(U\_{i+1}, V\_{i+1})$ share a side. Two paths intersect if there is some cell which is in both paths. However, this seems too easy to Chef, so he added weights to all cells. Let's denote the weight of cell $(r, c)$ by $V\_{r, c}$. You should find $M$ paths as described above such that the sum of weights of all cells in all paths is as large as possible. ### Input - The first line of the input contains two space-separated integers $N$ and $M$. - $2M$ lines follow. For each $i$ ($1 \\le i \\le 2M$), the $i$-th of these lines contains two space-separated integers $X\_i$ and $Y\_i$. - $N$ more lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains $N$ space-separated integers $V\_{i, 1}, V\_{i, 2}, \\ldots, V\_{i, N}$. ### Output Print $M$ lines. Each of these lines should contain an integer $L$, followed by a space and $2L$ space-separated integers $U\_1, V\_1, U\_2, V\_2, \\ldots, U\_L, V\_L$ describing one of your chosen paths. The paths may not intersect and each path must begin and end at distinct marked cells. ### Constraints - $500 \\le N \\le 1,000$ - $500 \\le M \\le 1,000$ - $1 \\le X\_i, Y\_i \\le N$ for each valid $i$ - $|V\_{i, j}| \\le 10^9$ for each valid $i, j$ - $(X\_1, Y\_1), (X\_2, Y\_2), \\ldots, (X\_{2M}, Y\_{2M})$ are pairwise distinct ### Example Input ``` 4 2 1 1 2 2 3 3 4 4 1 -1 -1 -1 1 1 1 1 1 1 1 1 -1 -1 -1 1 ``` ### Example Output ``` 5 1 1 2 1 3 1 3 2 3 3 5 4 4 3 4 2 4 2 3 2 2 ``` ### Scoring The score for each test case (and therefore each test file) is $\\left(S / (10^9 \\cdot N^2) + 1\\right)^6$, where $S$ is the sum of weights of cells in all paths in your solution. The score of a submission is the sum of its scores for all test files. For the example output, the score would be $\\left(10 / (16 \\cdot 10^9) + 1\\right)^6 \\doteq 1$. If your output is invalid, the verdict of your submission will be `Wrong Answer`. ### Test Generation Process There are twenty test cases. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on 20% (4/20) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other sixteen test files. The pseudocode used for generating all tests is given below. Assume that the function `rand(l, r)` generates a uniformly random integer between $l$ and $r$ (both inclusive). ``` N := rand(500, 1000) M := rand(500, 1000) for i in 1..2M: X\[i\] := rand(1, N) Y\[i\] := rand(1, N) while (X\[j\], Y\[j\]) == (X\[i\], Y\[i\]) for some j smaller than i: X\[i\] := rand(1, N) Y\[i\] := rand(1, N) for x in 1..N: for y in 1..N: V\[x\]\[y\] := rand(-1000000000, 1000000000) ```
