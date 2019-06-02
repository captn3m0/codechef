---
category_name: easy
problem_code: MARTING1
problem_name: Martingale
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
problem_author: dojiboy9
problem_tester: null
date_added: 25-12-2018
tags:
    - dojiboy9
time:
    view_start_date: 1546074900
    submit_start_date: 1546074900
    visible_start_date: 1546074900
    end_date: 1735669800
    current: 1559472950
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are playing a game called \_Martingale\_. The rules of the game are as follows: ``` 1. At the beginning of the game, you are given $N$ as input. 2. Set $V = N$, and set $X = 1$ 3. Flip a fair coin. 3a. If the coin lands on heads: Increase $V$ by $X$, and then set $X = 1$ 3b. If the coin lands on tails: Decrease $V$ by $X$, and then set $X = 2X$ 4. If $V$ less than or equal to $0$ or $V$ greater than or equal to $2N$ 4a. End the game. 5. Proceed to step 3. ``` ------------ Given the initial value $N$, what is the expected number of turns (coin flips) you will play before ending the game? ###Input: Input consists of a single integer, $N$ (with $1 \\leq N \\leq 1,000,000$), the initial input to the game. ###Output: A single decimal number, containing the expected number of turns you will play this game before it ends. Your output will be accepted if it is within $10^{-6}$ absolute or relative error. ###Sample Input 1: ``` 1 ``` ###Sample Output 1: ``` 1.000000000000 ``` ###Sample Input 2: ``` 3 ``` ###Sample Output 2: ``` 3.9609375 ```
