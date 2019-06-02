---
category_name: easy
problem_code: TREEUNAT
problem_name: 'Tree Unattractiveness'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 13-11-2018
tags:
    - admin2
    - cook100
    - dynamic
    - medium
    - taran_1407
    - tree
editorial_url: 'https://discuss.codechef.com/problems/TREEUNAT'
time:
    view_start_date: 1542565802
    submit_start_date: 1542565802
    visible_start_date: 1542565802
    end_date: 1735669800
    current: 1559472962
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/CK100TST/hindi/TREEUNAT.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/CK100TST/mandarin/TREEUNAT.pdf), \[Russian\](http://www.codechef.com/download/translated/CK100TST/russian/TREEUNAT.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/CK100TST/vietnamese/TREEUNAT.pdf) and \[Bengali\](http://www.codechef.com/download/translated/CK100TST/bengali/TREEUNAT.pdf) as well. You are given a tree with $N$ vertices (numbered $1$ through $N$) and a bag with $N$ markers. There is an integer written on each marker; each of these integers is $0$, $1$ or $2$. You must assign exactly one marker to each vertex. Let's define the \*unattractiveness\* of the resulting tree as the maximum absolute difference of integers written on the markers in any two vertices which are connected by an edge. Find the minimum possible unattractiveness of the resulting tree. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers denoting the numbers on markers in the bag. - Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between vertices $u$ and $v$. ### Output For each test case, print a single line containing one integer — the minimum unattractiveness. ### Constraints - $1 \\le T \\le 30$ - $1 \\le N \\le 100$ - $1 \\le u, v \\le N$ - the graph described on the input is a tree ### Example Input ``` 3 3 0 1 1 1 2 1 3 3 0 1 2 1 2 1 3 4 2 2 2 2 1 2 1 3 3 4 ``` ### Example Output ``` 1 1 0 ``` ### Explanation \*\*Example case 1:\*\*
