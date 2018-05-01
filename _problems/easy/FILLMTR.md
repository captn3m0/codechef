---
category_name: easy
problem_code: FILLMTR
problem_name: 'Fill The Matrix'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: jingbo_adm
date_added: 16-08-2017
tags:
    - admin2
    - bipartite
    - easy
    - sept17
editorial_url: 'https://discuss.codechef.com/problems/FILLMTR'
time:
    view_start_date: 1505122200
    submit_start_date: 1505122200
    visible_start_date: 1505122200
    end_date: 1735669800
    current: 1514816001
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/SEPT17/mandarin/FILLMTR.pdf), [russian](http://www.codechef.com/download/translated/SEPT17/russian/FILLMTR.pdf) and [vietnamese](http://www.codechef.com/download/translated/SEPT17/vietnamese/FILLMTR.pdf) as well.

A matrix B (consisting of integers) of dimension N × N is said to be _good_ if there exists an array A (consisting of integers) such that B\[i\]\[j\] = |A\[i\] - A\[j\]|, where |x| denotes absolute value of integer x.

You are given a partially filled matrix **B** of dimension **N × N**. **Q** of the entries of this matrix are filled by either 0 or 1. You have to identify whether it is possible to fill the remaining entries of matrix **B** (the entries can be filled by **any** integer, not necessarily by 0 or 1) such that the resulting fully filled matrix **B** is _good_.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of each test case contains two space separated integers **N, Q**.

Each of the next **Q** lines contain three space separated integers **i, j, val**, which means that **B\[i\]\[j\]** is filled with value **val**.

### Output

For each test case, output "yes" or "no" (without quotes) in a single line corresponding to the answer of the problem.

### Constraints

- 1 ≤ **T** ≤ 106
- 2 ≤ **N** ≤ 105
- 1 ≤ **Q** ≤ 106
- 1 ≤ **i, j** ≤ **N**
- 0 ≤ **val** ≤ 1
- Sum of each of **N, Q** over all test cases doesn't exceed 106

### Subtasks

- **Subtask #1 (40 points)** 2 ≤ **N** ≤ 103, 1 ≤ **Q** ≤ 103, Sum of each of **N, Q** over all test cases doesn't exceed 104
- **Subtask #2 (60 points)** Original Constraints

### Example

<pre>
<b>Input</b>
4
2 2
1 1 0
1 2 1
2 3
1 1 0
1 2 1
2 1 0
3 2
2 2 0
2 3 1
3 3
1 2 1
2 3 1
1 3 1

<b>Output</b>
yes
no
yes
no
</pre>### Explanation

**Example 1**. You can fill the entries of matrix **B** as follows.

<pre>
0 1
<b>1 0</b>
</pre>This matrix corresponds to the array A = \[1, 2\]. **Example 2**. It is impossible to fill the remaining entries of matrix B such that the resulting matrix is good, as **B**\[1\]\[2\] = 1 and **B**\[2\]\[1\] = 0, which is impossible.
