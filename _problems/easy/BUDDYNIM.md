---
category_name: easy
problem_code: BUDDYNIM
problem_name: 'Buddy NIM'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: bciobanu
problem_tester: null
date_added: 1-11-2018
tags:
    - bciobanu
    - easy
    - game
    - greedy
    - snckpe19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/BUDDYNIM'
time:
    view_start_date: 1541269800
    submit_start_date: 1541269800
    visible_start_date: 1541269800
    end_date: 1735669800
    current: 1559472938
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Russian\](http://www.codechef.com/download/translated/S19PETST/russian/BUDDYNIM.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19PETST/vietnamese/BUDDYNIM.pdf), \[Hindi\](http://www.codechef.com/download/translated/S19PETST/hindi/BUDDYNIM.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S19PETST/mandarin/BUDDYNIM.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19PETST/bengali/BUDDYNIM.pdf) as well. Alice, Bob and Charlie are playing a new game called Buddy NIM. The game is played at two tables; on the first table, there are $N$ heaps containing $A\_1, A\_2, \\ldots, A\_N$ stones and on the second table, there are $M$ heaps containing $B\_1, B\_2, \\ldots, B\_M$ stones respectively. Initially, Alice is playing at the first table and Bob is playing at the second table. The players take their turns in this order: Charlie, Alice, Bob, Charlie, etc. Alice and Bob follow the rules for classical NIM - on Alice's turn, Alice must remove a positive number of stones from one of the piles at her current table and on Bob's turn, Bob must remove a positive number of stones from one of the piles at his current table. Whoever cannot remove any stone from a pile loses. Charlie does not play at any table. Instead, on his turn, he decides if Alice and Bob should keep playing at their respective tables or swap places. Alice and Charlie are buddies and they cooperate, playing in the optimal way that results in Alice's victory (if possible). It is clear that either Alice or Bob wins the game eventually. You must find out who the winner will be. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each testcase contains two space-separated integers $N$ and $M$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. - The third line contains $M$ space-separated integers $B\_1, B\_2, \\ldots, B\_M$. ### Output Print a single line containing the string `"Alice"` if Alice wins or `"Bob"` if Bob wins. ### Constraints - $1 \\le T \\le 10^2$ - $1 \\le N, M \\le 10^2$ - $0 \\le A\_i \\le 10^9$ for each valid $i$ - $0 \\le B\_i \\le 10^9$ for each valid $i$ ### Example Input ``` 3 3 1 1 1 1 3 3 1 1 2 4 7 1 1 1 1 ``` ### Example Output ``` Alice Alice Bob ```
