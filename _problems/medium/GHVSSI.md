---
category_name: medium
problem_code: GHVSSI
problem_name: 'Ghayeeth vs Siroj'
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
problem_author: deadwing97
problem_tester: null
date_added: 21-09-2018
tags:
    - cook98
    - deadwing97
    - easy
    - game
    - number
    - taran_1407
time:
    view_start_date: 1537727402
    submit_start_date: 1537727402
    visible_start_date: 1537727402
    end_date: 1735669800
    current: 1559472974
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Bengali\](http://www.codechef.com/download/translated/COOK98/bengali/GHVSSI.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/COOK98/vietnamese/GHVSSI.pdf) as well. Ghayeeth is a math teacher. He likes playing games, so he invented a new game which he wants to play against his student Siroj. The rules of the game are as follows: - Initially, Ghayeeth writes the numbers $A\_1, A\_2, \\dots, A\_N$ on a whiteboard and a number $Z=0$ on a piece of paper. - Ghayeeth and Siroj alternate turns; Ghayeeth goes first. - In each turn, the current player must pick a number that is currently written on the whiteboard, add it to $Z$ and erase it from the whiteboard. - After each turn, if there is no pair of positive integers $(a, b)$ such that $Z = a^2 - b^2$, then the last player who made a move loses the game. - Otherwise, if there are no more numbers on the whiteboard, the last player who made a move wins the game. Help Ghayeeth determine the winner of this game. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing the string `"Ghayeeth"` or `"Siroj"` (without quotes) — the name of the winner. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 300$ - $5 \\le A\_i \\le 100,000$ for each valid $i$ ### Example Input ``` 2 3 7 9 11 2 13 15 ``` ### Example Output ``` Ghayeeth Siroj ```
