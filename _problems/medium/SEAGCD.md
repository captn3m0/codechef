---
category_name: medium
problem_code: SEAGCD
problem_name: 'Sereja and GCD'
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
max_timelimit: '1 - 15'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: shiplu
date_added: 21-10-2014
tags:
    - dec14
    - medium
    - number
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAGCD'
time:
    view_start_date: 1418643320
    submit_start_date: 1418643320
    visible_start_date: 1418643000
    end_date: 1735669800
    current: 1493557907
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC14/mandarin/SEAGCD.pdf) and [Russian](http://www.codechef.com/download/translated/DEC14/russian/SEAGCD.pdf).

In this problem Sereja is interested in the number of arrays of integers, **A1, A2, ..., AN**, with **1 ≤ Ai ≤ M**, such that the greatest common divisor of all of its elements is equal to a given integer **D**.

Find the sum of answers to this problem with **D = L, D = L+1, ..., D = R**, modulo **109+7**.

### Input

The first line of the input contains an integer **T** - the number of test cases. **T** tests follow, each containing a single line with the values of **N, M, L, R**.

### Output

For each test case output the required sum, modulo **109+7**.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **L** ≤ **R** ≤ **M**

### Subtasks

- Subtask #1: **1** ≤ **N, M** ≤ **10 (10 points)**
- Subtask #2: **1** ≤ **N, M** ≤ **1000 (30 points)**
- Subtask #3: **1** ≤ **N, M** ≤ **107 (60 points)**

### Example

<pre>
<b>Input:</b>
2
5 5 1 5
5 5 4 5

<b>Output:</b>
3125
2


</pre>