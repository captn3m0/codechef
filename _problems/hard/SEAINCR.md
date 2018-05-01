---
category_name: hard
problem_code: SEAINCR
problem_name: 'Sereja and Increasing subsequence'
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
problem_author: sereja
problem_tester: kevinsogo
date_added: 13-10-2016
tags:
    - sereja
time:
    view_start_date: 1481535000
    submit_start_date: 1481535000
    visible_start_date: 1481535000
    end_date: 1735669800
    current: 1493556831
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC16/mandarin/SEAINCR.pdf), [Russian](http://www.codechef.com/download/translated/DEC16/russian/SEAINCR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC16/vietnamese/SEAINCR.pdf) as well.

Sereja has an array **A** consisting of **N** integers. Sereja has **M** queries **(Li, Ri)**, and for each query Sereja wants to find the length of the longest increasing subsequence in the array **A\[Li\], A\[Li + 1\], ..., A\[Ri\]**.

Help Sereja find the answer for each query.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The description of **T** test cases follows.

Each test case starts with two integers **N**, **M**.

The next line contains the numbers **A\[1\], A\[2\], ..., A\[N\]**. The next **M** lines contains the pairs **Li, Ri**, which are the queries.

### Output

For each test case, output **M** lines - the answer for each query.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **A\[i\]**, **M**, **N**
- Let **S** be sum of all **A\[i\]** in whole file.
- **1** ≤ **S** ≤  **1000000**
- **1** ≤ **Li** ≤ **Ri** ≤  **N**
- **1** ≤ sum of all **M** per file ≤  **1000000**

### Subtasks

- **Subtask #1:** **1** ≤ **N**, **M** ≤  **100**  (15 points)
- **Subtask #2:** **1** ≤ **N**, **M** ≤  **1000**  (15 points)
- **Subtask #3:**  **original constraints**  (70 points)

### Example

<pre><b>Input:</b>
<tt>1
5 3
2 5 1 2 3
1 5
1 3
2 4</tt>

<b>Output:</b>
<tt>3
2
2</tt>
</pre>