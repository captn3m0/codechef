---
category_name: medium
problem_code: POLYEVAL
problem_name: 'Evaluate the polynomial'
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
problem_author: xcwgf666
problem_tester: mugurelionut
date_added: 22-05-2016
tags:
    - fft
    - july16
    - simple
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/POLYEVAL'
time:
    view_start_date: 1468402200
    submit_start_date: 1468402200
    visible_start_date: 1468402200
    end_date: 1735669800
    current: 1493557852
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY16/mandarin/POLYEVAL.pdf), [Russian](http://www.codechef.com/download/translated/JULY16/russian/POLYEVAL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY16/vietnamese/POLYEVAL.pdf) as well.

You are given a polynomial of degree **N** with integer coefficients. Your task is to find the value of this polynomial at some **K** different integers, modulo **786433**.

### Input

The first line of the input contains an integer **N** denoting the degree of the polynomial.

The following line of each test case contains **(N+1)** integers denoting the coefficients of the polynomial. The **i**th numbers in this line denotes the coefficient **ai-1** in the polynomial **a0 + a1 × x1 + a2 × x2 + ... + aN × xN**.

The following line contains a single integer **Q** denoting the number of queries.

The **j**th of the following **Q** lines contains an integer number **xj** denoting the query.

### Output

For each query, output a single line containing the answer to the corresponding query. In other words, the **j**th line of the output should have an integer equal to **a0 + a1 × xj + a2 × xj2 + ... + aN × xjN** modulo **786433**.

### Constraints and Subtasks

- ≤ **ai**, **xj** < **786433**
- **Subtask #1** (37 points):  ≤ **N, Q** ≤ **1000**
- **Subtask #2** (63 points):  ≤ **N, Q** ≤ **2.5 × 105**

### Example

<pre><b>Input:</b>
<tt>2
1 2 3
3
7
8
9</tt>

<b>Output:</b>
<tt>162
209
262</tt>

</pre>### Explanation
**Example case 1.**

- Query 1: 1 + 2 × 7 + 3 × 7 × 7 = 162
- Query 2: 1 + 2 × 8 + 3 × 8 × 8 = 209
- Query 3: 1 + 2 × 9 + 3 × 9 × 9 = 262
