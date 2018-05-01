---
category_name: hard
problem_code: DMCS
problem_name: 'Dai Ma Chu Shi'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: wwwwodddd
problem_tester: mgch
date_added: 2-12-2015
tags:
    - gauss
    - hard
    - jan16
    - recurrence
    - wwwwodddd
editorial_url: 'http://discuss.codechef.com/problems/DMCS'
time:
    view_start_date: 1452504600
    submit_start_date: 1452504600
    visible_start_date: 1452504600
    end_date: 1735669800
    current: 1493556966
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN16/mandarin/DMCS.pdf), [Russian](http://www.codechef.com/download/translated/JAN16/russian/DMCS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN16/vietnamese/DMCS.pdf) as well.

Dai Ma Chu Shi is a Chinese CodeChef.

He recently got a huge chocolate with the size **2 × 2 × 2 × 2 × n**. (Yes, in five-dimensional space).
He wants to cut it into **8n** pieces of small chocolate of size **1 × 1 × 1 × 1 × 2** each. Please notice that the direction doesn't matter, **1 × 1 × 1 × 2 × 1** and **2 × 1 × 1 × 1 × 1**  are acceptable.

He wants to know how many ways he can achieve this feat in. Because the answer is very large, please tell him the answer modulo 109+7.

### Input

First line of input contain a single integer **T**, the number of test cases. **T** tests follow. Each test case contain a single integer **n**.

### Output

For each test case output a single line containing the answer for the problem modulo 109+7.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **n** ≤ **109**
- **Subtask 1 (30 points)**, **n** is a power of **2**.
- **Subtask 2 (70 points)**, Original constraints

### Example

<pre><b>Input:</b>
1
1

<b>Output:</b>
272
</pre>### Explanation

I have discovered a truly marvellous enumeration of this, which this margin is too narrow to contain.
