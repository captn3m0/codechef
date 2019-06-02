---
category_name: easy
problem_code: DINCPATH
problem_name: 'Doubly Increasing Path'
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
problem_author: mathecodician
problem_tester: null
date_added: 13-04-2019
tags:
    - cook
    - cook105
    - directed
    - easy
    - mathecodician
    - topologicalsort
editorial_url: 'https://discuss.codechef.com/problems/DINCPATH'
time:
    view_start_date: 1555871402
    submit_start_date: 1555871402
    visible_start_date: 1555871402
    end_date: 1735669800
    current: 1559472942
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK105/hindi/DINCPATH.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK105/mandarin/DINCPATH.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK105/russian/DINCPATH.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK105/vietnamese/DINCPATH.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK105/bengali/DINCPATH.pdf) as well. You are given an undirected graph with $N$ nodes (numbered $1$ through $N$) and $M$ edges. Each node has a value; let's denote the value of node $i$ by $A\_i$. Note that the graph is not necessarily simple. A \*doubly increasing path\* is a directed path such that both the values of nodes and differences of values of nodes on this path are strictly increasing. Formally, it is a sequence of nodes $p\_1, p\_2, p\_3, \\ldots, p\_k$ for some integer (the length of this path) $k \\ge 1$ such that $0 \\lt A\_{p\_2} - A\_{p\_1} \\lt A\_{p\_3} - A\_{p\_2} \\lt \\ldots \\lt A\_{p\_k} - A\_{p\_{k-1}}$ and for each valid $i$, nodes $p\_i$ and $p\_{i-1}$ are connected by an edge. You need to find the length of the longest doubly increasing path in the graph. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. - Each of the following $M$ lines contains two space-separated integers $u$ and $v$ denoting that nodes $u$ and $v$ are connected by an edge. ### Output For each test case, print a single line containing one integer — the maximum length of a doubly increasing path. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 10^5$ - $1 \\le M \\le 10^5$ - $1 \\le u, v \\le N$ - $|A\_i| \\le 10^{15}$ for each valid $i$ ### Example Input ``` 2 5 4 1 2 3 4 5 2 4 1 5 1 3 3 5 5 4 1 2 3 4 5 3 5 1 2 4 5 5 2 ``` ### Example Output ``` 2 3 ``` ### Explanation \*\*Example case 1:\*\* Any path with length $2$ from a smaller node to a larger one is doubly increasing. There is no doubly increasing path with length greater than $2$. \*\*Example case 2:\*\* The path $1 \\rightarrow 2 \\rightarrow 5$ is doubly increasing.
