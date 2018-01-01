---
category_name: easy
problem_code: CBALLS
problem_name: 'Churu and Balls'
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
problem_author: amitpandeykgp
problem_tester: antoniuk1
date_added: 9-06-2015
tags:
    - amitpandeykgp
    - easy
    - jan16
    - primenumbers
    - sieve
editorial_url: 'http://discuss.codechef.com/problems/CBALLS'
time:
    view_start_date: 1452504600
    submit_start_date: 1452504600
    visible_start_date: 1452504600
    end_date: 1735669800
    current: 1493558113
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN16/mandarin/CBALLS.pdf), [Russian](http://www.codechef.com/download/translated/JAN16/russian/CBALLS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN16/vietnamese/CBALLS.pdf) as well.

Little Churu is a naughty child, who likes to play with balls. He has **N** buckets. Each bucket contains one or more balls. He has numbered his buckets **1** to **N** (both inclusive). He has an infinite supply of extra balls, apart from the ones already in the buckets. He wants to add zero or more number of balls to each of the buckets in such a way, that number of balls in the buckets are in a non-decreasing order, and their [GCD](https://en.wikipedia.org/wiki/Greatest_common_divisor) is strictly greater than 1.

He wants to do it using the minimum number of extra balls. As he is too young to solve the problem, please help him with the solution.

### Input

- First line of input contains an integer **T** denoting the number of test cases.
- For each test case, first line contains an integer **N** denoting the number of buckets.
- Second line of each test case contains **N** space separated integers, where the **ith** denotes the number of balls in the **ith** bucket.

### Output

For each test case, output a line containing a single integer — the answer for that test case.

### Constraints

**Subtask #1: 20 points**

- **1 ≤ T ≤ 10, 1 ≤ N ≤ 1000, 1 ≤ number of balls in a bucket ≤ 1000**

**Subtask #2: 80 points**

- **1 ≤ T ≤ 10, 1 ≤ N ≤ 10000, 1 ≤ number of balls in a bucket ≤ 10000**

<pre><b>Input:</b>
1
3
11 13 15

<b>Output:</b>
3

</pre>### Explanation
Add one ball to each of the buckets.
