---
category_name: easy
problem_code: ABX01
problem_name: 'Strange Function'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: abx_2109
problem_tester: kingofnumbers
date_added: 30-10-2017
tags:
    - abx_2109
    - fast
    - ltime55
    - observations
    - simple
editorial_url: 'https://discuss.codechef.com/problems/ABX01'
time:
    view_start_date: 1514653200
    submit_start_date: 1514653200
    visible_start_date: 1514653200
    end_date: 1735669800
    current: 1514815991
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME55/mandarin/ABX01.pdf), [Russian](http://www.codechef.com/download/translated/LTIME55/russian/ABX01.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME55/vietnamese/ABX01.pdf) as well.

As New Year is approaching, Salik is studying functions in order to sharpen his math skills. Instead of regular functions, he is studying a strange function **F** which operates on non-negative integers. The value of **F**(**A**) is obtained by the following process:

- Compute the sum of digits of **A**; let's denote this sum by **S**.
- If **S** is a single-digit integer, then **F**(**A**) = **S**.
- Otherwise, **F**(**A**) = **F**(**S**).

It's guaranteed that this process correctly defines the function **F**.

Since this problem was pretty straightforward, he invented a new problem: Given two integers **A** and **N**, compute **F**(**AN**). Can you help him solve this task?

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains two space-separated integers **A** and **N**.

### Output

For each test case, print a single line containing one integer — the value of **F**(**AN**).

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **A**, **N** ≤ 1018

### Subtasks

**Subtask #1 (10 points):**

- 1 ≤ **N** ≤ 3
- 1 ≤ **A** ≤ 105

**Subtask #2 (20 points):**

- 1 ≤ **N** ≤ 100
- 1 ≤ **A** ≤ 105

**Subtask #3 (70 points):** original constraints

### Example

<pre><b>Input:</b>

3
5 2
7 2
127 1

<b>Output:</b>

7
4
1

</pre>### Explanation
**Example case 1:** F(5 · 5) = F(25) = F(2+5) = F(7) = 7

**Example case 2:** F(7 · 7) = F(49) = F(4+9) = F(13) = F(1+3) = F(4) = 4

**Example case 3:** F(127) = F(1+2+7) = F(10) = F(1+0) = F(1) = 1
