---
category_name: school
problem_code: BUGCAL
problem_name: 'Buggy Calculator'
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
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: melfice
date_added: 22-10-2017
tags:
    - cakewalk
    - chemthan
    - chemthan
    - ltime53
editorial_url: 'https://discuss.codechef.com/problems/BUGCAL'
time:
    view_start_date: 1509210000
    submit_start_date: 1509210000
    visible_start_date: 1509210000
    end_date: 1735669800
    current: 1514815982
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME53/mandarin/BUGCAL.pdf), [Russian](http://www.codechef.com/download/translated/LTIME53/russian/BUGCAL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME53/vietnamese/BUGCAL.pdf) as well.

Trans bought a calculator at creatnx's store. Unfortunately, it is fake. It has many bugs. One of them is adding two numbers without carrying. Example expression: 12 + 9 will have result 11 in his calculator. Given an expression in the form **a + b**, please output result from that calculator.

### Input

The first line contains an integer **T** denote the number of test cases. Each test case contains two integers **a, b** in a single line.

### Output

Each test case, print answer in a single line.

### Constraints

- **1 ≤ T ≤ 100**
- **1 ≤ a, b ≤ 109**

Subtasks:

- Subtask #1 (30 points): **1 ≤ a, b ≤ 9**
- Subtask #2 (70 points): original constrains

### Example

<pre><b>Input:</b>
2
12 9
25 25

<b>Output:</b>
11
40
</pre>