---
category_name: easy
problem_code: KFUNC
problem_name: 'Eugene and function'
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
problem_author: aangairbender
problem_tester: iscsi
date_added: 5-08-2015
tags:
    - aangairbender
    - cakewalk
    - nov15
editorial_url: 'http://discuss.codechef.com/problems/KFUNC'
time:
    view_start_date: 1447666200
    submit_start_date: 1447666200
    visible_start_date: 1447666200
    end_date: 1735669800
    current: 1493558156
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV15/mandarin/KFUNC.pdf), [Russian](http://www.codechef.com/download/translated/NOV15/russian/KFUNC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV15/vietnamese/KFUNC.pdf) as well.

Eugene loves sequences, especially [arithmetic progressions](https://en.wikipedia.org/wiki/Arithmetic_progression). One day he was asked to solve a difficult problem.

If a sequence of numbers **A1**, **A2**, ... , **AN** form an arithmetic progression **A**, he was asked to calculate sum of **F(Ai)**, for **L** ≤ **i** ≤ **R**.

**F(X)** is defined as:

If **X** &lt; 10 then **F(X)** = **X**.

Else **F(X)** = **F(**sum\_of\_digits**(X))**.

Example:

**F(**1378**)** =
**F(**1+3+7+8**)** =
**F(**19**)** =
**F(**1 + 9**)** =
**F(**10**)** =
**F(**1+0**)** =
**F(**1**)** = 1

### Input

- The first line of the input contains an integer **T** denoting the number of test cases.
- Each test case is described in one line containing four integers: **A1** denoting the first element of the arithmetic progression **A**, **D** denoting the common difference between successive members of **A**, and **L** and **R** as described in the problem statement.

### Output

- For each test case, output a single line containing one integer denoting sum of **F(Ai)**.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **A1** ≤ **109**
- 0 ≤ **D** ≤ **10**9
- **1** ≤ **R** ≤ **1018**
- **1** ≤ **L** ≤ **R**

### Subtasks

- **Subtask 1:** 0 ≤ **D** ≤ 100, 1 ≤ **A1** ≤ 109, 1 ≤ R ≤ 100 - **15 points**
- **Subtask 2:** 0 ≤ **D** ≤ 109, 1 ≤ **A1** ≤ 109, 1 ≤ R ≤ 106 - **25 points**
- **Subtask 3:** Original constraints - **60 points**

### Example

<pre><b>Input:</b>
2
1 1 1 3
14 7 2 4

<b>Output:</b>
6
12

</pre>
### Explanation

**Example case 1.**

**A** = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10, ...}
**A1** = 1
**A2** = 2
**A3** = 3
**F(A1)** = 1
**F(A2)** = 2
**F(A3)** = 3
**1+2+3=6**

**Example case 2.**

**A** = {14, 21, 28, 35, 42, 49, 56, 63, 70, 77, ...}
**A2** = 21
**A3** = 28
**A4** = 35
**F(A2)** = 3
**F(A3)** = 1
**F(A4)** = 8
**3+1+8=12**
