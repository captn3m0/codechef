---
category_name: school
problem_code: VILTRIBE
problem_name: 'Villages and Tribes'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 30-10-2017
tags:
    - admin2
    - cakewalk
    - nov17
editorial_url: 'https://discuss.codechef.com/problems/VILTRIBE'
time:
    view_start_date: 1510579800
    submit_start_date: 1510579800
    visible_start_date: 1510579800
    end_date: 1735669800
    current: 1514815986
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/NOV17/mandarin/VILTRIBE.pdf), [Russian](http://www.codechef.com/download/translated/NOV17/russian/VILTRIBE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV17/vietnamese/VILTRIBE.pdf) as well.

There are **n** villages in a line in an area. There are two kinds of tribes A and B that reside there. A village can be either empty or occupied by one of the tribes. An empty village is said to be controlled by a tribe of village A if it is surrounded by villages of tribes A from the left and from the right. Same goes for the tribe B.

Find out the number of villages that are either occupied by or controlled by tribes A and B, respectively.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of the input contains a string **s** denoting the configuration of the villages, each character of which can be 'A', 'B' or '.'.

### Output

For each test case, output two space-separated integers denoting the number of villages either occupied by or controlled by tribe A and B, respectively.

### Constraints

- **1 ≤ T ≤ 20**
- **1 ≤ |s| ≤ 105**

### Subtasks

- **Subtask #1** (40 points): **1 ≤ |s| ≤ 103**
- **Subtask #2** (60 points): Original constraints

### Example

<pre>
<b>Input</b>
4
A..A..B...B
..A..
A....A
..B..B..B..

<b>Output</b>
4 5
1 0
6 0
0 7
</pre>