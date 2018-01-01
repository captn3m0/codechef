---
category_name: medium
problem_code: BALANPOL
problem_name: 'Chef and Balanced Polygons'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: animesh_f
date_added: 25-11-2016
tags:
    - admin2
    - dynamic
    - geometry
    - ltime42
editorial_url: 'https://discuss.codechef.com/problems/BALANPOL'
time:
    view_start_date: 1480181400
    submit_start_date: 1480181400
    visible_start_date: 1480181400
    end_date: 1735669800
    current: 1493557484
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME42/mandarin/BALANPOL.pdf), [Russian](http://www.codechef.com/download/translated/LTIME42/russian/BALANPOL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME42/vietnamese/BALANPOL.pdf) as well.

You are given a [convex polygon](https://en.wikipedia.org/wiki/Convex_polygon) consisting of **n** vertices in 2-D plane. You are also given **m** points, each colored in either red or blue.

A convex polygon is called _w00t_, if the number of red and blue colored points inside this (inside or on the boundary) are equal.

You want to find number of _w00t_ convex polygons whose vertices are a subset of the vertices of the given convex polygon.

### Input

The first line of the input contains an integer **T** denoting the number of the test cases.

The first line of each test case will contain two space separated integers **n, m** denoting the number of points on the convex polygon, and number of the colored points, respectively.

In the next **n** lines, each line contains two space separated integers **x, y** denoting the x and y coordinates of the points of convex polygon. The points of the convex polygon are given to you in anticlockwise order. It is guaranteed that no three points on the convex polygon are collinear.

In the next **m** lines, each line contains three space separated integers **x, y, c**, where **x, y** denotes the x and y coordinates of the colored points, and **c** denotes the color of the point. If **c = 0**, the point is red colored, where if **c = 1**, point is blue colored..

### Output

For each test case, output a single integer corresponding to the number of _w00t_ convex polygons whose vertices are subset of the given convex polygon.

### Constraints 

- **1** ≤ **T** ≤ **20**
- **1** ≤ **n, m** ≤ **50**
- **n** ≥ **3**
- **-106** ≤ **|xi, yi|** ≤ **-106**
- In the given **m** points, two or more points might coincide.

### Subtasks

**Subtask #1: (15 points)**

- **1** ≤ **n, m** ≤ **12**

**Subtask #2: (20 points)**

- Each of the **m** points has same coordinates as that of some vertices of the convex polygon.
- All the colored points have different coordinates.

**Subtask #3: (25 points)**

- Each of the **m** points has same coordinates as that of some vertices of the convex polygon.

**Subtask #4: (40 points)**

- Original Constraints

### Example

<pre><b>Input:</b>
2
4 4
0 0
1 0
1 1
0 1
0 0 0
1 0 1
1 1 0
0 1 1
6 6
-1 1
0 0
1 0
2 1
1 2
0 2
-1 1 0
0 0 1
1 0 0
2 1 1
1 2 0 
0 2 1

<b>Output:</b>
1
10

</pre>### Explanation
**Example case 1.** The entire rectangle is _w00t_.
