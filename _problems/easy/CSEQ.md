---
category_name: easy
problem_code: CSEQ
problem_name: 'Count Sequences'
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
problem_author: darkshadows
problem_tester: xcwgf666
date_added: 18-04-2014
tags:
    - april15
    - combinatorics
    - darkshadows
    - dynamic
    - easy
    - lucas
    - maths
editorial_url: 'http://discuss.codechef.com/problems/CSEQ'
time:
    view_start_date: 1428917400
    submit_start_date: 1428917400
    visible_start_date: 1428917400
    end_date: 1735669800
    current: 1493558134
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL15/mandarin/CSEQ.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL15/russian/CSEQ.pdf).

Given three positive integers **N**, **L** and **R**, find the number of non-decreasing sequences of size at least **1** and at most **N**, such that each element of the sequence lies between **L** and **R**, both inclusive.

Print the answer modulo **106+3**.

### Input

- First line of input contains **T**, the number of the test cases.
- Each of next **T** lines contains three space separated integers **N**, **L** and **R**.

### Output

For each test case print the answer modulo **106+3** in a single line.

### Constraints

- **1** ≤ **T** ≤ **100**
- **L ≤ R**

### Subtasks

- Subtask #1 (20 points): **1** ≤ **N, L, R** ≤ **100**
- Subtask #2 (30 points): **1** ≤ **N, L, R** ≤ **104**
- Subtask #3 (50 points): **1** ≤ **N, L, R** ≤ **109**

### Example

<pre><b>Input:</b>
2
1 4 5
2 4 5

<b>Output:</b>
2
5

</pre>### Explanation
**test #1:** \[4\] and \[5\] are the two sequences.

**test #2:** \[4\], \[5\], \[4, 4\], \[4, 5\] and \[5, 5\] are the five sequences.
