---
category_name: medium
problem_code: CHEFPOLY
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
problem_author: mgch
problem_tester: null
date_added: 6-02-2016
tags:
    - geometry
    - ltime33
    - medium
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/CHEFPOLY'
time:
    view_start_date: 1456592400
    submit_start_date: 1456592400
    visible_start_date: 1456592400
    end_date: 1735669800
    current: 1493557542
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME33/mandarin/CHEFPOLY.pdf), [Russian](http://www.codechef.com/download/translated/LTIME33/russian/CHEFPOLY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME33/vietnamese/CHEFPOLY.pdf) as well.

Chef is not very good with geometric problems, and he, therefore, asks you to solve one of them. He has **N** red points and **M** black points, and **Q** queries on them. In each query, he will give you a subset of red points, you have to find out number of black points lying strictly inside the convex polygon formed by using the given subset as vertices.

### Input

The first line of input contains two integers — **N** and **M** — denoting the number of red and black points, respectively. The next **N** lines contain two space-separated integers each denoting the coordinates of red points, with the **i**th line describing the **i**th point. Analogously, the next **M** lines contain two space-separated integers each denoting the coordinates of the black points. The next line contain one integer **Q** denoting the number of polygons. Each of the next **Q** lines contains a polygon in the form **k** **i1** **i2** … **ik**. Here, **k** is the number of vertices of the polygon, and **i1**, **i2**, …, **ik** are the indices of red points which form the polygon, in a clockwise order.

### Output

For each query, output a new line containing the answer to it.

### Constraints

- **3** ≤ **N** ≤ **102**
- **1** ≤ **M** ≤ **3 × 103**
- **1** ≤ **Q** ≤ **106**
- **3** ≤ **k** ≤ **N**
- Sum of **k** over all queries is at most **106**
- Absolute value of a coordinate of any point is at most **104**
- No three points lie on the same line

### Example

<pre><b>Input:</b>
4 2
0 0
2 0
2 3
0 3
1 1
1 2
3
4 4 3 2 1
3 1 4 2
3 1 3 2

<b>Output:</b>
2
1
1

<b>Input:</b>
9 9
62 73
-66 -27
-14 85
82 19
-42 42
-38 85
-38 44
-11 -55
-46 -9
44 -6
-98 13
-3 97
-61 -34
-70 17
-11 -13
-95 -25
-52 60
12 3
8
4 9 6 3 1
5 2 5 7 1 4
4 2 6 3 4
5 5 6 1 4 8
5 2 5 7 1 8
4 2 6 3 4
3 2 6 8
5 9 5 7 4 8

<b>Output:</b>
0
1
1
3
2
1
0
3

</pre>### Subtasks

- **Subtask 1:**  **N**  = 3. **Points - 10**
- **Subtask 2:**  **N, M** ≤ 100. **Points - 20**
- **Subtask 3:** Sum of **k** over all queries not be greater than **105**,  **M** ≤ 1000 **Points - 30**
- **Subtask 4:** Original constraints. **Points - 40**

### Explanation

Test #1:

Polygon 1: (0, 0)-(0, 3)-(2, 3)-(2, 0), two black points inside it: (1, 1), (1, 2).

Polygon 2: (0, 0)-(0, 3)-(2, 0), contains one black point inside: (1, 1).

Polygon 3: (0, 0)-(2, 3)-(2, 0), encloses one black point: (1, 1)./>/>/>
