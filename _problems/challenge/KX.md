---
category_name: challenge
problem_code: KX
problem_name: 'Park tour'
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
    - kotlin
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '10'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 30-11--0001
tags:
    - admin
time:
    view_start_date: 1260533047
    submit_start_date: 1260533047
    visible_start_date: 1260532572
    end_date: 1735669800
    current: 1525454420
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Imagine a large nxn square park composed of small unit squares. Some squares are occupied by trees, and the rest is free to walk through them. Your job is to create a visiting route which should be as long as possible. The route should be a closed curve with no self-intersections, and is defined by describing the sequence of squares through which it passes. From one square, the route can only proceed to a square which shares a common edge with it. The route enters and leaves each square in the central points of two of its edges. If those two points lie on opposing edges of the square (N - S or E - W), the fragment of the route within the square is a straight line segment of length l=1. Otherwise, if the two points lie on adjacent edges, the route within the square is an arc of the circle (1/4th of the full circle of radius 1/2, centered at the common corner of the edges) and its length is l=pi/4.

### Input

In the first line of input there is an integer n (100≤n≤800), denoting the size of park. The following n lines of n characters each describe the park: the character '\*' represents a square with a tree, and the character '.' means that the square is empty.

### Output

First, an integer k (0<k), corresponding to the number of lines of the subsequent description of the output. The following k pairs of numbers should describe the squares of the route: i1,j1 ... ik,jk, where i is the row number (counting from 0) and y is the column number (counting from 0) of a square.

### Correctness of the output

For each i<k, squares i and i+1 of the route should share a common edge, and moreover the first and the k-th squares should also share a common edge. The route may not make a U-turn at any square, and may not lead through any squares with trees. The route should not self-intersect or touch itself. The route is not allowed to lead outside the park. Note that it is possible for the route to be twice in the same square (i.e. once enter from N exiting due E, later enter from S exiting due W).

### Example

<pre><strong>Input:</strong>
3
..*
...
*..

<strong>Output:</strong>
8
0 0
0 1
1 1
1 2
2 2
2 1
1 1
1 0
<strong>Score:</strong>
0.897598
</pre>### Test distribution

n will be chosen uniformly from the range \[100,800\] range. The number of trees will be chosen uniformly from the range \[n2\*alfa,n2\*2\*alfa), where alfa = 0.1 for 1/3 of the testcases, alfa = 0.02 for 1/3 of the testcases, and alfa = 0.004 for 1/3 of the testcases. Positions of trees are chosen uniformly at random.

### Scoring

The score is given as l / f, where l is the total length of the route and f is the total number of squares without trees.
