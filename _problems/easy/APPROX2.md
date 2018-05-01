---
category_name: easy
problem_code: APPROX2
problem_name: 'Approximately II'
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
problem_author: xcwgf666
problem_tester: stzgd
date_added: 27-04-2014
tags:
    - cakewalk
    - ltime12
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/APPROX2'
time:
    view_start_date: 1401006600
    submit_start_date: 1401006600
    visible_start_date: 1401006600
    end_date: 1735669800
    current: 1493558107
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME12/mandarin/APPROX2.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME12/russian/APPROX2.pdf).

You are given an array of **N** integers **a1, a2, ..., aN** and an integer **K**. Find the number of such unordered pairs {**i**, **j**} that

- **i** ≠ **j**
- **|ai + aj - K|** is minimal possible

Output the minimal possible value of **|ai + aj - K|** (where **i** ≠ **j**) and the number of such pairs for the given array and the integer **K**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case consists of two space separated integers - **N** and **K** respectively.

The second line contains **N** single space separated integers - **a1, a2, ..., aN** respectively.

### Output

For each test case, output a single line containing two single space separated integers - the minimal possible value of **|ai + aj - K|** and the number of unordered pairs {**i**, **j**} for which this minimal difference is reached.

### Constraints

- **1** ≤ **T** ≤ **50**
- **1** ≤ **ai, K** ≤ **109**
- **N** = **2** - 31 point.
- **2** ≤ **N** ≤ **1000** - 69 points.

### Example

<pre><b>Input:</b>
1   
4 9
4 4 2 6

<b>Output:</b>
1 4
</pre>### Explanation:

The minimal possible absolute difference of **1** can be obtained by taking the pairs of **a1** and **a2**, **a1** and **a4**, **a2** and **a4**, **a3** and **a4**.
