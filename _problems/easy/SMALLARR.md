---
category_name: easy
problem_code: SMALLARR
problem_name: 'A Small Array'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
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
    - PYP3
    - CLOJ
    - R
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kalpitk
problem_tester: null
date_added: 3-04-2019
tags:
    - kalpitk
time:
    view_start_date: 1555270200
    submit_start_date: 1555270200
    visible_start_date: 1555270200
    end_date: 1735669800
    current: 1559472959
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a sequence of integers **$A\_1,A\_2,…,A\_N$** and a magical non-zero integer $x$

You have to select a subsegment of sequence A (possibly empty), and replace the elements in that subsegment after dividing them by x.

Formally, replace any one subsegment $A\_l, A\_{l+1}, ..., A\_r$ with $A\_l/x, A\_{l+1}/x, ..., A\_r/x$ where $l \\leq r$

What is the minimum possible sum you can obtain?

**Note:** The given operation can only be performed once

### Input 

- The first line of the input contains two positive integer n denoting the size of array, and x denoting the magical integer
- Next line contains $N$ space separated integers


### Output

Single line containing one real number, denoting the minimum possible sum you can obtain. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-2}$ ### Constraints

- $1 \\leq n \\leq 10^3$
- $1 \\leq |x| \\leq 10^3$
- $ |A\_i| \\leq 10^3$

### Sample Input

<pre>3 2
1 -2 3

<h3>Sample Output</h3>
0.5

<h3>Explanation</h3>
<p>Array 1 -2 <b>3</b>, selecting subsegment {3}, you get 1 -2 <b>1.5</b>, which gives $sum=0.5$</p>
</pre>