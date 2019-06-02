---
category_name: medium
problem_code: CHAQOT
problem_name: 'Chef and Queries on a Tree'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: kefaa
problem_tester: null
date_added: 20-07-2018
tags:
    - cook86
    - dynamic
    - hard
    - kefaa
    - lca
    - persistence
    - segment
editorial_url: 'https://discuss.codechef.com/problems/CHAQOT'
time:
    view_start_date: 1532284205
    submit_start_date: 1532284205
    visible_start_date: 1532284205
    end_date: 1735669800
    current: 1559472969
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK96/mandarin/CHAQOT.pdf), [Russian](http://www.codechef.com/download/translated/COOK96/russian/CHAQOT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK96/vietnamese/CHAQOT.pdf) as well.

Chef has a tree with $N$ nodes numbered $1$ through $N$. Each node of the tree has a weight; let's denote the weight of node $v$ by $a\_v$. Chef should answer $Q$ queries. Each query is described by an integer $r$ and a list of $k$ nodes $u\_1, u\_2, \\dots, u\_k$. In each query, let $S$ be the connected subgraph of the tree (i.e. a subtree) which contains the nodes $u\_1, u\_2, \\dots, u\_k$ and has the minimum possible size (it can be proven that these conditions uniquely define $S$). The answer to a query is $\\mathrm{min}\_{u \\in S}(|a\_u - r|)$. Help Chef and answer all the queries. Note the special format of the input, which is intended to ensure you can only know each query (except the first) after answering the previous query. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\dots, a\_N$. - Each of the following $N-1$ lines contains two space-separated integers $x$ and $y$ denoting an edge between nodes $x$ and $y$. - The following $Q$ lines describe queries. Each of these lines contains two space-separated integers $r'$ and $k$, followed by a space and $k$ space-separated integers $u\_1', u\_2', \\dots, u\_k'$. Let's denote the answer to the previous query by $ans$ ($ans=0$ if this is the first query). The values of $r$ and $u\_1, u\_2, \\dots, u\_k$ for this query can be computed as follows: - $r = r' \\oplus ans$ - $u\_i = u\_i' \\oplus ans$ for each valid $i$ ### Output For each query, print a single line containing one integer — the answer to this query. ### Constraints - $1 \\le T \\le 5$ - $2 \\le N, Q \\le 10^5$ - $1 \\le a\_i \\le 10^9$ for each valid $i$ - $1 \\le r \\le 10^9$ - $1 \\le x, y \\le N$ - the graph described on the input is a tree - in each query, $u\_1, u\_2, \\dots, u\_k$ are pairwise distinct - the sum of $k$ for each test case does not exceed $3 \\cdot 10^5$ ### Example Input ``` 1 5 7 1 2 3 4 5 1 2 2 3 2 4 1 5 1 2 4 5 2 2 4 5 3 2 4 5 5 2 5 4 5 2 4 5 5 1 2 103 3 2 1 6 ``` ### Example Output ``` 0 0 1 0 0 3 95 ``` ### Explanation \*\*Example case 1:\*\* The decoded queries are ``` 1 2 4 5 2 2 4 5 3 2 4 5 4 2 4 5 5 2 4 5 5 1 2 100 3 1 2 5 ```
