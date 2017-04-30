---
category_name: medium
problem_code: CHEFWD
problem_name: 'Chef World'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: div_adm
problem_tester: laycurse
date_added: 3-05-2012
tags:
    - div_adm
    - fibonacci
    - maths
    - matrix
    - sep12
editorial_url: 'http://discuss.codechef.com/problems/CHEFWD'
time:
    view_start_date: 1347356032
    submit_start_date: 1347356032
    visible_start_date: 1347355800
    end_date: 1735669800
    current: 1493557549
layout: problem
---
All submissions for this problem are available.Chef Ciel lives in a long street which can be thought as of x-axis of coordinate system. Her house is at coordinate 0 whereas her restaurant is situated at coordinate **N**. Usually Ciel goes from home to restaurant taking a step of size 1 or 2 in forward direction. We all know how much Chef loves Fibonacci numbers.

But today, Ciel being little casual stepped in wrong direction on her way to her restaurant exactly once and of course she did not set her foot wrong at home. Now she wonders how many ways she can reach her restaurant provided that she stepped wrong once but not at home. 
 She does not go past her restaurant because it is altogether different world and once she reaches her restaurant she stops.

For example, if **N** is **3** then
 -> **1** -> **-1** ->  -> **1** -> **3**,
 -> **2** -> **1** -> **3**
are some possible ways where as
 -> **-1** -> **1** -> **3**, (She did not set her foot wrong at her home)
 -> **1** -> **3**, (She sets her foot wrong direction exactly once)
 -> **1** ->  -> **3**, (Her steps are always size 1 or 2)
 -> **1** -> **2** -> **4** -> **3**, (She does not go past her restaurant)
 -> **1** -> **2** -> **3** -> **2** -> **3** (Once she reaches her restaurant, she stops)
are not.

### Input

First line of input contains **T**, number of test cases which is at most 10000. Then **T** lines follows each containing a positive integer **N** which is at most 1000000000000000 (1015).

### Output

Number of ways Ciel can reach her restaurant modulo 1000000007 (109+7).

```

<b>Sample Input:</b>
2
3
4

<b>Sample Output:</b>
18
44

```