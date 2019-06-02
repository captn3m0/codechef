---
category_name: medium
problem_code: DOTIT
problem_name: 'Dot It'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: dolabmoon
problem_tester: null
date_added: 20-09-2018
tags:
    - cook98
    - dolabmoon
    - fft
    - medium
    - sqrt
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/DOTIT'
time:
    view_start_date: 1537727402
    submit_start_date: 1537727402
    visible_start_date: 1537727402
    end_date: 1735669800
    current: 1559472971
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Bengali\](http://www.codechef.com/download/translated/COOK98/bengali/DOTIT.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/COOK98/mandarin/DOTIT.pdf) , \[Russian\](http://www.codechef.com/download/translated/COOK98/russian/DOTIT.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/COOK98/vietnamese/DOTIT.pdf) as well. There are two sequences $A\_1, A\_2, \\dots, A\_N$ and $B\_1, B\_2, \\dots, B\_N$. Answer $Q$ queries on these sequences. In each query, you should calculate the dot product of subsequences $A\_x, A\_{x+1}, \\dots, A\_{x+l-1}$ and $B\_y, B\_{y+1}, \\dots, B\_{y+l-1}$, i.e. the value of the expression $$\\sum\_{k=0}^{l-1} A\_{x+k} B\_{y+k} \\,.$$ ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. - The third line contains $N$ space-separated integers $B\_1, B\_2, \\dots, B\_N$. - Each of the following $Q$ lines contains three space-separated integers $x$, $y$ and $l$ describing one query. ### Output For each query, print a single line containing one integer — the answer to the query (the dot product). ### Constraints - $1 \\le T \\le 30,000$ - $1 \\le N, Q \\le 10^5$ - $1 \\le A\_i, B\_i \\le 10^4$ for each valid $i$ - the sum of $N$ for all test cases does not exceed $10^5$ - the sum of $Q$ for all test cases does not exceed $10^5$ ### Example Input ``` 1 5 2 4 6 5 2 7 3 2 4 6 3 2 4 2 1 1 1 ``` ### Example Output ``` 51 12 ```
