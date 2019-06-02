---
category_name: easy
problem_code: RANDGAME
problem_name: 'Random Game'
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
problem_author: mathecodician
problem_tester: null
date_added: 14-04-2019
tags:
    - bruteforce
    - cook
    - cook105
    - easy
    - game
    - mathecodician
editorial_url: 'https://discuss.codechef.com/problems/RANDGAME'
time:
    view_start_date: 1555871402
    submit_start_date: 1555871402
    visible_start_date: 1555871402
    end_date: 1735669800
    current: 1559472957
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK105/hindi/RANDGAME.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK105/mandarin/RANDGAME.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK105/russian/RANDGAME.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK105/vietnamese/RANDGAME.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK105/bengali/RANDGAME.pdf) as well. \*\*This is an interactive problem.\*\* Rick and Morty were on an adventure when they somehow broke their portal gun. While they had to wait for help from another dimension, they decided to play a random game with the following rules: - Initially, they are given a number $N$ by Birdman. - The players (Rick and Morty) alternate turns, starting with Rick. - In each turn, if $N$ is even, the current player must divide $N$ by $2$. Otherwise, the current player must either increase or decrease $N$ by $1$. - If $N$ becomes $0$ afterwards, the current player (the player who made $N$ equal to $0$) wins the game. You are playing the game for Rick. First, you must decide if it is possible to win the game for a given starting value of $N$ if both players play optimally. If it is possible, you must also play and win the game. ### Interaction - First, you should read a line containing a single integer ― the number of test cases $T$. The description of interaction for $T$ test cases follows. - For each test case, first, you should read a line containing a single integer ― the initial value of $N$. - Then, you should print a line containing the string `"Win"` if you can win the game or `"Lose"` if you cannot win. - If you printed `"Lose"`, you should read a line containing a single string. If this string is `"WA"`, you could have actually won, so you should terminate your program immediately. Otherwise, this string is `"GG"` and you should continue solving the remaining test cases. - If you printed `"Win"`, you should continue by playing the game. When it is your turn: - You should print a line containing a single string describing your move — `"/2"` if $N$ is even or one of the strings `"+1"` or `"-1"` if $N$ is odd. - Then, you should read a line containing a single string. - If $N$ became $0$ and you won the game, this string is `"GG"` and you should continue solving the remaining test cases. - If the move you made was invalid (for example, you printed an invalid line), this string is `"WA"` and you should terminate your program immediately. - Otherwise, this string is `"+1"`, `"-1"` or `"/2"` and describes Morty's move in the following turn. If $N$ becomes $0$ after this move, you lost the game and you should also terminate your program immediately. Whenever you lose a game, make an invalid move or incorrectly decide that you could not have won some game, your submission is incorrect. If you terminate your program immediately afterwards, you will receive the Wrong Answer verdict; otherwise, you may receive any verdict. It is guaranteed that the grader plays optimally and never makes an invalid move. Don't forget to flush the output after printing each line! ### Constraints - $1 \\le T \\le 10,000$ - $1 \\le N \\le 10^{18}$ ### Example ``` Grader You 3 1 Win -1 GG 6 Lose GG 7 Win +1 /2 /2 /2 -1 GG ```
