---
category_name: medium
problem_code: BESTPATH
problem_name: 'Find Best Path'
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
problem_author: arpa
problem_tester: null
date_added: 26-12-2018
tags:
    - arpa
    - bellman
    - ltime67
editorial_url: 'https://discuss.codechef.com/problems/BESTPATH'
time:
    view_start_date: 1546103100
    submit_start_date: 1546103100
    visible_start_date: 1546103100
    end_date: 1735669800
    current: 1559472967
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTM67TST/mandarin/BESTPATH.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTM67TST/bengali/BESTPATH.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTM67TST/hindi/BESTPATH.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTM67TST/russian/BESTPATH.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTM67TST/vietnamese/BESTPATH.pdf) as well. You are given a directed graph with $N$ vertices (numbered $1$ through $N$) and $M$ weighted edges. For each vertex of the graph, find the minimum cost of a walk that passes through this vertex, or determine that the minimum does not exist, i.e. for any integer $m$, there is a walk with cost smaller than $m$. \*\*Notes:\*\* - A walk in a directed graph is a sequence of vertices $v\_1, v\_2, \\ldots, v\_K$ for some positive integer $K$, and an associated (possibly empty) sequence of edges $e\_1, e\_2, \\ldots, e\_{K-1}$ such that for each valid $i$, edge $e\_i$ goes from vertex $v\_i$ to vertex $v\_{i+1}$. - The cost of a walk is the sum of weights of edges $e\_1, e\_2, \\ldots, e\_{K-1}$; if $K = 1$, the cost is $0$. - A walk \*passes through\* vertex $u$ if $u$ belongs to the sequence $v\_1, v\_2, \\ldots, v\_K$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - Each of the next $M$ lines contains three space-separated integers $u$, $v$ and $w$ describing an edge from vertex $u$ to vertex $v$ with weight $w$. ### Output For each test case, print $N$ lines. For each valid $i$, if the minimum cost of a walk through vertex $i$ does not exist, the $i$-th of these lines should contain the string `"INF"`. Otherwise, it should contain a single integer — the minimum cost. ### Constraints - $1 \\le T \\le 50$ - $1 \\le N, M \\le 1,000$ - $|w| \\le 10^6$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le N, M \\le 100$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 1 7 7 1 3 2 5 1 -4 2 5 3 2 6 2 3 5 1 4 6 -3 7 4 -3 ``` ### Example Output ``` INF INF INF -6 INF -6 -6 ``` ### Explanation \*\*Example case 1:\*\* The graph is depicted below. !\[\](http://s8.picofile.com/file/8346929976/graph.png)
