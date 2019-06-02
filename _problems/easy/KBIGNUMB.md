---
category_name: easy
problem_code: KBIGNUMB
problem_name: 'Eugene and big number'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: aangairbender
problem_tester: mgch
date_added: 5-04-2016
tags:
    - aangairbender
time:
    view_start_date: 1487496600
    submit_start_date: 1487496600
    visible_start_date: 1487496600
    end_date: 1735669800
    current: 1493558156
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB17/mandarin/KBIGNUMB.pdf), [Russian](http://www.codechef.com/download/translated/FEB17/russian/KBIGNUMB.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB17/vietnamese/KBIGNUMB.pdf) as well.

Eugene has to do his homework. But today, he is feeling very lazy and wants to you do his homework. His homework has the following given maths problem.

You are given three integers: **A**, **N**, **M**. You write the number **A** appended to itself **N** times in a row. Let's call the resulting big number **X**. For example, if **A = 120, N = 3**, then **X** will be **120120120**. Find out the value of **X** [modulo](https://en.wikipedia.org/wiki/Modulo_operation) **M**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follow.

Each test case is described in one line containing three integers: **A**, **N** and **M** as described in the problem statement.

### Output

For each test case, output a single line containing an integer denoting the value of **X** modulo **M**.

### Constraints

- **1** ≤ **T** ≤ **105**
- 0 ≤ **A** ≤ **109**
- **1** ≤ **N** ≤ **1012**
- **2** ≤ **M** ≤ **109**

### Subtasks

**Subtask #1 (15 points):**

- **0 ≤ A ≤ 100**
- **1 ≤ N ≤ 105**

**Subtask #2 (25 points):**

- **1 ≤ N ≤ 109**

**Subtask #3 (60 points):**

- **Original constraints**

### Example

<pre><b>Input:</b>
2
12 2 17
523 3 11

<b>Output:</b>
5
6
</pre>
### Explanation

**Example 1:** As **A = 12, N = 2, X = 1212**, **1212 modulo 17 = 5**

**Example 2.** As **A = 523, N = 3, X = 523523523**, **523523523 modulo 11 = 6**
