---
category_name: easy
problem_code: ADTRI
problem_name: 'Rupsa and Equilateral Triangle'
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
problem_author: abhra73
problem_tester: null
date_added: 17-08-2015
tags:
    - abhra73
    - basic
    - easy
    - oct15
    - prime
editorial_url: 'http://discuss.codechef.com/problems/ADTRI'
time:
    view_start_date: 1444642200
    submit_start_date: 1444642200
    visible_start_date: 1444642200
    end_date: 1735669800
    current: 1493558104
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT15/mandarin/ADTRI.pdf) and [Russian](http://www.codechef.com/download/translated/OCT15/russian/ADTRI.pdf) 

Rupsa really loves triangles. One day she came across an equilateral triangle having length of each side as an integer **N**. She started wondering if it was possible to transform the triangle keeping two sides fixed and alter the third side such that it still remains a triangle, but the altered side will have its length as an even integer, and the line drawn from the opposite vertex to the mid-point of the altered side is of integral length.

Since Rupsa is in a hurry to record a song for Chef as he really loves her songs, you must help her solve the problem as fast as possible.

### Input

The first line of input contains an integer **T** denoting the number of test cases.

Each test-case contains a single integer **N**.

### Output

For each test case, output "YES" if the triangle transformation is possible, otherwise "NO" (quotes for clarity only, do not output).

### Constraints

- **1 ≤ T ≤ 106**
- **1 ≤ N ≤ 5 x 106**

### Sub tasks

- Subtask #1: **1 ≤ T ≤ 100, 1 ≤ N ≤ 104** (10 points)
- Subtask #2: **1 ≤ T ≤ 104, 1 ≤ N ≤ 106** (30 points)
- Subtask #3: Original Constraints (60 points)

### Example

<pre><b>Input:</b>
<tt>2
5
3</tt>

<b>Output:</b>
<tt>YES
NO</tt>

</pre>### Explanation
- In test case 1, make the length of any one side **6**, and it will suffice.
