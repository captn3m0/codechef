---
category_name: medium
problem_code: CLOSESTQ
problem_name: 'Closest points queries'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: gainullinildar
problem_tester: lg5293
date_added: 29-04-2017
tags:
    - divide
    - gainullinildar
    - ltime47
    - medium
    - sets
    - sqrt
time:
    view_start_date: 1493485200
    submit_start_date: 1493485200
    visible_start_date: 1493485200
    end_date: 1735669800
    current: 1497284431
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME47/mandarin/CLOSESTQ.pdf), [Russian](http://www.codechef.com/download/translated/LTIME47/russian/CLOSESTQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME47/vietnamese/CLOSESTQ.pdf) as well.

Consider a set of points in 2D which is initially empty. You need to process queries which insert and remove points from it.

After each query, you should also print the square of the distance between two closest points in the set. If there are fewer than 2 points in the set, print 0 instead.

 It is guaranteed that all the queries are valid — there will be no query of adding a point that is already present in the set or removing a point which does not exist in the set.

### Input

The first line of the input contains an integer **Q** denoting the number of queries.

Each of the next **Q** lines contains one query, which will be one of the following two types:

- + x y — add the point (x, y) to the set
- - x y — remove the point (x, y) from the set

### Output

For each query, output a single line containing one integer — the square of the distance between two closest points in the set.

### Constraints

- 1 ≤ **Q** ≤ 75,000
- 1 ≤ **x, y** ≤ 500

### Subtasks

- Subtask #1 (10 points): 1 ≤ **Q** ≤ 100
- Subtask #2 (30 points): 1 ≤ **Q** ≤ 2500
- Subtask #3 (60 points): Original constraints.

### Example

 ```
<b>Input:</b>
6
+ 1 1
+ 2 2
+ 3 3
- 2 2
+ 400 400
- 1 1


<b>Output:</b>
0
2
2
8
8
315218
<pre>
### Explanation

**Query 1.** There is only 1 point, so the answer is 0

**Query 2.** There are only 2 points, (1, 1) and (2, 2), so answer is (1 - 2)2 + (1 - 2)2, which equals to 2

**Query 3.** The points (1, 1) and (2, 2) are one of the closest pairs, and so the answer is still 2

**Query 4.** There are only 2 points, (1, 1) and (3, 3), and so answer is (1 - 3)2 + (1 - 3)2 which equals to 8

**Query 5.** Points (1, 1) and (3, 3) are still closest, and so answer is 8

**Query 6.** There are only 2 points, (3, 3) and (400, 400), and so answer is (3 - 400)2 + (3 - 400)2 equals to 315218
