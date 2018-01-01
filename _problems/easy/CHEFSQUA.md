---
category_name: easy
problem_code: CHEFSQUA
problem_name: 'Chef and Square'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: shangjingbo
date_added: 3-04-2014
tags:
    - berezin
    - easy
    - geometry
    - oct14
editorial_url: 'http://discuss.codechef.com/problems/CHEFSQUA'
time:
    view_start_date: 1413192600
    submit_start_date: 1413192600
    visible_start_date: 1413192600
    end_date: 1735669800
    current: 1493558121
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT14/mandarin/CHEFSQUA.pdf) and [Russian](http://www.codechef.com/download/translated/OCT14/russian/CHEFSQUA.pdf).

Chef loves squares! You are given **N** points with integers coordinates, Chef asks you to find out how many points he should add to these set of **N** points, so that one could create at least one square having its vertices from the points of the resulting set. Note that the square created need not to be parallel to the axis.

### Input

The first line contains singe integer **N**.

Each of next **N** lines contains two integers **Xi** and **Yi** denotine the coordinates of **i**-th point.

### Output

In a single line print single integer - the minimal number of points Chef need to paint to receive at least one square.

### Constraints

- ≤ **N** ≤ **2000**
- **-10^6** ≤ **Xi, Yi** ≤ **10^6**
- There are NO coincided points

### Example

<pre><b>Input:</b>
3
0 0
2 2
3 3

<b>Output:</b>
2

<b>Input:</b>
5
0 0
100 100
200 200
100 0
0 100

<b>Output:</b>
0

</pre>### Explanation
For the first example Chef can add points **(2, 0), (0, 2)** or **(2, 3), (3, 2)**

For the second example Chef already has square **(0, 0), (100, 0), (0, 100), (100, 100)**.
