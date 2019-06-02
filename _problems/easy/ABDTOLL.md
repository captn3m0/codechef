---
category_name: easy
problem_code: ABDTOLL
problem_name: 'Abdullah and Toll Discounts'
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
problem_author: abdullah768
problem_tester: null
date_added: 21-05-2019
tags:
    - abdullah768
    - greedy
    - ltime72
    - taran_1407
    - tree
time:
    view_start_date: 1558803600
    submit_start_date: 1558803600
    visible_start_date: 1558803600
    end_date: 1735669800
    current: 1559472934
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/LTIME72/hindi/ABDTOLL.pdf), \[Bengali\](http://www.codechef.com/download/translated/LTIME72/bengali/ABDTOLL.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/LTIME72/mandarin/ABDTOLL.pdf), \[Russian\](http://www.codechef.com/download/translated/LTIME72/russian/ABDTOLL.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME72/vietnamese/ABDTOLL.pdf) as well. Abdullah has recently moved to Tolland. In Tolland, there are $N$ cities (numbered $1$ through $N$) connected by $N-1$ bidirectional roads such that it is possible to visit any city from any other city. For each city $i$, there is a \*toll value\* $TL\_i$. Abdullah lives in city $X$. He has planned a tour of Tolland lasting for $2N$ days. For each $i$ ($1 \\le i \\le N$), on the $2i-1$-th day, he travels from city $X$ to city $i$, and on the $2i$-th day, he travels from city $i$ back to city $X$. In Tolland, there are also special discount coupons. For each city $c$ and positive integer $v$, there is a discount coupon for city $c$ with \*value\* $v$. All discount coupons may be bought anywhere in Tolland; the cost of each discount coupon is twice its value. When travelling from any city $i$ to any (not necessarily different) city $j$, Abdullah must pay a toll exactly once in each city on the path between them (including $i$ and $j$); even if he passed through some cities before, he must pay the toll in these cities as well. For any city $i$, the toll is $TL\_i$ when not using any discount coupons; however, if Abdullah bought some discount coupons for city $i$, he may use some or all of them to decrease this toll to $\\mathrm{max}\\,(0, TL\_i-V)$, where $V$ is the sum of values of coupons for city $i$ used by Abdullah. Each coupon may be used at most once per day, but they do not expire when used and the same coupon may be used on multiple days. On each day, Abdullah may use any coupons he wants, but a coupon for city $i$ may only be used to decrease the toll in city $i$. Abdullah has a travel budget: on each day, he must not spend more than $K$ units of money on paying tolls. Before the start of the tour, he may choose to buy any number of discount coupons, for any cities and with any values (possibly different ones for different cities); the cost of coupons is not included in the budget for any day of the tour. Help Abdullah find the minimum total amount of money he must spend on discount coupons so that on each day during the tour, he will be able to stay within his budget by using the coupons he bought. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $X$ and $K$. - The second line contains $N$ space-separated integers $TL\_1, TL\_2, \\ldots, TL\_N$. - Each of the next $N-1$ lines contains two space-separated integers $U$ and $V$ denoting that cities $U$ and $V$ are connected by a bidirectional road. ### Output For each test case, print a single line containing one integer ― the minimum amount of money Abdullah should spend on coupons. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 10^4$ - $1 \\le K \\le 10^{13}$ - $1 \\le X, U, V \\le N$ - $1 \\le TL\_i \\le 10^9$ for each valid $i$ ### Subtasks \*\*Subtask #1 (40 points):\*\* - each city is directly connected to at most two other cities - city $X$ is directly connected to at most one city \*\*Subtask #2 (60 points):\*\* original constraints ### Example Input ``` 2 4 2 6 4 7 6 2 2 1 2 3 2 4 3 1 8 2 3 1 1 2 2 3 ``` ### Example Output ``` 14 0 ``` ### Explanation \*\*Example case 1:\*\* The total costs of tolls on each day without purchasing any discount coupons would be $\[11, 11, 7, 7, 13, 13, 9, 9\]$. The budget $6$ is exceeded on each day of the tour. However, Abdullah can buy a discount coupon with value $5$ for city $2$ and a discount coupon with value $2$ for city $3$. The total cost of these coupons is $5 \\cdot 2 + 2 \\cdot 2 = 14$. Now, the costs of tolls on each day are $\[6, 6, 2, 2, 6, 6, 4, 4\]$, and the budget is never exceeded. \*\*Example case 2:\*\* The costs of tolls on each day without purchasing any discount coupons would be $\[2, 2, 5, 5, 6, 6\]$. Since the budget is already never exceeded, there is no need to buy any discount coupons.
