---
category_name: hard
problem_code: SEAARC
problem_name: 'Sereja and Arcs'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: shiplu
date_added: 19-03-2014
tags:
    - combinatorics
    - hard
    - june14
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAARC'
time:
    view_start_date: 1402911000
    submit_start_date: 1402911000
    visible_start_date: 1402911000
    end_date: 1735669800
    current: 1493556988
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE14/mandarin/SEAARC1.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE14/russian/SEAARC1.pdf).

Sereja have **N** points, with coordinates **(1, 0), (2, 0), ..., (N, 0)**. Every point has a color, point with coordinate **(i, 0)** has color **A\[i\]**.

Sereja have painted arcs between every pair of points with same color. Formally Sereja painted arc between points **(i, 0)** and **(j, 0)** if **A\[i\] = A\[j\]** and **i != j**, such arc has color **A\[i\]**. All the arcs are painted such way that they will reside along the positive quadrant.

Now Sereja wants to know how many pairs of arc with different color intersect?

### Input

 First line contain integer **N**. Next line contain integers **A\[1\], A\[2\], ..., A\[N\]**.

### Output

 In single line output answer modulo **1000000007 (10^9 + 7)**.

### Constraints

- **1** ≤ **N** ≤ **100000**
- **1** ≤ **A\[i\]** ≤ **100000**

### Example

```
<b>Input:</b>
4
1 2 1 2

<b>Output:</b>
1

```