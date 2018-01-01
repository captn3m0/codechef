---
category_name: medium
problem_code: REDBLUE
problem_name: 'Red and blue points'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 30-11-2017
tags:
    - dec17
    - kingofnumbers
editorial_url: 'https://discuss.codechef.com/problems/REDBLUE'
time:
    view_start_date: 1512984600
    submit_start_date: 1512984600
    visible_start_date: 1512984600
    end_date: 1735669800
    current: 1514816594
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/DEC17/mandarin/REDBLUE.pdf), [Russian](http://www.codechef.com/download/translated/DEC17/russian/REDBLUE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC17/vietnamese/REDBLUE.pdf) as well.

You are given **N** red points and **M** blue points on a 2D plane.

You are required to delete the minimum number of points(the deleted points can be of both colors) so that it's possible to draw a line such that all remaining red points are on one side of the line while all remaining blue points are on the other side of the line.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases.
- The first line of each test case contains two space-separated integers **N** and **M**.
- Each of the next **N** lines contains two integers **Xri**, **Yri** describing the coordinates of the i-th red point.
- Each of the next **M** lines contains two integers **Xbi**, **Ybi** describing the coordinates of the i-th blue point.

### Output

For each test case, output a single line containing one integer denoting the minimum number of points to be deleted.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N**, **M** ≤ 1,000
- 1 ≤ sum of **N** in all test cases ≤ 1,000
- 1 ≤ sum of **M** in all test cases ≤ 1,000
- -109 ≤ **Xri**, **Yri**, **Xbi**, **Ybi** ≤ 109
- No two points among both red and blue points have same coordinates
- No three points among both red and blue points are collinear

### Subtasks

**Subtask #1 (20 points):** 1 ≤ sum of **N** in all test-cases, sum of **M** in all test-cases ≤ 100

**Subtask #2 (80 points):** original constraints

### Example

<pre><b>Input:</b>

1
4 4
0 0
10 10
0 10
10 0
12 11
2 1
12 1
2 11

<b>Output:</b>

2

</pre>