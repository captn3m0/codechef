---
category_name: medium
problem_code: LIGHT
problem_name: Lights
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: shangjingbo
problem_tester: laycurse
date_added: 29-03-2012
tags:
    - binary
    - geometry
    - line
    - sep12
    - shangjingbo
editorial_url: 'http://discuss.codechef.com/problems/LIGHT'
time:
    view_start_date: 1347355963
    submit_start_date: 1347355963
    visible_start_date: 1347355800
    end_date: 1735669800
    current: 1493557747
layout: problem
---
All submissions for this problem are available.There are **N** lights above a road along the X-axis. The **i**-th light has **Xi** as its X-coordinate, and it is hung **Yi** above the road. The **i**-th light illuminates a triangular area, which is an isosceles triangle and its bottom edge is on the X-axis. The half of the top angle of the triangle is **Zi** degrees. (See the below figure)

You have an aircraft which can fly on a fixed height. Because of some unknown reasons, this aircraft can fly only under the light. Your task is to find the maximum possible height for your flight from **X**=**L** to **X**=**R**.

The lights do not block the aircraft, e.g. the aircraft can safely fly through a light.

![](http://www.codechef.com/download/light.png)### Input

The first line contains three parameters **N**, **L** and **R**.

The next **N** lines give the infomation about each light. The **i**-th line contains three numbers **Xi**, **Yi** and **Zi**.

### Output

Output the maximum height you can reach. The value must have an absolute error less than or equal to 0.000001 (10-6). It is guarenteed that you can make the flight with the positive height.

### Constraints

1 ≤ **N** ≤ 50000
-1000 ≤ **L** < **R** ≤ 1000
-1000 ≤ **Xi** ≤ 1000
0 < **Yi** ≤ 1000
15 ≤ **Zi** ≤ 75
**N** is an integer, but all other input values can be non-integers.

### Example

<pre>
<b>Input:</b>
2 3.2 7.3
3.2 4.7 28
7.3 4.2 75

<b>Output:</b>
3.300759642


</pre>