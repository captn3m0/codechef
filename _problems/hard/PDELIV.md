---
category_name: hard
problem_code: PDELIV
problem_name: 'Pizza Delivery'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: qoo2p5
problem_tester: null
date_added: 8-06-2018
tags:
    - july18
    - medium
    - qoo2p5
editorial_url: 'https://discuss.codechef.com/problems/PDELIV'
time:
    view_start_date: 1531733410
    submit_start_date: 1531733410
    visible_start_date: 1531733410
    end_date: 1735669800
    current: 1559472992
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JULY18/mandarin/PDELIV.pdf), [Russian](http://www.codechef.com/download/translated/JULY18/russian/PDELIV.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY18/vietnamese/PDELIV.pdf) as well.

Flatland is a 1D country — all points in Flatland lie on one line. Everybody in Flatland loves pizza (because it's flat enough). There are $n$ pizzerias numbered $1$ through $n$, which serve $m$ consumers numbered $1$ through $m$. Let's denote the position of the $i$-th pizzeria by $s\_i$ and the position of the $i$-th consumer's home by $c\_i$. No two pizzerias are located at the same position, but the position of any consumer can coincide with the position of any pizzeria or consumer. Every consumer wants to order one pizza, spending as little money as possible. The $i$-th pizzeria sells each pizza at a certain baseline price $p\_i$; delivering pizza from point $x\_1$ to point $x\_2$ costs an additional $(x\_1 - x\_2) ^ 2$. These prices are independent — even if multiple pizzas can be delivered at once, each consumer needs to pay the full price for their delivery. Unfortunately, some consumers don't like some pizzerias, so they won't order pizza from them. Specifically, for each consumer, you are given a list of pizzerias this consumer won't order from no matter what. For each consumer, find the amount of money they will spend for the pizza with delivery. ### Input - The first line of the input contains two space-separated integers $n$ and $m$ denoting the number of pizzerias and the number of consumers. - For each $i$ ($1 \\le i \\le n$), the $i$-th of the following $n$ lines contains two space-separated integers $s\_i$ and $p\_i$. - For each $i$ ($1 \\le i \\le m$), the $i$-th of the following $m$ lines contains two space-separated integers $c\_i$ and $k\_i$, followed by a space (if $k\_i \\gt 0$) and $k\_i$ space-separated integers $d\_{i, 1}, d\_{i, 2}, \\dots, d\_{i, k\_i}$ denoting the list of pizzerias the $i$-th consumer won't order from. ### Output Print $m$ lines. For each $i$ ($1 \\le i \\le m$), the $i$-th of these lines should contain a single integer — the amount of money the $i$-th consumer will spend. ### Constraints - $1 \\le n, m \\le 200,000$ - $0 \\le s\_i, c\_i \\le 10^9$ for each valid $i$ - $1 \\le p\_i \\le 10^9$ for each valid $i$ - $0 \\le k\_i \\le n-1$ for each valid $i$ - $0 \\le \\sum\_{i=1}^m k\_i \\le 400,000$ - $1 \\le d\_{i, j} \\le n$ for each valid $i, j$ - $s\_1, s\_2, \\dots, s\_n$ are pairwise distinct ### Subtasks \*\*Subtask #1 (15 points):\*\* $n, m \\le 1,000$ \*\*Subtask #2 (35 points):\*\* $k\_i = 0$ for each valid $i$ \*\*Subtask #3 (50 points):\*\* original constraints ### Example Input ``` 3 3 1 7 10 5 8 9 3 0 3 1 1 6 2 1 2 ``` ### Example Output ``` 11 34 13 ``` ### Explanation The first consumer likes all the pizzerias, so they order a pizza from the first pizzeria, since it will cost the least, $7 + (3 - 1)^2 = 11$. The second consumer doesn't like the first pizzeria, so they won't order from there, even though it's the cheapest option. Therefore, they order a pizza from the third pizzeria. It costs $9 + (8 - 3)^2 = 34$. The third consumer likes only the third pizzeria, so they order from there. It costs $9 + (8 - 6)^2 = 13$.
