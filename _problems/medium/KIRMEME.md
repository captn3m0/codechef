---
category_name: medium
problem_code: KIRMEME
problem_name: 'Kirito in Memeland'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: maestr0
problem_tester: xcwgf666
date_added: 4-07-2016
tags:
    - divide
    - maestr0
    - medium
    - nov16
    - tree
editorial_url: 'http://discuss.codechef.com/problems/KIRMEME'
time:
    view_start_date: 1479115800
    submit_start_date: 1479115800
    visible_start_date: 1479115800
    end_date: 1735669800
    current: 1493557709
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV16/mandarin/KIRMEME.pdf), [Russian](http://www.codechef.com/download/translated/NOV16/russian/KIRMEME.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV16/vietnamese/KIRMEME.pdf) as well.

Memeland is a country consisting of **N** cities. There are exactly **N - 1** undirected roads connecting pairs of cities and there is exactly one path between each pair of cities (a path is a sequence of distinct cities where consecutive cities in the sequence are connected by a road).

As the country is located in mountains, cities may be at different heights. The heigh of **i-th** city is **ai**.

Kirito is going to travel around Memeland. Kirito is an unusual man, thus he wants to travel only interesting routes. He calls a sequence of cities **i1, i2, ..., iK** an _interesting route_ if:

- no two cities in the sequence are the same: i.e. **ij** ≠ **ij'** for any two **j** ≠ **j'**.
- cities **ij** and **ij+1** are connected by a road for each **1** ≤ **j** < **K**.
- the number of indices **j** with **1** < **j** < **K** with **aij-1** < **aij** > **aij+1** is at least **L** and at most **R** for some given **L** and **R**.

Help Kirito count the number of interesting routes in Memeland.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of each test case contains one integer **N** denoting the number of cities in Memeland. The second line of each test case contains two integers: **L** and **R** described in the statement.

The third line of each test case contains **N** integers where **i-th** integer is **ai**, the height of **i-th** city. The final **N - 1** lines contain two integers denoting pairs of cities that are connected by roads.

### Output

For each test case, output a single line containing one integer denoting amount of interesting routes.

### Constraints

- **1** ≤ **T** ≤ **20**
- **1** ≤ **N** ≤ **5\*104**
- **1** ≤ **L** ≤ **R** ≤ **107**
- **1** ≤ **ai** ≤ **107**

### Subtasks

- **Subtask 1:** **1** ≤ **N** ≤ **103** - **20 points**
- **Subtask 2:** **Original constraints** - **80 points**

### Example

<pre><b>Input:</b>
<tt>3
3
1 2
1 3 1
1 2
2 3
7
2 2
1 8 2 3 4 8 1
1 2
2 3
3 4
3 5
3 6
6 7
9
1 7
5 1 1 1 1 1 1 1 1
1 2
2 3
1 4
4 5
1 6
6 7
1 8
8 9</tt>
<b>Output:</b>
<tt>1
1
24</tt>

</pre>