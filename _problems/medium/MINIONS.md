---
category_name: medium
problem_code: MINIONS
problem_name: 'Masha and Minions'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: barenuz
problem_tester: null
date_added: 13-06-2018
tags:
    - barenuz
    - cook95
    - medium
    - mgch
    - segment
editorial_url: 'https://discuss.codechef.com/problems/MINIONS'
time:
    view_start_date: 1529260205
    submit_start_date: 1529260205
    visible_start_date: 1529260205
    end_date: 1735669800
    current: 1559472977
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK95/mandarin/MINIONS.pdf), [Russian](http://www.codechef.com/download/translated/COOK95/russian/MINIONS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK95/vietnamese/MINIONS.pdf) as well.

Masha has $N$ minions. Each minion has two characteristics: power $a$ and endurance $b$. Masha thinks that a non-empty set of minions $\\{m\_1, m\_2, \\dots, m\_k\\}$ with characteristics $(a\_{m\_1},b\_{m\_1}), (a\_{m\_2},b\_{m\_2}), \\dots, (a\_{m\_k},b\_{m\_k})$ is \*good\* if the mean endurance of this set doesn't exceed the minimum power in it, i.e. if $min(a\_{m\_1}, a\_{m\_2}, \\dots, a\_{m\_k}) \\ge (b\_{m\_1}+b\_{m\_2}+\\dots+b\_{m\_k}) / k$. Masha would like to choose a good subset of her minions and give these minions to Mark. Your task is to calculate the maximum number of minions Masha can give to Mark. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The following $N$ lines describe minions. Each of these lines contains two space-separated integers $a$ and $b$ denoting the power and endurance of one minion. ### Output For each test case, print a single line containing one number — the size of the largest good set of minions, or $0$ if no such set exists. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 4\\cdot10^5$ - $1 \\le a, b \\le 10^9$ - the sum of $N$ for all test cases does not exceed $4\\cdot10^5$ ### Example Input ``` 2 3 1 4 3 3 2 1 2 3 5 1 4 ``` ### Example Output ``` 2 0 ``` ### Explanation \*\*Example case 1:\*\* The set of minions $\\{2, 3\\}$ is good, since $\\mathrm{min}(3,2) \\ge (3+1)/2$. \*\*Example case 2:\*\* There is no non-empty good subset of minions.
