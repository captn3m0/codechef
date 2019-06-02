---
category_name: easy
problem_code: IMPACT
problem_name: 'Some Impact'
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
date_added: 6-04-2019
tags:
    - kalpitk
time:
    view_start_date: 1555270200
    submit_start_date: 1555270200
    visible_start_date: 1555270200
    end_date: 1735669800
    current: 1559472948
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Consider the infinite $x$ axis. There are $N$ impacts on this X-axis at integral points ($X\_1$,$X\_2$,....$X\_N$) (all distinct) . An impact at a point $X$i propagates such that at a point $X$0, the effect of the impact is $K^{|X\_i - X\_0|}$. Given the point $X\_0$, $N$ and $K$. Assume the total impact on $X\_0$ is $M$, find if it is possible to do so.

**Note:** You are not required to find the set X
Formally print "yes" if this is possible and "no" if not possible.

### Input:

- First line will contain $T$, number of testcases. Then the testcases follow.
- Each testcase contains of a single line of input, four integers $N$,$K$,$M$,$X$0

### Output:

- The output of each test case is either "yes" or "no"

### Constraints 

- $1\\leq T \\leq 1000$
- $1\\leq N \\leq 100$
- $1\\leq K \\leq 1000$
- $1\\leq M \\leq 10^{18}$
- $-10^9 \\leq X\_0 \\leq 10^9$

### Sample Input:

 2
 4 3 10 10
 2 3 10 10
### Sample Output:

 no
 yes
