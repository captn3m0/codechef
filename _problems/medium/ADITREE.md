---
category_name: medium
problem_code: ADITREE
problem_name: 'Adi and the Tree'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: andrei1998
problem_tester: null
date_added: 5-12-2018
tags:
    - andrei1998
    - heavy
    - lazypropagation
    - medium
    - observations
    - segment
    - snckel19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/ADITREE'
time:
    view_start_date: 1544295600
    submit_start_date: 1544295600
    visible_start_date: 1544295600
    end_date: 1735669800
    current: 1559472966
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19ELTST/hindi/ADITREE.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/S19ELTST/mandarin/ADITREE.pdf), \[Russian\](http://www.codechef.com/download/translated/S19ELTST/russian/ADITREE.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19ELTST/vietnamese/ADITREE.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19ELTST/bengali/ADITREE.pdf) as well. Adi's town has the shape of an undirected tree (i.e. a connected acyclic graph) with $N$ vertices numbered $1$ through $N$. There is one house at each vertex. Initially, all houses have lights turned off. Over time, $M$ events occur. In each event, there are two vertices $a$ and $b$ ($a \\neq b$) such that the states of the lights of the houses at vertices $a$ and $b$ get flipped, i.e. at each of these houses, lights are turned off if they were on and vice versa. The distance between two vertices in the tree is the number of edges on the simple path between them. Clearly, the number of houses where lights are on is always even. After each event, you should pair up the vertices where houses have lights turned on (each vertex should appear in exactly one pair). Let's define the \*cost of a gather-up\* as the minimum possible sum of distances between the vertices in each pair. For example, if there are only two houses with lights on, then the cost of a gather-up is the distance between their vertices. If there are no houses with lights on, the cost of a gather-up is zero. After each event, Adi would like to know the cost of a gather-up at that time. Find these costs! ### Input - The first line of the input contains a single integer $N$. - Each of the next $N-1$ lines contains two space-separated integers $a$ and $b$ denoting an edge between vertices $a$ and $b$. - The next line contains a single integer $M$. - Each of the next $M$ lines contains two space-separated integers $a$ and $b$ denoting an event. ### Output For each event, print a single line containing one integer — the cost of a gather-up immediately after this event. ### Constraints - $1 \\le N, M \\le 250,000$ - $1 \\le a, b \\le N$ ### Example Input ``` 6 1 2 2 3 2 4 4 5 4 6 3 3 6 2 5 1 6 ``` ### Example Output ``` 3 3 4 ``` ### Explanation After the first event, the houses with lights on are $3$ and $6$. The distance between vertices $3$ and $6$ is $3$. After the second event, the houses with lights on are $2$, $3$, $5$ and $6$. We can pair together vertices $2$ and $3$ (with distance $1$) and vertices $5$ and $6$ (with distance $2$), so the sum is $1 + 2 = 3$. After the third event, the houses with lights on are $1$, $2$, $3$ and $5$. We can pair together vertices $1$ and $2$ (with distance $1$) and vertices $3$ and $5$ (with distance $3$), so the sum is $1 + 3 = 4$.
