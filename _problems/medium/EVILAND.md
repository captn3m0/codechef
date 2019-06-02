---
category_name: medium
problem_code: EVILAND
problem_name: 'Chef in Evil Land'
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
problem_author: deva2802
problem_tester: null
date_added: 14-02-2019
tags:
    - deva2802
time:
    view_start_date: 1550428202
    submit_start_date: 1550428202
    visible_start_date: 1550428202
    end_date: 1735669800
    current: 1559472973
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK103/hindi/EVILAND.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK103/mandarin/EVILAND.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK103/russian/EVILAND.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK103/vietnamese/EVILAND.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK103/bengali/EVILAND.pdf) as well. Recently, Chef has moved to an evil land. In this land, there is only one bank, which offers $N$ savings plans (numbered $1$ through $N$). Initially, Chef has $1$ coin in his account. He may choose bank plans for as long as he wishes, in any order; each plan may be chosen any number of times. For each valid $i$, whenever Chef chooses the $i$-th savings plan, the number of coins in his bank account gets multiplied by the \*interest factor\* $P\_i$ of this plan (whenever he chooses this plan again, the number of coins is multiplied by $P\_i$ again). Since the bank in the evil land is evil, it always stores the number of coins in each account modulo $M$. Strangely, $M$ is a prime number. Chef knows that he will \*win the lottery\* if the number of coins in his bank account becomes exactly $F$. The bank does not want Chef to win, so it decided to remove some of the $N$ savings plans. You are the head of the evil bank. Therefore, you need to remove some (possibly none or all) plans in such a way that Chef cannot win the lottery. Find the minimum number of plans you must remove. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $M$ and $F$. - The second line contains $N$ space-separated integers $P\_1, P\_2, \\ldots, P\_N$. ### Output For each test case, print a single line containing one integer — the minimum number of plans to remove. ### Constraints - $1 \\le T \\le 50$ - $1 \\le N \\le 10^4$ - $1 \\le M \\le 2 \\cdot 10^5$ - $M$ is a prime number - $0 \\le F \\lt M$ - $0 \\le P\_i \\lt M$ for each valid $i$ - $F \\neq 1$ ### Example Input ``` 4 2 5 3 2 4 2 3 2 1 2 7 7 0 4 1 3 2 0 6 5 10 11 2 9 1 10 4 5 8 2 3 6 0 ``` ### Example Output ``` 1 1 1 4 ``` ### Explanation \*\*Example case 1:\*\* Chef succeeds when he has $3$ coins in his bank account. He can achieve that by choosing plan $1$ and then plan $2$, since he would get $(2 \\cdot 4) \\% 5 = 3$ coins. It is enough to delete plan $1$. Then, Chef cannot get $3$ coins, since he can only multiply the number of coins in his account by $4$. \*\*Example case 3:\*\* Strangely, Chef succeeds when he has no coins in his bank account. The only way to achieve that is multiplying by $0$, so it is enough to delete plan $5$.
