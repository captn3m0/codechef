---
category_name: school
problem_code: INTEST
problem_name: 'Enormous Input Test'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 1-12-2008
tags:
    - admin
time:
    view_start_date: 1232694607
    submit_start_date: 1232694607
    visible_start_date: 1240484210
    end_date: 1735669800
    current: 1492507648
layout: problem
---
All submissions for this problem are available.The purpose of this problem is to verify whether the method you are using to read input data is sufficiently fast to handle problems branded with the **enormous Input/Output** warning. You are expected to be able to process at least 2.5MB of input data per second at runtime.

### Input

The input begins with two positive integers n k (n, k7). The next n lines of input contain one positive integer ti, not greater than 109, each.

### Output

Write a single integer to output, denoting how many integers ti are divisible by k.

### Example

<pre>
<b>Input:</b>
7 3
1
51
966369
7
9
999996
11

<b>Output:</b>
4
</pre>