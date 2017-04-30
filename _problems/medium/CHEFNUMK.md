---
category_name: medium
problem_code: CHEFNUMK
problem_name: 'Chef and Queries'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: tuananh93
date_added: 9-12-2016
tags:
    - cook77
    - easy
    - mgch
    - query
editorial_url: 'https://discuss.codechef.com/problems/CHEFNUMK'
time:
    view_start_date: 1482085800
    submit_start_date: 1482085800
    visible_start_date: 1482085800
    end_date: 1735669800
    current: 1493557542
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK77/mandarin/CHEFARRB.pdf), [Russian](http://www.codechef.com/download/translated/COOK77/russian/CHEFARRB.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK77/vietnamese/CHEFARRB.pdf) as well.

As you know Chef likes problems which involving into newest data structures. Today he has troubes in solving tricky problem. You have array **A** consisting of **N** integers and **Q** queries to it. Queries are next: - **L** **R** **K**, how many values in segment **A**\[**L**..**R**\] have frequency not more than **K**.

### Input

The first line of input contains **T** - number of test cases. **T** test cases follow.

For each test case, first line contains an integer **N** - number of elements in array, and integer **Q** - number of queries to it.

Second line contains **N** positive integer numbers - elements of array **A**. Each of next **Q** lines containing three integers **L**, **R**, **K**.

### Output

For each query output answer for it in separate line.

### Constraints

- **1** ≤ **T**, **N**, **Q**, sum over all values of **N** in the input, sum over all values of **Q** in the input ≤ **200,000**
- **1** ≤ **A**i ≤ **109**
- **1** ≤ **L** ≤ **R** ≤ **N**
- **1** ≤ **K** ≤ **N**

### Example

```
<b>Input:</b>
1
5 3
1 2 3 2 1
2 4 2
1 5 1
1 5 2
<b>Output:</b>
2
1
3


```