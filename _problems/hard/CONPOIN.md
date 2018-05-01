---
category_name: hard
problem_code: CONPOIN
problem_name: 'Connect Points'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: null
date_added: 9-05-2015
tags:
    - graph
    - hard
    - june15
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/CONPOIN'
time:
    view_start_date: 1434360600
    submit_start_date: 1434360600
    visible_start_date: 1434360600
    end_date: 1735669800
    current: 1493556958
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE15/mandarin/CONPOIN.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE15/russian/CONPOIN.pdf).

One day Leha got bored during his geometry class. But his teacher was very careful so the boy had to pretend that he was solving some geometry problem. At first glance he started drawing some senseless stuff. He marked **N** pairwise different points on the plane and then connected **M** pairs of these points by **straight-line** segments. **No 3 points lie on the same line.** None of these segments intersect(maybe except at the initial **N** points). Then Leha tried to draw the **M+1-th** segment but surprisingly it turned out that it was impossible to connect any pair of points by **straight-line** segment which wouldn't intersect with any of the previous segments.

Let's enumerate points from **1** to **N**. You are given **M** pairs of integers - numbers of points which are connected by the each straight-line segment. The question is: whether it's possible to choose **N** points on the Euclidean plane **in any way** such that they will **always** fit the situation described above. That is, try to place the given **N** points and **M** non-intersecting segments that are given, you will never be able to place **M+1**th segment.

### Input

The first line contains one integer **T** - the number of test cases. Each test case starts with a line containing two integers **N** and **M**. **M** lines containing a pair of integers each follow describing pairs of points connected by **straight-line** segments

### Output

For each test case output a single line containing**1** if it's possible to find points which will satisfy the problem statement and 0 otherwise

### Constraints

- **1** ≤ **T** ≤ **6000**
- **1** ≤ **N** ≤ **7\*104**
- **1** ≤ **M** ≤ **3\*105**
- sum of all **N** in one test file doesn't exceed **7\*105**
- no segment connects a point with itself
- each pair of points is connected no more than by one segment

### Subtasks

- **Subtask 1 : 1 ≤ N ≤ 5 : ( 20 pts )**
- **Subtask 2 : no additional constraints: ( 80 pts )**

### Example

<pre><b>Input:</b>
3
3 3
1 2
2 3
1 3
3 2
1 3
2 3
4 6
1 2
1 3
1 4
2 3
2 4
3 4

<b>Output:</b>
1
0
1
</pre>### Explanation

 In the first test case we can draw triangle on the plane. Obviously no pair of segments will intersect and we can't add any more straight-line segment(and even not straight-line) so the answer is **1**

In the second test case we can draw 3 points and connect 1 and 3 and 2 and 3. But we can add one more(1 and 3) so the answer is 0

In the last test case we can draw a triangle and a point inside it connected to 3 vertexes of the triangle. As in the first test case we can't connect some new pair so the answer is **1** too.
