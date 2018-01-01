---
category_name: medium
problem_code: TRIQUERY
problem_name: 'Triangular Queries'
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
problem_author: rustinpiece
problem_tester: laycurse
date_added: 4-11-2012
tags:
    - feb13
    - line
    - medium
    - rustinpiece
editorial_url: 'http://discuss.codechef.com/problems/TRIQUERY'
time:
    view_start_date: 1360583744
    submit_start_date: 1360583744
    visible_start_date: 1360582602
    end_date: 1735669800
    current: 1493557950
layout: problem
---
All submissions for this problem are available.You are given **N** lattice points **(Xi, Yi), i = 1, 2, ..., N** on a 2D Coordinate System.
You have to process **Q** queries, each query will be given as the form **"x y d"**.
Let **ABC** be the triangle having vertices at **A(x+d, y)**, **B(x, y)** and **C(x, y+d)**.
For each query, you have to find how many of the given lattice points lie inside or on the boundary of the triangle **ABC**.

### Input

The first line of the input contains two space-sparated integers **N** and **Q**.
Each of the following **N** lines have two space-sparated integers **Xi, Yi** giving the x and y coordinate of a lattice point.
Then the following **Q** lines contain three space-sparated integers **x, y, d** giving a query.

### Output

For each query, output one integer on a line which denotes the number of the given lattice points which lie inside or on the boundary of the triangle.

### Constraints

**1 ≤ N ≤ 300000 (3 \* 105)**
**1 ≤ Q ≤ 200000 (2 \* 105)**
**1 ≤ Xi, Yi ≤ 300000 (3 \* 105)**
**1 ≤ x, y, d ≤ 300000 (3 \* 105)**

### Sample

<pre>
<b>Input 1:</b>
5 3
1 3
1 5
3 6
4 4
2 6
1 5 3
1 5 4
1 1 1

<b>Output 1:</b>
3
3
0

<b>Input 2:</b>
2 2
1 5
3 7
2 5 6
2 3 4
 
<b>Output 2:</b>
1
0


</pre>