---
category_name: easy
problem_code: XDS
problem_name: 'XD Subsequences'
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
date_added: 25-03-2018
tags:
    - kr_abhinav
time:
    view_start_date: 1522873800
    submit_start_date: 1522873800
    visible_start_date: 1522873800
    end_date: 1735669800
    current: 1525198943
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.**Problem description**.

 Winston and Royce love sharing memes with each other. They express the amount of seconds they laughed ar a meme as the number of ‘XD’ subsequences in their messages. Being optimization freaks, they wanted to find the string with minimum possible length and having exactly the given number of ‘XD’ subsequences.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases.
- Next **T** lines contains a single integer **N**, the no of seconds laughed.

### Output

- For each input, print the corresponding string having minimum length. If there are multiple possible answers, print any.

### Constraints

- 1 ≤ **T** ≤ 1000
- 1 ≤ **N** ≤ 109
- 1 ≤ Sum of length of output over all testcases ≤ 5\*105

### Example

<pre>
<b>Input:</b>
1
9

<b>Output:</b>
XXXDDD
</pre>### Explanation

Some of the possible strings are - XXDDDXD,XXXDDD,XDXXXDD,XDXDXDD etc. Of these, XXXDDD is the smallest.
