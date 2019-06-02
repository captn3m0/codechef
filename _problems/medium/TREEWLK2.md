---
category_name: medium
problem_code: TREEWLK2
problem_name: 'Tree Walk'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 26-10-2018
tags:
    - binary
    - cases
    - kingofnumbers
    - lca
    - ltime65
    - medium
    - path
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/TREEWLK2'
time:
    view_start_date: 1540659601
    submit_start_date: 1540659601
    visible_start_date: 1540659601
    end_date: 1735669800
    current: 1559472986
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME65/mandarin/TREEWLK2.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME65/bengali/TREEWLK2.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME65/hindi/TREEWLK2.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME65/russian/TREEWLK2.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME65/vietnamese/TREEWLK2.pdf) as well. There are two people walking along a tree with $N$ nodes (numbered $1$ through $N$), each of them with speed 1 edge per second. The walk of the first person is described by a sequence of nodes $u\_1, u\_2, \\dots, u\_K$. This person appears in node $u\_1$ at time $0$ and walks to node $u\_2$ using the shortest \*\*path\*\*; then, immediately after reaching $u\_2$, walks to node $u\_3$ using the shortest path, and so on, until reaching $u\_K$, when this person disappears. The walk of the second person is described by another sequence $v\_1, v\_2, \\dots, v\_L$ in the same manner. Count how many times these two people meet — in other words, how many times they reach the same node (including the first and last nodes of their walks) at the same time. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $K$ and $L$. - Each of the next $N-1$ lines contains two space-separated integers $p$ and $q$ describing an edge between node $p$ and node $q$. - The following line contains $K$ space-separated integers $u\_1, u\_2, \\dots, u\_K$. - The last line contains $L$ space-separated integers $v\_1, v\_2, \\dots, v\_L$. ### Output For each test case, print a single line containing one integer — the number of times the two people meet. ### Constraints - $1 \\le T \\le 1,000$ - $2 \\le N, K, L \\le 10^5$ - $1 \\le p, q \\le N$ - $1 \\le u\_i \\le N$ for each valid $i$ - $1 \\le v\_i \\le N$ for each valid $i$ - $u\_i \\neq u\_{i+1}$ for each valid $i$ - $v\_i \\neq v\_{i+1}$ for each valid $i$ - the sum of $N$ in all test cases does not exceed $5 \\cdot 10^5$ - the sum of $K$ in all test cases does not exceed $5 \\cdot 10^5$ - the sum of $L$ in all test cases does not exceed $5 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $2 \\le N, K, L \\le 10^3$ - the sum of $N$ in all test cases does not exceed $5 \\cdot 10^3$ - the sum of $K$ in all test cases does not exceed $5 \\cdot 10^3$ - the sum of $L$ in all test cases does not exceed $5 \\cdot 10^3$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 1 5 4 3 1 2 2 3 2 4 4 5 1 4 3 5 1 3 5 ``` ### Example Output ``` 3 ```
