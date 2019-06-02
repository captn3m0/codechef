---
category_name: easy
problem_code: CTOUR
problem_name: 'Country Tour'
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
problem_author: sahil070197
problem_tester: null
date_added: 20-10-2018
tags:
    - sahil070197
time:
    view_start_date: 1540578600
    submit_start_date: 1540578600
    visible_start_date: 1540578600
    end_date: 1735669800
    current: 1559472942
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Ishank lives in a country in which there are $N$ cities and $N-1$ roads. All the cities are connected via these roads. Each city has been assigned a unique number from 1 to $N$. The country can be assumed as a tree, with nodes representing the cities and edges representing the roads. The tree is rooted at 1.Every Time, when a traveler through a road, he will either gain some amount or has to pay some amount. Abhineet is a traveler and wishes to travel to various cities in this country. There's a law in the country for travelers, according to which, when a traveler moves from the city $A$ to city $B$, where city $A$ and $B$ are connected by a road then the traveler is either paid or has to pay the amount of money equal to profit or loss respectively. When he moves from $A$ to $B$, he hires a special kind of vehicle which can reverse its direction at most once. Reversing the direction means earlier the vehicle is going towards the root, then away from the root or vice versa. Abhineet is analyzing his trip and therefore gave $Q$ queries to his friend, Ishank, a great coder. In every query, he gives two cities $A$ and $B$. Ishank has to calculate the maximum amount he can gain (if he cannot gain, then the minimum amount he will lose) if he goes from the city $A$ to city $B$. ###Input: -The first line of the input contains a two space-separated integers N and Q. -The next N-1 line contains 3 space-separated integers Xi and Yi and Zi denoting that cities Xi and Yi are connected by a road which gives profit Zi (Negative Zi represents loss). -The next Q contains 2 space-separated integers A and B denoting two cities. ###Output: Print a single line corresponding to each query — the maximum amount he can gain (if he cannot gain, then the minimum amount he will lose with negative sign) if he goes from city A to city B. ###Constraints - $2 \\leq N \\leq 10^5$ - $1 \\leq Q \\leq 10^5$ - $1 \\leq Xi, Yi, A, B \\leq N$ - $ abs(Zi) \\leq 10^9$ ###Sample Input: 9 5 1 2 8 1 3 -9 2 4 1 2 5 -6 3 6 7 3 7 6 6 8 3 6 9 4 1 2 2 7 4 3 3 2 8 9 ###Sample Output: 10 5 0 -1 21 ###EXPLANATION: In the first query, he goes from 1 to 2, 2 to 4, takes a turn and go to 2. Therefore profit=8+1+1=10.
