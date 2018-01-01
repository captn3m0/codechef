---
category_name: easy
problem_code: MAXNUM3
problem_name: 'Maximum Number'
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
date_added: 24-10-2017
tags:
    - ad
    - chemthan
    - easy
    - ltime53
editorial_url: 'https://discuss.codechef.com/problems/MAXNUM3'
time:
    view_start_date: 1509210000
    submit_start_date: 1509210000
    visible_start_date: 1509210000
    end_date: 1735669800
    current: 1514817221
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME53/mandarin/MAXNUM3.pdf), [Russian](http://www.codechef.com/download/translated/LTIME53/russian/MAXNUM3.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME53/vietnamese/MAXNUM3.pdf) as well.

Given an integer **A** that contains **n > 1** digits. You are asked to remove **exactly one** digit to make the result number is divisible by 6, also make it biggest possible.

### Input

The first line contains an integer **T**, denotes the number of test cases. Each test case is described by an integer **A** in a single line.

### Output

Each test case, output the answer on a single line (it's allowed to delete a digit such that the resulting number contains leading zeroes, you **shouldn't remove them in this case**). If it is impossible to make the result number satisfies the above condition, output -1.

### Constraints

- **1 ≤ T ≤ 100**
- **2 ≤ n ≤ 105**
- **A** will not contain leading zeroes
- the sum of **n** over all test cases **≤ 106**

Subtasks:

- Subtask #1 (30 points): the sum of **n** over all test cases **≤ 2000**
- Subtask #2 (70 points): original constrains

### Example

<pre><b>Input:</b>
3
123
100222
10003

<b>Output:</b>
12
00222
-1

</pre>