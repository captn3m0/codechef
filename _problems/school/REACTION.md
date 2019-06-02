---
category_name: school
problem_code: REACTION
problem_name: 'Chain Reaction'
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
    - R
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: solaimanope
problem_tester: null
date_added: 11-05-2019
tags:
    - cook106
    - cookoff
    - solaimanope
editorial_url: 'https://discuss.codechef.com/problems/REACTION'
time:
    view_start_date: 1558290720
    submit_start_date: 1558290720
    visible_start_date: 1558290720
    end_date: 1735669800
    current: 1559472930
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK106/hindi/REACTION.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK106/mandarin/REACTION.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK106/russian/REACTION.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK106/vietnamese/REACTION.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK106/bengali/REACTION.pdf) as well. You are given a grid with $R$ rows (numbered $1$ through $R$) and $C$ columns (numbered $1$ through $C$). A cell in row $r$ and column $c$ is denoted by $(r, c)$. Two cells in the grid are adjacent if they have a common side. For each valid $i$ and $j$, there is a value $a\_{i, j}$ written in cell $a\_{i, j}$. A cell in the grid is \*stable\* if the number of cells in the grid which are adjacent to this cell is strictly greater than the value written in this cell. The whole grid is stable if all cells in the grid are stable. Can you determine whether the grid is stable? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $R$ and $C$. - $R$ lines follow. For each $i$ ($1 \\le i \\le R$), the $i$-th of these lines contains $C$ space-separated integers $a\_{i, 1}, a\_{i, 2}, \\ldots, a\_{i, C}$. ### Output For each test case, print a single line containing the string `"Stable"` if the grid is stable or `"Unstable"` if it is unstable (without quotes). ### Constraints - $1 \\le T \\le 3,000$ - $3 \\le R, C \\le 10$ - $0 \\le a\_{i, j} \\le 4$ for each valid $i, j$ ### Example Input ``` 2 3 3 1 2 1 2 3 2 1 2 1 3 4 0 0 0 0 0 0 0 0 0 0 4 0 ``` ### Example Output ``` Stable Unstable ``` ### Explanation \*\*Example case 1:\*\* Each cell of the grid is stable, so the grid is stable. \*\*Example case 2:\*\* The cell in row $3$ and column $3$ is unstable since the number of cells adjacent to this cell is $3$.
