---
category_name: easy
problem_code: CHFPARTY
problem_name: 'Chef and Party'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 17-02-2019
tags:
    - chefparty
    - cook103
    - easy
    - kingofnumbers
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/CHFPARTY'
time:
    view_start_date: 1550428202
    submit_start_date: 1550428202
    visible_start_date: 1550428202
    end_date: 1735669800
    current: 1559472939
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK103/hindi/CHFPARTY.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK103/mandarin/CHFPARTY.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK103/russian/CHFPARTY.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK103/vietnamese/CHFPARTY.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK103/bengali/CHFPARTY.pdf) as well. Tonight, Chef would like to hold a party for his $N$ friends. All friends are invited and they arrive at the party one by one in an arbitrary order. However, they have certain conditions — for each valid $i$, when the $i$-th friend arrives at the party and sees that at that point, strictly less than $A\_i$ other people (excluding Chef) have joined the party, this friend leaves the party; otherwise, this friend joins the party. Help Chef estimate how successful the party can be — find the maximum number of his friends who could join the party (for an optimal choice of the order of arrivals). ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output For each test case, print a single line containing one integer — the maximum number of Chef's friends who could join the party. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^5$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Example Input ``` 3 2 0 0 6 3 1 0 0 5 5 3 1 2 3 ``` ### Example Output ``` 2 4 0 ``` ### Explanation \*\*Example case 1:\*\* Chef has two friends. Both of them do not require anyone else to be at the party before they join, so they will both definitely join the party. \*\*Example case 2:\*\* At the beginning, friends $3$ and $4$ can arrive and join the party, since they do not require anyone else to be at the party before they join. After that, friend $2$ can arrive; this friend would see that there are two people at the party and therefore also join. Then, friend $1$ will also join, so in the end, there would be $4$ people attending the party. \*\*Example case 3:\*\* No one will attend the party because each of Chef's friends will find zero people at the party and leave, regardless of the order in which they arrive.
