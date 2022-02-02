---
category_name: medium
problem_code: GRAPHAND
problem_name: 'AND on Graph'
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
problem_author: jtnydv25
problem_tester: null
date_added: 15-12-2018
tags:
    - jtnydv25
time:
    view_start_date: 1544985000
    submit_start_date: 1544985000
    visible_start_date: 1544985000
    end_date: 1735669800
    current: 1559472974
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given an undirected graph with $n$ nodes and $m$ edges. The nodes are numbered from 1 to $n$. Each edge $e$ of the graph has two integers associated with it, cost($c\_e$) and value($v\_e$). You are given three integers $s$, $t$, and $K$. The cost of a walk is the sum of costs of all the edges in the walk. Find the minimum cost of a walk from $s$ to $t$ ($s \\neq t$ ), such that the bitwise AND of values for all edges in the walk is atleast $K$. If no such walk exists, print $-1$. Note that the walk doesn't need to be a simple path. Any vertex or edge can come more than once in the walk you choose. If an edge $e$ comes $p$ times, we add its cost $p$ times to the cost of the walk. Formally, a walk from $s$ to $t$ is a sequence of vertices and edges $u\_1, e\_1, u\_2, e\_2, \\cdots, u\_{l-1}, e\_{l-1}, u\_{l} $, where $e\_i$ is the edge between vertices $u\_{i}$ and $u\_{i+1}$, $u\_1 = s$ and $u\_l = t$. We need to minimize $\\displaystyle \\sum\_{i=1}^{l-1} c\_{e\_i} $, while satisfying $ v\_{e\_1} \\&amp; v\_{e\_2} \\&amp; \\cdots \\&amp; v\_{e\_{l-1}} \\geq K$, where $\\&amp;$ denotes the bitwise AND operator. ###Input: - First line will contain $n$ and $m$ - Each of the next $m$ lines will contain the description of an edge in the graph. It will consist of 4 integers $a, b, c, v$ denoting the endpoints, cost and val of the edge respectively. - The last line contains $s, t, K$, as described in the statement. ###Output: Print the minimum cost of a walk from $s$ to $t$, such that the bitwise AND of values for all edges in the walk is atleast $K$. Print $-1$ if no such walk exists. ###Constraints - $1 \\leq n, m \\leq 10^5$ - $1 \\leq c\_i, v\_i \\leq 10^9$ - $1 \\le s, t \\leq n$ - $s \\neq t$ - $ 1 \\le K \\le 10^9$ - The graph contains no self loops and multiedges. ###Sample Input: ``` 3 3 1 2 2 3 2 3 1 7 1 3 2 2 1 3 3 ``` ###Sample Output: ``` 3 ``` ###Explanation: Suppose we choose the edge between 1 and 3 and say that's our walk. Its cost is 2. But this is not a valid walk, because the AND of the edge values is 2. We need it to be $\\ge$ 3. So, instead suppose we choose the walk from $1$ to $3$ passing through $2$. The bitwise AND is 3 &amp; 7 = 3, and cost is 1 + 2 = 3. This is a valid walk, and you can check that you cannot reduce the cost any further. Hence 3 is the answer.
