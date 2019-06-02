---
category_name: easy
problem_code: PEWDSVTS
problem_name: 'Pied Piper vs Hooli'
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
problem_author: mathecodician
problem_tester: null
date_added: 17-04-2019
tags:
    - cook105
    - mathecodician
    - priority
    - radix
    - simple
editorial_url: 'https://discuss.codechef.com/problems/PEWDSVTS'
time:
    view_start_date: 1555871402
    submit_start_date: 1555871402
    visible_start_date: 1555871402
    end_date: 1735669800
    current: 1559472954
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK105/hindi/PEWDSVTS.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK105/mandarin/PEWDSVTS.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK105/russian/PEWDSVTS.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK105/vietnamese/PEWDSVTS.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK105/bengali/PEWDSVTS.pdf) as well. Pied Piper is a startup company trying to build a new Internet called Pipernet. Currently, they have $A$ users and they gain $X$ users everyday. There is also another company called Hooli, which has currently $B$ users and gains $Y$ users everyday. Whichever company reaches $Z$ users first takes over Pipernet. In case both companies reach $Z$ users on the same day, Hooli takes over. Hooli is a very evil company (like E-Corp in Mr. Robot or Innovative Online Industries in Ready Player One). Therefore, many people are trying to help Pied Piper gain some users. Pied Piper has $N$ \*supporters\* with contribution values $C\_1, C\_2, \\ldots, C\_N$. For each valid $i$, when the $i$-th supporter \*contributes\*, Pied Piper gains $C\_i$ users instantly. After contributing, the contribution value of the supporter is halved, i.e. $C\_i$ changes to $\\left\\lfloor C\_i / 2 \\right\\rfloor$. Each supporter may contribute any number of times, including zero. Supporters may contribute at any time until one of the companies takes over Pipernet, even during the current day. Find the minimum number of times supporters must contribute (the minimum total number of contributions) so that Pied Piper gains control of Pipernet. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains six space-separated integers $N$, $A$, $B$, $X$, $Y$ and $Z$. - The second line contains $N$ space-separated integers $C\_1, C\_2, \\ldots, C\_N$ — the initial contribution values. ### Output For each test case, if Hooli will always gain control of Pipernet, print a single line containing the string `"RIP"` (without quotes). Otherwise, print a single line containing one integer — the minimum number of times supporters must contribute. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 10^5$ - $1 \\le A, B, X, Y, Z \\le 10^9$ - $A, B \\lt Z$ - $0 \\le C\_i \\le 10^9$ for each valid $i$ ### Example Input ``` 3 3 10 15 5 10 100 12 15 18 3 10 15 5 10 100 5 5 10 4 40 80 30 30 100 100 100 100 100 ``` ### Example Output ``` 4 RIP 1 ``` ### Explanation \*\*Example case 1:\*\* After $8$ days, Pied Piper will have $50$ users and Hooli will have $95$ users. Then, if each supporter contributes once, Pied Piper will also have $95$ users. After that, they still need $5$ more users, so supporter $3$ can contribute again, with $18/2 = 9$ more users. So the answer will be $4$. \*\*Example case 2:\*\* There is no way to beat Hooli.
