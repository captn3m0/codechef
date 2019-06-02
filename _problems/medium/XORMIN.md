---
category_name: medium
problem_code: XORMIN
problem_name: 'Mininum XOR over Tree'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: evilbuggy
problem_tester: null
date_added: 12-03-2019
tags:
    - april19
    - data
    - evilbuggy
    - medium
    - segment
    - trie
editorial_url: 'https://discuss.codechef.com/problems/XORMIN'
time:
    view_start_date: 1555320602
    submit_start_date: 1555320602
    visible_start_date: 1555320602
    end_date: 1735669800
    current: 1559472987
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/APRIL19/hindi/XORMIN.pdf), \[Bengali\](http://www.codechef.com/download/translated/APRIL19/bengali/XORMIN.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/APRIL19/mandarin/XORMIN.pdf), \[Russian\](http://www.codechef.com/download/translated/APRIL19/russian/XORMIN.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/APRIL19/vietnamese/XORMIN.pdf) as well. You are given a rooted tree with $N$ vertices (numbered $1$ through $N$); vertex $1$ is the root. Each vertex has a weight; let's denote the weight of vertex $i$ by $w\_i$. You should answer $Q$ queries. The queries have to be processed online, i.e. to obtain each query, you need the answer to the previous query. In each query, you are given a vertex $v$ and a parameter $k$. For each vertex $u$ in the subtree of $v$ (including $v$), consider the value $w\_u \\oplus k$ ($\\oplus$ denotes the bitwise XOR operation). The answer to this query is the maximum of these values and the smallest $u$ such that vertex $u$ is in the subtree of vertex $v$ and $w\_u \\oplus k$ is equal to this maximum. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated integers $w\_1, w\_2, \\ldots, w\_N$. - Each of the next $N-1$ lines contains two space-separated integers $x$ and $y$ denoting that there is an edge between nodes $x$ and $y$. - The next $Q$ lines describe queries. Each of these lines contains two space-separated integers $a$ and $b$. The parameters $v$ and $k$ can be obtained in the following way: let's denote the value and vertex from the answer to the previous query by $x\_l$ and $v\_l$ respectively ($x\_l = v\_l = 0$ if this is the first query); then, $v = a \\oplus v\_l$ and $k = b \\oplus x\_l$. ### Output For each query, print a single line containing two space-separated integers — the answer to the query, i.e. the number of the vertex for which we get the maximum value and the maximum value. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 2 \\cdot 10^5$ - $1 \\le Q \\le 10^6$ - $1 \\le x, y, v \\le N$ - $1 \\le w\_i \\lt 2^{20}$ for each valid $i$ - $1 \\le k \\lt 2^{20}$ - the sum of $N$ over all test cases does not exceed $2 \\cdot 10^5$ - the sum of $Q$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (10 points):\*\* - the sum of $N$ over all test cases does not exceed $5,000$ - the sum of $Q$ over all test cases does not exceed $5,000$ \*\*Subtask #2 (15 points):\*\* - the sum of $N$ over all test cases does not exceed $2,000$ - the sum of $Q$ over all test cases does not exceed $10^6$ \*\*Subtask #3 (75 points):\*\* original constraints ### Example Input ``` 1 10 5 9 17 93 16 3 61 23 11 2 1 1 2 2 5 5 8 1 3 1 4 3 6 3 7 6 9 6 10 4 14 7 123 5 103 9 32 5 118 ``` ### Example Output ``` 4 30 7 114 8 30 3 99 6 40 ```
