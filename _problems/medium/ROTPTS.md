---
category_name: medium
problem_code: ROTPTS
problem_name: 'Rotate Point'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: kingofnumbers
date_added: 29-11-2017
tags:
    - chemthan
    - chemthan
    - cook89
    - likecs
    - matrix
    - medium
    - sqrt
editorial_url: 'https://discuss.codechef.com/problems/ROTPTS'
time:
    view_start_date: 1514140200
    submit_start_date: 1514140200
    visible_start_date: 1514140200
    end_date: 1735669800
    current: 1514816594
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK89/mandarin/ROTPTS.pdf), [Russian](http://www.codechef.com/download/translated/COOK89/russian/ROTPTS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK89/vietnamese/ROTPTS.pdf) as well.

You are given **n** points **p1, p2, ..., pn** in a plane and **n** integers **a1, a2, ..., an**.

For any index **i** (1 ≤ **i** ≤ **n**), it is possible to perform the following operation (let's call it ***i**-rotation*) on an arbitrary point **P**: Rotate **P** by **ai** degrees counter-clockwise around the point **pi**.

Note that **ai** will always be a multiple of 90. Also note that such an operation changes the point **P**.

You should process **q** queries. Each query is of one of the following types:

- 1 **x y l r**: Initially, you are given **P** = (**x**, **y**). Perform each **i**-rotation for **i** = **l, l+1, ..., r** (in this order) on the point **P**. Compute the coordinates of **P** modulo 109 + 7 after performing all **i**-rotations.
- 2 **u x y b**: Change the point **pu** to (**x**, **y**) and the angle **au** to **b**.

### Input

- The first line of the input contains a single integer **n**.
- Then, **n** lines follow. The **i**-th of these lines contains three space-separated integers **xi**, **yi** and **ai**. The **i**-th point is initially **pi** = (**xi**, **yi**).
- The next line contains a single integer **q** denoting the number of queries.
- Each of the following **q** lines contains a query in the format described above.

### Output

For each query of type 1, print a single line containing two space-separated integers denoting the coordinates of the point **P** after performing all rotations, **modulo 109 + 7**.

### Constraints

- 1 ≤ **n** ≤ 105
- 0 ≤ **xi**, **yi**, **x**, **y** ≤ 109
- 0 ≤ **ai**, **b** < 360
- 1 ≤ **q** ≤ 2 · 105
- 1 ≤ **l** ≤ **r** ≤ **n**
- 1 ≤ **u** ≤ **n**

### Example

<pre><b>Input:</b>

3
0 0 90
1 2 180
3 2 270
3
1 5 5 1 3
2 2 2 2 90
1 5 5 1 3

<b>Output:</b>

0 1000000005
1000000003 6
</pre>