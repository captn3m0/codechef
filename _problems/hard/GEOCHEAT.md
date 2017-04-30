---
category_name: hard
problem_code: GEOCHEAT
problem_name: 'Bear and Shuffled Points'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: alex_2oo8
date_added: 6-10-2016
tags:
    - convex
    - convex
    - errichto
    - geometry
    - hard
    - oct16
    - random
editorial_url: 'http://discuss.codechef.com/problems/GEOCHEAT'
time:
    view_start_date: 1476696600
    submit_start_date: 1476696600
    visible_start_date: 1476696600
    end_date: 1735669800
    current: 1493556711
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT16/mandarin/GEOCHEAT.pdf), [Russian](http://www.codechef.com/download/translated/OCT16/russian/GEOCHEAT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT16/vietnamese/GEOCHEAT.pdf) as well.

Bear Limak loves preparing problems for algorithmic contests. While his favorite part is inventing a story and writing the statement, he doesn't really like creating the test data. Not only it's hard to do, but also making a mistake may spoil a problem completely, likely making a problem easier.

Limak prepared the following problem for you. You start with an empty set of points on a two-dimensional plane. There are **N** queries, each with one new point **(xi, yi)** to insert to the set. After each query you must find the diameter of the set, i.e. the maximum distance between two points in the set. To avoid printing floating numbers, after each query print the square of the diameter.

In many problems, in test generators an author should create some (possibly smart and tricky) data, and then shuffle it before printing. Limak did the same in this problem, not noticing how crucial it may be. You can assume that in every test the **N** points are randomly shuffled. In other words, generators have a line "**random\_shuffle(array with points)**" just before printing. It isn't guaranteed that a problem is solvable within the time limit without this extra constraint.

### Input

The first line of the input contains an integer **N** denoting the number of points.

The **i**-th of **N** following lines contains two space separated integers **xi** and **yi** denoting coordinates of the **i**-th point to insert.

### Output

Output **N** lines. The **i**-th line should contain the square of the diameter of the set with points **(x1, y1), ..., (xi, yi)**.

### Constraints

- **2** ≤ **N** ≤ **750,000**
- **-109** ≤ **xi, yi** ≤ **109**
- Points are distinct.
- Points are shuffled.

### Subtasks

- Subtask #1 (20 points) **2 ≤ N ≤ 1000**
- Subtask #2 (30 points) Points are generated uniformly at random. In more detail: in each test file organizers chose two integers **N** and **K**, after which a generator finds **N** distinct points with coordinates generated randomly from interval **\[-K, K\]**. All given original constraints are still satisfied.
- Subtask #3 (50 points) **original constraints**

### Example

```
<b>Input:</b>
5
20 20
40 30
35 35
0 10
-170 1000000000

<b>Output:</b>
0
500
500
2000
999999980000029000

```
### Explanation

1. After the first query, the set contains only one point **(20, 20)**. You should print  because there are no two points with positive distance between them.
2. After the second query, the set contains points **(20, 20)** and **(40, 30)**. The distance between them is **sqrt((40-20)^2+(30-20)^2) = sqrt(500)** so the squared distance is **500**.
3. After the third query, the set is **{(20,20), (40,30), (35,35)}**. The maximum distance is **sqrt(500)**.
4. After the fourth query, the maximum distance is between **(0,10)** and **(40,30)**. Note that the given points may be collinear.
5. After the fifth query, the set contains all five points from the input. Watch out for overflows because the answer may be very big, as you can see here.