---
category_name: medium
problem_code: PAINTREE
problem_name: 'Painting Tree'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: bciobanu
problem_tester: null
date_added: 31-10-2018
tags:
    - bciobanu
    - combinatorics
    - dynamic
    - expectation
    - medium
    - snckpe19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/PAINTREE'
time:
    view_start_date: 1541269800
    submit_start_date: 1541269800
    visible_start_date: 1541269800
    end_date: 1735669800
    current: 1559472978
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Russian\](http://www.codechef.com/download/translated/S19PETST/russian/PAINTREE.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19PETST/vietnamese/PAINTREE.pdf), \[Hindi\](http://www.codechef.com/download/translated/S19PETST/hindi/PAINTREE.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S19PETST/mandarin/PAINTREE.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19PETST/bengali/PAINTREE.pdf) as well. You are given a tree with $N$ nodes numbered $1$ through $N$. Each node is initially colored white. We perform the following process on this tree: - choose an unordered pair of vertices $(a, b)$ uniformly at random (i.e. each pair has an equal probability of being picked) - if there is a black node on the shortest path between $a$ and $b$ (including $a$ and $b$), the process stops - otherwise: - all nodes on this path are colored black - then, go back to the first step What is the expected number of times the process returns to the first step until it ends? It can be proved that this number may be represented as a fraction $P/Q$, where $P$ and $Q$ are coprime integers and $Q \\neq 0$ modulo $998244353$. Compute $P \\cdot Q^{-1}$ modulo $998244353$, where $Q^{-1}$ denotes the inverse of $Q$ modulo $998244353$. ### Input - The first line of the input contains a single integer $N$. - Each of the next $N - 1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between vertices $u$ and $v$. ### Output Print a single line containing one integer, $P \\cdot Q^{-1}$ modulo $998244353$. ### Constraints - $2 \\le N \\le 2,000$ - $1 \\le u, v \\le N$ - the graph described on the input is a tree ### Example Input ``` 2 1 2 ``` ### Example Output ``` 887328315 ``` ### Explanation There are $3$ possible paths: $(1, 1)$, $(1, 2)$ and $(2, 2)$. - If we paint $(1, 2)$ first, then whichever path we choose next, we will end with $1$ return. This happens with probability $1/3$. - If we paint $(1, 1)$ or $(2, 2)$ first, there is only one way we can end with $2$ returns: by choosing the path consisting of the other unpainted vertex next. Therefore, with probability $2/3 \\cdot 1/3$, we end with $2$ returns and with probability $2/3 \\cdot 2/3$, we end with $1$ return. In total, the expected value is $1 \\cdot \\frac{1}{3} + 1 \\cdot \\frac{4}{9} + 2 \\cdot \\frac{2}{9} = \\frac{11}{9}$. Since $9^{-1} = 443664157$ modulo $998244353$, the answer is $(11 \\cdot 443664157) \\% 998244353$. ### Example Input ``` 3 1 2 2 3 ``` ### Example Output ``` 471393168 ```
