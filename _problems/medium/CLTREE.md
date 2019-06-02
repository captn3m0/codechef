---
category_name: medium
problem_code: CLTREE
problem_name: Paths
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: meooow
problem_tester: null
date_added: 24-02-2019
tags:
    - centroid
    - cole2019
    - medium
    - meooow
editorial_url: 'https://discuss.codechef.com/problems/CLTREE'
time:
    view_start_date: 1551205800
    submit_start_date: 1551205800
    visible_start_date: 1551205800
    end_date: 1735669800
    current: 1559472970
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef lives in Treeland which, as the name implies, is shaped like a \[tree\](https://en.wikipedia.org/wiki/Tree\_(data\_structure)). Chef's home, his school, and the playground where he likes to play are located on three different vertices in this tree. Chef tells you that every morning he walks across $x$ edges on the simple path from his home to his school. In the afternoon, he walks along the simple path from his school to the playground crossing $y$ edges. And in the evening, he walks back home across $z$ edges on the simple path from the playground to his home. You have a map of Treeland where each vertex is labelled from $1$ to $n$. Find the number of triplets $(a, b, c)$ such that vertices $a, b, c$ could be Chef's home, his school and the playground respectively. If there is no such triplet, Chef may have miscounted some edges and you should output $0$. ### Input - The first line contains $t$, the number of test cases. $t$ cases follow. - The first line of each test case contains four integers $n, x, y, z$. - $n - 1$ lines follow, each with a pair of integers $u$ and $v$ denoting that there is an edge between $u$ and $v$. ### Output - For each testcase, output a single line containing the number of triplets which satisfy Chef's description. ### Constraints - $1 \\leq t \\leq 1000$ - $3 \\leq n \\leq 10^5$ - $1 \\leq x, y, z \\leq n - 1$ - Sum of $n$ over all test cases does not exceed $10^5$. ### Sample Input 2 7 4 3 3 1 2 2 3 3 4 4 5 3 6 3 7 3 2 2 2 1 2 1 3 ### Sample Output 4 0 ### Explanation \*\*Case 1:\*\* There are 4 possibilities as illustrated below. Consider the orange vertex as Chef's home, the green vertex as Chef's school, and the blue vertex as the playground. !\[sample\](https://codechef\_shared.s3.amazonaws.com/download/HYC/External\_contest\_images/COLE2019/CLTREE/paths\_sample.png) \*\*Case 2:\*\* There are no triplets that satisfy Chef's description.
