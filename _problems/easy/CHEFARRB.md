---
category_name: easy
problem_code: CHEFARRB
problem_name: 'Chef and Subarrays'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: tuananh93
date_added: 9-12-2016
tags:
    - bitwise
    - cook77
    - easy
    - linear
    - mgch
editorial_url: 'https://discuss.codechef.com/problems/CHEFARRB'
time:
    view_start_date: 1482085800
    submit_start_date: 1482085800
    visible_start_date: 1482085800
    end_date: 1735669800
    current: 1493558116
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK77/mandarin/CHEFARRB.pdf), [Russian](http://www.codechef.com/download/translated/COOK77/russian/CHEFARRB.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK77/vietnamese/CHEFARRB.pdf) as well.

Chef has array **A** consisting of **N** integers. He calls a sub-array of the array _good_ if the [bitwise OR](https://en.wikipedia.org/wiki/Bitwise_operation#OR) of all the elements in it is greater or equal than number **K**. Please help him to find out how many sub-arrays of array **A** are _good_!

### Input

The first line of input contains **T** - number of test cases. **T** test cases follow.

For each test case, first line contains an integer **N** - number of elements in array, and integer **K**.

Second line contains **N** space separated non-negative integers denoting array **A**.

### Output

For each test case, output an integer corresponding to the number of _good_ sub-arrays of **A** in separate line.

### Constraints

11. **1** ≤ **T**, **N**, ≤ **100,000**
12. ≤ **A**i, **K** ≤ **109**
13. **1** ≤ Sum over all values of **N** in the input in a single test file ≤ **100,000**
### Example

<pre><b>Input:</b>
2
3 3
1 2 3
3 6
3 4 5

<b>Output:</b>
4
2

</pre>