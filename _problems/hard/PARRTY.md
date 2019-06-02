---
category_name: hard
problem_code: PARRTY
problem_name: Party
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: watcher
problem_tester: null
date_added: 31-12-2018
tags:
    - implementation
    - jan19
    - medium
    - segment
    - taran_1407
    - watcher
editorial_url: 'https://discuss.codechef.com/problems/PARRTY'
time:
    view_start_date: 1547458202
    submit_start_date: 1547458202
    visible_start_date: 1547458202
    end_date: 1735669800
    current: 1559472991
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/JAN19/hindi/PARRTY.pdf), \[Bengali\](http://www.codechef.com/download/translated/JAN19/bengali/PARRTY.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/JAN19/mandarin/PARRTY.pdf), \[Russian\](http://www.codechef.com/download/translated/JAN19/russian/PARRTY.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/JAN19/vietnamese/PARRTY.pdf) as well. There are $N$ employees (numbered $1$ through $N$) working at ShareChat. You are given $M$ pairs of employees that do not get along with each other. Arya, the CEO of ShareChat, wants to throw a party. She is still not sure which employees to invite, but her assistant has given her $Q$ suggestions. Each suggestion consists of $K$ intervals $\[L\_1, R\_1\], \[L\_2, R\_2\], \\ldots, \[L\_K, R\_K\]$; this means that all employees whose numbers lie in the union of these intervals should be invited to the party. Arya is a perfectionist, so she wants all invited employees to get along. You, her second assistant, are the only one she could trust with finding out, for each suggestion, if this condition is satisfied. Complete this task! ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - Each of the following $M$ lines contains two space-separated integers $u$ and $v$ indicating that employees $u$ and $v$ do not get along. - The next line contains a single integer $Q$. - The following $Q$ lines describe suggestions. Each of these lines contains an integer $K$, followed by a space and $2K$ space-separated integers $L\_1, R\_1, L\_2, R\_2, \\ldots, L\_K, R\_K$. ### Output For each suggestion, print a single line containing the string `"YES"` if all invited employees get along or `"NO"` otherwise. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N, M, Q \\le 2 \\cdot 10^5$ - $1 \\le u, v \\le N$ - $u \\neq v$ - $1 \\le K \\le 2 \\cdot 10^5$ - $1 \\le L\_i \\le R\_i \\le N$ for each valid $i$ - $\[L\_1, R\_1\], \[L\_2, R\_2\], \\ldots, \[L\_K, R\_K\]$ are pairwise disjoint - the sum of $K$ over all test cases does not exceed $2 \\cdot 10^5$ - the sum of $N$ over all test cases does not exceed $2 \\cdot 10^5$ - the sum of $M$ over all test cases does not exceed $2 \\cdot 10^5$ - the sum of $Q$ over all test cases does not exceed $2 \\cdot 10^5$ ### Example Input ``` 2 3 3 1 2 2 3 1 3 2 1 2 2 2 3 3 1 1 4 2 1 4 1 4 2 2 1 1 2 3 2 1 2 3 4 ``` ### Example Output ``` YES NO YES NO ```
