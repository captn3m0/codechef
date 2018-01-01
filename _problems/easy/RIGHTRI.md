---
category_name: easy
problem_code: RIGHTRI
problem_name: 'Chef and The Right Triangles'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: rustinpiece
problem_tester: Rubanenko
date_added: 8-08-2013
tags:
    - cook37
    - easy
    - geometry
    - rustinpiece
editorial_url: 'http://discuss.codechef.com/problems/RIGHTRI'
time:
    view_start_date: 1376852100
    submit_start_date: 1376852100
    visible_start_date: 1376852100
    end_date: 1735669800
    current: 1493558181
layout: problem
---
All submissions for this problem are available.The Chef is given a list of **N triangles**. Each triangle is identfied by the coordinates of its three corners in the 2-D cartesian plane. His job is to figure out **how many of the given triangles are right triangles**. A right triangle is a triangle in which one angle is a 90 degree angle. The vertices of the triangles have integer coordinates and all the triangles given are valid( three points aren't colinear ).

### Input

The first line of the input contains an integer **N** denoting the number of triangles. Each of the following **N**lines contain six space separated integers **x1 y1 x2 y2 x3 y3** where **(x1, y1)**, **(x2, y2)** and **(x3, y3)** are the vertices of a triangle. ### Output

Output one integer, the number of right triangles among the given triangles. ### Constraints

- **1** ≤ **N** ≤ **100000 (105)**
- ≤ **x1, y1, x2, y2, x3, y3** ≤ **20**

### Example

<pre><b>Input:</b>
5
0 5 19 5 0 0
17 19 12 16 19 0
5 14 6 13 8 7
0 4 0 14 3 14
0 2 0 14 9 2

<b>Output:</b>
3

</pre>### Explanation
The first triangle and the last two triangles of the example are right triangles.
