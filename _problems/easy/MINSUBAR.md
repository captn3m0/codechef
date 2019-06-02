---
category_name: easy
problem_code: MINSUBAR
problem_name: 'Minimum SubArray'
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
date_added: 23-10-2017
tags:
    - binary
    - chemthan
    - chemthan
    - cook89
    - easy
    - likecs
    - prefix
editorial_url: 'https://discuss.codechef.com/problems/MINSUBAR'
time:
    view_start_date: 1514140200
    submit_start_date: 1514140200
    visible_start_date: 1514140200
    end_date: 1735669800
    current: 1514816310
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK89/mandarin/MINSUBAR.pdf), [Russian](http://www.codechef.com/download/translated/COOK89/russian/MINSUBAR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK89/vietnamese/MINSUBAR.pdf) as well.

You are given a sequence of **n** integers **a1**, **a2**, ..., **an** and an integer **d**.

Find the length of the shortest non-empty *contiguous* subsequence with sum of elements at least **d**. Formally, you should find the smallest positive integer **k** with the following property: there is an integer **s** (1 ≤ **s** ≤ **N-k+1**) such that **as + as+1 + ... + as+k-1** ≥ **d**.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **n** and **d**.
- The second line contains **n** space-separated integers **a1**, **a2**, ..., **an**.

### Output

For each test case, print a single line containing one integer — the length of the shortest contiguous subsequence with sum of elements ≥ **d**. If there is no such subsequence, print -1 instead.

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **n** ≤ 105
- -109 ≤ **d** ≤ 109
- -104 ≤ **ai** ≤ 104
- 1 ≤ sum of **n** over all test cases ≤ 2 · 105

### Example

<pre>
<b>Input:</b>

2
5 5
1 2 3 1 -5
5 1
1 2 3 1 -5

<b>Output:</b>

2
1
</pre>