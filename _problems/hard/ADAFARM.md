---
category_name: hard
problem_code: ADAFARM
problem_name: 'Ada Farm'
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
problem_author: alei
problem_tester: null
date_added: 31-08-2018
tags:
    - alei
    - centroid
    - cook99
    - disjoint
    - geometry
    - hard
    - implementation
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/ADAFARM'
time:
    view_start_date: 1540146602
    submit_start_date: 1540146602
    visible_start_date: 1540146602
    end_date: 1735669800
    current: 1559472988
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK99/hindi/ADAFARM.pdf), \[Spanish\](http://www.codechef.com/download/translated/COOK99/spanish/ADAFARM.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/COOK99/mandarin/ADAFARM.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK99/russian/ADAFARM.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK99/vietnamese/ADAFARM.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK99/bengali/ADAFARM.pdf) as well. Ada has a farm in the shape of a convex polygon. For simplicity, the vertices of the polygon are numbered $1$ through $N$ in clockwise order. There are many cows living on the farm. Cows fight often, so Ada wants to divide the farm into separate regions using fences to prevent accidents. Each fence can be considered a line segment. Ada is worried about the free space available for each cow, so she needs to know the area of the region inhabited by a particular cow sometimes. As her apprentice, your task is to perform $Q$ queries. There are two types of queries: - $1\\;u\\;v$: Build a fence between vertices $u$ and $v$. It is guaranteed that this fence does not intersect any previously built fence (but they may have common endpoints). - $2\\;x\\;y$: Find the area of the region inhabited by a cow at position $(x, y)$. Sometimes, the point may lie on a fence (the cow is trying to cross the fence); it may also be outside the farm or on its border (the cow is escaping!). In these cases, the area is $0$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $Q$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains two space-separated integers $x$ and $y$ denoting the coordinates of the $i$-th vertex. - Each of the next $Q$ lines contains three space-separated integers describing a query in the above format. ### Output For each query of the second type, print a single line containing one real number with exactly one decimal place — the area of the given region. ### Constraints - $1 \\le T \\le 4$ - $3 \\le N \\le 10^5$ - $1 \\le Q \\le 10^5$ - the sum of $N$ over all test cases does not exceed $3 \\cdot 10^5$ - the sum of $Q$ over all test cases does not exceed $3 \\cdot 10^5$ - $1 \\le u, v \\le N$ - $0 \\le x, y \\le 2 \\cdot 10^9$ - no three vertices are collinear ### Example Input ``` 1 6 5 5 0 3 0 0 3 2 5 6 5 8 3 2 3 1 1 4 1 2 3 1 1 4 6 2 6 4 ``` ### Example Output ``` 27.0 11.0 4.0 ``` ### Explanation \*\*Example case 1:\*\* ![](https://codechef_shared.s3.amazonaws.com/download/CK99TST/ADAFARM/ADAFARM.png)The farm is a hexagon as depicted in the picture above. The queries are as follows: - Query on point $\\mathsf{G}$, the answer is the area of the hexagon. - Add fence $\\mathsf{AD}$, the farm is split into two regions. - Again a query on point $\\mathsf{G}$, the answer is the area of region $\\mathsf{ABCD}$. - Add fence $\\mathsf{DF}$, the farm is split into three regions in total. - Query on point $\\mathsf{H}$, the answer is the area of region $\\mathsf{DEF}$.
