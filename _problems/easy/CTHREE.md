---
category_name: easy
problem_code: CTHREE
problem_name: 'Chef and Tuples'
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
problem_tester: wwwwodddd
date_added: 3-02-2018
tags:
    - mgch
editorial_url: 'https://discuss.codechef.com/problems/CTHREE'
time:
    view_start_date: 1518978600
    submit_start_date: 1518978600
    visible_start_date: 1518978600
    end_date: 1735669800
    current: 1525198935
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK91/mandarin/CTHREE.pdf), [Russian](http://www.codechef.com/download/translated/COOK91/russian/CTHREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK91/vietnamese/CTHREE.pdf) as well.

Today, Chef was trying to solve a problem he found pretty hard: Given an integer **N** and a triple of integers (**a**, **b**, **c**), compute the number of triples of positive integers (**x**, **y**, **z**) such that **N** = **x** · **y** · **z**, **x** ≤ **a**, **y** ≤ **b** and **z** ≤ **c**.

Can you help Chef solve this problem?

Two [triples](https://en.wikipedia.org/wiki/Tuple) (**x1**, **y1**, **z1**) and (**x2**, **y2**, **z2**) differ if **x1** is not equal to **x2** or **y1** is not equal to **y2** or **z1** is not equal to **z2**.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains four space-separated integers **N**, **a**, **b** and **c**.

### Output

For each test case, print a single line containing one integer — the number of valid triples (**x**, **y**, **z**).

### Constraints

- 1 ≤ **T** ≤ 20
- 1 ≤ **N** ≤ 109
- 1 ≤ **a**, **b**, **c** ≤ 106

### Example

<pre><b>Input:</b>

3
100 8 23 11
497296800 1000000 1000000 1000000
1 1 2 3

<b>Output:</b>

10
97800
1
</pre>### Explanation

**Example case 1:** There are 10 valid triples (**x**, **y**, **z**): (1, 10, 10), (1, 20, 5), (2, 5, 10), (2, 10, 5), (4, 5, 5), (5, 2, 10), (5, 4, 5), (5, 5, 4), (5, 10, 2), (5, 20, 1).
