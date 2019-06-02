---
category_name: medium
problem_code: SWAPSIGN
problem_name: 'Misplaced Signs'
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
problem_author: kalpitk
problem_tester: null
date_added: 20-03-2019
tags:
    - kalpitk
time:
    view_start_date: 1555270200
    submit_start_date: 1555270200
    visible_start_date: 1555270200
    end_date: 1735669800
    current: 1559472984
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Instead of writing,$a \\times (b+c) = a \\times b + a \\times c$, Joe by mistakenly swapped the $\\times$ and + signs on the left hand side. The equation became, $a+(b \\times c)= a \\times b + a \\times c$ ?

Joe somehow knew the value of a, but forgot the values of b and c such that the equation is satisfied. Can you help him find how many ordered pairs $(b,c)$ satisfy the above equation?

If there exists infinite ordered pair, output -1.

Note: $a,b,c$ are integers

### Input 

- Single line containing a single integer $a$

### Output

Single line containing one integer, denoting the number of ordered set (b,c) ### Constraints

- $|a| \\leq 10^{18}$

### Sample Input

2 ### Sample Output

4 ### Explanation

Possible ordered pairs are $(0,1), (1,0), (3,4), (4,3)$
