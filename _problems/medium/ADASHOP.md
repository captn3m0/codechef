---
category_name: medium
problem_code: ADASHOP
problem_name: 'Ada Bishop'
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
date_added: 18-10-2018
tags:
    - ad
    - alei
    - cases
    - cook99
    - counting
    - easy
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/ADASHOP'
time:
    view_start_date: 1540146602
    submit_start_date: 1540146602
    visible_start_date: 1540146602
    end_date: 1735669800
    current: 1559472966
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK99/hindi/ADASHOP.pdf), \[Spanish\](http://www.codechef.com/download/translated/COOK99/spanish/ADASHOP.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/COOK99/mandarin/ADASHOP.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK99/russian/ADASHOP.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK99/vietnamese/ADASHOP.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK99/bengali/ADASHOP.pdf) as well. Ada has the biggest chessboard in ChefLand. It has $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$), where $M \\ge 2N$. As training for her upcoming world chess championship match, she placed one bishop at row $r$ and column $c$ of her board. The remaining squares of the board are empty. Now, she is calculating the number of squares that can be reached by the bishop in at most $K$ moves. Help Ada verify her answers. Remember that in one move, a [bishop](https://en.wikipedia.org/wiki/Bishop_(chess)) at row $r$ and column $c$ can move to another square at row $r'$ and column $c'$ if and only if either $r+c=r'+c'$ or $r-c=r'-c'$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains five space-separated integers $N$, $M$, $r$, $c$ and $K$. ### Output For each test case, print a single line containing one integer — the number of reachable squares. ### Constraints - $1 \\le T \\le 5 \\cdot 10^5$ - $1 \\le N, K \\le 10^9$ - $2N \\le M \\le 10^9$ - $1 \\le r \\le N$ - $1 \\le c \\le M$ ### Example Input ``` 1 3 7 1 1 2 ``` ### Example Output ``` 7 ``` ### Explanation ![](https://codechef_shared.s3.amazonaws.com/download/CK99TST/ADASHOP/ADASHOP.png )
