---
category_name: medium
problem_code: KTHCON
problem_name: 'The potato problem'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xellos0
problem_tester: antoniuk1
date_added: 1-03-2016
tags:
    - convex
    - cook68
    - geometry
    - medium
    - two
    - xellos0
editorial_url: 'http://discuss.codechef.com/problems/KTHCON'
time:
    view_start_date: 1458498600
    submit_start_date: 1458498600
    visible_start_date: 1458498600
    end_date: 1735669800
    current: 1493557732
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK68/mandarin/KTHCON.pdf), [Russian](http://www.codechef.com/download/translated/COOK68/russian/KTHCON.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK68/vietnamese/KTHCON.pdf) as well.

A _1-concave_ polygon is a [simple polygon](https://en.wikipedia.org/wiki/Simple_polygon) (its sides don't intersect or touch) which has at least 1 concave interior angle.

There are **N** points on a plane. Let **S** be the maximum area of a 1-concave polygon with vertices in those points. Compute **2S**. Note that if there is no such (1-concave) polygon, you should print -1.

### Input

- The first line of the input contains an integer **T** - the number of test cases.
- The first line of each test case contains **N** - the number of points.
- Each of the following **N** lines contains two integers **x** and **y** - the coordinates of a point.

### Output

If there's no 1-concave polygon, print -1. Otherwise, print one integer: twice the area of the largest one (it's guaranteed to be an integer under these constraints).

### Constraints

- **1 ≤ T ≤ 100**
- **3 ≤ N ≤ 105**
- No two points coincide (have identical both **x** and **y** coordinates).
- No three points are collinear.
- The sum of **N** over all test cases won't exceed **5·105**.
- **|x|,|y| ≤ 109**

### Example

<pre><b>Input:</b>
2
5
2 2
-2 -2
2 -2
-2 2
0 1
3
0 0
1 0
0 1

<b>Output:</b>
28
-1
</pre>