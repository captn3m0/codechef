---
category_name: hard
problem_code: SONGIF
problem_name: 'Sonya and Gifts'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: smelskiy
problem_tester: null
date_added: 27-04-2019
tags:
    - smelskiy
time:
    view_start_date: 1557739980
    submit_start_date: 1557739980
    visible_start_date: 1557739980
    end_date: 1735669800
    current: 1559472994
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAY19/hindi/SONGIF.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAY19/bengali/SONGIF.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAY19/mandarin/SONGIF.pdf), \[Russian\](http://www.codechef.com/download/translated/MAY19/russian/SONGIF.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAY19/vietnamese/SONGIF.pdf) as well. Sonya lives in a magical land which consists of $N$ cities (numbered $1$ through $N$) and $N - 1$ roads connecting them. In other words, the country where Sonya lives is a tree. The country is magical because toys of an infinite number of types are made there. The types of toys are labeled by all integers and in each city, there is a toy store which sells an infinite number of toys of each type. Some stores make better toys of some types than other stores. For each valid $i$ and each integer $j$, the \*quality\* of any toy with type $j$ in the store in city $i$ is $K\_i \\cdot j + B\_i$, where $K\_i$ and $B\_i$ are parameters of this store. Sonya loves to buy toys from the magical land as gifts for her friends. She knows what types of toys her friends like. Therefore, she sometimes decides that she wants to buy a toy with some type $z$, travels along the shortest path between some cities $u$ and $v$ and buys one toy with the chosen type $z$. Obviously, she wants this toy to have the maximum possible quality among all toys with this type found in stores on this path (including stores in cities $u$ and $v$), so she needs to know this maximum quality. Also, sometimes, there are new reforms in the magical land, which change the parameters of some stores. In each reform, the shortest path between two cities $u$ and $v$ is chosen, along with two parameters $x$ and $y$. Then, for each city $c$ on this path (including $u$ and $v$), $K\_c$ is increased by $x$ and $B\_c$ is increased by $y$. Your task is to process $Q$ queries of two types: 1. $u$, $v$, $x$, $y$: There is a new reform. 2. $u$, $v$, $z$: Sonya wants to know the maximum of qualities of toys with type $z$ sold on the simple path between cities $u$ and $v$. ### Input - The first line of the input contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated integers — the initial values of $K\_1, K\_2, \\ldots, K\_N$. - The third line contains $N$ space-separated integers — the initial values of $B\_1, B\_2, \\ldots, B\_N$. - Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that cities $u$ and $v$ are connected by a road. - The next $Q$ lines describe queries. - Each of these lines starts with three space-separated integers $t$, $u$ and $v$, where $t$ denotes the type of the current query. - If $t = 1$, this is followed by a space and two space-separated integers $x$ and $y$. - If $t = 2$, this is followed by a space and one integer $z$. ### Output For each query of the second type, print a single line containing one integer — the maximum possible quality of a toy Sonya can buy. ### Constraints - $1 \\le N, Q \\le 10^5$ - $1 \\le u, v \\le N$ - $|K\_i| \\le 10^8$ for each valid $i$ - $|B\_i| \\le 10^{16}$ for each valid $i$ - $|x| \\le 10^4$ - $|y|, |z| \\le 10^9$ - $1 \\le t \\le 2$ - the graph described on the input is a tree ### Subtasks \*\*Subtask #1 (11 points):\*\* $1 \\le N, Q \\le 5,000$ \*\*Subtask #2 (36 points):\*\* each city is directly connected to at most two other cities \*\*Subtask #3 (53 points):\*\* original constraints ### Example Input ``` 6 6 1 2 1 3 3 -1 -1 -5 -4 6 8 -14 3 4 2 1 2 3 6 4 3 5 2 1 5 -20 1 4 5 -7 4 2 3 6 -5 2 1 3 3 1 2 4 -1 20 2 6 2 8 ``` ### Example Output ``` -21 30 2 23 ```
