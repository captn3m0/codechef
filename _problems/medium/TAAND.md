---
category_name: medium
problem_code: TAAND
problem_name: 'And Operation'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: null
date_added: 3-07-2014
tags:
    - ad
    - bitwise
    - easy
    - ltime14
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TAAND'
time:
    view_start_date: 1406452500
    submit_start_date: 1406452500
    visible_start_date: 1406452500
    end_date: 1735669800
    current: 1493557938
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME14/mandarin/TAAND1.pdf).

Given an array of **n** non-negative integers: **A1**, **A2**, …, **AN**. Your mission is finding a pair of integers **Au**, **Av** (1 ≤  **u** < **v** ≤ **N**) such that (**Au** and **Av**) is as large as possible.
**And** is a bit-wise operation which is corresponding to **&** in C++ and Java.

### Input

The first line of the input contains a single integer **N**. The **i**th line in the next **N** lines contains the **Ai**.

### Output

Contains a single integer which is the largest value of **Au** and **Av** where 1 ≤  **u** < **v** ≤ **N**.

### Constraints

50 points:

- **2** ≤ **N** ≤ **5000**
- ≤ **Ai** ≤ **109**

50 points:

- **2** ≤ **N** ≤ **3 × 105**
- ≤ **Ai** ≤ **109**

### Example

<pre><b>Input:</b>
4
2
4
8
10

<b>Output:</b>
8


</pre>### Explanation
- 2 and 4 = 0
- 2 and 8 = 0
- 2 and 10 = 2
- 4 and 8 = 0
- 4 and 10 = 0
- 8 and 10 = 8
