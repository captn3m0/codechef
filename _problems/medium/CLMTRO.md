---
category_name: medium
problem_code: CLMTRO
problem_name: Metro
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: meooow
problem_tester: null
date_added: 4-02-2019
tags:
    - cole2019
    - medium
    - meooow
editorial_url: 'https://discuss.codechef.com/problems/CLMTRO'
time:
    view_start_date: 1551205800
    submit_start_date: 1551205800
    visible_start_date: 1551205800
    end_date: 1735669800
    current: 1559472970
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.The city of Chefland has a metro network of $n$ stations where there are metro tunnels between certain pairs of stations. The budget was tight during construction, so the $n$ stations are connected using only $n - 1$ tunnels. Every station is still reachable from every other station. Being initially constructed with such a tight budget, it is no surprise that they have fallen into disrepair over time. Chef, the mayor of Chefland, has secured $k$ dollars for renovating the metro stations. Each metro station is different and the $i^{th}$ station requires $a\_i$ dollars to renovate. But, if one or more stations directly connected to the $i^{th}$ station are also being renovated, it is possible to share certain resources between the stations and the cost of renovating the $i^{th}$ station drops to $b\_i$ dollars. Help Chef figure out what is the maximum number of stations he can renovate using $k$ dollars. ### Input - The first line contains $t$, the number of test cases. $t$ cases follow. - The first line of each test case contains two integers $n$ and $k$. - The next line contains $n$ integers $a\_1, a\_2, \\dots, a\_n$. - The next line contains $n$ integers $b\_1, b\_2, \\dots, b\_n$. - $n - 1$ lines follow, each with a pair of integers $u$ and $v$ denoting that the $u^{th}$ and $v^{th}$ stations are connected by a tunnel. ### Output - For each testcase, output a single line containing the maximum number of stations that can be renovated. ### Constraints - $1 \\leq t \\leq 200$ - $2 \\leq n \\leq 5000$ - $1 \\leq k \\leq 10^{12}$ - $1 \\leq b\_i
