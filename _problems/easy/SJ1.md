---
category_name: easy
problem_code: SJ1
problem_name: 'Playing with Numbers'
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
problem_author: sj1397
problem_tester: null
date_added: 19-03-2019
tags:
    - april19
    - easy
    - gcd
    - number
    - sj1397
editorial_url: 'https://discuss.codechef.com/problems/SJ1'
time:
    view_start_date: 1555320602
    submit_start_date: 1555320602
    visible_start_date: 1555320602
    end_date: 1735669800
    current: 1559472959
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/APRIL19/hindi/SJ1.pdf), \[Bengali\](http://www.codechef.com/download/translated/APRIL19/bengali/SJ1.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/APRIL19/mandarin/SJ1.pdf), \[Russian\](http://www.codechef.com/download/translated/APRIL19/russian/SJ1.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/APRIL19/vietnamese/SJ1.pdf) as well. You are given a rooted tree with $N$ nodes (numbered $1$ through $N$); node $1$ is the root. For each valid $i$, the $i$-th node has a value $v\_i$ and another parameter $m\_i$. A leaf is a node without sons. Let's denote the number of leaf nodes in the tree by $L$ and their numbers by $l\_1, l\_2, \\ldots, l\_L$, in increasing order. Then, for each valid $i$, let's define the \*answer\* for the leaf $l\_i$ in the following way: - Consider the path from the root to $l\_i$. For each node on this path (including the root and this leaf), choose a non-negative integer and multiply the value of this node by it. - Sum up the resulting values of all nodes on this path. - The answer $a\_i$ for this leaf is defined as the maximum possible remainder of this sum modulo $m\_{l\_i}$. Find the answers for all leaves. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - Each of the following $N-1$ lines contains two space-separated integers $x$ and $y$ denoting that nodes $x$ and $y$ are connected by an edge. - The next line contains $N$ space-separated integers $v\_1, v\_2, \\ldots, v\_N$. - The last line contains $N$ space-separated integers $m\_1, m\_2, \\ldots, m\_N$. ### Output For each test case, print a single line containing $L$ space-separated integers $a\_1, a\_2, \\ldots, a\_L$. ### Constraints - $1 \\le T \\le 8$ - $2 \\le N \\le 10^5$ - $1 \\le x, y \\le N$ - $1 \\le v\_i \\le 10^{18}$ for each valid $i$ - $1 \\le m\_i \\le 10^{18}$ for each valid $i$ - the graph described on the input is a tree ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 1 5 1 2 2 5 1 3 3 4 2 3 4 6 7 1 2 3 2 10 ``` ### Example Output ``` 0 9 ``` ### Explanation \*\*Example case 1:\*\* There are only two leaves, $l\_1 = 4$ and $l\_2 = 5$. The answers for them are $a\_1 = 0$ and $a\_2 = 9$.
