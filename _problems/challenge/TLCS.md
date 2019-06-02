---
category_name: challenge
problem_code: TLCS
problem_name: 'Longest Common Subsequence'
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
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2.02'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 1-12-2008
tags:
    - admin
time:
    view_start_date: 1232506581
    submit_start_date: 1232506581
    visible_start_date: 1232506581
    end_date: 1735669800
    current: 1525199680
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.For a given two words **x** = *x*1*x*2*...xn*and **y** = *y*1*y*2*...ym*find the longest common subsequence, i.e. **z** = *z*1*z*2*...zk*such that every two consecutive elements of **z** are equal to some two elements of **x**: xa, xb, and **y**: yc, yd where *a* b and *c* d. Assume, that elements of words are letters 'a' - 'z' and *m*,*n*

### Input

*t* \[the number of test cases *n* **x**
*m* **y**
...

### Output

case 1 Y \[or N when no answer to this case\] 
*d* \[the length of the lcs\] 
*zj* *p q* \[position of *zj* in **x** and in **y**, respectively\] 
...

### Example

<pre>
<b>Input:</b>
3
5 ddacc
3 cac
7 cbbccbc
4 aaca
4 cbeb
5 fdceb

<b>Output:</b>
case 1 Y
2
a 3 2
c 4 3
case 2 N
case 3 Y
3
c 1 3
e 3 4
b 4 5

<b>Score</b>
2

</pre>