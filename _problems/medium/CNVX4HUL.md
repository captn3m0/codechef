---
category_name: medium
problem_code: CNVX4HUL
problem_name: 'Points and Convex Hulls'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: erfaniaa
problem_tester: null
date_added: 16-03-2019
tags:
    - cook
    - cook104
    - erfaniaa
    - medium
editorial_url: 'https://discuss.codechef.com/problems/CNVX4HUL'
time:
    view_start_date: 1553452200
    submit_start_date: 1553452200
    visible_start_date: 1553452200
    end_date: 1735669800
    current: 1559472970
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\*\*New constraints are not updated in the translations.\*\* ### Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK104/hindi/CNVX4HUL.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK104/mandarin/CNVX4HUL.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK104/russian/CNVX4HUL.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK104/vietnamese/CNVX4HUL.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK104/bengali/CNVX4HUL.pdf) as well. You are given $N$ distinct points on a two-dimensional plane. It is guaranteed that no three of them are collinear. Let's call a subset of these points \*compact\* if the \[convex hull\](https://en.wikipedia.org/wiki/Convex\_hull) of this subset has exactly four vertices. Find the number of compact non-empty subsets of the given points. Since this number may be very large, compute it modulo $10^9 + 7$. ### Input - The first line of the input contains a single integer $N$. - Each of the next $N$ lines contains two space-separated integers $x$ and $y$ denoting the coordinates of one point. ### Output Print a single line containing one integer ― the number of compact subsets modulo $10^9 + 7$. ### Constraints - $1 \\le N \\le 300$ - $|x|, |y| \\le 10^9$ - no two points coincide and no three points are collinear ### Example Input 1 ``` 4 0 0 100 0 0 100 100 100 ``` ### Example Output 1 ``` 1 ``` ### Example Input 2 ``` 5 0 0 100 0 0 100 100 100 50 60 ``` ### Example Output 2 ``` 4 ```
