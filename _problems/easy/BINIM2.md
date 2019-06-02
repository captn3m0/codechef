---
category_name: easy
problem_code: BINIM2
problem_name: 'Binary Nim 2'
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
date_added: 31-08-2018
tags:
    - alei
    - cook99
    - game
    - greedy
    - nim
    - simple
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/BINIM2'
time:
    view_start_date: 1540146602
    submit_start_date: 1540146602
    visible_start_date: 1540146602
    end_date: 1735669800
    current: 1559472936
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK99/hindi/BINIM2.pdf), \[Spanish\](http://www.codechef.com/download/translated/COOK99/spanish/BINIM2.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/COOK99/mandarin/BINIM2.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK99/russian/BINIM2.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK99/vietnamese/BINIM2.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK99/bengali/BINIM2.pdf) as well. Tweedle-Dee and Tweedle-Dum are playing a fierce match of binary Nim. This novel game is played with $N$ stacks, each of them containing only $1$-s and $0$-s. Just like in normal Nim, Tweedle-Dee and Tweedle-Dum alternate turns; in their turn, a player must choose one non-empty stack and remove a positive number of elements from the top of this stack. However, Tweedle-Dee may only choose a stack with $0$ at the top (and remove elements from it afterwards), and similarly, Tweedle-Dum may only choose a stack with $1$ at the top. The player that cannot make a move for the first time wins. Ada does not want to wait for the end of the game, so she asked you to determine the winner of the game if you are given the starting player. Remember that Tweedle-Dee and Tweedle-Dum are legendary grandmasters of combinatorial games, so they both always play optimally. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains an integer $N$, followed by a space and a string $S$ denoting the player that starts the game. - Each of the following $N$ lines contains a single binary string $B$ representing a stack; the first character of $B$ corresponds to the top element of the stack and the last character to the bottom element. ### Output For each test case, print a single line containing the string `"Dee"` if Tweedle-Dee wins the match or `"Dum"` if Tweedle-Dum wins. ### Constraints - $1 \\le T \\le 500$ - $1 \\le N \\le 50$ - $1 \\le |B| \\le 50$ - each character in $B$ is either '1' or '0' - $S$ is either `"Dee"` or `"Dum"` ### Example Input ``` 1 2 Dee 010 101 ``` ### Example Output ``` Dee ```
