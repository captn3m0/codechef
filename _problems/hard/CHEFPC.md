---
category_name: hard
problem_code: CHEFPC
problem_name: 'Polygon & Circles'
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
problem_author: furko
problem_tester: kevinsogo
date_added: 3-04-2015
tags:
    - furko
    - greens
    - hard
    - march16
editorial_url: 'http://discuss.codechef.com/problems/CHEFPC'
time:
    view_start_date: 1458034200
    submit_start_date: 1458034200
    visible_start_date: 1458034200
    end_date: 1735669800
    current: 1493556640
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH16/mandarin/CHEFPC.pdf), [Russian](http://www.codechef.com/download/translated/MARCH16/russian/CHEFPC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH16/vietnamese/CHEFPC.pdf) as well.

Chef recently fell in love with geometry problems. Today, his friend John asks him to help. John is a student of Kiev National University and he is currently studying a beautiful subject called "Analytic Geometry". This subject is well known for its hard problems. John asked the following question to Chef, but Chef could not solve it and asked your help in solving this.

You are given a convex polygon and **M** circles in 2-D plane. Find out the area of the parts of polygon which are covered by some circle. In other words, you have to output area of parts which lie in the polygon and in at least one of the circles.

### Input

- There is only one test case per test file.
- The first line of test case contains a single integer **M** denoting number of circles.
- Each of the next **M** lines contains three integers **x, y, r**, where **(x, y)** denotes the **x** and **y** coordinates respectively of the center of the circle and **r** denotes the radius of each circle.
- Next line contains an integer **N** denoting number of vertices in given polygon.
- Each of the next **N** lines contains two integer **x, y** denoting the coordinate of a vertex of polygon.

### Output

Output a single line denoting the answer of the problem. Your answer will be considered correct if it has an absolute error less than 10-2.

### Constraints

- **1** ≤ **N** ≤ **50**
- **-10^4** ≤ **x\[i\],y\[i\]** ≤ **10^4**
 (coordinates of polygon)

- **1** ≤ **M** ≤ **50**
- **-10^4** ≤ **x, y** ≤ **10^4**
- 0 < **r** ≤ **10^4**

### Subtasks

- **Subtask #1 \[30 points\]: 1 ≤ N, M ≤ 5**
- **Subtask #2 \[70 points\]: 1 ≤ N, M ≤ 50**

### Example

<pre><b>Input:</b>
2
0 0 11
10 10 1
4
0 0
50 50
100 50
100 0

<b>Output:</b>
49.087385212341

</pre>
### Explanation

**Example case 1.** Two circles that are not intersecting each other.
