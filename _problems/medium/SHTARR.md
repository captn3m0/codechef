---
category_name: medium
problem_code: SHTARR
problem_name: 'Shooting on the array'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: altruist_
problem_tester: null
date_added: 13-08-2017
tags:
    - altruist_
    - medium
    - oct17
    - segment
editorial_url: 'https://discuss.codechef.com/problems/SHTARR'
time:
    view_start_date: 1508146200
    submit_start_date: 1508146200
    visible_start_date: 1508146200
    end_date: 1735669800
    current: 1514816024
layout: problem
---
All submissions for this problem are available.You have an array **A** of length **N** consisting of positive integers. Let's consider **N** vertical segments (parallel to y axis) on the plane, the i-th segment connects the points **(i, 0)** and **(i, Ai)**.

You have  **Q**  queries of following two types:

- **+ i X**  :  **Ai += X**
- **? i L R** : Let's consider **R - L+ 1** rays which are parallel to x axis. The **j**-th ray eminates at point **(i - 0.5, L+ j - 1.5)** and extends to the right infinitely long parallel to x axis. You have to print the number of the segments that will be shot by some ray. If a ray shoots a segment then it stops at that point and does't extend further.

Note that all the queries of the second type are independent of each other.

### Input

The first line of the input contains an integer  **T**  denoting the number of tests

The first line of each test case consists of two space separated integers  **N, Q** .

The second line contains **N** space separated denoting the array **A**.

Next  **Q**  lines contain the description of the queries in the format above.

### Output

After each query of the second type, output in a single line the number of segments that are shot.

### Constraints

- **1** ≤  **T**  ≤  **100**
- **1**  ≤ **N** ≤  **106**
- **1**  ≤ **Q** ≤  **105**
- 0
- **1**  ≤ **i**  ≤  **N**
- **1**  ≤  **Ai**  ≤  **109**
- **1**  ≤  **L ≤ R**  ≤  **109**
- The sum of **N** over all testcases does not exceed 106
- The sum of **Q** over all testcases does not exceed 105

### Subtasks

- **Subtask #1 (10 points)** : There are only queries of the second type
- **Subtask #2 (10 points)** : In all queries of the second type **i = 1**
- **Subtask #3 (30 points)** : The sum of **Q** over all testcases does not exceed 104
- **Subtask #4 (50 points)** : Original constraints

### Example

<pre><b>Input:</b>
1
6 4
3 7 2 4 8 7
? 4 3 9 
? 3 1 7
+ 6 2
? 4 3 9

<b>Output:</b>
2
3
3

</pre>