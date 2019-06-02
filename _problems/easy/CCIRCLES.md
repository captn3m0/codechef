---
category_name: easy
problem_code: CCIRCLES
problem_name: 'Chef and Circles'
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
problem_author: l_returns
problem_tester: null
date_added: 22-09-2018
tags:
    - easy
    - geometry
    - l_returns
    - maths
    - oct18
editorial_url: 'https://discuss.codechef.com/problems/CCIRCLES'
time:
    view_start_date: 1540027803
    submit_start_date: 1540027803
    visible_start_date: 1540027803
    end_date: 1735669800
    current: 1559472938
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/OCT18/hindi/CCIRCLES.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/OCT18/bengali/CCIRCLES.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/OCT18/mandarin/CCIRCLES.pdf) , \[Russian\](http://www.codechef.com/download/translated/OCT18/russian/CCIRCLES.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/OCT18/vietnamese/CCIRCLES.pdf) as well. There are $N$ circles in a plane. Circle $i$ and circle $j$ form a \*good pair\* if it is possible to choose a point $P\_1$ on the perimeter of circle $i$ and a point $P\_2$ on the perimeter of circle $j$ such that the Euclidean distance between $P\_1$ and $P\_2$ is exactly $K$. (Note that $P\_1$ and $P\_2$ do not need to have integer coordinates.) You should answer $Q$ queries. In each query, you are given the required distance $K$. Chef is interested in finding the number of good pairs of distinct circles for each query. Please help him. Note: Circle $i$ and circle $j$ are distinct when $i \\neq j$. There may be any number of circles that coincide (have identical centers and radii). ### Input - The first line of the input contains two space-separated integers $N$ and $Q$ denoting the number of circles and the number of queries respectively. - Each of the following $N$ lines contains three space-separated integers $X$, $Y$ and $R$ describing a circle with radius $R$ and center $(X, Y)$. - Each of the next $Q$ lines contains one integer $K$ describing a query. ### Output For each query, print a single line containing one integer — the number of good pairs of circles. ### Constraints - $2 \\le N \\le 10^3$ - $1 \\le Q \\le 5\\cdot 10^5$ - $X, Y \\le |2\\cdot 10^5|$ - $1 \\le R \\le 2\\cdot 10^5$ - $0 \\le K \\le 10^6$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $2 \\le N \\le 10^2$ - $1 \\le Q \\le 5\\cdot 10^2$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 3 0 0 5 8 3 2 0 10 20 ``` ### Example Output ``` 0 1 0 ``` ### Explanation The distance between the point $(0.00, -5.00)$ on circle $1$ and the point $(8.00, 1.00)$ on circle $2$ is $10$. There is no pair of points on these two circles with distance $0$ or $20$.
