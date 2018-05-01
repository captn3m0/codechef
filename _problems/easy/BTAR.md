---
category_name: easy
problem_code: BTAR
problem_name: 'Beautiful Array'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: kingofnumbers
date_added: 19-12-2017
tags:
    - chemthan
    - chemthan
    - cook89
    - easy
    - greedy
    - likecs
editorial_url: 'https://discuss.codechef.com/problems/BTAR'
time:
    view_start_date: 1514140200
    submit_start_date: 1514140200
    visible_start_date: 1514140200
    end_date: 1735669800
    current: 1514816567
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK89/mandarin/BTAR.pdf), [Russian](http://www.codechef.com/download/translated/COOK89/russian/BTAR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK89/vietnamese/BTAR.pdf) as well.

A sequence of integers is _beautiful_ if each element of this sequence is divisible by 4.

You are given a sequence **a1, a2, ..., an**. In one step, you may choose any two elements of this sequence, remove them from the sequence and append their sum to the sequence. Compute the minimum number of steps necessary to make the given sequence beautiful.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **n**.
- The second line contains **n** space-separated integers **a1, a2, ..., an**.

### Output

For each test case, print a single line containing one number — the minimum number of steps necessary to make the given sequence beautiful. If it's impossible to make the sequence beautiful, print -1 instead.

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **n** ≤ 105
- 1 ≤ sum of **n** over all test cases ≤ 106
- 0 ≤ **ai** ≤ 109

### Example

<pre><b>Input:</b>

1
7
1 2 3 1 2 3 8

<b>Output:</b>

3
</pre>