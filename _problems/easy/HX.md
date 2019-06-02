---
category_name: easy
problem_code: HX
problem_name: 'Forces in the crystal'
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
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1.73209 - 2.59814'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 22-09-2009
tags:
    - admin
time:
    view_start_date: 1255253400
    submit_start_date: 1255253400
    visible_start_date: 1255253400
    end_date: 1735669800
    current: 1525198935
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Suppose that we have a crystalline triangular grid of atoms. Atoms are arranged on a regular grid, and each atom has six neighbors (unless it lies on the boundary of crystal). Each atom has an electric charge of q, and can be polarized in only one of two directions: up or down (the laws of physics in Byteland are somewhat surprising!). If two atoms are neighbors and share the same polarization, then a destructive force against the crystal occurs, whose value is equal to q1\*q2. We can choose the polarization for each atom, and we would like to minimize total force working against the crystal, i.e., the sum of values of all the individual forces.

### Input

First, 1000≤n≤2000, the size of input. Then n lines with n numbers in each follow. In the x-th line, 1≤x≤n, the y-th number, 1≤y≤n, is the charge of the atom with coordinates in the crystal equal to (x,y) if x is odd, (x,y+1/2) otherwise. For any atom at coordinates (x,y), the coordinates of the neighbors are assumed to be the following (as long as they appear in the crystal): (x-1,y-1/2),(x-1,y+1/2),(x,y-1),(x,y+1),(x+1,y-1/2),(x+1,y+1/2). Each charge q is in the range 0.1≤q≤1.

### Output

For each atom given at input, output 0 or *1* depending on whether the polarization of the atom should be directed up or down.

### Score

The score of your program is equal to the value of the force acting on the crystal. The program is tested multiple times for different data sets, and the results are averaged. ### Example

<pre><strong>Input:</strong>
3
1 2 3
4 5 6
7 8 9

<strong>Output:</strong>
0 0 0
0 0 0
0 0 1

<strong>Score:</strong>
269 = (1*2+1*4+2*3+2*5+2*4+3*6+3*5+4*5+4*7+4*8+5*6+5*8+7*8)
</pre>