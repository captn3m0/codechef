---
category_name: school
problem_code: KCHESS
problem_name: 'Knight Chess'
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
problem_author: sahil070197
problem_tester: null
date_added: 12-10-2018
tags:
    - sahil070197
time:
    view_start_date: 1540578600
    submit_start_date: 1540578600
    visible_start_date: 1540578600
    end_date: 1735669800
    current: 1559472927
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Abhineet the Chess master of NIT Kurukshetra got bored of 8x8 chess board and invented the new variation of Chess, the one on an infinite chess board. There is only a white king and $N$ black knights. The white king has to avoid checkmate as long as it can. A situation is given. Determine if white king is in checkmate or not. The white king is in checkmate if and only if it is in check and it is not able to move to any of its neighboring positions which is not in check. ###Input: - The first line will contain $T$, number of test cases. Then the test cases follow. - The first line of each test case contains a single integer $N$. - The next N line contains 2 space-separated integers $Xi$ and $Yi$ denoting the position of knights. - The next line contains 2 space-separated integers $A$ and $B$ denoting the position of king ###Output: Print a single line corresponding to each test case — “YES” (without quotes) – if the king is in checkmate and “NO” (without quotes) – if the king is not in checkmate. ###Constraints - $1 \\leq T \\leq 5$ - $1 \\leq N \\leq 10^5$ - $-10^9 \\leq Xi, Yi, A, B \\leq 10^9$ ###Sample Input: 2 6 1 0 0 2 2 5 4 4 5 0 6 2 3 2 4 5 6 3 5 2 8 -8 -8 0 0 ###Sample Output: YES NO ###EXPLANATION: In the first test case, the king is in cannot move to any valid position In second test case, the king can easily make a valid move.
