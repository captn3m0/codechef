---
category_name: hard
problem_code: RNG
problem_name: 'Random Number Generator'
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
max_timelimit: '15'
source_sizelimit: '50000'
problem_author: cgy4ever
problem_tester: laycurse
date_added: 12-12-2014
tags:
    - cgy4ever
    - fft
    - hard
    - march15
editorial_url: 'http://discuss.codechef.com/problems/RNG'
time:
    view_start_date: 1426498200
    submit_start_date: 1426498200
    visible_start_date: 1426498200
    end_date: 1735669800
    current: 1493556816
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/MARCH15/mandarin/RNG.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH15/russian/RNG.pdf).

You may know how to write a random number generator (RNG) after solving [this problem (SEAPROAR)](http://www.codechef.com/MARCH15/problems/SEAPROAR).

Another way to write a RNG is to use linear recurrence relation. e.g. let's consider the following linear recurrence:

**Ai = (Ai−1 × C1 + Ai−2 × C2 + ... + Ai−k × Ck) mod 104857601**, for **i = k+1, k+2, ...,**

 where **k** is a positive integer.

You are given initial values **A1, A2, ..., Ak** and the coefficients **C1, C2, ..., Ck**. Then the RNG can be used to generate any **Ai** for **i** larger than **k**.

Your task is to calculate **AN** for a given **N**.

### Input

There is exactly one test case in each test file.

The first line of input contains two space-separated integers **k** and **N** as described in the statement. The second line contains **k** space-separated integers **A1, A2, ..., Ak** denoting the initial values as defined in the problem statement.

 Then the third line contains **k** space-separated integers **C1, C2, ..., Ck**, denoting the coefficients.

### Output

Print a single integer denoting value of **AN**.

### Constraints and Subtasks

- **1 ≤ N ≤ 1018**
- **0 ≤ Ai, Ci &lt; 104857601**

**Subtask 1: 10 points**

- **1 ≤ k ≤ 3000**

**Subtask 2: 90 points**

- **1 ≤ k ≤ 30000**

### Example

<pre><b>Input:</b>
3 5
1 2 3
4 5 6

<b>Output:</b>
139
</pre>
### Explanation

**A1 = 1.**
**A2 = 2.**
**A3 = 3.**
**A4 = (A3 × C1 + A2 × C2 + A1 × C3) mod 104857601 = (3 × 4 + 2 × 5 + 1 × 6) mod 104857601 = (12 + 10 + 6) mod 104857601 = 28.**
**A5 = (A4 × C1 + A3 × C2 + A2 × C3) mod 104857601 = (28 × 4 + 3 × 5 + 2 × 6) mod 104857601 = (112 + 15 + 12) mod 104857601 = 139.**
