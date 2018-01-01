---
category_name: school
problem_code: CHEFSQ
problem_name: 'Chef and his Sequence'
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
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: karthikv1392
problem_tester: null
date_added: 30-04-2015
tags:
    - karthikv1392
time:
    view_start_date: 1436519986
    submit_start_date: 1436519986
    visible_start_date: 1436519986
    end_date: 1735669800
    current: 1492506775
layout: problem
---
All submissions for this problem are available.Chef has a sequence of N numbers. He like a sequence better if the sequence contains his favorite sequence as a substring.

Given the sequence and his favorite sequence(F) check whether the favorite sequence is contained in the sequence

### Input

The first line will contain the number of test cases and are followed by the cases. 
Each test case consists of four lines: The length of the sequence, the sequence N,the length of F and the sequence F

### Output

Print "Yes" if the sequence contains the favourite sequence int it otherwise print "No"

### Constraints

1<=T<=10 
11```
<b>Input:</b>
2
6
1 2 3 4 5 6
3
2 3 4
6
22 5 6 33 1 4
2
4 15
<br></br>
<b>Output:</b>
Yes
No

<pre>(f)(n)<1000>