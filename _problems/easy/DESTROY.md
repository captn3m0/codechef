---
category_name: easy
problem_code: DESTROY
problem_name: 'Chef and Destruction'
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
problem_author: ma5termind
problem_tester: antoniuk1
date_added: 2-11-2015
tags:
    - cook66
    - easy
    - greedy
    - ma5termind
editorial_url: 'http://discuss.codechef.com/problems/DESTROY'
time:
    view_start_date: 1453660200
    submit_start_date: 1453660200
    visible_start_date: 1453660200
    end_date: 1735669800
    current: 1493558135
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK66/mandarin/DESTROY.pdf), [Russian](http://www.codechef.com/download/translated/COOK66/russian/DESTROY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK66/vietnamese/DESTROY.pdf) as well.

Arrays have fallen out of Chef's good books, and he plans to destroy all arrays he possesses. He is left with the last array **A**, consisting of **N** positive integers. In order to destroy the array, he can perform the following 2 types of operations any number of times.

- Choose any **2** elements, say **X** and **Y**, from the given array **A** such that **X** != **Y**, and remove them, or
- Choose any **1** element, say **X**, from **A**, and remove it.


/>

In order to destroy the array as quickly as possible, Chef is interested in knowing the minimum number of operations required to destroy it. Please help him achieve this task.

### Input

The first line of input contains a single integer **T** denoting the number of test cases. First line of each test case contains a single integer **N** — the number of integers in the array **A**.

Second line of each test case contains **N** space separated integers denoting the array **A**./>

### Output

For each test case, output the required answer in a new line.

### Constraints

**1. 1 ≤ T ≤ 50000** 
**1. 1 ≤ N ≤ 50000** 
**1. 1 ≤ Ai ≤ 109** 
**1. sum of N over all test cases does not exceed 5 × 105** 
###  Example

<pre>
<b>Input</b>
3
2
1 2
2
1 1
3
1 2 3

<b>Output</b>
1
2
2

</pre>### Explanation

- Test 1: In an operation, Chef can choose **2** elements **X** and **Y** such that **X = 1** and **Y = 2** and can destroy them as **X != Y**.
- Test 2: Chef cannot choose **2** elements **X** and **Y** such that **X != Y**. So, he has to use the second operation twice in order to destroy the array.
