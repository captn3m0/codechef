---
category_name: easy
problem_code: SUBREM
problem_name: 'Subtree Removal'
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
problem_author: ashishgup
problem_tester: null
date_added: 25-03-2019
tags:
    - april19
    - ashishgup
    - dfs
    - dynamic
    - simple
    - tree
editorial_url: 'https://discuss.codechef.com/problems/SUBREM'
time:
    view_start_date: 1555320602
    submit_start_date: 1555320602
    visible_start_date: 1555320602
    end_date: 1735669800
    current: 1559472961
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/APRIL19/hindi/SUBREM.pdf), \[Bengali\](http://www.codechef.com/download/translated/APRIL19/bengali/SUBREM.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/APRIL19/mandarin/SUBREM.pdf), \[Russian\](http://www.codechef.com/download/translated/APRIL19/russian/SUBREM.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/APRIL19/vietnamese/SUBREM.pdf) as well. You are given a rooted tree with $N$ nodes (numbered $1$ through $N$); node $1$ is the root. Each node has a value; let's denote the value of node $i$ by $A\_i$. You may perform the following operation any number of times (including zero): choose any node which still exists in the tree and remove the whole subtree of this node including itself. Let's define the \*profit\* as the sum of values of all nodes which currently exist in the tree minus $X \\cdot k$, where $k$ denotes the number of times this operation was performed. Find the maximum possible profit. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $X$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. - Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that nodes $u$ and $v$ are connected by an edge. ### Output For each test case, print a single line containing one integer — the maximum profit. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 10^5$ - $1 \\le X \\le 10^9$ - $1 \\le u, v \\le N$ - $|A\_i| \\le 10^9$ for each valid $i$ - the graph described on the input is a tree ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le N \\le 1,000$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 1 3 5 1 -5 -10 1 2 2 3 ``` ### Example Output ``` -4 ```
