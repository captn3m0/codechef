---
category_name: easy
problem_code: SEAARASU
problem_name: 'Sereja and Array and Subtracting'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: iscsi
date_added: 6-11-2015
tags:
    - cook64
    - easy
    - gcd
    - mathematics
    - number
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAARASU'
time:
    view_start_date: 1448217000
    submit_start_date: 1448217000
    visible_start_date: 1448217000
    end_date: 1735669800
    current: 1493558185
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK64/mandarin/SEAARASU.pdf) and [Russian](http://www.codechef.com/download/translated/COOK64/russian/SEAARASU.pdf).

Sereja has an array **A** of **N** positive integers : **A\[1\], A\[2\], A\[3\], ... , A\[N\]**.

In a single operation on the array, he performs the following two steps :

- Pick two indices **i, j** s.t. **A\[i\] > A\[j\]**
- **A\[i\] -= A\[j\]**

Sereja can apply these operations any number of times (possibly zero), such that the sum of resulting elements of the array is as small as possible.

Help Sereja find this minimum sum.

### Input

First line of input contains an integer **T** - the number of test cases. **T** test cases follow.

First line of each test case contains the integer **N**. The next line contains **N** integers — **A\[1\], A\[2\], A\[3\], ... , A\[N\]**.

### Output

For each test case, output a single line with the answer. ### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **A\[i\]** ≤ **109**

### Example

<pre><b>Input:</b>
2
1
1
3
2 4 6

<b>Output:</b>
1
6
</pre>
### Explanation

**Example case 2.** In this case, one possible way in which Sereja can perform the operations could be as follows.

- Pick **i = 2, j = 1. A\[2\] -= A\[1\]**. Now the resulting array would be **\[2, 2, 6\]**.
- Pick **i = 3, j = 2. A\[3\] -= A\[2\]**. Now the resulting array would be **\[2, 2, 4\].**
- Pick **i = 3, j = 2. A\[3\] -= A\[2\]**. Now the resulting array would be **\[2, 2, 2\]**.
 
As the resulting array is **\[2 2 2\]**, so the sum is 6.
