---
category_name: challenge
problem_code: STORO
problem_name: 'Rotation Puzzle'
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
    - ERL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1.49'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 6-04-2010
tags:
    - admin
editorial_url: 'http://discuss.codechef.com/problems/STORO'
time:
    view_start_date: 1273669494
    submit_start_date: 1273669494
    visible_start_date: 1273669494
    end_date: 1735669800
    current: 1525199677
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Recently, with the release of the ultimate computing device bytePad, a platform game with the simple name "Rotation Puzzle" immediately became a phenomenon among Bytelandians. The game is extremely simple, yet quite additive. Here's the rule:

Given a MxN rectangular grid in which each cell contains a unique number from 1 to MxN. In each step, the player can pick any 2x2 subgrid and perform a rotation (whether clockwise or counterclockwise).

The task is to transform from the initial grid to the final configuration, using as few steps as possible.

The final configuration is the configuration

12...nn+1n+2...2n............(m-1)n+1(m-1)n+2...mnYou may have guessed why this game is addictive: it requires a tremendous visualization skill!

### Input

The first line contains a number T (about 5000), which is the number of test cases. Each test case has the following form.

The first line contains two numbers M and N (2 The next M lines contains the description of the grid.

Each test case's input is separated by a blank line.

It is guaranteed that each input data has a solution.

### Output

For each test case, output the result in the following format.

The first line contains a number K, the number of steps you need to solve the puzzle. K must not exceed 10000.

Each line of the next K lines contain three numbers c, i, j (c=0 or c=1, 1Prints a blank link after each test case's output.

### Scoring

Given m and n, we pick a random positive integer K\* and starting from the final configuration, we perform a random operation K\* times to generate the test case. For each test case, your score is K\*/K. Higher score is better. ### Example

<pre>
<b>Input:</b>
2

2 3
1 5 2
4 6 3

2 3
5 6 2
1 4 3

<b>Output:</b>
1
0 1 2

2
1 1 1
0 1 2
</pre>