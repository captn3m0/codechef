---
category_name: medium
problem_code: TAACUTE
problem_name: 'Counting The Acute Triangles'
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
problem_author: tuananh93
problem_tester: keshav_57
date_added: 16-07-2013
tags:
    - cook36
    - easy
    - geometry
    - sorting
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TAACUTE'
time:
    view_start_date: 1374431400
    submit_start_date: 1374431400
    visible_start_date: 1374431400
    end_date: 1735669800
    current: 1493557938
layout: problem
---
All submissions for this problem are available.A triangle is **acute** if all its internal angles are acute (< 90o). You are given a set of **N** points on a 2D plane. Calculate the number of acute triangles that can be formed using points from the set as vertices.

Two triangles are different if the set of three vertices of one triangle is not equal to the set of three vertices of the other triangle.

### Input

The first line of the input contains an integer **N**, the number of points in the set. Each of the next **N** lines contains two space separated integers which are the x and y coordinates of points in the set.

### Output

Output a single line containing the number of acute triangles.

### Constraints

- **3** ≤ **N** ≤ **2000**
- The **x**, **y** coordinate of each point satisfies  ≤ **x**, **y** ≤ **10,000**
- All points are distinct.

### Example

```

<b>Input1:</b>
3
0 0
2 2
0 3
<b>Output1:</b>
1

<b>Input2:</b>
3
0 0
2 2
0 5
<b>Output2:</b>
0

<b>Input3:</b>
4
1 1
3 2
1 3
3 4
<b>Output3:</b>
2

```
### Explanation

**Example case 3.** Two acute triangles are {(1, 1), (3, 2), (1, 3)} and {(3, 2), (1, 3), (3, 4)}