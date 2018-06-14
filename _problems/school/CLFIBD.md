---
category_name: school
problem_code: CLFIBD
problem_name: 'Fibonacci String'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: avijit_agarwal
problem_tester: null
date_added: 31-03-2018
tags:
    - avijit_agarwal
    - cakewalk
    - cole2018
    - string
editorial_url: 'https://discuss.codechef.com/problems/CLFIBD'
time:
    view_start_date: 1524062940
    submit_start_date: 1524062940
    visible_start_date: 1524062940
    end_date: 1735669800
    current: 1525454389
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available. For a string $S$ let the unique set of characters that occur in it one or more times be $C$. Consider a permutation of the elements of $C$ as $(c\_1, c\_2, c\_3 ... )$. Let $f(c)$ be the number of times $c$ occurs in $S$. If any such permutation of the elements of $C$ satisfies $f(c\_i) = f(c\_{i-1}) + f(c\_{i-2})$ for all $i \\ge 3$, the string is said to be a \*\*dynamic string\*\*. Mr Bancroft is given the task to check if the string is dynamic, but he is busy playing with sandpaper. Would you help him in such a state? Note that if the number of distinct characters in the string is less than 3, i.e. if $|C|
