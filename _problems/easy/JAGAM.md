---
category_name: easy
problem_code: JAGAM
problem_name: 'Mix Mix Game'
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
problem_author: allllekssssa
problem_tester: null
date_added: 24-08-2018
tags:
    - ad
    - allllekssssa
    - game
    - ltime63
editorial_url: 'https://discuss.codechef.com/problems/JAGAM'
time:
    view_start_date: 1535216402
    submit_start_date: 1535216402
    visible_start_date: 1535216402
    end_date: 1735669800
    current: 1559472949
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME63/mandarin/JAGAM.pdf), [Russian](http://www.codechef.com/download/translated/LTIME63/russian/JAGAM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME63/vietnamese/JAGAM.pdf) as well.

Vanja and Miksi really like games. After playing one game for a long time, they decided to invent another game! In this game, they have a sequence $A\_1, A\_2, \\dots, A\_N$ and two numbers $Z\_1$ and $Z\_2$. The rules of the game are as follows: - The players take turns alternately, starting with Vanja. - There is an integer $S$; at the beginning, $S = 0$. - In each turn, the current player must choose an arbitrary element of $A$ and either add that number to $S$ or subtract it from $S$. Each element can be selected multiple times. - Afterwards, if $S = Z\_1$ or $S = Z\_2$, the current player (the player who made $S$ equal to $Z\_1$ or $Z\_2$) is the winner of the game. - If the game lasts for $10^{10}$ turns, Vanja and Miksi decide to declare it a tie. Can you help the boys determine the winner of the game? Please note that the game can end in a tie (if nobody can make $S = Z\_1$ or $S = Z\_2$ in the first $10^{10}$ moves). Both players play optimally, i.e. if there is a move which guarantees the current player's victory regardless of the other player's moves, the current player will make such a move. If the current player cannot win and there is a move which guarantees that the game will end in a tie, the current player will make such a move. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $Z\_1$ and $Z\_2$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output - For each test case, print a single line containing one integer — the final result of the game: - $1$ if Vanja (the first player) has a winning strategy - $2$ if Miksi (the second player) has a winning strategy - $0$ if the game ends in a tie ### Constraints - $1 \\le T \\le 50$ - $1 \\le N \\le 50$ - $|Z\_1|, |Z\_2| \\le 10^9$ - $|A\_i| \\le 10^9$ for each valid $i$ ### Subtasks \*\*Subtask #1 (25 points):\*\* $N = 2$ \*\*Subtask #2 (75 points):\*\* original constraints ### Example Input ``` 3 2 6 4 -4 10 1 1 -1 2 2 0 7 3 4 ``` ### Example Output ``` 1 0 2 ``` ### Explanation \*\*Example case 1:\*\* The first player can choose the value $A\_1 = -4$, subtract it from $S = 0$ and obtain $S = - (-4) = 4 = Z\_2$. The winner is the first player. \*\*Example case 2:\*\* It can be proven that neither player is able to reach $S = Z\_1$ or $S = Z\_2$. The result is a tie.
