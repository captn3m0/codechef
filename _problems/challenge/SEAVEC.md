---
category_name: challenge
problem_code: SEAVEC
problem_name: 'Sereja and Vectors'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
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
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.619672'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: null
date_added: 15-09-2013
tags:
    - sereja
time:
    view_start_date: 1384162200
    submit_start_date: 1384162200
    visible_start_date: 1384162200
    end_date: 1735669800
    current: 1525199673
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV13/mandarin/SEAVEC.pdf) and [Russian](http://www.codechef.com/download/translated/NOV13/russian/SEAVEC.PDF).

Sereja have **N** vectors **v\[1\], v\[2\], ..., v\[N\]**. Every vector is given by **K** numbers **(x\[1\], x\[2\], ..., x\[K\])**. Sereja want to choose few vectors, such that sum of those vectors will be smaller than or equal to vector A.

In other word you should find such numbers: **i\[1\] < i\[2\] < ...< i\[m\]**, such that **v\[i\[1\]\]+v\[i\[2\]\]+...+v\[i\[m\]\] <= A**.

Vector **Q** <= vector **W** when **Q.x\[1\] <= W.x\[1\], Q.x\[2\] <= W.x\[2\], ..., Q.x\[K\] <= W.x\[K\]**.

Help Sereja, find best subset of vectors in such way that all conditions will hold.

### Input

First line contain integer **T** - number of testcases.

First line of each testcase contain integer **N** - number of vectors and **K** - number of integers that contain every vector. Next **N** lines contain **K** numbers - next vector coordinates **(x\[1\], x\[2\], ..., x\[K\])**. Last line of input contain vector **A**, that also given by **K** numbers.

### Output

For each testcase in first line should contain number **q** - number of vectors in your subset. Next line should contain **q** numbers - coordiates of vector: **1 <= i\[1\] < i\[2\] < ... < i\[q\] <= N** . If **q** equal to 0, you shouldn't output second string.

### Constraints

**1 <= T <= 10**

**1 <= N\*K <= 100000**

all corrdiantes are positive integers, that are not exceeded 1000000000.

### Example

<pre><b>Input:</b>
3
3 2
1 2
2 1
1 1
3 3

5 3
10 20 30
30 20 10
10 30 10
10 30 40
40 10 20
80 60 40

1 1
10
20

<b>Output:</b>
2
1 2

3
2 3 5

0
</pre>### Scoring

Lets **Sum** will be next value: **(A.x\[1\] - v\[i\[1\]\].x\[1\] - v\[i\[2\]\].x\[1\] - ... - v\[i\[q\]\].x\[1\]) + (A.x\[2\] - v\[i\[1\]\].x\[2\] - v\[i\[2\]\].x\[2\] - ... - v\[i\[q\]\].x\[2\]) + ... + (A.x\[k\] - v\[i\[1\]\].x\[k\] - v\[i\[2\]\].x\[k\] - ... - v\[i\[q\]\].x\[k\])**

Lets S will be the sum of values **q/(Sum + 1)** per each testcase. You should maximize **S**.
The score will be counted as **S/B**, where **S** is your sum, and **B** will be the best sum.

We have 10 official test files. You must correctly solve all test files to receive OK. During the contest, your overall score is the sum of the scores on the first 2 test files. After the contest, all solutions will be rescored by the sum of the scores on the rest 8 test files.

### Testcase generation

There are tests with different **N**. Most of the tests are random, and some are made in special way.
