---
category_name: hard
problem_code: CAKE2AM
problem_name: 'Chef and the Cake II'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: 'satej '
problem_tester: gerald
date_added: 6-01-2014
tags:
    - bipartite
    - cook42
    - geometry
    - max
    - maxflow
    - medium
    - satej
editorial_url: 'http://discuss.codechef.com/problems/CAKE2AM'
time:
    view_start_date: 1390158900
    submit_start_date: 1390158900
    visible_start_date: 1390158900
    end_date: 1735669800
    current: 1493556627
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK42/mandarin/CAKE2AM.pdf) and [Russian](http://www.codechef.com/download/translated/COOK42/russian/CAKE2AM.pdf) as well.

Your friend Chef has made a cake for you on your birthday. Before having the cake you two have made some cuts on the cake. If you consider the cake as a rectangular grid with co-ordinates from (,) to (**n**,**n**), then each of the cut can be considered as a rectilinear polygon (a polygon with sides parallel to the axis and possibly self-intersecting). These cuts turn the cake into several pieces. Now you two want to distribute the pieces among yourself. Since it is your birthday, your friend has given you a choice of choosing some pieces for yourself. You are hungry and you want to have the whole cake. But you don't want to make your friend suspicious. So instead of having all the pieces you want to select the set of pieces such that no pair of pieces have a common side. You want to maximize the total amount of cakes you can have. This amount can be measured as the sum of the areas of the top surface for each piece (or the amount of cake in each piece is the area of the polygon that define that piece).

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. Each test case starts with 2 integers **n** and **m** (the number of cuts). Each of the next **m** lines contains the description of a cuts. Each cut starts with an integer **p** denoting the number of points in the polygon, followed by **p** pairs of integers denoting the co-ordinates of the polygon.

### Output

For each test case, output a single line containing an integer denoting the maximum amount of cake you can have.

### Constraints

- **1** ≤ **T** ≤ **50**
- **1** ≤ **n** ≤ **10000**
- **1** ≤ **m** ≤ **20**
- The polygons described by each cut will be rectilinear and will possibly be self intersecting. Each non-empty segment on the plane belongs to the border of at most one polygon. Also, a single polygon cannot go through a single segment more than once. If any pair of polygons intersect, they will intersect only at a point (not a segment). It may happen that same pair of polygons intersect at multiple points.
- The points describing the polygonal cuts will be between 1 to **n**-1 inclusive.
- For each of **T** test cases the sum of number of points in the polygons defined by each cut will be at most 80.

### Example

```
<b>Input:</b>
2
5 1
4 1 1 1 4 4 4 4 1
5 2
4 1 1 1 3 3 3 3 1
4 2 2 2 4 4 4 4 2

<b>Output:</b>
16
19

```
### Explanation

**Example 1:** You have only a single cut and the cake now have two pieces(as seen by the figure in the left). The amount of cake in piece 1 is 9 and the amount of cake in piece 2 is 16. So you will take the piece 2 and leave piece 1 for your friend.

![](/download/extimages/77ea6c0d4a8a3a84ed5e2ca3778e0893.jpg)**Example 2:** You have two cuts and the cake now have four pieces(as seen by the figure in the left). The amount of cake in piece 1 is 18, the amount of cake in piece 2 is 3, the amount of cake in piece 3 is 1 and the amount of cake in piece 4 is 3. So you will take piece 1 and piece 3 for yourself and leave the piece 2 and piece 4 for your friend.

![](/download/extimages/489136338fea92ddcf04d32a4c5af729.jpg)