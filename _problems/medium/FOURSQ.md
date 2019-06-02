---
category_name: medium
problem_code: FOURSQ
problem_name: 'Fantastic Four'
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
max_timelimit: '1 - 5'
source_sizelimit: '50000'
problem_author: sidhant007
problem_tester: iscsi
date_added: 31-12-2016
tags:
    - data
    - four
    - jan17
    - lagrange
    - segment
    - sidhant007
editorial_url: 'https://discuss.codechef.com/problems/FOURSQ'
time:
    view_start_date: 1484731800
    submit_start_date: 1484731800
    visible_start_date: 1484731800
    end_date: 1735669800
    current: 1493557664
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN17/mandarin/FOURSQ.pdf), [Russian](http://www.codechef.com/download/translated/JAN17/russian/FOURSQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN17/vietnamese/FOURSQ.pdf) as well.

Given an array **A** consisting of **N** integers, you have to perform **Q** operations on it. These operations can be of following two types.

- **Type 1** is update operation in which you update the value of a particular element of the array
- **Type 2** is range query from L to R in which you have to decompose the product of the elements in this range as sum of 4 square numbers.

All these operations should be done under modulo **P** where **P** may or may not be prime. Note - There can be more than one possible solution for a particular query, you can output any of them.

### Input

The first line of the input contains **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains three space separated integers **N**, **Q** and **P** denoting the number of of elements in the array, the number of queries and the modulo value respectively.

The second line contains **N** space-separated integers - **A1**, **A2**, ..., **AN** denoting the input array **A**.

The next **Q** lines contain 2 types of queries.

Type 1 operations are given as "**1 X Y**" (without the double quotes) where **X** denotes the indice to be updated and **Y** denotes the value it needs to be set to, ie. **A\[X\]** = **Y**

Type 2 operations are given as "**2 L R**" (without the double quotes) where **L** and **R** are the left and right end point for the given query.

### Output

For each query of the type 2, **output the respective 4 numbers** in arbitrary order that when squared and summed under modulo **P** make that respective product modulo **P**. In case there is no such quadruple then **output -1.** All the 4 numbers should be between 0 to **P - 1**(inclusive)

### Constraints

Note that **X**, **L** and **R** for the queries will always be in the range from **1** to **N** where **L** ≤ **R**

### Subtasks

**Subtask #1 (10 points):**

- **1** ≤ **T** ≤ **3**
- **1** ≤ **N, Q** ≤ **103**
- **1** ≤ **P** ≤ **103**
- **1** ≤ **A\[i\], Y** ≤ **103**
- **Time limit = 1 second**

**Subtask #2 (30 points):**

- **1** ≤ **T** ≤ **3**
- **1** ≤ **N, Q** ≤ **105**
- **1** ≤ **P** ≤ **106**
- **1** ≤ **A\[i\], Y** ≤ **103**
- **Time limit = 4 seconds**

**Subtask #3 (60 points):**

- **1** ≤ **T** ≤ **3**
- **1** ≤ **N, Q** ≤ **105**
- **1** ≤ **P** ≤ **1012**
- **1** ≤ **A\[i\], Y** ≤ **106**
- **Time limit = 5 seconds**

### Example

<pre><b>Input:</b>
1
5 4 100
1 2 3 4 5
2 1 5
2 1 3
1 1 4
2 1 3

<b>Output:</b>
8 6 4 2
0 1 1 2
0 2 4 2
</pre>
### Explanation

1 x 2 x 3 x 4 x 5 mod 100 = 120 mod 100 = ( 82 + 62 + 42 + 22 ) mod 100

1 x 2 x 3 mod 100 = 6 mod 100 = ( 02 + 12 + 12 + 22 ) mod 100

4 x 2 x 3 mod 100 = 24 mod 100 = ( 02 + 22 + 42 + 22 ) mod 100
