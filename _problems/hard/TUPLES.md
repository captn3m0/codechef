---
category_name: hard
problem_code: TUPLES
problem_name: 'Coprime 6-tuples'
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
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: iscsi
date_added: 8-12-2016
tags:
    - fft
    - hard
    - jan17
    - kevinsogo
    - mobius_function
    - number
    - primitive
editorial_url: 'https://discuss.codechef.com/problems/TUPLES'
time:
    view_start_date: 1484731800
    submit_start_date: 1484731800
    visible_start_date: 1484731800
    end_date: 1735669800
    current: 1493556888
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN17/mandarin/TUPLES.pdf), [Russian](http://www.codechef.com/download/translated/JAN17/russian/TUPLES.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN17/vietnamese/TUPLES.pdf) as well.

There are **N** integers **X1**, **X2**, ..., **XN**.

Let's define **Yi,j = Xi × Xj mod 359999**.

How many integer 6-tuples **(a, b, c, d, e, f)** are there such that:

- **1 ≤ a, b, c, d, e, f ≤ N**
- **gcd(Ya, b, Yc, d, Ye, f) = 1**

We define **gcd(0, 0) = 0**.

### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N**.

The second line contains **N** integers separated by single spaces: **X1**, **X2**, ..., **XN**.

### Output

For each test case, output a single line containing the answer. Since the answer can be very large, only output it modulo **109 + 7**.

### Constraints

- **1 ≤ T ≤ 3**
- **1 ≤ Xi ≤ 106**

### Subtasks

**Subtask #1 (47 points):**- **1 ≤ N ≤ 103**

**Subtask #2 (53 points):**- **1 ≤ N ≤ 106**
- The sum of the **N**s is **≤ 106**

### Example

<pre><b>Input:</b>
<tt>1
3
300 3000 30000
</tt>
<b>Output:</b>
<tt>234</tt>

</pre>