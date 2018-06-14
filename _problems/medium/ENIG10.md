---
category_name: medium
problem_code: ENIG10
problem_name: Xorangements
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
problem_author: kr_abhinav
problem_tester: null
date_added: 27-03-2018
tags:
    - kr_abhinav
time:
    view_start_date: 1522873800
    submit_start_date: 1522873800
    visible_start_date: 1522873800
    end_date: 1735669800
    current: 1525454398
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Given a positive integer **N**, find a possible arrangement of the integers from 0 to **N** -1 such that the binary representation of every number (except the first) differs at most at one bit from the binary representation of the number before it. Or tell that it’s impossible to get such an arrangement.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains a single integer **N**.

### Output

For every testcase print **N** integers on a single line, the required sequence. If there are multiple possible answers, print any one.
 If no such sequence is possible, print -1.

### Constraints

- 1 ≤ **T** ≤ 2000
- 1 ≤ **N** ≤ 100000
- 1 ≤ sum of **N** over all test cases ≤ 2000000

### Example

<pre><b>Input:</b>
5
1
2
3
4
5

<b>Output:</b>
0 
0 1 
2 0 1 
0 1 3 2 
4 0 1 3 2 
</pre>### Explanation

Binary representation of the numbers in the output for **N**=5 are :

100, 000, 001, 011, and 010.
