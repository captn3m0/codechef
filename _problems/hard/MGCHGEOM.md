---
category_name: hard
problem_code: MGCHGEOM
problem_name: 'Misha and Geometry'
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
problem_author: mgch
problem_tester: iscsi
date_added: 6-05-2016
tags:
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/MGCHGEOM'
time:
    view_start_date: 1465983000
    submit_start_date: 1465983000
    visible_start_date: 1465983000
    end_date: 1735669800
    current: 1493556772
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE16/mandarin/MGCHGEOM.pdf), [Russian](http://www.codechef.com/download/translated/JUNE16/russian/MGCHGEOM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE16/vietnamese/MGCHGEOM.pdf) as well.

Misha is an expert in geometry, so he knows a lot about various geometrical objects. Recently, he learned the definition of a convex polygon and invented too many new problems involving it. Please help him solve one such problem.

You are given **N** queries, queries can be one of the following two types:

5. **+ x y** - Add point (**x**, **y**) into multiset of points.
6. **- x y** - Erase exactly **one** point (**x**, **y**) from multiset. It's guaranteed that point (**x**, **y**) exists in multiset.
After each query, Misha should find the area of the convex hull of all points which are in the multiset. Initially, multiset of points is empty. Please help him to solve this problem.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. **T** test cases follow.

For each test case, first line contains an integer **N** denoting number of queries.

Each of the next **N** lines contains one character - type of operation, followed by two space-separated integers - **x** and **y**.

### Output

After each query, print the area of the convex hull of points which are in multiset. Your answer should be correct with exactly 1 digit after decimal point.

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **N** ≤ 105
- 0 ≤ **|x|**, **|y|** ≤ 107
- Sum of **N** over all the test cases in a single test file doesn't exceed 105

### Subtasks

- **Subtask #1: (10 pts)** Sum of **N** over all test cases in a single test file will not exceed 100.
- **Subtask #2: (20 pts)** Sum of **N** over all test cases in a single test file will not exceed 5000.
- **Subtask #3: (70 pts)** Original constraints.

### Example

<pre>
<b>Input:</b>
<tt>1
6
+ 0 0
+ 0 4
+ 4 0
+ 2 2
+ 4 4
- 0 0
</tt>
<b>Output:</b>
<tt>0.0
0.0
8.0
8.0
16.0
8.0</tt>
</pre>