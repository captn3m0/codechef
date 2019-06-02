---
category_name: easy
problem_code: PCJ18G
problem_name: 'Chef and Pizza'
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
problem_author: madhav_1999
problem_tester: null
date_added: 29-07-2018
tags:
    - madhav_1999
    - madhav_1999
    - pcj
    - prakhar17252
    - proconjunior
    - tanmay28
editorial_url: 'https://discuss.codechef.com/problems/PCJ18G'
time:
    view_start_date: 1534176000
    submit_start_date: 1534176000
    visible_start_date: 1534176000
    end_date: 1735669800
    current: 1559472954
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef's pizza is the tastiest pizza to exist, and the reason for that is his special, juicy homegrown tomatoes. Tomatoes can be grown in rectangular patches of any side lengths. However, Chef only has a limited amount of land. Consider the entire town of Chefville to be consisting of cells in a rectangular grid of positive coordinates. Chef own all cells $(x, y)$ that satisfy $x\*y \\leq N$ As an example if $N = 4$, Chef owns the following cells: $(1, 1), (1, 2), (1, 3), (1, 4), (2, 1), (2, 2), (3, 1), (4, 1) $ Chef can only grow tomatoes in rectangular patches consisting only of cells which belong to him. Also, if he uses a cell, he must use it entirely. He cannot use only a portion of it. Help Chef find the number of unique patches of rectangular land that he can grow tomatoes in! Since this number can be very large, output it modulo $1000000007$. ###Input: - The first line of the input contains $T$, the number of test cases. - The next $T$ lines of input contains one integer $N$. ###Output: For each testcase, output the number of ways modulo $1000000007$. ###Constraints - $1 \\leq T \\leq 5$ - $1 \\leq N \\leq 10^{10}$ ###Sample Input: 2 4 10000000000 ###Sample Output: 23 227374950
