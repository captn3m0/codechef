---
category_name: medium
problem_code: POINPOLY
problem_name: 'Points Inside A Polygon'
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
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: r_64
date_added: 24-01-2018
tags:
    - admin2
    - constructive
    - convex
    - feb18
    - medium
editorial_url: 'https://discuss.codechef.com/problems/POINPOLY'
time:
    view_start_date: 1518427800
    submit_start_date: 1518427800
    visible_start_date: 1518427800
    end_date: 1735669800
    current: 1525198958
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/FEB18/mandarin/POINPOLY.pdf), [Russian](http://www.codechef.com/download/translated/FEB18/russian/POINPOLY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB18/vietnamese/POINPOLY.pdf) as well.

You are given a [convex polygon](https://en.wikipedia.org/wiki/Convex_polygon) with **N** vertices.

You have to find any ⌊**N**/10⌋ distinct points with integer coordinates that lie **strictly inside** the polygon, or determine that such a set of points doesn't exist.

*Note:* ⌊⌋ denotes the [floor function](https://en.wikipedia.org/wiki/Floor_and_ceiling_functions), typically used in integer division.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of vertices of the polygon.
- The following **N** lines describe the vertices of the polygon in [anticlockwise order](https://en.wikipedia.org/wiki/Clockwise). Each of these lines contains two space-separated integers **x** and **y** denoting the coordinates of one vertex.

### Output

For each test case, if a valid set of points doesn't exist, print a single line containing the integer -1. Otherwise, print ⌊**N**/10⌋ lines. Each of these lines should contain two space-separated integers denoting the coordinates of one point.

The coordinates of all points should be integers with absolute value not exceeding 109. If there are multiple solutions, you may print any one.

### Constraints

- 1 ≤ **T** ≤ 105
- 10 ≤ **N** ≤ 105
- sum of **N** over all test cases ≤ 5 · 105
- **|x|**, **|y|** ≤ 109
- no three vertices of the polygon will be collinear

### Subtasks

**Subtask #1 (30 points)**: 1 ≤ **T** ≤ 100, 10 ≤ **N** ≤ 100

**Subtask #2 (70 points)**: original constraints

### Example

<pre>
<b>Input</b>

1
11
0 0
1 1
2 3
2 5
0 10
-2 10
-5 9
-8 7
-8 4
-6 1
-2 0

<b>Output</b>

0 1
</pre>
### Explanation

**Example case 1:** The polygon is shown in the picture: ![](https://discuss.codechef.com/upfiles/poinpoly_axUFPiA.png)

You are required to output exactly ⌊**N**/10⌋ = ⌊11/10⌋ = 1 point.

One possible point that you can output is (0, 1). You can also output (0, 2), (-1, 3) or (1, 3).

However, (0, 0) is a wrong answer, because this point lies on the border of the convex polygon.

If you output (-1, -1), that's also a wrong answer, because this point lies outside the convex polygon. You can't output (1.1, 1.5) either, because it doesn't have integer coordinates, though it lies strictly inside the polygon.
