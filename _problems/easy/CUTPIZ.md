---
category_name: easy
problem_code: CUTPIZ
problem_name: 'Cutting Pizza'
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
problem_author: vijju123
problem_tester: null
date_added: 17-11-2018
tags:
    - vijju123
time:
    view_start_date: 1542546000
    submit_start_date: 1542546000
    visible_start_date: 1542546000
    end_date: 1735669800
    current: 1559472942
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Vasya has ordered a pizza delivery. The pizza can be considered a perfect circle. There were $n$ premade cuts in the pizza when it was delivered. Each cut is a straight segment connecting the center of the pizza with its boundary. Let $O$ be the center of the pizza, $P\_i$ be the endpoint of the $i$-th cut lying on the boundary, and $R$ be the point of the boundary straight to the right of $O$. Then the counterclockwise-measured angle $\\angle ROP\_i$ is equal to $a\_i$ degrees, where $a\_i$ is an integer between $0$ and $359$. Note that angles between $0$ and $180$ angles correspond to $P\_i$ in the top half of the pizza, while angles between $180$ and $360$ angles correspond to the bottom half. Vasya may cut his pizza a few more times, and the new cuts still have to be straight segments starting at the center. He wants to make the pizza separated into several equal slices, with each slice being a circular sector with no cuts inside of it. How many new cuts Vasya will have to make? ###Input: The first line of input contains $T$ , i.e number of test cases per file. The first line of each test case contains a single integer $n-$ the numbers of premade cuts ($2 \\leq n \\leq 360$). The second lines contains $n$ integers $a\_1, \\ldots, a\_n-$ angles of the cuts $1, \\ldots, n$ respectively ($0 \\leq a\_1
