---
category_name: medium
problem_code: CSUBSQ
problem_name: 'Count Subsequences'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: deadwing97
problem_tester: null
date_added: 14-12-2018
tags:
    - cook101
    - deadwing97
    - divide
    - dynamic
editorial_url: 'https://discuss.codechef.com/problems/CSUBSQ'
time:
    view_start_date: 1545589800
    submit_start_date: 1545589800
    visible_start_date: 1545589800
    end_date: 1735669800
    current: 1559472971
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/CK101TST/hindi/CSUBSQ.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/CK101TST/mandarin/CSUBSQ.pdf), \[Russian\](http://www.codechef.com/download/translated/CK101TST/russian/CSUBSQ.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/CK101TST/vietnamese/CSUBSQ.pdf) and \[Bengali\](http://www.codechef.com/download/translated/CK101TST/bengali/CSUBSQ.pdf) as well. Let's call an integer sequence \*nice\* if the sum of its elements is divisible by a given integer $K$. You are given an integer sequence $A\_1, A\_2, \\ldots, A\_N$. Hasan wanted to find the number of nice subsequences of this sequence. However, this problem is too easy, so Hasan decided to add an extra constraint. For an arbitrary non-empty sequence of indices $i\_1 \\lt i\_2 \\lt \\ldots \\lt i\_L$, let's call a subsequence $A\_{i\_1}, A\_{i\_2}, \\ldots, A\_{i\_L}$ \*very nice\* if it is nice and $i\_L-i\_1 \\ge W$. Help Hasan and find the number of very nice subsequences. Since this number may be very large, compute it modulo $10^9+7$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $K$ and $W$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output For each test case, print a single line containing one integer — the number of very nice subsequences modulo $10^9+7$. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^5$ - $2 \\le K \\le 50$ - $0 \\le W \\le N-1$ - $0 \\le A\_i \\le K-1$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $3 \\cdot 10^5$ ### Example Input ``` 1 6 3 3 1 1 1 1 1 1 ``` ### Example Output ``` 17 ```
