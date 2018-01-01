---
category_name: easy
problem_code: BANDMATR
problem_name: 'Bandwidth of a matrix'
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
problem_author: admin2
problem_tester: xcwgf666
date_added: 23-02-2017
tags:
    - admin2
    - basic
    - march17
    - matrix
    - simple
editorial_url: 'https://discuss.codechef.com/problems/BANDMATR'
time:
    view_start_date: 1489397400
    submit_start_date: 1489397400
    visible_start_date: 1489397400
    end_date: 1735669800
    current: 1493558109
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH17/mandarin/BANDMATR.pdf?v=1), [Russian](http://www.codechef.com/download/translated/MARCH17/russian/BANDMATR.pdf?v=1) and [Vietnamese](http://www.codechef.com/download/translated/MARCH17/vietnamese/BANDMATR.pdf?v=1) as well.

[Bandwidth](https://en.wikipedia.org/wiki/Band_matrix#Bandwidth) of a matrix **A** is defined as the smallest non-negative integer **K** such that **A(i, j) = 0** for **|i - j| > K**.

For example, a matrix with all zeros will have its bandwith equal to zero. Similarly bandwith of [diagonal matrix](https://en.wikipedia.org/wiki/Diagonal_matrix) will also be zero.

For example, for the below given matrix, the bandwith of this matrix is 2.

<pre>
1 0 0
0 1 1
1 1 0 

</pre>Bandwidth of the below matrix is 1. ![](https://codechef_shared.s3.amazonaws.com/download/upload/MARCH17/bandmatr1.png)
Bandwidth of the below matrix is 2. ![](https://codechef_shared.s3.amazonaws.com/download/upload/MARCH17/bandmatr2.png)

Bandwidth of the below matrix is also 2. ![](https://codechef_shared.s3.amazonaws.com/download/upload/MARCH17/bandmatr3.png)

You will be a given a binary matrix **A** of dimensions **N × N**. You are allowed to make following operation as many times as you wish (possibly zero or more). In a single operation, you can swap any two entries of the matrix. Your aim is to minimize the bandwidth of the matrix. Find the minimum bandwidth of the matrix **A** you can get after making as many operations of above type as you want.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follow.

First line of each test case contains an integer **N** denoting the height/width of the matrix.

Next **N** lines of each test case contain **N** space separated binary integers (either zero or one) corresponding to the entries of the matrix.

### Output

For each test case, output a single integer corresponding to the minimum bandwidth that you can obtain.

### Constraints

- **1 ≤ T ≤ 10**
- **1 ≤ N ≤ 500**
- **0 ≤ A(i, j) ≤ 1**

### Subtasks

- Subtask #1 (40 points) : **1 ≤ N ≤ 100**
- Subtask #2 (60 points) : original constraints

### Example

<pre><b>Input:</b>
6
2
0 0
0 0
2
1 0
0 1
2
1 0
1 0
2
1 0
1 1
3
1 0 0
0 1 1
1 1 0
4
1 1 1 1
1 1 1 1
1 1 1 1
1 1 1 1

<b>Output:</b>
0
0
0
1
1
3

</pre>### Explanation
**Example case 1.** The bandwidth of a matrix will all zero entries will be zero. This is the minimum bandwidth you can get, so there is no need of performing any swap operation.

**Example case 2.** The bandwidth of a diagonal matrix will also be zero.

**Example case 3.** You can make the given matrix a diagonal matrix by swapping **A(2, 1)** and **A(2, 2)**, which will have zero bandwidth.

**Example case 4.** You can not make swaps in any way that can reduce the bandwidth of this matrix. Bandwidth of this matrix is equal to 1, which is the minimum bandwidth that you can get.

**Example case 5.** Bandwidth of the given matrix is 2. You can make it equal to be 1 by swapping **A(3, 1)** and **A(3, 3)**, i.e. the matrix after the operation will look like

<pre>
1 0 0
0 1 1
0 1 1

</pre>The bandwidth of this matrix is 1. **Example case 6.** The swap operations won't have any effect on the matrix. Its bandwidth is equal to 3.