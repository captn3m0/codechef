---
category_name: hard
problem_code: XRMTRX
problem_name: 'Xor Matrix'
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
problem_author: alex_2oo8
problem_tester: pushkarmishra
date_added: 13-01-2015
tags:
    - ad
    - alex_2oo8
    - feb15
    - medium
editorial_url: 'http://discuss.codechef.com/problems/XRMTRX'
time:
    view_start_date: 1424079000
    submit_start_date: 1424079000
    visible_start_date: 1424079000
    end_date: 1735669800
    current: 1493556902
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB15/mandarin/XRMTRX.pdf) and [Russian](http://www.codechef.com/download/translated/FEB15/russian/XRMTRX.pdf).

Let's consider a square matrix of size **N × N**, where **N = R −­­­­­­­­­­­ L + 1**. We will enumerate the columns of this matrix with consecutive integers from **L** to **R** (the leftmost column will be assigned number **L** and the rightmost - number **R**). In similar manner we will enumerate rows with the same integers (the top row will be assigned number **L** and the bottom row - number **R**).

Every cell of this matrix has an integer written inside it. The cell at the intersection of row **X** and column **Y** has integer **(X [xor](http://en.wikipedia.org/wiki/Bitwise_operation#XOR) Y)** written inside.

Two cells are called adjacent if and only if they have a common side. That way every inner cell have **4** neighbors and any of four corner cells have **2** neighbors.

A walk is a sequence of cells **C0, C1, C2, ..., CK**, where for every **1** ≤ **i** ≤ **K** the cells **Ci-1** and **Ci** are adjacent and for every  ≤ **j** ≤ **K** the number written inside cell **Cj** is equal **j**. The number **K** is the length of that walk.

Your task is for given **L** and **R** values, find the maximal possible value of **K**, as well as the count **C** of different walks with that maximal length. As the value of **C** could be very large, output it modulo **(109 + 7)**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. 
The description of **T** test cases follows. 
For each test case, the only line of input contains two integers **L** and **R**.

### Output

For each test case, output a single line containing two integers **K** and **C**. 
The value of **C** should be printed modulo **(109 + 7)**.

### Constraints

- **1** ≤ **T** ≤ **20 000**
- **1** ≤ **L** ≤ **R** ≤ **1018**

### Subtasks

- Subtask #1: **1** ≤ **T** ≤ **500**;  ≤ **R - L** ≤ **300** (8 points)
- Subtask #2: original constraints, only the value of **K** will be checked. (24 points)
- Subtask #3: original constraints (68 points)

### Example

```
<b>Input:</b>
4
1 1
1 2
1 3
2 3

<b>Output:</b>
0 1
0 2
3 4
1 4

```
### Explanation

**Example case 1.** The matrix contains just one cell, so, there is no possibility to make a single move, thus **K = 0**. We have just one possibility - to start the walk at the only cell and to end it immediately.

**Example case 2.** The matrix doesn't contains a cell with number one inside, so, there once again is no possibility to make a single move, thus **K = 0**. Our walk is just a single cell with number zero inside and there are two such cells, thus **C = 2**. The matrix in this case looks like this:

```

<b>(1 xor 1)   (1 xor 2)</b>          =          <b>0 3</b>
<b>(2 xor 1)   (2 xor 2)</b>          =          <b>3 0</b>

```
**Example case 3.** The four possible walks are:

```
<font size="3">0 <b><font color="#578fb2">3 2</font></b>               0 <b><font color="#578fb2">3 2</font></b>               0 3 2               0 3 2
3 <b><font color="#578fb2">0 1</font></b>               3 0 <b><font color="#578fb2">1</font></b>               <b><font color="#578fb2">3 0</font></b> 1               <b><font color="#578fb2">3</font></b> 0 1
2 1 0               2 1 <b><font color="#578fb2">0</font></b>               <b><font color="#578fb2">2 1</font></b> 0               <b><font color="#578fb2">2 1 0</font></b>
</font>
```
**Example case 4.** The four possible walks are:

```
<font size="3"><b><font color="#578fb2">0 1</font></b>                   0 <b><font color="#578fb2">1</font></b>                   <b><font color="#578fb2">0</font></b> 1                   0 1
1 0                   1 <b><font color="#578fb2">0</font></b>                   <b><font color="#578fb2">1</font></b> 0                   <b><font color="#578fb2">1 0</font></b>
</font>
```