---
category_name: school
problem_code: LTM40AB
problem_name: 'Chef and Inequality'
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
problem_author: mgch
problem_tester: xcwgf666
date_added: 12-09-2016
tags:
    - basic
    - cakewalk
    - ltime40
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/LTM40AB'
time:
    view_start_date: 1474736400
    submit_start_date: 1474736400
    visible_start_date: 1474736400
    end_date: 1735669800
    current: 1492506721
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME40/mandarin/LTM40AB.pdf), [Russian](http://www.codechef.com/download/translated/LTIME40/russian/LTM40AB.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME40/vietnamese/LTM40AB.pdf) as well.

Chef likes inequalities. Please help him to solve next one.

Given four integers **a**, **b**, **c**, **d**. Find number of solutions **x** y, where **a** ≤ **x** ≤ **b** and **c** ≤ **y** ≤ **d** and **x**, **y** integers.

### Input

The first line contains an integer **T** denoting number of tests.

First line of each test case contains four positive integer numbers **a**, **b**, **c** and **d**.

### Output

For each test case, output a single number each in separate line denoting number of integer solutions as asked in the problem.

### Constraints

- 1 ≤ **T** ≤ 20
- 1 ≤ **a**, **b**, **c**, **d** ≤ 106

### Subtasks

- **Subtask #1: (30 points)**  1 ≤ **a**, **b**, **c**, **d** ≤ 103.
- **Subtask #2: (70 points)**  Original constraints.

### Example

<pre><b>Input:</b>
<tt>1
2 3 3 4</tt>

<b>Output:</b>
<tt>3</tt>

<b>Input:</b>
<tt>1
2 999999 1 1000000</tt>

<b>Output:</b>
<tt>499998500001</tt>
</pre>