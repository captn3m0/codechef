---
category_name: medium
problem_code: PPAP
problem_name: Probability
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
problem_author: nots0fast
problem_tester: null
date_added: 21-11-2018
tags:
    - dynamic
    - ltime66
    - matrix
    - nots0fast
    - number
editorial_url: 'https://discuss.codechef.com/problems/PPAP'
time:
    view_start_date: 1543078801
    submit_start_date: 1543078801
    visible_start_date: 1543078801
    end_date: 1735669800
    current: 1559472979
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME66/mandarin/PPAP.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME66/bengali/PPAP.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME66/hindi/PPAP.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME66/russian/PPAP.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME66/vietnamese/PPAP.pdf) as well. ShareChatland is a grid with $N$ rows (numbered $0$ through $N-1$) and $M$ columns (numbered $0$ through $M-1$). There is a prince and a princess in this land; initially, the prince is in cell $(0, 0)$ and the princess is in cell $(N-1, M-1)$. The prince and princess want to meet. The prince has a \*visibility radius\* $R\_1$. In one step, he can move to any cell such that the Manhattan distance between this cell and his current cell is $\\le R\_1$ (staying in the same cell is also possible). The princess has a visibility radius $R\_2$ and moves in a similar way. There are also $K$ evil minions in the grid. A minion is initially located at $(x\_1, y\_1)$ and moves to $(x\_2, y\_2)$; it is guaranteed that these cells are either in the same row or in the same column, i.e. $x\_1 = x\_2$ or $y\_1 = y\_2$. In one step, a minion moves to the adjacent cell that's closest to its target cell. When it reaches $(x\_2, y\_2)$, it starts moving to $(x\_1, y\_1)$, then back to $(x\_2, y\_2)$ and so on. The prince and princess can see minions, but they cannot see each other. Therefore, in each step, the prince and princess both uniformly randomly choose cells within their visibility radii that are not occupied by minions after this step and move to these cells. Simultaneously, the minions make their moves. (That means it is allowed for the prince or princess and a minion to swap places in one step.) If the prince or princess does not have any cell to move to, then he or she dies. Find the probability that the prince and princess meet (are located in the same cell) after exactly $t$ steps. This probability can be expressed as a fraction $P/Q$, where $P$ and $Q$ are coprime integers; you should compute $P \\cdot Q^{-1}$ modulo $10^9+7$, where $Q^{-1}$ is the multiplicative inverse of $Q$ modulo $10^9+7$ (it can be proven that this number exists and is unique). ### Input - The first line of the input contains six space-separated integers $N$, $M$, $R\_1$, $R\_2$, $K$ and $t$. - Each of the following $K$ lines contains four space-separated integers $x\_1$, $y\_1$, $x\_2$ and $y\_2$ describing a minion. ### Output Print a single line containing one integer — the required probability as $P \\cdot Q^{-1}$ modulo $10^9+7$. ### Constraints - $1 \\le N \\cdot M \\le 100$ - $1 \\le R\_1, R\_2 \\le N+M$ - $0 \\le K \\le 10$ - $1 \\le t \\le 10^9$ - $0 \\le x\_1, x\_2 \\le N-1$ - $0 \\le y\_1, y\_2 \\le M-1$ - for each minion, either $x\_1 = x\_2$ or $y\_1 = y\_2$ - $|x\_1-x\_2|+|y\_1-y\_2| \\le 4$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $K = 0$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 2 1 1 1 1 1 0 1 1 ``` ### Example Output ``` 333333336 ``` ### Explanation There is one minion, initially in cell $(1, 0)$. This minion is moving back and forth between cells $(1, 0)$ and $(1, 1)$. That is, after $1$ step, its position is $(1, 1)$, after $2$ steps, it is $(1, 0)$ and so on. We are interested in the situation after $1$ step. Then, the prince can be at $(0, 0)$, $(1, 0)$ or $(0, 1)$, and the princess can be at $(0, 1)$ or $(1, 0)$. Note that she cannot choose to stay at $(1, 1)$, since the minion is there at that time. The probability of them meeting is $1/3$, which is $333333336$ modulo $10^9+7$.
