---
category_name: easy
problem_code: EDGEDIR
problem_name: 'Directing Edges'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: toonewbie
problem_tester: null
date_added: 18-11-2018
tags:
    - dec18
    - medium
    - toonewbie
editorial_url: 'https://discuss.codechef.com/problems/EDGEDIR'
time:
    view_start_date: 1545075122
    submit_start_date: 1545075122
    visible_start_date: 1545075122
    end_date: 1735669800
    current: 1559472943
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/DEC18/hindi/EDGEDIR.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/DEC18/vietnamese/EDGEDIR.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/DEC18/mandarin/EDGEDIR.pdf) , \[Russian\](http://www.codechef.com/download/translated/DEC18/russian/EDGEDIR.pdf) and \[Bengali\](http://www.codechef.com/download/translated/DEC18/bengali/EDGEDIR.pdf) as well. There is only little time left until the New Year! For that reason, Chef decided to make a present for his best friend. He made a connected and undirected simple graph with $N$ vertices and $M$ edges. Since Chef does not like odd numbers and his friend does not like undirected graphs, Chef decided to direct each edge in one of two possible directions in such a way that the indegrees of all vertices of the resulting graph are even. The indegree of a vertex is the number of edges directed to that vertex from another vertex. As usual, Chef is busy in the kitchen, so you need to help him with directing the edges. Find one possible way to direct them or determine that it is impossible under the given conditions, so that Chef could bake a cake as a present instead. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - $M$ lines follow. For each $i$ ($1 \\le i \\le M$), the $i$-th of these lines contains two space-separated integers $u\_i$ and $v\_i$ denoting an edge between vertices $u\_i$ and $v\_i$. ### Output For each test case: - If a valid way to direct the edges does not exist, print a single line containing one integer $-1$. - Otherwise, print a single line containing $M$ space-separated integers. For each valid $i$, the $i$-th of these integers should be $0$ if edge $i$ is directed from $u\_i$ to $v\_i$ or $1$ if it is directed from $v\_i$ to $u\_i$. ### Constraints - $1 \\le T \\le 5$ - $1 \\le N, M \\le 10^5$ - $1 \\le u\_i, v\_i \\le N$ for each valid $i$ - the graph on the input is connected, does not contain multiple edges or self-loops ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le N, M \\le 1,000$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 4 4 1 2 1 3 2 4 3 4 3 3 1 2 2 3 1 3 ``` ### Example Output ``` 0 0 1 1 -1 ```
