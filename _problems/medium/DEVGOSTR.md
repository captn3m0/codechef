---
category_name: medium
problem_code: DEVGOSTR
problem_name: 'Devu and good strings'
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
date_added: 2-03-2016
tags:
    - admin2
    - april16
    - arithmetic
    - easy
    - hamming
editorial_url: 'http://discuss.codechef.com/problems/DEVGOSTR'
time:
    view_start_date: 1460374200
    submit_start_date: 1460374200
    visible_start_date: 1460374200
    end_date: 1735669800
    current: 1493557915
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL16/mandarin/DEVGOSTR.pdf), [Russian](http://www.codechef.com/download/translated/APRIL16/russian/DEVGOSTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL16/vietnamese/DEVGOSTR.pdf) as well.

A string **str** is called a _good_ string if there does not exist three difference indices **i, j, k** such that **i, j, k** are consecutive three terms of an arithmetic progression and **str\[i\] = str\[j\] = str\[k\]**.

You are given a string **s** and two integers **K**, **A**. You have to find the number of _good_ strings **t** with alphabet size **A** (i.e. if **A = 1**, then string can only have a's and if **A = 2**, string can only contain 'a' or 'b'. e.g. if **A = 2**, **t** can be aa, ab, bb etc., for **A = 3**, string can only contain 'a', 'b' and 'c', i.e. it can be aab bac, bbb, cbb etc.) of length **|s|** such that hamming distance between strings **s** and **t** is less than or equal to **K**. As the answer could be very large, print answers modulo **109 + 7**.

Hamming distance between two strings of same size is defined as the number of indices where their corresponding characters differ. Formally, for two strings **s, t** of length **N**, hamming distance will be number of indices **1 ≤ i ≤ N** such that **s\[i\] != t\[i\]**.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- For each test case, first line will contain two integers **A, K**.
- The second line of each test case will contain the string **s**.

### Output

- For each test case, output a single line corresponding to the answer of the problem.

### Constraints

- **1** ≤ **T** ≤  **50**
- ≤ **K** ≤  **|s|**

### Subtask

**Subtask 1 (10 points)**

- **1 ≤ |s| ≤ 50, A = 1**

**Subtask 2 (20 points)**

- **1 ≤ |s| ≤ 12, 1 ≤ A ≤ 3**

**Subtask 3 (30 points)**

- **1 ≤ |s| ≤ 50, A = 2**

**Subtask 4 (40 points)**

- **1 ≤ |s| ≤ 50, A = 3**

### Example

```
<b>Input:</b>
2
1 0
a
2 2
aba

<b>Output:</b>
1
5

```
### Explanation

**Example case 1.** Only string of length 1 and alphabet size 1 will be 'a'. Hamming distance of "a" with "a" is zero which is ≤ 1. So answer is 1.

**Example case 2.** There can be total 8 strings. 6 of them are good. aaa and bbb are not good, remaining all are good. From the 6 good strings, bab has a hamming distance of 3, remaining other 5 have hamming distance ≤ 2. Hence answer is 5.