---
category_name: medium
problem_code: OPTSSET
problem_name: 'Optimal Subset'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: melfice
date_added: 21-09-2017
tags:
    - chemthan
    - chemthan
    - ltime53
    - maths
    - medium
    - optimization
editorial_url: 'https://discuss.codechef.com/problems/OPTSSET'
time:
    view_start_date: 1509210000
    submit_start_date: 1509210000
    visible_start_date: 1509210000
    end_date: 1735669800
    current: 1514816021
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME53/mandarin/OPTSSET.pdf), [Russian](http://www.codechef.com/download/translated/LTIME53/russian/OPTSSET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME53/vietnamese/OPTSSET.pdf) as well.

Problem description.

You are given a convex polygon of **n** vertices **P1, P2, ..., Pn** (in counter-clock or clock order). Each vertex is assigned with a weight **wi**.

Find a subset of vertices that **includes vertex 1**.

**1 = i1 2 k ≤ n** that maximizes ratio:

**(dist(i1, i2) + dist(i2, i3) + ... + dist(ik, i1)) / (wi1 + wi2 + ... + wik)**.

Where **dist(i, j)** refers to Euclidean distance between two points **Pi, Pj**.

### Input

The first line contains an integer **T** denotes the number of test cases. Each test case is describes as follow:

An integer **n** on a single line.

**n** next lines, each line contains two integers, that is coordinates of **i**-th vertex

The last line contains **n** space-seperated integer, denotes weight of vertex.

### Output

Each testcase output the maximum ratio can reach on a single line.

Your answer will be considered correct if it has an absolute error less then **10-6**.

### Constraints

- **1 ≤ T ≤ 10**
- **3 ≤ n ≤ 105**
- The sum of **n** over all test cases is at most **2.105**
- 0 ≤ all coordinates ≤ **109**
- **1 ≤ wi ≤ 105**

Subtask:

- Subtask #1 (10 points): **n ≤ 15**
- Subtask #2 (30 points): **n ≤ 1000**
- Subtask #3 (60 points): original constrains

### Example

<pre><b>Input:</b>
3
3
0 0
1 5
2 9
4 4 20
4
0 0
1 5
2 7
3 6
12 15 12 11
5
0 0
1 5
2 8
3 9
4 8
12 11 18 2 7

<b>Output:</b>
1.274754878
0.606675824
1.355261854
</pre>