---
category_name: easy
problem_code: LEVY
problem_name: 'Levy Conjecture'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kaushik_iska
problem_tester: laycurse
date_added: 7-03-2013
tags:
    - april13
    - kaushik_iska
    - sieve
    - simple
editorial_url: 'http://discuss.codechef.com/problems/LEVY'
time:
    view_start_date: 1366018200
    submit_start_date: 1366018200
    visible_start_date: 1366018200
    end_date: 1735669800
    current: 1493558162
layout: problem
---
All submissions for this problem are available.### Problem Statement

**Levy's conjecture**, named after **Hyman Levy**, states that all odd integers greater than **5** can be represented as the sum of an odd prime number and an even semiprime. To put it algebraically, **2n + 1 = p + 2q** always has a solution in primes **p** and **q** (not necessary to be distinct) for **n &gt; 2**. *(Source: [Wikipedia](http://en.wikipedia.org/wiki/Lemoine's_conjecture))*

In this problem, given a positive integer **N** (not necessary to be odd integer greater than **5**). Your task is to calculate how many distinct ordered pairs **(p, q)** such that **N = p + 2q**, where **p** and **q** are primes.

### Input

The first line of input contains an integer **T**, denoting the number of test cases. Then **T** test cases follow.

Each test case consists of exactly one line containing an integer **N**.

### Constraints

- **1** ≤ **T** ≤ **100000 (105)**
- **1** ≤ **N** ≤ **10000 (104)**

### Output

For each test case, output the number of ordered pairs **(p, q)** of primes such that **N = p + 2q**.

### Example

<pre>
<b>Input:</b>
3
2
7
11

<b>Output:</b>
0
1
2
</pre>
### Explanation

**Case #1:** There are no ordered pairs **(p, q)** such that **p + 2q = 2**.

**Case #2:** There is only one ordered pair **(p, q) = (3, 2)** such that **p + 2q = 7**.

**Case #3:** There are two ordered pairs **(p, q) = (7, 2), (5, 3)** such that **p + 2q = 11**.
