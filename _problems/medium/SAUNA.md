---
category_name: medium
problem_code: SAUNA
problem_name: 'Sauna Cred'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: balajiganapath
problem_tester: null
date_added: 25-12-2018
tags:
    - balajiganapath
time:
    view_start_date: 1546074900
    submit_start_date: 1546074900
    visible_start_date: 1546074900
    end_date: 1735669800
    current: 1559472982
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Max is an avid sauna visitor. Today he's chilling in the sauna with $n$ friends. Max knows that each friend is going to visit the steam room exactly once, and the $i$-th friend is going to enter the steam room at time $l\_i$, and leave at time $r\_i$ (time is measured in seconds since the start of the visit). Max also wants to make a single visit to the steam room, but he can still choose his entering and leaving time. Max has his heat endurance reputation to maintain. In people's minds, a person $A$ is \_cooler\_ than another person $B$ if $A$ enters the steam room strictly earlier than $B$, but leaves strictly later then $B$ (thus proving that he's able to withstand heat longer). Depending on when Max enters and leaves the steam room, his \_cred\_ will be equal to the number of people that are less cool than Max, minus the number of people that are cooler than Max. Max has his limits, and so he cannot spend more than $t$ seconds in the steam room. Help Max determine the maximum cred he can get if he chooses entering and leaving times optimally. Note that Max's entering and leaving times do not have to be integers, and are even allowed to be negative. ###Input: - The first line of input contains a single integer $T$ - the number of test cases. $T$ descriptions of test cases follow. - The first line of each testcase contains two integers $n$ and $t$, denoting the number of Max's friends, and the maximum time Max can spend in the steam room, respectively. - The following $n$ lines describe entering and leaving time of Max's friends. The $i$-th of these lines contains two integers $l\_i$ and $r\_i$ - the entering and leaving time of the $i$-th friend. ###Output: For each test case, on a separate line print a single integer, the maximum cred Max can get while spending at most $t$ seconds in the steam room. ###Constraints - $1 \\leq T \\leq 2 \\cdot 10^5$ - $1 \\leq n \\leq 2 \\cdot 10^5$ - $1 \\leq t \\leq 10^9$ - $0 \\leq l\_i
