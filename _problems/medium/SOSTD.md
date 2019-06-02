---
category_name: medium
problem_code: SOSTD
problem_name: 'Swag Subsets'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: deadwing97
problem_tester: null
date_added: 19-12-2018
tags:
    - cook101
    - deadwing97
    - lazypropagation
    - segment
editorial_url: 'https://discuss.codechef.com/problems/SOSTD'
time:
    view_start_date: 1545589802
    submit_start_date: 1545589802
    visible_start_date: 1545589802
    end_date: 1735669800
    current: 1559472982
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/CK101TST/hindi/SOSTD.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/CK101TST/mandarin/SOSTD.pdf), \[Russian\](http://www.codechef.com/download/translated/CK101TST/russian/SOSTD.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/CK101TST/vietnamese/SOSTD.pdf) and \[Bengali\](http://www.codechef.com/download/translated/CK101TST/bengali/SOSTD.pdf) as well. Hussain really likes problems that involve summation over X, where X can be subsets, paths in a tree, intervals of numbers etc. You are given two integer sequences $A\_1, A\_2, A\_3, \\ldots, A\_N$ and $B\_1, B\_2, B\_3, \\ldots, B\_N$. Consider an arbitrary non-empty subset $S$ of the set $\\{1, 2, \\ldots, N\\}$. Let's define the \*swagness\* of such a set as $$\\left(\\mathrm{max}\_{(p \\in S)} \\; A\_p\\right) \\cdot \\left(\\mathrm{max}\_{(p \\in S)} \\; B\_p\\right) \\,.$$ Hussain is interested in the sum of swagnesses of all possible sets $S$. (Note that there are $2^N-1$ such sets.) Since the sum may be very large, compute it modulo $10^9+7$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, A\_3, \\ldots, A\_N$. - The third line contains $N$ space-separated integers $B\_1, B\_2, B\_3, \\ldots, B\_N$. ### Output For each test case, print a single line containing one integer — the total swagness modulo $10^9+7$. ### Constraints - $1 \\le T \\le 1,000$ - $2 \\le N \\le 2 \\cdot 10^5$ - $1 \\le A\_i, B\_i \\le 10^6$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Example Input ``` 1 3 1 2 3 6 5 4 ``` ### Example Output ``` 91 ``` ### Explanation \*\*Example case 1:\*\* The answer is $1 \\cdot 6 + 2 \\cdot 5 + 3 \\cdot 4 + 2 \\cdot 6 + 3 \\cdot 6 + 3 \\cdot 5 + 3 \\cdot 6$.
