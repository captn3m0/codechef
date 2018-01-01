---
category_name: easy
problem_code: LFEB14B
problem_name: 'Sereja and ASum'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: null
date_added: 9-02-2014
tags:
    - cakewalk
    - implementation
    - ltime09
    - maths
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/LFEB14B'
time:
    view_start_date: 1393146000
    submit_start_date: 1393146000
    visible_start_date: 1393146000
    end_date: 1735669800
    current: 1493558164
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME09/mandarin/LFEB14B.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME09/russian/LFEB14B.pdf).

Sereja have an array that consist of **n** integers **a\[1\], a\[2\], ..., a\[n\]**. Now Sereja want to delete some(possible none, but not all) elements from the array, such that arithmetical mean of all remaining numbers will as big as possible.

Help Sereja, find number of ways to delete numbers.

### Input

First line contain integer **T** - number of testcases. **T** tests follow. First line of each testcase contain integer **n**. Next line contain **n** integers **a\[1\], a\[2\], ..., a\[n\]**.

### Output

For each testcase print the answer modulo **10^9+7**.

### Constraints

10. **1** ≤ **T** ≤ **10**
11. **1** ≤ **n** ≤ **10^5**
12. **1** ≤ **a\[i\]** ≤ **10^5**
### Example

<pre><b>Input:</b>
2
1
1
4
1 2 1 2

<b>Output:</b>
1
3


</pre>### Note
**Test #0-1(25 points) n ≤** 20

**Test #2(25 points) n ≤** 1000

**Test #3-4(50 points) n ≤** 100000
