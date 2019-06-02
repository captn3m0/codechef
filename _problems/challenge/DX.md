---
category_name: challenge
problem_code: DX
problem_name: 'Pack the balls in a box!'
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
    - kotlin
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '0.704286'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 5-05-2009
tags:
    - admin
time:
    view_start_date: 1244985518
    submit_start_date: 1244985518
    visible_start_date: 1244985274
    end_date: 1735669800
    current: 1525199511
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Suppose we have a set of balls and a large cuboid box, with a rectangle as its base. The box has a fixed size at the base, but we can choose its height. We would like to place all the balls within the box, and at the same time try to minimize its height.

### Input

First, 2 integers, 10 ≤ a,b ≤ 100 - the dimensions of the rectangular base of the box. Then, an integer 1 ≤ n ≤ 10000, representing the number of balls. The following n values 1 ≤ ri ≤ 5 are the radii of the respective balls.

### Output

You should write to output n triples of floating-point numbers, the ith triple being the x,y, and z coordinates of the center of the ith ball.

If we want to be precise, the coordinates of the points written to output must fulfill the following constraints for the i-th point: xi-ri ≥ 0, yi-ri ≥ 0, zi-ri ≥ 0, xi+ri ≤ a, yi+ri ≤ b. Moreover, for each i ≠ j, (xi - xj)2 + (yi - yj)2 + (zi - zj)2 ≥ (ri + rj)2 (no two balls are allowed to overlap).

### Scoring

 The goal is to minimize the height h of the box, where h = maxi (zi+ri). For each data set, your program will be scored by the proportion of the box volume actually used by the balls:

*score* = 4/3\*π\*(r13+..+rn3)/(a\*b\*h).

The program is run independently for a number of data sets, and the displayed score is the mean of scores obtained for individual data sets.

### Example

<pre>
<b>Input:</b>
5 5
2
1.0
2.0

<b>Output:</b>
4.0 4.0 3.0
2.0 2.0 2.0

<b>Score:</b>
37.6991118/100.0 = 0.376991118
</pre>