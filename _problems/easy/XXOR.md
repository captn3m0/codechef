---
category_name: easy
problem_code: XXOR
problem_name: 'Chef and Easy Problem'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: hruday968
problem_tester: null
date_added: 29-01-2018
tags:
    - easy
    - hruday968
    - march18
    - prefix
    - xor
editorial_url: 'https://discuss.codechef.com/problems/XXOR'
time:
    view_start_date: 1520847000
    submit_start_date: 1520847000
    visible_start_date: 1520847000
    end_date: 1735669800
    current: 1525454445
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MARCH18/mandarin/XXOR.pdf), [Russian](http://www.codechef.com/download/translated/MARCH18/russian/XXOR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH18/vietnamese/XXOR.pdf) as well.

You are given a sequence **A1, A2, ..., AN** and **Q** queries. In each query, you are given two parameters **L** and **R**; you have to find the smallest integer **X** such that 0 ≤ **X** 31 and the value of (**AL** xor **X**) + (**AL+1** xor **X**) + ... + (**AR** xor **X**) is maximum possible.

Note: xor denotes the [bitwise xor operation](https://en.wikipedia.org/wiki/Bitwise_operation#XOR).

### Input

- The first line of the input contains two space-separated integers **N** and **Q** denoting the number of elements in **A** and the number of queries respectively.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**.
- Each of the next **Q** lines contains two space-separated integers **L** and **R** describing one query.

### Output

For each query, print a single line containing one integer — the minimum value of **X**.

### Constraints

- 1 ≤ **N** ≤ 105
- 1 ≤ **Q** ≤ 105
- 0 ≤ **Ai** 31 for each valid **i**

### Subtasks

**Subtask #1 (18 points):**

- 1 ≤ **N** ≤ 103
- 1 ≤ **Q** ≤ 103
- 0 ≤ **Ai** 10 for each valid **i**

**Subtask #2 (82 points):** original constraints

### Example

<pre><b>Input:</b>

5 3
20 11 18 2 13
1 3
3 5
2 4

<b>Output:</b>

2147483629
2147483645
2147483645
</pre>