---
category_name: easy
problem_code: MEXDIV
problem_name: 'Mex division'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: gomelfk
problem_tester: null
date_added: 2-06-2017
tags:
    - gomelfk
time:
    view_start_date: 1496516400
    submit_start_date: 1496516400
    visible_start_date: 1496516400
    end_date: 1735669800
    current: 1497284093
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKEL17/mandarin/MEXDIV.pdf), [Russian](http://www.codechef.com/download/translated/SNCKEL17/russian/MEXDIV.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKEL17/vietnamese/MEXDIV.pdf) as well.

Given an array **A** of **n** non-negative integers. Find the number of ways to partition/divide the array into subarrays, such that **[mex](https://en.wikipedia.org/wiki/Mex_(mathematics))** in each subarray is not more than **k**. For example, mex of the arrays \[1, 2\] will be 0, and that of \[0, 2\] will be 1, and that of \[0, 1, 2\] will be 3. Due to the fact that the answer can turn out to be quite large, calculate it modulo **109 + 7**.

### Input

- The first line of the input contains two integers **n, k** denoting the number of elements and limit of mex.
- The second line contains **n** space-separated integers **A1, A2, ... , An** .

### Output

- Output a single integer corresponding to the answer of the problem.

### Constraints

- **1 ≤ n ≤ 5 \* 105**
- **0 ≤ k, A\[i\] ≤ 109**

### Example

<pre><b>Input:</b>
3 1
0 1 2

<b>Output:</b>
2

</pre><pre><b>Input:</b>
10 3
0 1 2 3 4 0 1 2 5 3

<b>Output:</b>
379
</pre>### Explanation

**Example 1**. The valid ways of partitioning will be \[\[0\], \[1, 2\]\] (mex of first subarray is 1, while that of the second is zero), and \[\[0\], \[1\], \[2\]\] (mex of first subarray is 1, and that of others is 0). There is no other way to partition the array such that mex is less than or equal to 1. For example, \[\[0, 1\], \[2\]\] is not a valid partitioning as mex of first subarray is 2 which is more than 1.
