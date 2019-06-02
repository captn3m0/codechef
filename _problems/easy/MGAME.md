---
category_name: easy
problem_code: MGAME
problem_name: 'Chef and Modulo Game'
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
problem_author: l_returns
problem_tester: null
date_added: 1-01-2019
tags:
    - combinatorics
    - easy
    - jan19
    - l_returns
    - modulo
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/MGAME'
time:
    view_start_date: 1547458202
    submit_start_date: 1547458202
    visible_start_date: 1547458202
    end_date: 1735669800
    current: 1559472950
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/JAN19/hindi/MGAME.pdf), \[Bengali\](http://www.codechef.com/download/translated/JAN19/bengali/MGAME.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/JAN19/mandarin/MGAME.pdf), \[Russian\](http://www.codechef.com/download/translated/JAN19/russian/MGAME.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/JAN19/vietnamese/MGAME.pdf) as well. Chef is playing a game with two of his friends. In this game, each player chooses an integer between $1$ and $P$ inclusive. Let's denote the integers chosen by Chef, friend 1 and friend 2 by $i$, $j$ and $k$ respectively; then, Chef's score is $$(((N\\,\\mathrm{mod}\\,i)\\,\\mathrm{mod}\\,j)\\,\\mathrm{mod}\\,k)\\,\\mathrm{mod}\\,N\\,.$$ Chef wants to obtain the maximum possible score. Let's denote this maximum score by $M$. Find the number of ways to choose the triple $(i, j, k)$ so that Chef's score is equal to $M$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $P$. ### Output For each test case, print a single line containing one integer — the number of ways to obtain the maximum score. ### Constraints - $1 \\le T \\le 10^6$ - $1 \\le N \\le P \\le 10^6$ ### Subtasks \*\*Subtask #1 (10 points):\*\* - $1 \\le T \\le 100$ - $1 \\le N \\le P \\le 100$ \*\*Subtask #2 (90 points):\*\* original constraints ### Example Input ``` 2 4 4 3 4 ``` ### Example Output ``` 9 13 ``` ### Explanation \*\*Example case 1:\*\* Chef's maximum possible score is $M = 1$. All possible values of $(i, j, k)$ such that the score is $1$ are $(3, 2, 2)$, $(3, 2, 3)$, $(3, 2, 4)$, $(3, 3, 2)$, $(3, 3, 3)$, $(3, 3, 4)$, $(3, 4, 2)$, $(3, 4, 3)$, $(3, 4, 4)$.
