---
category_name: medium
problem_code: FOURPTS
problem_name: 'Four Points'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 1-06-2017
tags:
    - kingofnumbers
time:
    view_start_date: 1496516400
    submit_start_date: 1496516400
    visible_start_date: 1496516400
    end_date: 1735669800
    current: 1497284436
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKEL17/mandarin/FOURPTS.pdf), [Russian](http://www.codechef.com/download/translated/SNCKEL17/russian/FOURPTS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKEL17/vietnamese/FOURPTS.pdf) as well.

You are given 4 points on the 2D plane. You should tell whether there is a triangle whose sides pass through all the 4 points, and if there is, then find one such triangle. The outputted triangle can be degenerate as well (that is, all three of its vertices can be collinear).

### Input

- The first line of the input contains an integer **T**, denoting the number of test cases.
- Each test-case is described by a single line containing 8 space-separated integers, **x1, y1, x2, y2, x3, y3, x4** and **y4**. These describe the coordinates of the 4 given points, which are (**x1, y1**), (**x2, y2**), (**x3, y3**) and (**x4, y4**).

### Output

For each test-case output its answer in a new line. If there is no triangle which **perfectly** pass through the 4 given points then output "NO". Otherwise output "YES", followed by 6 real numbers p1, q1, p2, q2, p3 and q3 in the same line. These should describe the vertices of the triangle: (p1, q1), (p2, q2) and (p3, q3). These points can be in any order, but they should satisfy (-106 ≤ p1, q1, p2, q2, p3, q3 ≤ 106) . It is guaranteed that if the answer is "YES", there will be at least one triangle satisfying these constraints.

The triangle will be accepted if, for every input point A = (**xi, yi**), there exists an edge (say its endpoints are B = (pi, qi) and C = (pj, qj)) of the triangle such that the absolute difference between dist(B, C) and dist(B, A) + dist(A, C) is less than 10-9.

### Constraints

- 1 ≤ **T** ≤ 10,000
- -100 ≤ **x1, y1, x2, y2, x3, y3, x4, y4** ≤ 100
- No two points will coincide.

### Example

<pre><b>Input:</b>
2
1 1 1 3 1 2 2 1
1 1 2 2 2 0 1 0

<b>Output:</b>
YES 1.000 1.000 1.000 4.000 3.000 1.000
YES 0.000 0.000 3.000 3.000 3.000 0.000
</pre>### Explanation

The first testcase corresponds to this image:

![](https://codechef_shared.s3.amazonaws.com/download/upload/SNCKEL17/fourpts1.png)The Ai's (marked in red) correspond to the input points, and the triangle is the outputted triangle.

The second testcase corresponds to this image:

![](https://codechef_shared.s3.amazonaws.com/download/upload/SNCKEL17/fourpts2.png)
