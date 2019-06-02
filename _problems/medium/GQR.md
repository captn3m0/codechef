---
category_name: medium
problem_code: GQR
problem_name: 'Queries with GCD'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 11-12-2017
tags:
    - dynamic
    - gcd
    - ltime58
    - medium
    - mgch
time:
    view_start_date: 1522602000
    submit_start_date: 1522602000
    visible_start_date: 1522602000
    end_date: 1735669800
    current: 1525454448
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME58/mandarin/GQR.pdf), [Russian](http://www.codechef.com/download/translated/LTIME58/russian/GQR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME58/vietnamese/GQR.pdf) as well.

You are given a sequence **A** with **N** elements and **Q** queries on this sequence. In each query, you are given two indices **L** and **R**; you should compute the maximum value of the [greatest common divisor](https://en.wikipedia.org/wiki/Greatest_common_divisor) (GCD) of two elements **Ax**, **Ay** satisfying **L** ≤ **x** < **y** ≤ **R**.

### Input

- The first line of the input contains two space-separated integers **N** and **Q**.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**.
- Each of the following **Q** lines contains two space-separated integers **L** and **R** describing one query.

### Output

For each query, print a single line containing the maximum GCD.

### Constraints

- 1 ≤ **N** ≤ 104
- 1 ≤ **Q** ≤ 5 · 105
- 1 ≤ **Ai** ≤ 108 for each valid **i**
- 1 ≤ **L** < **R** ≤ **N**

### Subtasks

**Subtask #1 (25 points):** **N** ≤ 200

**Subtask #2 (25 points):** **Ai** ≤ 1,000 for each valid **i**

**Subtask #3 (50 points):** original constraints

### Example

<pre>
<b>Input:</b>

4 6
4 2 1 8
1 2
1 3
1 4
2 3
2 4
3 4

<b>Output:</b>

2
2
4
1
2
1
</pre>
### Explanation

The answers to the queries are GCDs of the following pairs:

- query 1: GCD(**A1**, **A2**) = 2
- query 2: GCD(**A1**, **A2**) = 2
- query 3: GCD(**A1**, **A4**) = 4
- query 4: GCD(**A2**, **A3**) = 1
- query 5: GCD(**A2**, **A4**) = 2
- query 6: GCD(**A3**, **A4**) = 1
