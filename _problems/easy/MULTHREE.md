---
category_name: easy
problem_code: MULTHREE
problem_name: 'Multiple of 3'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sidhant007
problem_tester: kingofnumbers
date_added: 14-01-2018
tags:
    - cook90
    - easy
    - maths
    - modulo
    - sidhant007
editorial_url: 'https://discuss.codechef.com/problems/MULTHREE'
time:
    view_start_date: 1516559400
    submit_start_date: 1516559400
    visible_start_date: 1516559400
    end_date: 1735669800
    current: 1525454368
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK90/mandarin/MULTHREE.pdf), [Russian](http://www.codechef.com/download/translated/COOK90/russian/MULTHREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK90/vietnamese/MULTHREE.pdf) as well.

Consider a very long **K**-digit number **N** with digits **d0, d1, ..., dK-1** (in decimal notation; **d0** is the most significant and **dK-1** the least significant digit). This number is so large that we can't give it to you on the input explicitly; instead, you are only given its starting digits and a way to construct the remainder of the number.

Specifically, you are given **d0** and **d1**; for each **i** ≥ 2, **di** is the sum of all preceding (more significant) digits, modulo 10 — more formally, the following formula must hold: ![](https://discuss.codechef.com/upfiles/latex_ee2df4815ab422dc8e52161db77bfe06.png)

Determine if **N** is a multiple of 3.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains three space-separated integers **K**, **d0** and **d1**.

### Output

For each test case, print a single line containing the string "YES" (without quotes) if the number **N** is a multiple of 3 or "NO" (without quotes) otherwise.

### Constraints

- 1 ≤ **T** ≤ 1000
- 2 ≤ **K** ≤ 1012
- 1 ≤ **d0** ≤ 9
- 0 ≤ **d1** ≤ 9

### Example

<pre><b>Input:</b>
3
5 3 4
13 8 1
760399384224 5 1

<b>Output:</b>
NO
YES
YES
</pre>### Explanation

**Example case 1:** The whole number **N** is **34748**, which is not divisible by 3, so the answer is NO.

**Example case 2:** The whole number **N** is **8198624862486**, which is divisible by 3, so the answer is YES.
