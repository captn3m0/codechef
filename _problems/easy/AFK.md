---
category_name: easy
problem_code: AFK
problem_name: 'Three Integers'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: lg5293
date_added: 27-03-2018
tags:
    - ad
    - easy
    - ltime58
    - maths
    - mgch
time:
    view_start_date: 1522602000
    submit_start_date: 1522602000
    visible_start_date: 1522602000
    end_date: 1735669800
    current: 1525198933
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME58/mandarin/AFK.pdf), [Russian](http://www.codechef.com/download/translated/LTIME58/russian/AFK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME58/vietnamese/AFK.pdf) as well.

 You are given three integers **A**, **B** and **C**. You may perform the following operation an arbitrary number of times: choose one of the numbers **A**, **B**, **C** and either add 1 to it or subtract 1 from it.

Find the minimum number of operations required to make the sequence **A, B, C** an arithmetic progression, i.e. a sequence which satisfies **B** - **A** = **C** - **B**.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains three space-separated integers **A**, **B** and **C**.

### Output

For each test case, print a single line containing one integer — the minimum required number of operations.

### Constraints

- 1 ≤ **T** ≤ 10,000
- -109 ≤ **A**, **B**, **C** ≤ 109

### Subtasks

**Subtask #1 (35 points):** -102 ≤ **A**, **B**, **C** ≤ 102

**Subtask #2 (65 points):** original constraints

### Example

<pre><b>Input:</b>

5
-5 0 5
-5 7 6
-10 -100 20
1 -1 1
51 23 10

<b>Output:</b>

0
7
105
2
8
</pre>### Explanation

**Example case 1:** No operations are needed because 0-(-5) = 5-0.

**Example case 2:** We can obtain an arithmetic progression in seven operations by adding 1 to **A** = -5 and subtracting 1 six times from **B** = 7.

**Example case 3:** We should add 1 to **B** 105 times.
