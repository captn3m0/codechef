---
category_name: easy
problem_code: HULLSUM
problem_name: 'Hull Sum'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: errichto
problem_tester: null
date_added: 20-06-2017
tags:
    - errichto
time:
    view_start_date: 1498908900
    submit_start_date: 1498908900
    visible_start_date: 1498908900
    end_date: 1735669800
    current: 1514817149
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL17/mandarin/HULLSUM.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL17/russian/HULLSUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL17/vietnamese/HULLSUM.pdf) as well.

Chef prepares the following problem for a programming contest:

_You are given **N** points with integer coordinates (-1000 ≤ xi, yi ≤ 1000). No two points collide and no three points are collinear. For each of the 2**N**-1 non-empty subsets of points, find the size (the number of points) of its convex hull. Print the sum of those sizes._

Chef has already prepared some tests for his problem, including a test with the maximum possible answer. He now needs a test with a quite small answer (but not necessarily the minimum possible one). For given **N**, your task is to find any valid set of **N** points for which the answer doesn't exceed 4 \* 1015 (4,000,000,000,000,000).

### Input

The only line of the input contains a single integer **N**, denoting the number of points.

### Output

Print exactly **N** lines. The i-th line should contain two integers xi and yi, denoting coordinates of the i-th point.

The printed set of points must satisfy all the given conditions. At least one such set exists for every **N** allowed by the constraints given below.

Note: Remember that you don't print **N** in the first line.

### Constraints

- 2 ≤ **N** ≤ 50

### Example

<pre>
<b>Input:</b>
5

<b>Output:</b>
-150 150
150 150
-150 -150
150 -150
11 13
</pre>### Explanation

Let's analyze sizes of convex hulls for the provided output. There are 25-1 non-empty sets of points.

- There are 5 sets of points that consist of only 1 point each. The convex hull of each of those sets has size 1.
- Similarly, 10 sets of points consist of 2 points each, and the size of each of their convex hulls is 2.
- Similarly, there are 10 sets with 3 points each, and the size of each of their convex hulls is 3.
- The set with points (-150, -150), (-150, 150), (150, 150), (11, 13) has a convex hull of size 3. You can note that the point (11, 13) is inside the triangle formed by the other three points.
- The set with points (-150, 150), (150, 150), (150, -150), (11, 13) has a convex hull of size 3 as well.
- There are 3 other sets with 4 points, and for each of them the convex hull has size 4.
- Finally, the set with all 5 points has a convex hull of size 4.

The sum of sizes of convex hulls is (5 \* 1) + (10 \* 2) + (10 \* 3) + 3 + 3 + (3 \* 4) + 4 = 5 + 20 + 30 + 6 + 12 + 4 = 77, which obviously doesn't exceed 4 \* 1015.
