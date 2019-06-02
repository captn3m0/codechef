---
category_name: easy
problem_code: BASE
problem_name: 'Our Base is Under Attack'
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
problem_author: kevinsogo
problem_tester: null
date_added: 23-11-2016
tags:
    - kevinsogo
time:
    view_start_date: 1481535000
    submit_start_date: 1481535000
    visible_start_date: 1481535000
    end_date: 1735669800
    current: 1493558232
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC16/mandarin/BASE.pdf), [Russian](http://www.codechef.com/download/translated/DEC16/russian/BASE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC16/vietnamese/BASE.pdf) as well.

Chef has recently learned about **number bases** and is becoming fascinated.

Chef learned that for bases greater than ten, new digit symbols need to be introduced, and that the convention is to use the first few letters of the English alphabet. For example, in base 16, the digits are 0123456789ABCDEF. Chef thought that this is unsustainable; the English alphabet only has 26 letters, so this scheme can only work up to base 36. But this is no problem for Chef, because Chef is very creative and can just invent new digit symbols when she needs them. (Chef is very creative.)

Chef also noticed that in base two, all positive integers start with the digit **1**! However, this is the only base where this is true. So naturally, Chef wonders: Given some integer **N**, how many bases **b** are there such that the base-**b** representation of **N** starts with a **1**?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each test case consists of one line containing a single integer **N** (in base ten).

### Output

For each test case, output a single line containing the number of bases **b**, or INFINITY if there are an infinite number of them.

### Constraints

### Subtasks

**Subtask #1 (16 points):**- **1** ≤ **T** ≤ **103**
- 0 ≤ **N** 103

**Subtask #2 (24 points):**- **1** ≤ **T** ≤ **103**
- 0 ≤ **N** 106

**Subtask #3 (28 points):**- **1** ≤ **T** ≤ **103**
- 0 ≤ **N** 1012

**Subtask #4 (32 points):**- **1** ≤ **T** ≤ **105**
- 0 ≤ **N** 1012

### Example

<pre><b>Input:</b>
<tt>4
6
9
11
24</tt>

<b>Output:</b>
<tt>4
7
8
14</tt>
</pre>
### Explanation

In the first test case, **6** has a leading digit **1** in bases **2**, **4**, **5** and **6**: **610 = 1102 = 124 = 115 = 106**.
