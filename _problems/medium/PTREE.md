---
category_name: medium
problem_code: PTREE
problem_name: 'Perfect Tree Problem'
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
problem_author: yash_chandnani
problem_tester: null
date_added: 14-02-2019
tags:
    - agp
    - amortization
    - march19
    - medium
    - observations
    - taran_1407
    - yash_chandnani
editorial_url: 'https://discuss.codechef.com/problems/PTREE'
time:
    view_start_date: 1552469402
    submit_start_date: 1552469402
    visible_start_date: 1552469402
    end_date: 1735669800
    current: 1559472981
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAR19TST/hindi/PTREE.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAR19TST/bengali/PTREE.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAR19TST/mandarin/PTREE.pdf), \[Russian\](http://www.codechef.com/download/translated/MAR19TST/russian/PTREE.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAR19TST/vietnamese/PTREE.pdf) as well. A \*perfect tree\* is a rooted tree such that all its leaves are at the same distance from the root. The \*value\* of a perfect tree with $n$ vertices at a time $x$ is $$W(x) = \\mathrm{max}\_p \\left(\\sum\_{i=1}^{n} dist(p\_i) \\cdot x^{i-1}\\right) \\;,$$ where the vertices of the tree are (arbitrarily) numbered $1$ through $n$, the maximum is taken over all permutations $p$ of integers $1$ through $n$, and $dist(u)$ denotes the distance of vertex $u$ from the root. Our Chef has a perfect tree with $N$ vertices (numbered $1$ through $N$), which is rooted at vertex $1$. For any vertex $v$ of this tree, the value of the subtree rooted at $v$ (note that it is also a perfect tree) is defined in the same way as above, where the sum and permutations are only taken over vertices of this subtree and $dist()$ denotes the distance from vertex $v$. You should answer $Q$ queries. In each query, Chef has two parametres $v$ and $y$ and he wants to know the value of the subtree rooted at vertex $v$, at time $y$. The queries are encoded in such a way that they have to be answered online. Since the values may be large, compute them modulo $1000000007$ ($10^9 + 7$). ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $Q$. - Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between vertices $u$ and $v$. - The following $Q$ lines describe queries. Each of these lines contains two space-separated integers $a$ and $b$. The parametres $v$ and $y$ are computed in the following way: let's denote the answer to the previous query by $ans$ ($ans = 0$ for the first query); then, $v = a \\oplus ans$ and $y = b \\oplus ans$. ### Output For each query, print a single line containing one integer - the value of the given subtree modulo $10^9 + 7$. ### Constraints - $1 \\le T \\le 5$ - $1 \\le N \\le 200,000$ - $1 \\le Q \\le 100,000$ - $1 \\le u, v \\le N$ - $1 \\le y \\lt 10^9+7$ - the graph described on the input is a perfect tree - the sum of $N$ over all test cases does not exceed $200,000$ - the sum of $Q$ over all test cases does not exceed $100,000$ ###Subtasks - Subtask 1 (20 points) : $1 \\leq $ Sum of $N$ over all test cases $\\leq 10000$ $1 \\leq $ Sum of $Q$ over all test cases $\\leq 8000$ - Subtask 2 (80 points) : Original Constraints ### Example Input ``` 1 6 3 1 2 1 3 2 4 2 5 3 6 1 1 10 10 5 5 ``` ### Example Output ``` 8 6 3 ``` ### Explanation \*\*Example case 1:\*\* For the first query, the choice of the permutation $p$ is irrelevant, the inner sum (and therefore the value of the tree) is always just the sum of distances of all vertices from vertex $1$. Hence, the answer is $0+1+1+2+2+2 = 8$. In the second query, $v = 2$ and $y = 2$. In the third query, $v = 3$ and $y = 3$.
