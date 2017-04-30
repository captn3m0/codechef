---
category_name: medium
problem_code: BLOCKING
problem_name: 'Block Game'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: shangjingbo
problem_tester: laycurse
date_added: 26-06-2012
tags:
    - aug12
    - graph
    - matching
    - shangjingbo
editorial_url: 'http://discuss.codechef.com/problems/BLOCKING'
time:
    view_start_date: 1344676996
    submit_start_date: 1344676996
    visible_start_date: 1344677400
    end_date: 1735669800
    current: 1493557491
layout: problem
---
All submissions for this problem are available.In the magic land, there is a smart but naughty boy Crane. Crane has **n** houses, and **n** friends (both numbered from 1 to **n**). Crane's mother has scheduled a plan for all his friends such that each friend visits each house of Crane **exactly once**at a different time, i.e., there is at most one friend in any house at any time. But like Crane all his friends are also naughty. Therefore his mother wants to lock away each of his friends in distinct houses. What she'll do is to choose a distinct house for each friend. As that friend visits that house, he'll be locked in that house. That is, Crane's mother wants to find a sequence **block** such that the **i-th** friend will be locked in **block\[i\]-th** house once he visits that house. As she wants to ensure that there is at maximum one person in each house, she must choose the sequence **block** such that if friend A visits house H at time T, and he is locked away in the house, then no other friends visit house H after time T. Help Crane's mother to find such a sequence **block**. ### Input

First line contains a single integer **n** (1 ≤ **n**≤ 100), indicating the number of friends and houses. Then **n** lines follow, with each line containing **n** positive integers. The **j-th** integer in **i-th** line indicates the time when the **i-th** friend will visit the **j-th** house. All times will fit in signed 32-bit integer. ### Output

If there exists a sequence **block** that satisfies the constraints, then output **block\[1\] block\[2\] ... block\[n\]** in one line, separated by a single space. Otherwise if there is no such sequence, output **-1** in one line. If there are multiple answers, then anyone will do. ### Example

```

<b>Input:</b>
3
1 2 3
4 5 6
7 8 9

<b>Output:</b>
3 2 1

```