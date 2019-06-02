---
category_name: medium
problem_code: ADAROKS
problem_name: 'Ada Rooks'
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
date_added: 15-01-2019
tags:
    - alei
    - bitmasking
    - data
    - intervals
    - sets
editorial_url: 'https://discuss.codechef.com/problems/ADAROKS'
time:
    view_start_date: 1548009002
    submit_start_date: 1548009002
    visible_start_date: 1548009002
    end_date: 1735669800
    current: 1559472966
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK102/hindi/ADAROKS.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK102/mandarin/ADAROKS.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK102/russian/ADAROKS.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK102/vietnamese/ADAROKS.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK102/bengali/ADAROKS.pdf) as well. After successfully defending her title of World Chess Champion, Ada noticed that she is lacking in rook endgames. To improve her endgame skills, Ada placed $K$ kings on a chessboard with $N$ rows and $M$ columns, and now she is calculating the minimum number of rooks she must place on the board to satisfy the following conditions: - No king is attacked by a rook. - The kings are isolated, i.e. no king can reach another king without passing through a square attacked by a rook or capturing a rook. Help Ada check her answers. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - The next $N$ lines describe the chessboard. Each of these lines contains a string with length $M$ describing one row, where an empty square and a square containing a king are denoted by '.' and 'K' respectively. ### Output For each test case, print a single line containing one integer ― the minimum required number of rooks, or $-1$ if it is impossible to place rooks in a way that satisfies all conditions. ### Constraints - $1 \\le T \\le 1,024$ - $1 \\le N, M \\le 1,024$ - each string contains only characters '.' and 'K' - the sum of $N \\cdot M$ over all test cases does not exceed $1,024$ ### Example Input ``` 1 8 8 ........ ........ ..K..... ......K. ........ ........ .K..K... ........ ``` ### Example Output ``` 1 ``` ### Explanation \*\*Example case 1:\*\* One possible position for the only necessary rook is depicted in the following image. !\[ \](https://codechef\_shared.s3.amazonaws.com/download/Images/CK102TST/ADAROKS/ADAROKS.png)
