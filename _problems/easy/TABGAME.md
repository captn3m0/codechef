---
category_name: easy
problem_code: TABGAME
problem_name: 'Table Game'
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
problem_author: melfice
problem_tester: null
date_added: 28-08-2018
tags:
    - easy
    - game
    - melfice
    - observations
    - sept18
    - string
editorial_url: 'https://discuss.codechef.com/problems/TABGAME'
time:
    view_start_date: 1537176602
    submit_start_date: 1537176602
    visible_start_date: 1537176602
    end_date: 1735669800
    current: 1559472962
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/SEPT18/hindi/TABGAME.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/SEPT18/bengali/TABGAME.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/SEPT18/mandarin/TABGAME.pdf) , \[Russian\](http://www.codechef.com/download/translated/SEPT18/russian/TABGAME.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/SEPT18/vietnamese/TABGAME.pdf) as well. Alice and Bob are playing a game with a $(N+1)\\times (M+1)$ table. Let's denote the cell in the $i$-th row and $j$-th column ($0 \\le i \\le N$, $0 \\le j \\le M$) by $(i, j)$. The rules of the game are: - At the beginning, a stone is placed in some cell of the table. - The players alternate turns, Alice goes first. - In each turn, the current player must move the stone from its current cell (let's denote it by $(x, y)$) to the cell $(x-1, y)$ or to the cell $(x, y-1)$. - As soon as the stone is placed in a cell $(x, y)$ with $x=0$ or $y=0$, the game ends. - The winner of the game is determined by the cell the stone ended up in and the player who moved it there; you are given this information for all possible terminal cells on the input. (Note that the stone never reaches the cell $(0, 0)$.) You should answer $Q$ queries. In each query, you are given the initial position $(x, y)$ of the stone, and you should determine the winner of the game. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single string with length $M$. For each $i$ ($1 \\le i \\le M$), the $i$-th digit of this string is '1' if the player that moves the stone to the cell $(0, i)$ loses the game or '0' if this player wins. - The second line contains a single string with length $N$. For each $i$ ($1 \\le i \\le N$), the $i$-th digit of this string is '1' if the player that moves the stone to the cell $(i, 0)$ loses the game or '0' if this player wins. - The third line contains a single integer $Q$ denoting the number of queries. - Each of the following $Q$ lines contains two space-separated integers $x$ and $y$ describing one query. ### Output For each test case, print a single line containing a string with length $Q$. For each valid $i$, the $i$-th digit should be '1' if Alice wins the game for query $i$ or '0' if Bob wins that game. ### Constraints - $1 \\le N, M, Q \\le 10^5$ - $1 \\le x \\le N$ - $1 \\le y \\le M$ - the sum of $N+M+Q$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (30 points):\*\* the sum of $N+M$ over all test cases does not exceed $10^3$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 1 101 01 6 1 1 1 2 1 3 2 1 2 2 2 3 ``` ### Example Output ``` 110011 ```
