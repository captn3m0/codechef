---
category_name: school
problem_code: CLIPLX
problem_name: 'IPL and RCB'
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
problem_author: avijit_agarwal
problem_tester: null
date_added: 13-02-2019
tags:
    - avijit_agarwal
    - cakewalk
    - cole2019
editorial_url: 'https://discuss.codechef.com/problems/CLIPLX'
time:
    view_start_date: 1551205800
    submit_start_date: 1551205800
    visible_start_date: 1551205800
    end_date: 1735669800
    current: 1559472925
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.It's IPL time and as usual RCB are finding it tough to qualify for playoffs. RCB needs a minimum of $X$ more points to qualify for playoffs in their remaining $Y$ matches. A win, tie and loss in a match will yield $2,1,0$ points respectively to a team. You being a true RCB supporter want to find the minimum number of matches RCB needs to win to qualify for playoffs. It is guaranteed that RCB will qualify for playoffs if they win all their remaining $Y$ matches. ###Input: - First line will contain $T$, number of testcases. Then the testcases follow. - Each testcase contains of a single line of input, two space separated integers $X, Y$ ###Output: For each testcase, output in a single line the minimum number of matches RCB must win to qualify for playoffs. ###Constraints : - $1 \\leq T \\leq 10000$ - $1 \\leq X \\leq 100$ - $1 \\leq Y \\leq 100$ - $1 \\leq X \\leq 2\\cdot Y$ ###Sample Input: 2 10 5 1 5 ###Sample Output: 5 0 ###Explanation: - In first case $X=10$ and $Y=5$, so RCB needs $10$ points from remaining $5$ matches to qualify for playoffs. It is only possible if they win all their remaining $5$ matches. - In second case $X=1$ and $Y=5$, so RCB needs $1$ points from their remaining $5$ matches to qualify for playoffs. It can be done if they tie any one of their $5$ matches and lose the remaining $4$. So they need to win $0$ matches.
