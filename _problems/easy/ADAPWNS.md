---
category_name: easy
problem_code: ADAPWNS
problem_name: 'Ada Pawns'
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
problem_author: alei
problem_tester: null
date_added: 16-10-2018
tags:
    - alei
    - game
    - grundy
    - observations
    - sprague
editorial_url: 'https://discuss.codechef.com/problems/ADAPWNS'
time:
    view_start_date: 1548009002
    submit_start_date: 1548009002
    visible_start_date: 1548009002
    end_date: 1735669800
    current: 1559472934
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK102/hindi/ADAPWNS.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK102/mandarin/ADAPWNS.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK102/russian/ADAPWNS.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK102/vietnamese/ADAPWNS.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK102/bengali/ADAPWNS.pdf) as well. Ada is playing pawn chess with Suzumo. Pawn chess is played on a long board with $N$ squares in one row. Initially, some of the squares contain pawns. Note that the colours of the squares and pawns do not matter in this game, but otherwise, the standard chess rules apply: - no two pawns can occupy the same square at the same time - a pawn cannot jump over another pawn (they are no knights!), i.e. if there is a pawn at square $i$, then it can only be moved to square $i-2$ if squares $i-1$ and $i-2$ are empty - pawns cannot move outside of the board (outs are forbidden) The players alternate turns; as usual, Ada plays first. In each turn, the current player must choose a pawn and move it either one or two squares to the left of its current position. The player that cannot make a move loses. Can Ada always beat Suzumo? Remember that Ada is a chess grandmaster, so she always plays optimally. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single string $S$ with length $N$ describing the initial board from left to right. An empty square and a square containing a pawn are denoted by the characters '.' and 'P' respectively. ### Output For each test case, print a single line containing the string `"Yes"` if Ada wins the game or `"No"` otherwise (without quotes). ### Constraints - $1 \\le T \\le 500$ - $2 \\le N \\le 128$ - $S$ contains only characters '.' and 'P' ### Example Input ``` 1 ..P.P ``` ### Example Output ``` Yes ``` ### Explanation \*\*Example case 1:\*\* Ada can move the first pawn two squares to the left; the board after this move looks like ``` P...P ``` and now, Suzumo can only move the second pawn. If he moves it one square to the left, Ada will move it two squares to the left on her next move, and if he moves it two squares to the left, Ada will move it one square to the left, so the board after Ada's next move will look like ``` PP... ``` and Suzumo cannot make any move here.
