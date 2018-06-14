---
category_name: school
problem_code: NAICHEF
problem_name: 'Naive Chef'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: adlet_zeineken
problem_tester: mgch
date_added: 21-05-2018
tags:
    - adlet_zeineken
    - adlet_zeineken
    - cakewalk
    - june18
    - likecs
    - probability
time:
    view_start_date: 1528709405
    submit_start_date: 1528709405
    visible_start_date: 1528709405
    end_date: 1735669800
    current: 1528985553
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JUNE18/mandarin/NAICHEF.pdf), [Russian](http://www.codechef.com/download/translated/JUNE18/russian/NAICHEF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE18/vietnamese/NAICHEF.pdf) as well.

Once, after a stressful day, Chef decided to relax and visit a casino near his house to gamble. He feels lucky and he's going to bet almost all of his money. The game Chef is going to play in the casino consists of tossing a die with $N$ faces twice. There is a number written on each face of the die (these numbers are not necessarily distinct). In order to win, Chef must get the number $A$ on the first toss and the number $B$ on the second toss of the die. The excited viewers want to know the probability that Chef will win the game. Can you help them find that number? Assume that Chef gets each face of the die with the same probability on each toss and that tosses are mutually independent. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $A$ and $B$. - The second line contains $N$ space-separated integers $x\_1, x\_2, \\dots, x\_N$ denoting the numbers written on the faces of the die. ### Output For each test case, print a single line containing one real number — the probability that Chef will win. Your answer will be considered correct if its absolute error does not exceed $10^{-6}$. ### Constraints - $1 \\le T \\le 70$ - $1 \\le N \\le 10^4$ - $1 \\le A \\le N$ - $1 \\le B \\le N$ - $1 \\le x\_i \\le N$ for each valid $i$ ### Subtasks \*\*Subtask #1 (20 points):\*\* - $T \\le 10$ - $N \\le 100$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 2 5 1 1 1 1 1 1 1 2 1 1 1 2 ``` ### Example Output ``` 1.0000000000 0.2500000000 ```
