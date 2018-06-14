---
category_name: easy
problem_code: BINSHFFL
problem_name: 'Binary Shuffle'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sanroylozan
problem_tester: mgch
date_added: 20-05-2018
tags:
    - binary
    - easy
    - floyd
    - june18
    - likecs
    - sanroylozan
    - sanroylozan
time:
    view_start_date: 1528709405
    submit_start_date: 1528709405
    visible_start_date: 1528709405
    end_date: 1735669800
    current: 1528985556
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JUNE18/mandarin/BINSHFFL.pdf), [Russian](http://www.codechef.com/download/translated/JUNE18/russian/BINSHFFL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE18/vietnamese/BINSHFFL.pdf) as well.

Chef has two integers $A$ and $B$. He can perform the following operation on $A$ an arbitrary number of times (including zero): - write $A$ as a binary number with an arbitrary number of leading zeroes (possibly without any) - shuffle the binary digits of $A$ in an arbitrary way, obtaining a number $s$ - replace $A$ by $s+1$ Chef is wondering about the minimum number of operations he has to perform on $A$ in order to obtain $B$. Compute this number or determine that it is impossible. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $A$ and $B$. ### Output For each test case, print a single line containing one integer — the minimum number of operations or $-1$ if it is impossible to obtain $B$ from $A$. ### Constraints - $1 \\le T \\le 10^5$ - $0 \\le A, B \\le 10^{18}$ ### Subtasks \*\*Subtask #1 (20 points):\*\* $A, B \\le 2^7$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 2 2 4 1 5 ``` ### Example Output ``` 2 1 ``` ### Explanation \*\*Example case 1:\*\* One optimal solution is to not shuffle anything, so Chef just adds $1$ twice. \*\*Example case 2:\*\* We can obtain $5$ from $1$ in one operation.
