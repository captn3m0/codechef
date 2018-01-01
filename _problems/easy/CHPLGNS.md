---
category_name: easy
problem_code: CHPLGNS
problem_name: 'Chef and Polygons'
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
problem_author: antoniuk1
problem_tester: null
date_added: 27-02-2015
tags:
    - antoniuk1
    - cakewalk
    - geometry
    - june15
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/CHPLGNS'
time:
    view_start_date: 1434360600
    submit_start_date: 1434360600
    visible_start_date: 1434360600
    end_date: 1735669800
    current: 1493558129
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE15/mandarin/CHPLGNS.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE15/russian/CHPLGNS.pdf).

Chef has **N** [simple polygons](http://en.wikipedia.org/wiki/Simple_polygon) (non self intersecting polygons) in which no two of them intersect with each other. For any two polygons **P1, P2**, either **P1** lies inside **P2** or vice versa.

Chef wants you to count number of polygons lying strictly inside each of the polygons.

### Input

First line of the input contains an integer **T** denoting the number of test cases. First line of each test case contains a single integer **N** denoting the number of polygons.

The description of **N** polygons is as follows:

- The first line contains an integer **Mi** denoting the number of vertices in the **ith** polygon
- The second line contains **Mi** pairs of integers **Xi, j, Yi, j** representing coordinates of vertices of **ith**  polygon in clockwise or counterclockwise order

### Output

For each test case, output a single line containing **N** space-separated integers such that **ith** of them represents number of polygons lying inside the **ith** polygon.

### Constraints

- **1** ≤ **T** ≤ **105**
- **2** ≤ **N** ≤ **105**
- **3** ≤ **Mi** ≤ **105**
- The sum of **Mi** (or total amount of given points) over all test cases in one test file does not exceed **2\*105**
- Absolute value of each coordinate doesn't exceed **109**



**Subtask 1: (10 points)**/>

- **T** ≤ **6**
- **2** ≤ **N** ≤ **10**
- **3** ≤ **Mi** ≤ **10**
- Absolute value of each coordinate doesn't exceed **30**

 
**Subtask 2: (20 points)**

- All polygons are [convex polygons](http://en.wikipedia.org/wiki/Convex_polygon).

 
**Subtask 3: (70 points)**

- Original constraints

### Example

<pre><b>Input:</b>
1
3
6
-2 2 -1 1 2 2 2 -1 1 -2 -2 -2
3
-1 -1 1 -1 1 1
4
3 3 -3 3 -3 -3 3 -3
<b>Output:</b>
1 0 2

</pre>### Explanation
In the picture the first polygon is marked in green, second - in red and third in blue color.

![explanation](http://www.codechef.com/download/JUNE15/CHPLGNS.jpg)
