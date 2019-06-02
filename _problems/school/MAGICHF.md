---
category_name: school
problem_code: MAGICHF
problem_name: 'Magician versus Chef'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: shivam_g1470
problem_tester: null
date_added: 12-08-2018
tags:
    - basic
    - conditionals
    - easy
    - looping
    - sept18
    - shivam_g1470
editorial_url: 'https://discuss.codechef.com/problems/MAGICHF'
time:
    view_start_date: 1537176602
    submit_start_date: 1537176602
    visible_start_date: 1537176602
    end_date: 1735669800
    current: 1559472927
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/SEPT18/hindi/MAGICHF.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/SEPT18/bengali/MAGICHF.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/SEPT18/mandarin/MAGICHF.pdf) , \[Russian\](http://www.codechef.com/download/translated/SEPT18/russian/MAGICHF.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/SEPT18/vietnamese/MAGICHF.pdf) as well. When Chef was visiting a fair in Byteland, he met a magician. The magician had $N$ boxes (numbered $1$ through $N$) and a gold coin. He challenged Chef to play a game with him; if Chef won the game, he could have the coin, but if he lost, the magician would kidnap Chef. At the beginning of the game, the magician places the gold coin into the $X$-th box. Then, he performs $S$ swaps. To win, Chef needs to correctly identify the position of the coin after all swaps. In each swap, the magician chooses two boxes $A$ and $B$, moves the contents of box $A$ (before the swap) to box $B$ and the contents of box $B$ (before the swap) to box $A$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $X$ and $S$. - $S$ lines follow. Each of these lines contains two space-separated integers $A$ and $B$ denoting a pair of swapped boxes. ### Output For each test case, print a single line containing one integer — the number of the box containing the gold coin after all swaps are performed. ### Constraints - $1 \\le T \\le 100$ - $2 \\le N \\le 10^5$ - $1 \\le S \\le 10^4$ - $1 \\le X, A, B \\le N$ - $A \\neq B$ - the sum of $S$ for all test cases does not exceed $2\*10^5$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 1 5 2 4 4 2 3 4 3 2 1 2 ``` ### Example Output ``` 1 ``` ### Explanation \*\*Example case 1:\*\* - after the first swap, the coin is in box $4$ - after the second swap, the coin is in box $3$ - after the third swap, the coin is in box $2$ - after the fourth swap, the coin is in box $1$
