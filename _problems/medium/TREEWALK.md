---
category_name: medium
problem_code: TREEWALK
problem_name: 'Walk on Tree'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: jtnydv25
problem_tester: null
date_added: 4-08-2018
tags:
    - hard
    - jtnydv25
    - math
    - oct18
    - recurrences
editorial_url: 'https://discuss.codechef.com/problems/TREEWALK'
time:
    view_start_date: 1540027803
    submit_start_date: 1540027803
    visible_start_date: 1540027803
    end_date: 1735669800
    current: 1559472986
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/OCT18/hindi/TREEWALK.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/OCT18/bengali/TREEWALK.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/OCT18/mandarin/TREEWALK.pdf) , \[Russian\](http://www.codechef.com/download/translated/OCT18/russian/TREEWALK.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/OCT18/vietnamese/TREEWALK.pdf) as well. You are given a tree with $N$ nodes (numbered $1$ through $N$). The tree is rooted at node $r$. For each node, find the number of walks with length $K$ from the root to this node modulo $998244353$. A \*walk\* from node $a$ to node $b$ with length $K$ is defined as a sequence of nodes $(u\_1, u\_2, \\dots, u\_{K+1})$, where $u\_1 = a, u\_{K+1} = b$ and for each valid $i$, there is an edge between nodes $u\_i$ and $u\_{i+1}$. Two walks $(u\_1, u\_2, \\dots, u\_{K+1})$ and $(v\_1, v\_2, \\dots, v\_{K+1})$ are considered different if there is a valid index $i$ such that $u\_i \\neq v\_i$. ### Input - The first line of the input contains a single integer $N$ denoting the number of nodes in the tree. - Each of the next $N-1$ lines contains two space-separated integers $x$ and $y$ denoting an edge between nodes $x$ and $y$. - The last line contains two space-separated integers $r$ and $K$. ### Output Print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of them should denote the number of walks from node $r$ to node $i$ with length $K$, modulo $998244353$. ### Constraints - $1 \\le N \\le 3,000$ - $1 \\le r \\le N$ - $0 \\le K \\le 10^9$ ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le N \\le 200$ \*\*Subtask #2 (10 points):\*\* $0 \\le K \\le 3,000$ \*\*Subtask #3 (80 points):\*\* original constraints ### Example Input ``` 5 1 2 1 3 1 4 4 5 3 4 ``` ### Example Output ``` 0 3 3 4 0 ``` ### Explanation There are three walks from node $3$ to itself: $(3, 1, 2, 1, 3)$, $(3, 1, 3, 1, 3)$ and $(3, 1, 4, 1, 3)$.
