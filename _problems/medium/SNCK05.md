---
category_name: medium
problem_code: SNCK05
problem_name: SUM12
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
    - TEXT
    - WSPC
max_timelimit: '10 - 20'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 16-11-2009
tags:
    - admin
time:
    view_start_date: 1360584657
    submit_start_date: 1360584657
    visible_start_date: 1360584128
    end_date: 1735669800
    current: 1493557931
layout: problem
---
All submissions for this problem are available."...a composition of a positive integer n is a way of writing n as a sum of strictly positive integers. Two sums which differ in the order of their summands are deemed to be different compositions, while they would be considered to be the same partition."
\- Quote from Wikipedia

How many compositions of a number n are with summands either 1 or 2.


### Input

The first line contains a number, the number of test cases (<= 1000000). Each subsequent line contains a number n (<= 1000000000).


### Output

For test case print the solution mod 1000000007 on a new line.


### Example

<pre>
<b>Input:</b>
3
2
4
6

<b>Output:</b>
1
3
8

</pre>