---
category_name: easy
problem_code: DIFNEIGH
problem_name: 'Different Neighbours'
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
problem_author: eartemov
problem_tester: null
date_added: 31-05-2016
tags:
    - cases
    - constructive
    - eartemov
    - easy
    - jan19
    - pigeonhole
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/DIFNEIGH'
time:
    view_start_date: 1547458202
    submit_start_date: 1547458202
    visible_start_date: 1547458202
    end_date: 1735669800
    current: 1559472942
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/JAN19/hindi/DIFNEIGH.pdf), \[Bengali\](http://www.codechef.com/download/translated/JAN19/bengali/DIFNEIGH.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/JAN19/mandarin/DIFNEIGH.pdf), \[Russian\](http://www.codechef.com/download/translated/JAN19/russian/DIFNEIGH.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/JAN19/vietnamese/DIFNEIGH.pdf) as well. You are given an empty grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). You should fill this grid with integers in a way that satisfies the following rules: - For any three cells $c\_1$, $c\_2$ and $c\_3$ such that $c\_1$ shares a side with $c\_2$ and another side with $c\_3$, the integers written in cells $c\_2$ and $c\_3$ are distinct. - Let's denote the number of different integers in the grid by $K$; then, each of these integers should lie between $1$ and $K$ inclusive. - $K$ should be minimum possible. Find the minimum value of $K$ and a resulting (filled) grid. If there are multiple solutions, you may find any one. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $M$. ### Output - For each test case, print $N+1$ lines. - The first line should contain a single integer — the minimum $K$. - Each of the following $N$ lines should contain $M$ space-separated integers between $1$ and $K$ inclusive. For each valid $i, j$, the $j$-th integer on the $i$-th line should denote the number in the $i$-th row and $j$-th column of the grid. ### Constraints - $1 \\le T \\le 500$ - $1 \\le N, M \\le 50$ - the sum of $N \\cdot M$ over all test cases does not exceed $7 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 2 1 1 2 3 ``` ### Example Output ``` 1 1 3 1 1 2 2 3 3 ``` ### Explanation \*\*Example case 1:\*\* There is only one cell in the grid, so the only valid way to fill it is to write $1$ in this cell. Note that we cannot use any other integer than $1$. \*\*Example case 2:\*\* For example, the integers written in the neighbours of cell $(2, 2)$ are $1$, $2$ and $3$; all these numbers are pairwise distinct and the integer written inside the cell $(2, 2)$ does not matter. Note that there are pairs of neighbouring cells with the same integer written in them, but this is OK.
