---
category_name: hard
problem_code: ASTRD
problem_name: Asteroids
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: mgch
date_added: 15-09-2015
tags:
    - geometry
    - hard
    - jan16
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/ASTRD'
time:
    view_start_date: 1452504600
    submit_start_date: 1452504600
    visible_start_date: 1452504600
    end_date: 1735669800
    current: 1493556613
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN16/mandarin/ASTRD.pdf), [Russian](http://www.codechef.com/download/translated/JAN16/russian/ASTRD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN16/vietnamese/ASTRD.pdf) as well.

Your planet is a perfect sphere with radius **R** and center at **(0, 0, 0)**. There are **N** asteroids around the planet. Your task is to find the **minimal** possible number of asteroids you can observe from some point on the suface of the planet. An asteroid can be observed if it's at least **10-3** above the horizon line at the place of the observation.

### Input

The first line of input contains a single integer **T**, denoting the number of testcases.

The first line of each test case contains two space-separated integers, **N** and **R**.

The following **N** lines contains 3 space-separated integers each: coordinates **xi, yi, zi** of the corresponding asteroid.

### Output

For each test case, output one integer in a new line: the answer for the test case.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **R** ≤ **10**
- **R - 1** ≤ **|xi|, |yi|, |zi|** ≤ **50**
- **Subtask 1\[11 points\]:** **1** ≤ **N** ≤ **2**
- **Subtask 2\[89 points\]:** **1** ≤ **N** ≤ **150**

### Example

<pre><b>Input:</b>
1
3 1
2 2 2
0 3 4
4 5 0

<b>Output:</b>
0
</pre>### Sample explanation:

One of the solutions can be: as all the asteroids have positive coordinates, we can choose some point on the surface which lies in the all-negative octant (see octant VII [here](https://en.wikipedia.org/wiki/Octant_%28solid_geometry%29)), and none of the asteroids will be observed.
