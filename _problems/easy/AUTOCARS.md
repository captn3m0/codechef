---
category_name: easy
problem_code: AUTOCARS
problem_name: 'Autonomous Cars'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 17-12-2018
tags:
    - admin2
time:
    view_start_date: 1545157800
    submit_start_date: 1545157800
    visible_start_date: 1545157800
    end_date: 1735669800
    current: 1559472935
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are in the future. It's the time of autonomous cars. Switching lanes is a pretty difficult task for autonomous cars, and you have the logs from an experiment you had run with two cars. You want to verify whether the logs are corrupted, or could be valid. In that experiment, you had a highway consisting of two lanes. These were represented by 2 rows of an infinite grid. The cell (1, 1) is the top left cell which is the starting point of the first lane. Cell (2, 1) is the bottom left cell of the grid which is the starting point of the second lane. There are two cars, 1 and 2 that start from the cell (1, 1) and (2, 1). At each instant, a car has the following choices. - Stay at the current position. - Move one cell to the right. - Switch Lanes. When a car switches its lane, it stays in the same column. That is, from (1, i) it could go to (2, i), or from (2, i) it could go to (1, i). But both both cars shouldn't end up at the same cell at any point. Note that there could have been a car which had moved at the very instant that you move into it. Consider one such scenario of driving cars. Time $t = 0$ ``` 1..... 2..... ``` Time $t = 1$. Car 2 advances one cell right. Car 1 stays at the same place. ``` 1..... .2.... ``` Time $t = 2$. Car 2 stays at its place. Car 1 switches the lane. ``` ...... 12.... ``` Time $t = 3$. Car 2 moves one cell to the right. Car 1 also moves one cell to the right. ``` ...... .12... ``` Time $t = 4$. Both the cars stay in the same place. ``` ...... .12... ``` You are given positions of the car at $n$ instants. Your task is to check whether this situation is feasible or not. ### Input - The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows. - The first line of each test case contains an integer $n$ denoting the number of instants where the positions of the cars were recorded. - Each of next $n$ lines contains 5 space separated integers denoting $t\_i, x\_i, y\_i, X\_i, Y\_i$ denoting time, $x$ and $y$ coordinate of the first car, and that of second car. ### Output For each test case, output either `yes` or `no` according to the answer to the problem. ###Constraints - $1 \\le T \\le 10^5$ - $1 \\le n \\leq 10^5$ - $1 \\le t\_i, y\_i, X\_i, Y\_i \\leq 10^9$ - $1 \\leq x\_i \\leq 2$ - $t\_i
