---
category_name: challenge
problem_code: NX
problem_name: 'The Best Tower'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 5-02-2010
tags:
    - admin
time:
    view_start_date: 1268736795
    submit_start_date: 1268736795
    visible_start_date: 1268736795
    end_date: 1735669800
    current: 1525454420
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.ByteTel, the largest mobile operator in Byteland, would like to find a place to construct a cellphone tower. There are N important places in Byteland that need to be considered.

These N buildings can be represented by N points in a 2D plane. The cellphone tower can be represented by a circle, and in order to construct the tower, ByteTel needs to specify its center and radius.

Moreover, the center of the tower cannot be outside the secure area, which is also a circle.

ByteTel wants to find a center and radius for the tower such that **the total squared distance** between each of the building and the tower is as small as possible.

The distance between a point and a circle is defined to be the difference between the distance from the circle's center to the point and the circle's radius.

Your task is to help ByteTel find a center and radius for their cellphone tower.

### Input

The first line contains a number t (about 10), which is the number of test case. Each test case has the following form.

The first line contains three numbers (Xs, Ys) and Rs, specifying the secure circle.

The second line contains N, the number of buildings (1 ≤ N ≤ 100).

Each line in the next N lines contain two numbers which are the coordinates of a building.

All coordinates are integer and are between 0 and 10000 (inclusive).

### Output

For each test case, output 3 numbers (X,Y) and R, rounded to 3 decimal digits, which are the center and radius of the cellphone tower.

### Scoring

For each test case, your score is d/D in which:

d is the total square distance between each of the building and the tower your program has found

D is the total square distance between each of the building and the secure circle's center.

Your program's score is the sum of each test case's score, the lower the better.

### Example

<pre>
<b>Input:</b>
1

1 1 4
5
3 -2
2 1
5 3
4 3
4 -1

<b>Output:</b>
4.000 1.000 2.000
</pre>
The sample output's score is 0.023444. The secure circle is red and the tower is yellow.

![](https://www.spoj.pl/content/paulmcvn:circle.png)
