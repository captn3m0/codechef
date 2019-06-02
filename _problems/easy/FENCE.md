---
category_name: easy
problem_code: FENCE
problem_name: Fencing
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: ashishgup
problem_tester: null
date_added: 27-03-2019
tags:
    - april19
    - ashishgup
    - data
    - hash
    - map
    - simple
editorial_url: 'https://discuss.codechef.com/problems/FENCE'
time:
    view_start_date: 1555320602
    submit_start_date: 1555320602
    visible_start_date: 1555320602
    end_date: 1735669800
    current: 1559472944
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/APRIL19/hindi/FENCE.pdf), \[Bengali\](http://www.codechef.com/download/translated/APRIL19/bengali/FENCE.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/APRIL19/mandarin/FENCE.pdf), \[Russian\](http://www.codechef.com/download/translated/APRIL19/russian/FENCE.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/APRIL19/vietnamese/FENCE.pdf) as well. There is a field with plants — a grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$); out of its $NM$ cells, $K$ cells contain plants, while the rest contain weeds. Two cells are adjacent if they have a common side. You want to build fences in the field in such a way that the following conditions hold for each cell that contains a plant: - it is possible to move from this cell to each adjacent cell containing a plant without crossing any fences - it is impossible to move from this cell to any cell containing weeds or to leave the grid without crossing any fences The fences can only be built between cells or on the boundary of the grid, i.e. on the sides of cells. The total length of the built fences is the number of pairs of side-adjacent cells such that there is a fence built on their common side plus the number of sides of cells on the boundary of the grid which have fences built on them. Find the minimum required total length of fences that need to be built. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $M$ and $K$. - $K$ lines follow. Each of these lines contains two space-separated integers $r$ and $c$ denoting that the cell in row $r$ and column $c$ contains a plant. ### Output For each test case, print a single line containing one integer — the minimum required length of fences. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N, M \\le 10^9$ - $1 \\le K \\le 10^5$ - $1 \\le r \\le N$ - $1 \\le c \\le M$ - the cells containing plants are pairwise distinct ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le N, M \\le 1,000$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 4 4 9 1 4 2 1 2 2 2 3 3 1 3 3 4 1 4 2 4 3 4 4 1 1 1 ``` ### Example Output ``` 20 4 ``` ### Explanation \*\*Example case 1:\*\* The field looks like this ('x' denotes a cell containing a plant, '.' denotes a cell containing weeds): ``` ...x xxx. x.x. xxx. ``` An optimal solution is to build fences around the topmost plant (with length $4$), around the remaining eight plants (with length $12$) and around the hole between them (with length $4$). The total length is $4+12+4 = 20$.
