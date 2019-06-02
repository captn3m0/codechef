---
category_name: hard
problem_code: CHEFPOL
problem_name: 'Chef and Polyhedron'
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
problem_author: mgch
problem_tester: mugurelionut
date_added: 21-06-2016
tags:
    - burnside
    - hard
    - july16
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/CHEFPOL'
time:
    view_start_date: 1468402200
    submit_start_date: 1468402200
    visible_start_date: 1468402200
    end_date: 1735669800
    current: 1493556640
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY16/mandarin/CHEFPOL.pdf), [Russian](http://www.codechef.com/download/translated/JULY16/russian/CHEFPOL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY16/vietnamese/CHEFPOL.pdf) as well.

Chef likes [stereometry](https://en.wikipedia.org/wiki/Solid_geometry) a lot. Recently he learned about [polyhedrons](https://en.wikipedia.org/wiki/Polyhedron). During his assignments, he found a problem which he couldn't solve. Can you please help him in solving the problem?

You are given a [convex polyhedron](http://mathworld.wolfram.com/ConvexPolyhedron.html). Each face of polyhedron is a [regular polygon](https://en.wikipedia.org/wiki/Regular_polygon). All [polyhedral angles](https://en.wikipedia.org/wiki/Vertex_angle) are equal. You have to find number of different ways to paint all the faces of the polyhedron in one of the **C** colors. Note that two painting of the polyhedron are said to be same, if one can be reached from other by a sequence of rotations or mirror reflections of the polyhedron. As this value could be large, output it by modulo **109+7**.

### Input

There is a single test case.

First line of the input contains two positive integers - **N** (number faces of the polyhedron) and **C** (number of possible colors)

Next **N** lines contain information about the faces of polyhedron:

First number of each line contains an integer **ki** denoting number of faces adjacent to **i**-th face. Next **ki** integers in the same line denote the faces adjacent to **i**-th face.

### Output

Output a single integer in a line denoting number of ways to color polyhedron in different ways modulo **109+7**

### Constraints

- **4** ≤ **N** ≤ **25**
- **1** ≤ **C** ≤ **109**

### Subtasks

- **Subtask 1:** Polyhedron is regular. **Points - 20**
- **Subtask 2:** Original constraints. **Points - 80**

### Example

<pre><b>Input:</b>
6 2
4 2 3 4 5
4 1 3 5 6
4 1 2 4 6
4 1 3 5 6
4 1 2 4 6
4 2 3 4 5

<b>Output:</b>
10

</pre>
<pre><b>Input:</b>
4 4
3 2 3 4
3 1 3 4
3 1 2 4
3 1 2 3

<b>Output:</b>
35
</pre>