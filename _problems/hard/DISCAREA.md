---
category_name: hard
problem_code: DISCAREA
problem_name: 'Black Discs'
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
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: triveni
problem_tester: null
date_added: 25-11-2017
tags:
    - acm17kgp
    - convex
    - geometry
    - hard
    - kgp17rol
    - monte
    - triveni
editorial_url: 'https://discuss.codechef.com/problems/DISCAREA'
time:
    view_start_date: 1515875400
    submit_start_date: 1515875400
    visible_start_date: 1515875400
    end_date: 1735669800
    current: 1525454404
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Consider the 2-d plane which is white. You are given **n** semi-discs on it which are colored black. They are placed on the x - axis at various positions, in such a way that its center is on the x-axis and the entire semi-disc is **on or above** the x-axis. By center of a semi-disc, we mean the center of the disc of which it is a part. For each semi-disc you know its radius and the coordinate of its center in the x-axis. There may be overlaps or one may be completely inside / outside another semi-disc.

There are **q** queries. In each query you will be given a circle with radius **r** and center C at coordinates (x, y). It is guaranteed that  *y ≥ r* (meaning that no part of the circle is below the x-axis). You need to find the area within the circle *which is **black***. Meaning, area of the circle which is overlapping with some part of any semi-disc.

### Input

- The first line contains a single integer, **T**, which denotes the number of testcases. The description of each testcase follows.
- The first line of each testcase contains two space-separated integers: **n** and **q**, denoting the number of semi-discs and the number of queries respectively.
- The i-th of the next **n** lines contains two space-separated integers: **xi** and **ri**, denoting that the i-th semi-disc has its center at (**xi**, 0) and has radius **ri**.
- The i-th of the next **q** lines contains three space-separated integers: **xi**, **yi** and **ri**, denoting that the i-th query circle has its center at (**xi**, **yi**) and has radius **ri**.

### Output

- For each query in a testcase, output a single line with the answer.
- Your output will be considered correct if both these are true: 
  - In each query, the absolute error is less than or equal to 0.02.
  - In a single testcase, the average of absolute error over all queries must be less than 0.01.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **n** ≤ 100000
- 20 ≤ **q** ≤ 200
- 1 ≤ all x and y coordinates in the input ≤ 100000
- 1 ≤ all radii in input ≤ 100000
- Sum of **n** over all testcases ≤ 100000
- Sum of **q** over all testcases ≤ 200

### Example

<pre><b>Input:</b>
1
4 2
1 2
2 3
4 2
7 3
7 2 2
8 3 3

<b>Output:</b>
9.3204778956
10.2198951180
</pre>
### Explanation

 Note that the example shown above has only two queries (for brief representation) and hence doesn't satisfy the 20 ≤ **q** constraint. However, in the original test data the constraints will be followed.

The black semi-discs have been colored with various colors for better understanding. And the dotted region represents the region whose area we want to find.

**Query 1:** The figure below represents the scenario:

![](https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KGP/DISCAREA.1.png)

**Query 2:** The figure below represents the scenario:

![](https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KGP/DISCAREA.2.png)
