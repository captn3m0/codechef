---
category_name: easy
problem_code: RKS
problem_name: Rooks
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
problem_author: watcher
problem_tester: null
date_added: 21-01-2019
tags:
    - ad
    - ltime68
    - watcher
editorial_url: 'https://discuss.codechef.com/problems/RKS'
time:
    view_start_date: 1548522002
    submit_start_date: 1548522002
    visible_start_date: 1548522002
    end_date: 1735669800
    current: 1559472958
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME68/mandarin/RKS.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME68/bengali/RKS.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME68/hindi/RKS.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME68/russian/RKS.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME68/vietnamese/RKS.pdf) as well. Arya has a chessboard with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$); a square in row $r$ and column $c$ is denoted by $(r, c)$. Arya has already placed $K$ rooks on the chessboard in such a way that no two rooks attack each other. Note that two rooks attack each other if they are in the same row or in the same column and there is no rook between them. She is busy learning how to tame a dragon right now, so she asked you to place as many other rooks as possible on the chessboard in such a way that afterwards, no two rooks on the chessboard attack each other. Help Arya and choose the positions of these rooks. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - Each of the next $K$ lines contains two space-separated integers $r$ and $c$ denoting that Arya placed a rook on the square $(r, c)$. ### Output For each test case: - Let's assume that you placed $P$ rooks on squares $(r\_1, c\_1), (r\_2, c\_2), \\ldots, (r\_P, c\_P)$. - You should print a single line containing $2P+1$ space-separated integers $P, r\_1, c\_1, \\ldots, r\_P, c\_P$. - $P$ must be maximum possible. - If there are multiple possible answers, the sequence $r\_1, c\_1, \\ldots, r\_P, c\_P$ should be lexicographically smallest. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 10^6$ - $0 \\le K \\le N$ - $1 \\le r\_i, c\_i \\le N$ for each valid $i$ - no two initially placed rooks attack each other - the positions of all initially placed rooks are pairwise distinct - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (10 points):\*\* - $T = 10$ - $N \\le 8$ \*\*Subtask #2 (20 points):\*\* - $T = 10$ - $N \\le 1,000$ \*\*Subtask #3 (70 points):\*\* original constraints ### Example Input ``` 2 4 2 1 4 2 2 4 0 ``` ### Example Output ``` 2 3 1 4 3 4 1 1 2 2 3 3 4 4 ```
