---
category_name: medium
problem_code: COPRIME3
problem_name: 'Coprime Triples'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: furko
date_added: 5-06-2014
tags:
    - easy
    - gcd
    - iep
    - ltime13
    - mobius_function
    - sieve
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/COPRIME3'
time:
    view_start_date: 1404030600
    submit_start_date: 1404030600
    visible_start_date: 1404030600
    end_date: 1735669800
    current: 1493557603
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME13/mandarin/COPRIME3.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME13/russian/COPRIME3.pdf).

You are given a sequence **a1, a2, ..., aN**. Count the number of triples (**i, j, k**) such that 1 ≤ **i** < **j** < **k** ≤ **N** and GCD(**ai, aj, ak**) = 1. Here **GCD** stands for the Greatest Common Divisor.

### Input

The first line of input contains a single integer **N** - the length of the sequence.

The second line contains **N** space-separated integers - **a1, a2, ..., aN** respectively.

### Output

Output the required number of triples on the first line of the output.

### Constraints

- **1** ≤ **N** ≤ **100** : 22 points.
- **1** ≤ **N** ≤ **1000** : 23 points.
- **1** ≤ **N** ≤ **105** : 55 points.
- **1** ≤ **ai** ≤ **106**

### Example

<pre><b>Input:</b>
4
1 2 3 4

<b>Output:</b>
4

</pre>### Explanation
Any triple will be a coprime one.
