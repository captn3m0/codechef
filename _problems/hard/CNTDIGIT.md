---
category_name: hard
problem_code: CNTDIGIT
problem_name: 'Count Digits'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: witua
problem_tester: xcwgf666
date_added: 14-08-2014
tags:
    - cook49
    - dynamic
    - medium
    - witua
editorial_url: 'http://discuss.codechef.com/problems/CNTDIGIT'
time:
    view_start_date: 1408906200
    submit_start_date: 1408906200
    visible_start_date: 1408906200
    end_date: 1735669800
    current: 1493556662
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK49/mandarin2/CNTDIGIT.pdf) and [Russian](http://www.codechef.com/download/translated/COOK49/russian/CNTDIGIT.pdf) as well.

You are given an integer **N**. For each pair of integers (**L**, **R**), where **1** ≤ **L** ≤ **R** ≤ **N** you can find the number of distinct digits that appear in the decimal representation of at least one of the numbers **L L+1** ... **R**.

Find the sum of all that numbers. Since the answer can be large, output it modulo **1000000007**.

### Input

The only line of the input contains a single integer **N** without leading zeros.

### Output

Output the answer to the problem on the first line.

### Constraints

- **1** ≤ **N** ≤ **10100**

### Example

```
<b>Input:</b>
7

<b>Output:</b>
84

```