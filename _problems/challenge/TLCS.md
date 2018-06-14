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
All submissions for this problem are available.For a given two words **x** = _x_1_x_2_...xn_and **y** = _y_1_y_2_...ym_find the longest common subsequence, i.e. **z** = _z_1_z_2_...zk_such that every two consecutive elements of **z** are equal to some two elements of **x**: xa, xb, and **y**: yc, yd where _a_ b and _c_ d. Assume, that elements of words are letters 'a' - 'z' and _m_,_n_

### Input

_t_ \[the number of test cases _n_ **x**
_m_ **y**
...

### Output

case 1 Y \[or N when no answer to this case\] 
_d_ \[the length of the lcs\] 
_zj_ _p q_ \[position of _zj_ in **x** and in **y**, respectively\] 
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