---
category_name: easy
problem_code: BICLIQUE
problem_name: 'Searching for a Biclique'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: erfaniaa
problem_tester: null
date_added: 16-05-2019
tags:
    - cook
    - cook106
    - erfaniaa
editorial_url: 'https://discuss.codechef.com/problems/BICLIQUE'
time:
    view_start_date: 1558290720
    submit_start_date: 1558290720
    visible_start_date: 1558290720
    end_date: 1735669800
    current: 1559472935
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK106/hindi/BICLIQUE.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK106/mandarin/BICLIQUE.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK106/russian/BICLIQUE.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK106/vietnamese/BICLIQUE.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK106/bengali/BICLIQUE.pdf) as well. A \*complete bipartite graph\* or \*biclique\* is a special kind of bipartite graph. If we denote the two partitions of vertices of this graph by $A$ and $B$, then such a biclique is denoted by $K\_{|A|, |B|}$ and satisfies the following conditions: - For each pair of vertices $a, b$ ($a \\in A$, $b \\in B$), there is an edge between vertices $a$ and $b$. - For each pair of vertices $u, v \\in A$, there is no edge between these vertices. - For each pair of vertices $u, v \\in B$, there is no edge between these vertices either. You are given a simple graph with $N$ vertices (numbered $1$ through $N$) and $M$ edges. Note that this graph is not necessarily bipartite. You are also given an integer $k$. Determine whether the graph contains the biclique $K\_{2, k}$ as a subgraph at least once, i.e. whether it is possible to obtain $K\_{2, k}$ by removing some (possibly zero) vertices, all edges adjacent to the removed vertices and some (possibly zero) more edges. ### Input - The first line contains three space-separated integers $N$, $M$ and $k$. - Each of the following $M$ lines contains two space-separated integers $u$ and $v$ denoting that there is an edge between vertices $u$ and $v$. ### Output Print a single line containing the string `"YES"` if the graph contains $K\_{2, k}$ or `"NO"` if it does not (without quotes). ### Constraints - $1 \\le N \\le 2,000$ - $0 \\le M \\le N(N-1)/2$ - $1 \\le k \\le 10$ - $1 \\le u, v \\le N$ - the graph does not contain any self-loops or multiple edges ### Example Input ``` 5 10 3 1 2 1 3 1 4 1 5 2 3 2 4 2 5 3 4 3 5 4 5 ``` ### Example Output ``` YES ```
