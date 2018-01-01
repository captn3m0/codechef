---
category_name: hard
problem_code: LOGO
problem_name: 'McHefs 3D Logo'
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
problem_author: 'vinayak garg'
problem_tester: gerald
date_added: 23-02-2013
tags:
    - cook45
    - geometry
    - implementation
    - medium
    - vinayak
editorial_url: 'http://discuss.codechef.com/problems/LOGO'
time:
    view_start_date: 1398018600
    submit_start_date: 1398018600
    visible_start_date: 1398018600
    end_date: 1735669800
    current: 1493556759
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK45/mandarin/LOGO.pdf) and [Russian](http://www.codechef.com/download/translated/COOK45/russian/LOGO.pdf) as well.

Chef has opened a new fast food chain - **McHefs**. He engaged the best logo designers of country to build a cool 3D logo for the new restaurants. Later he realised that he can't print 3D logo on menu, neon signboard, website etc. So he has asked you to make a 2D version of the 3D logo. You will be using a 320px × 240px (columns × lines) canvas to produce the 2D logo.

The logo is made using only triangles and quadrilaterals (convex and concave, but not self-intersecting). These polygons meet the following rules:

1\) They may be tilted in any direction.
2\) They have a solid colour. There are 9 colours numbered from 1 to 9.
3\) They are allowed to intersect./>/>

One logo which appeared during designing:

![](//www.codechef.com/download/x2yqVkc.png)
Notice the "jaggies"(jagged edges) in image; they are unavoidable hence acceptable in solution.
The XYZ axis are oriented as:
![](//www.codechef.com/download/Xb82VFH.png)
Note that +Z axis is coming out./>/>/>/>/>/>

**Important points:**
1\. If  value of 2 polygons are exactly same, then the greater color value of two will be visible. Example at end (in Notes)
2\. The edges of triangle or quadrilateral should be as accurate as if drawn by [Bresenham's algorithm](http://en.wikipedia.org/wiki/Bresenham%27s_line_algorithm). Note that you don't have to implement Bresenham's algorithm, any approach which doesn't suffers from floating point error is acceptable. Also when rounding off **X or Y** whose decimal part is exactly **0.5**, you have to round up. Like 21.5 becomes 22.,>

### Input

First line contains **N**, the number of polygons (triangles and quadrilaterals). Then **N** lines follow, each consists of **T** the type of polygon, **C** the color of polygon and 3D coordinates of polygon <**X, Y, Z**>.

When **T** is 1, the polygon is Triangle and 3 coordinates are given for the triangle's vertices. When **T** is 2, the polygon is Quadrilateral and 4 coordinates are given for the quadrilateral's vertices.

### Output

Output 240 lines, each containing 320 characters to describe the canvas. The background color of canvas is '0'. The ith(i starts from 0) character on jth(j starts from 0) line should have color value visible at <**i, j**>

### Constraints

- 1 ≤ **N** ≤ 1000
- 1 ≤ **T** ≤ 2
- 1 ≤ **C** ≤ 9
- 0 ≤ **X** ≤ 319
- 0 ≤ **Y** ≤ 239
- -1000 ≤ **Z** ≤ 1000

### Example

<pre><b>Input:</b>
4
1 1 120 50 10 50 130 20 180 140 -10
1 2 200 45 10 55 70 -20 140 150 15
2 5 20 20 0 200 20 0 200 200 0 20 200 0
2 8 30 30 1 50 50 1 70 30 1 50 90 1

<b>Output:</b>
<a href="/download/sample.out">Download the output</a>

</pre>### Notes
If <**X, Y, Z**> value of 2 polygons are exactly same, then the greater color value of two will be visible. Example, for the following input:
/>

<pre>2
2 1 10 10 0 10 110 0 110 110 0 110 10 0
2 2 50 50 0 50 150 0 150 150 0 150 50 0
</pre>The (pictorial) output will be:
![](//www.codechef.com/download/hR8s1dO.png)
assuming color '0' is black, color '1' is red, color '2' is blue./>/>/>
