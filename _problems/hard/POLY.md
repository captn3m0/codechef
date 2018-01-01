---
category_name: hard
problem_code: POLY
problem_name: Polynomials
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: null
date_added: 27-09-2017
tags:
    - chemthan
    - hard
    - hull
    - nov17
time:
    view_start_date: 1510579800
    submit_start_date: 1510579800
    visible_start_date: 1510579800
    end_date: 1735669800
    current: 1514816604
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/NOV17/mandarin/POLY.pdf), [Russian](http://www.codechef.com/download/translated/NOV17/russian/POLY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV17/vietnamese/POLY.pdf) as well.

Given **n** functions **yi(x) = a0 + a1x + a2x2 + a3x3** and **q** queries. For each query, you are given an integer **t** and you are required to find out **yi** (**i ≤ i ≤ n**) that minimizes the value of **yi(t)**.

### Input

The first line is an integer **T** denotes the number of testcases. Each testcase starts with an integer **n** on a single line, the number of polynomials. The next **n** lines, each line describes a polynomial contains four integers: **a0 a1 a2 a3**. Then a line contains **q**, the number of queries. Each of the next **q** lines describes a query by a single integer **t**.

### Output

Each query, output the answer on a single line.

### Constraints

- **1 ≤ T ≤ 10**
- **1 ≤ n, q ≤ 105**
- **0 ≤ t ≤ 105**
- **0 ≤ a3 ≤ 103**
- **0 ≤ ai ≤ 105**
- sum of **n, q** over all test cases, each is at most **3.105**

### Subtasks:

- Subtask #1 (10 points): **n, q ≤ 103**
- Subtask #2 (20 points): **a2 = a3 = 0**
- Subtask #3 (70 points): original constrains

### Example

<pre><b>Input:</b>
1
5
10 5 4 8
2 0 5 0
1 8 0 2
8 7 8 7
7 0 8 1
4
1
3
5
2

<b>Output:</b>
7
47
127
22

</pre>