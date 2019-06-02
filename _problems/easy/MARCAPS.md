---
category_name: easy
problem_code: MARCAPS
problem_name: 'Markers and Caps'
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
    - R
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: erfaniaa
problem_tester: null
date_added: 17-03-2019
tags:
    - ad
    - cook104
    - easy
    - erfaniaa
editorial_url: 'https://discuss.codechef.com/problems/MARCAPS'
time:
    view_start_date: 1553452200
    submit_start_date: 1553452200
    visible_start_date: 1553452200
    end_date: 1735669800
    current: 1559472949
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK104/hindi/MARCAPS.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK104/mandarin/MARCAPS.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK104/russian/MARCAPS.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK104/vietnamese/MARCAPS.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK104/bengali/MARCAPS.pdf) as well. Chef has $N$ markers. There is a cap on each marker. For each valid $i$, the $i$-th marker has colour $a\_i$. Initially, for each valid $i$, the colour of the cap on the $i$-th marker is also $a\_i$. Chef wants to rearrange the caps in such a way that no marker has the same colour as its cap. (Obviously, each marker must have exactly one cap.) Can he do that? If he can, find one such way to rearrange the caps. If there are multiple solutions, you may find any one. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\ldots, a\_N$. ### Output - For each test case: - If Chef cannot successfully rearrange the caps, print a single line containing the string `"No"` (without quotes). - Otherwise, print two lines. The first line should contain the string `"Yes"` (without quotes). The second line should contain $N$ space-separated integers describing a valid rearrangement of caps. For each valid $i$, the $i$-th of these integers should denote the final colour of the cap on the $i$-th marker. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 10^5$ - $1 \\le a\_i \\le 10^9$ for each valid $i$ ### Example Input ``` 2 9 1 1 1 2 2 2 3 3 3 2 1 1 ``` ### Example Output ``` Yes 2 2 2 3 3 3 1 1 1 No ```
