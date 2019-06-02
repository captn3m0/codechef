---
category_name: easy
problem_code: ARRGRAPH
problem_name: 'Graph on an Array'
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
problem_author: admin2
problem_tester: null
date_added: 16-10-2018
tags:
    - admin2
    - easy
    - graph
    - number
    - snck1a19
    - taran_1407
    - union
editorial_url: 'https://discuss.codechef.com/problems/ARRGRAPH'
time:
    view_start_date: 1540092600
    submit_start_date: 1540092600
    visible_start_date: 1540092600
    end_date: 1735669800
    current: 1559472934
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S191ATST/hindi/ARRGRAPH.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S191ATST/mandarin/ARRGRAPH.pdf), \[Russian\](http://www.codechef.com/download/translated/S191ATST/russian/ARRGRAPH.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S191ATST/vietnamese/ARRGRAPH.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S191ATST/bengali/ARRGRAPH.pdf) as well. You are given a sequence of integers $A\_1, A\_2, \\dots, A\_N$. You may change any number of its elements (possibly zero), obtaining a new sequence of positive integers $B\_1, B\_2, \\dots, B\_N$. Each element of $B$ must be an integer between $2$ and $50$ (both inclusive). Let's define an undirected graph $G$ with $N$ vertices (numbered $1$ through $N$). For each pair of different vertices $i$ and $j$, there is an edge between $i$ and $j$ if and only if $B\_i$ and $B\_j$ are coprime. You should choose the sequence $B$ in such a way that $G$ is a connected graph. The number of elements which need to be changed to obtain $B$ from $A$ should be minimum possible. Find one such sequence $B$ and the minimum required number of changes. It can be proven that a solution always exists — it is always possible to modify sequence $A$ in such a way that $G$ is connected. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print two lines. The first line should contain a single integer — the minimum required number of changes. The second line should contain $N$ space-separated integers $B\_1, B\_2, \\dots, B\_N$ — the modified sequence. If there are multiple solutions, you may print any one. ### Constraints - $1 \\le T \\le 3 \\cdot 10^4$ - $1 \\le N \\le 50$ - $2 \\le A\_i \\le 50$ for each valid $i$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 2 2 2 3 2 2 4 ``` ### Example Output ``` 0 2 3 1 2 3 ``` ### Explanation \*\*Example 1\*\*: There is an edge in $G$ between vertices $1$ and $2$. This graph is connected, so there is no need to change any elements. \*\*Example 2\*\*: There is no edge between vertices $1$ and $2$ since $\\mathrm{gcd}(2, 4) \\neq 1$. This graph is not connected. We can change element $A\_2=4$ to $3$ and make this graph connected.
