---
category_name: medium
problem_code: PDSNUM
problem_name: 'PDS Number'
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
max_timelimit: '20'
source_sizelimit: '50000'
problem_author: anhdq
problem_tester: laycurse
date_added: 23-08-2011
tags:
    - anhdq
    - april12
    - medium
editorial_url: 'http://discuss.codechef.com/problems/PDSNUM'
time:
    view_start_date: 1334137623
    submit_start_date: 1334137623
    visible_start_date: 1334136600
    end_date: 1735669800
    current: 1493557845
layout: problem
---
All submissions for this problem are available.A positive integer is called a "PDS Number" if the product of its digits is divisible by the sum of its digits. Let PDS(N) be the N-th PDS Number (indexed from 1), you are requested to calculate it.

### Input

There are several test cases (at most 10000), each formed as follows:

- The first and only line contains a positive integer N (N ≤ 109).

The input is ended by N = 0. ### Output

For each test case, output on a line the respective PDS(N) calculated.

### Example

```

<b>Input:</b>
1
20
0

<b>Output:</b>
1
66

```