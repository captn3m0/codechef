---
category_name: easy
problem_code: CO92MATR
problem_name: 'Chef Restores a Matrix'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kefaa
problem_tester: null
date_added: 15-03-2018
tags:
    - cook92
    - easy
    - implementation
    - kefaa
editorial_url: 'https://discuss.codechef.com/problems/CO92MATR'
time:
    view_start_date: 1521397800
    submit_start_date: 1521397800
    visible_start_date: 1521397800
    end_date: 1735669800
    current: 1525198884
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK92/mandarin/CO92MATR.pdf), [Russian](http://www.codechef.com/download/translated/COOK92/russian/CO92MATR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK92/vietnamese/CO92MATR.pdf) as well.

Chef defines a _non-decreasing_ matrix as a matrix that satisfies the following rules:

- For each row of the matrix, the elements of this row form a non-decreasing sequence.
- For each column of the matrix, the elements of this column form a non-decreasing sequence.

Chef has a matrix **A** with size **N** × **M**. Each element of this matrix is either unknown (denoted by -1) or a positive integer.

Chef would like to replace each unknown element of this matrix by a positive integer in such a way that the resulting matrix is non-decreasing. Find one possible resulting matrix or determine that it's impossible.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **M**.
- **N** lines follow. For each valid **i**, the **i**-th of these lines contains **M** space-separated integers **Ai1, Ai2, ..., AiM** denoting the elements of the **i**-th row of matrix **A**.

### Output

- For each test case, if there is no way to obtain a non-decreasing matrix, print a single line containing the integer -1.
- Otherwise, print **N** lines describing the matrix obtained by replacing all unknown elements.
- For each valid **i**, the **i**-th of these lines should contain **M** space-separated integers denoting the elements of the **i**-th row of this matrix. Each of these elements should lie between 1 and 2,000,000,000 inclusive.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N**, **M** ≤ 100
- 1 ≤ **Aij** ≤ 109 or **Aij** = -1 for each valid **i**, **j**

### Example

<pre><b>Input:</b>

2
4 4
1 2 2 3
1 -1 7 -1
6 -1 -1 -1
-1 -1 -1 -1
2 3
1 4 -1
1 -1 3

<b>Output:</b>

1 2 2 3
1 7 7 100
6 10 20 101
7 11 21 20000
-1
</pre>