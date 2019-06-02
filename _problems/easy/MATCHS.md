---
category_name: easy
problem_code: MATCHS
problem_name: Matches
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
problem_author: mishaprigara
problem_tester: null
date_added: 18-04-2019
tags:
    - mishaprigara
time:
    view_start_date: 1557739980
    submit_start_date: 1557739980
    visible_start_date: 1557739980
    end_date: 1735669800
    current: 1559472950
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAY19/hindi/MATCHS.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAY19/bengali/MATCHS.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAY19/mandarin/MATCHS.pdf), \[Russian\](http://www.codechef.com/download/translated/MAY19/russian/MATCHS.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAY19/vietnamese/MATCHS.pdf) as well. Ari and Rich are playing a pretty confusing game. Here are the rules of the game: - The game is played with two piles of matches. Initially, the first pile contains $N$ matches and the second one contains $M$ matches. - The players alternate turns; Ari plays first. - On each turn, the current player must choose one pile and remove a positive number of matches (not exceeding the current number of matches on that pile) from it. - It is only allowed to remove $X$ matches from a pile if the number of matches in the \*\*other\*\* pile divides $X$. - The player that takes the last match from any pile wins. It can be proved that as long as both piles are non-empty, there is always at least one valid move, so the game must end by emptying some pile. Both Ari and Rich play optimally. Determine the winner of the game. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $M$. ### Output For each test case, print a single line containing the string `"Ari"` (without quotes) if Ari wins or `"Rich"` (without quotes) if Rich wins. ### Constraints - $1 \\le T \\le 10^5$ - $1 \\le N, M \\le 10^{18}$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le N, M \\le 1,000$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 5 1 1 2 2 1 3 155 47 6 4 ``` ### Example Output ``` Ari Ari Ari Ari Rich ``` ### Explanation One possible sequence of moves for the fourth test case is: $(155, 47) \\rightarrow (61, 47) \\rightarrow (14, 47) \\rightarrow (14, 19) \\rightarrow (14, 5) \\rightarrow (4, 5) \\rightarrow (4, 1) \\rightarrow (0, 1)$
