---
category_name: medium
problem_code: MXSM
problem_name: 'Chef and Maximum Sum Matrices '
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
problem_author: ma5termind
problem_tester: antoniuk1
date_added: 10-11-2015
tags:
    - ad
    - cook66
    - easy
    - greedy
    - ma5termind
editorial_url: 'http://discuss.codechef.com/problems/MXSM'
time:
    view_start_date: 1453660200
    submit_start_date: 1453660200
    visible_start_date: 1453660200
    end_date: 1735669800
    current: 1493557923
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK66/mandarin/MXSM.pdf), [Russian](http://www.codechef.com/download/translated/COOK66/russian/MXSM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK66/vietnamese/MXSM.pdf) as well.

Dreaming to manipulate the dimensions of spacetime one day, Chef satisfies himself with manipulating dimensions of abstract mathematical entities for now. Today, Chef has **N** lists consisting of integers. The **ith** list is represented as **Li**, and has size **Si**.

Chef has transformed the given lists of integers to form an **N** dimensional matrix **M** of size **S1 × S2 × S3 × … × SN** such that an entry **j1, j2, j3, … , jN** in the matrix **M** is obtained by taking product of given **N** integers **L1\[j1\], L2\[j2\], L3\[j3\], ..., LN\[jN\]**, where **Li\[ji\]** denotes the **jth** integer in the **ith** list (1-based indexing).

To explore the mathematics of the matrix **M** deeply, Chef wants to compute the maximum submatrix sum in this matrix; but he is afraid of its high dimensionality. So, he asked you to help him. He asked you to compute two quantities, the maximum sub-matrix sum in the matrix **M**, and the number of submatrices having this maximum sum.

Since the second answer to this problem can be very large, output it modulo **109+7**.

### Input

- First line of input contains a single integer **T** denoting the number of test cases.
- First line of each test case contains a single integer **N** denoting the number of lists of integers.
- Next **N** lines of each test case contains some space separated integers where integers in the **ith** line make up the **ith** list. Each list description has the following format. 
    - First integer **Si** in the **ith** line denotes the size of the **ith** list, and
    - the next **Si** space separated integers are the elements in the list.

### Output

For each test case, output **2** space separated integers (second integer modulo **109 + 7**) where the first integer denotes the maximum submatrix sum and the second denotes the number of such submatrices.

### Constraints

**1. 1 ≤ T ≤ 100** 
**1. 1 ≤ N ≤ 9** 
**1. 1 ≤ Si ≤ 9** 
**1. -9 ≤ Li\[j\] ≤ 9** 
### Example

**Input**

<pre>
2
2
2 3 4
2 4 5
2
3 4 -5 4
3 -2 3 -2

<b>Output</b>
63 1
12 2
</pre>
### Explanation

![](https://s3.amazonaws.com/hr-challenge-images/3194/1452934896-d5e873b4f2-image1.jpg "image1.jpg")

All the matrices with maximum sum are highlighted with coloured fencing.
