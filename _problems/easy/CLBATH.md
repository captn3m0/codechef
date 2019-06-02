---
category_name: easy
problem_code: CLBATH
problem_name: Bathwater
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
problem_author: meooow
problem_tester: null
date_added: 1-02-2019
tags:
    - basic
    - cole2019
    - meooow
    - simple
editorial_url: 'https://discuss.codechef.com/problems/CLBATH'
time:
    view_start_date: 1551205800
    submit_start_date: 1551205800
    visible_start_date: 1551205800
    end_date: 1735669800
    current: 1559472940
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.It's winter and taking a bath is a delicate matter. Chef has two buckets of water. The first bucket has $v\_1$ volume of cold water at temperature $t\_1$. The second has $v\_2$ volume of hot water at temperature $t\_2$. Chef wants to take a bath with at least $v\_3$ volume of water which is at exactly $t\_3$ temperature. To get the required amount of water, Chef can mix some water obtained from the first and second buckets. Mixing $v\_x$ volume of water at temperature $t\_x$ with $v\_y$ volume of water at temperature $t\_y$ yields $v\_x + v\_y$ volume of water at temperature calculated as $$\\frac{v\_x t\_x + v\_y t\_y}{v\_x + v\_y}$$ Help Chef figure out if it is possible for him to take a bath with at least $v\_3$ volume of water at temperature $t\_3$. Assume that Chef has no other source of water and that no heat is lost by the water in the buckets with time, so Chef cannot simply wait for the water to cool. ### Input - The first line contains $n$, the number of test cases. $n$ cases follow. - Each testcase contains of a single line containing 6 integers $v\_1, t\_1, v\_2, t\_2, v\_3, t\_3$. ### Output - For each test case, print a single line containing "YES" if Chef can take a bath the way he wants and "NO" otherwise. ### Constraints - $1 \\leq n \\leq 10^5$ - $1 \\leq v\_1, v\_2, v\_3 \\leq 10^6$ - $1 \\leq t\_1
