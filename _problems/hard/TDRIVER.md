---
category_name: hard
problem_code: TDRIVER
problem_name: 'Taxi Driver'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: stzgd
date_added: 16-03-2015
tags:
    - cook57
    - geometry
    - kostya_by
    - manhattan
    - medium
editorial_url: 'http://discuss.codechef.com/problems/TDRIVER'
time:
    view_start_date: 1429470000
    submit_start_date: 1429470000
    visible_start_date: 1429470000
    end_date: 1735669800
    current: 1493556996
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK57/mandarin/TDRIVER.pdf) and [Russian](http://www.codechef.com/download/translated/COOK57/russian/TDRIVER.pdf) as well.

Mark is a taxi driver working in a big city. A taxi company, where Mark works, has **N** regular customers. The house of a regular customer can be described as a point of the Cartesian plane with non-negative integer coordinates. Recently, Mark's boss has given him a big assignment: he should drive between each pair of regular customers to make sure all the direct roads between the customers are in a good condition. Now Mark is wondering how big the total distance he will be driving during this assignment is.

More formally, you are given a sequence **p1**, **p2**, ..., **pN** of points of the Cartesian plane with non-negative integer coordinates. These points describe the houses of the regular customers. Also, you are given two positive integer parameters **a** and **b**. The distance between points (**x1**, **y1**) and (**x2**, **y2**) is equal to **max**(**a** × |**x1** - **x2**|, **b** × |**y1** - **y2**|).

You task is to calculate the sum of the distances between each pair of the given points.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of the test case description contains one integer **N** denoting the size of the sequence. The second line contains two positive integers **a** and **b**.

Each of the next **N** lines contains two non-negative integers **xi** and **yi** denoting the coordinates of the corresponding point of the sequence.

### Output

For each test case, output a single line containing one integer: the sum of the distances between each pair of the given points. ### Constraints

- 1 ≤ **T** ≤ 200000
- 1 ≤ **N** ≤ 200000
- 1 ≤ **a**, **b** ≤ 100
- 0 ≤ **xi**, **yi** ≤ 106
- The sum of all **N** in the input is not greater than 200000

### Example

```
<b>Input:</b>
2
4
1 1
0 0
0 1
1 0
1 1
7
6 9
1 2
2 3
4 1
5 431
213 2
32 12
11 99

<b>Output:</b>
6
32274


```