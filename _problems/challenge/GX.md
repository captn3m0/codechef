---
category_name: challenge
problem_code: GX
problem_name: Mosaic
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
max_timelimit: '1.47059'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 15-08-2009
tags:
    - admin
time:
    view_start_date: 1252672785
    submit_start_date: 1252672785
    visible_start_date: 1252672785
    end_date: 1735669800
    current: 1525199664
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Imagine a large mosaic made of glass. It has the form of a large square, of size n x n, made up from unit squares of different types of glass. Different types of glass have different physical parameters, such as the speed of light in the material.

We have a source of light in corner (0,0) and a light detector in corner (n,n). We would like to estimate as accurately as possible the path taken by a ray of light which is directed from the source and reaches the detector, knowing that of all the possible routes, the one chosen by light will be the one with the shortest travel time.

Each type of glass has 3 defining parameters, denoted o1,o2, and ang. In order to calculate the travel time of light along some straight line segment in one specific type of glass, we calculate the lengths l1 and l2 of the projections of this segment onto two perpendicular lines: onto the axis forming angle ang with the horizontal direction (X axis), and onto the axis perpendicular to it. Then, the travel time of light along the given segment is given as sqrt((l1\*o1)2+(l2\*o2)2).

### Input

First, 1500 ≤ n ≤ 2000, the size of mosaic. Then, n rows, n numbers in each, describing the o1 values for each square, with the x-th number in the y-th line corresponding to the square with its top left-hand corner at (x,y). Then, in the same way, come n rows of n numbers defining values of parameter o2, and n rows of n numbers defining values of parameter ang. The angle is given in radians, and for each square we have, 0.1 ≤ o1,o2 ≤ 100, 0 ≤ ang ≤ 2pi

### Output

You should describe describe the route from (0,0) to (n,n) by outputting k (k ≤ 106) and then the coordinates of k midpoints of the route (the points (0,0) and (n,n) should not be output). The route must follow the following rules: each segment between successive points of the route starts on a side of some unit square and ends on a side of this square, and the segment between them lies entirely within this unit square. Successive midpoints must be different from each other, route segments may not run along edges of unit squares, and are not allowed to lead outside of the mosaic.

### Scoring

Your score is equal to the travel time of light along the fictional route defined by your solution (summed over all data sets). The goal is to minimize the obtained score.

### Example

<pre><strong>Input:</strong>
2
1.0 2.0
3.0 1.0
1.0 1.0
1.0 1.0
0 0.785398
0.785398 0

<strong>Output:</strong>
2
0.5 1
1 1.5

<strong>Score:</strong>
3.650282

</pre>