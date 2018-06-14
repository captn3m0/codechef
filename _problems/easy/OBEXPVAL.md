---
category_name: easy
problem_code: OBEXPVAL
problem_name: 'Obtain Desired Expected Value'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 25-11-2017
tags:
    - acm17chn
    - admin2
    - chn17rol
    - simple
editorial_url: 'https://discuss.codechef.com/problems/OBEXPVAL'
time:
    view_start_date: 1515357000
    submit_start_date: 1515357000
    visible_start_date: 1515357000
    end_date: 1735669800
    current: 1525454371
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given **n** non-negative integers **x1, x2, ..., xn**. You are also given a positive integer **E**. You have to find **n** non-negative real numbers **p1, p2, ..., pn** such that **p1 · x1 + p2 · x2 + p3 · x3 + .... + pn · xn = E** and **p1 + p2 + ... + pn = 1**.

If it's not possible to find **n** such numbers, output -1 instead.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **n** and **E**.
- The second line contains **n** space-separated integers **x1, x2, ..., xn**.

### Output

For each test case, print a single line containing **n** space-separated real numbers denoting the values of **p1, p2, ..., pn**. If there is more than one possible solution, you may output any one. If there is no solution, print -1 instead.

When a solution exists, your answer will be considered correct if the absolute value of the expression **p1 · x1 + p2 · x2 + p3 · x3 + ... + pn · xn - E** doesn't exceed 10-6 and the value of **|(p1 + p2 + p3 + ... + pn) - 1|** doesn't exceed 10-6.

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **n, E** ≤ 103
- 1 ≤ **xi** ≤ 103
- sum of **n** over all test cases doesn't exceed 106

### Example

<pre>
<b>Input</b>

3
1 2
1
3 3
1 2 3
4 4
1 2 3 6

<b>Output</b>

-1
0 0 1.00 
0 0 0.66666666666 0.33333333333
</pre>