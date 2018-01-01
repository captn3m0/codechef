---
category_name: easy
problem_code: MAXISUM
problem_name: 'maximize the sum'
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
problem_tester: null
date_added: 6-02-2016
tags:
    - admin2
    - march16
    - simple
editorial_url: 'http://discuss.codechef.com/problems/MAXISUM'
time:
    view_start_date: 1458034200
    submit_start_date: 1458034200
    visible_start_date: 1458034200
    end_date: 1735669800
    current: 1493558167
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH16/mandarin/MAXISUM.pdf), [Russian](http://www.codechef.com/download/translated/MARCH16/russian/MAXISUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH16/vietnamese/MAXISUM.pdf) as well.

You are given two integer arrays **A** and **B** each of size **N**. Let us define _interaction_ of arrays **A** and **B** to be the sum of **A\[i\] \* B\[i\]** for each **i** from **1** to **N**.

You want to maximize the value of _interaction_ of the arrays. You are allowed to make at most **K** (possibly zero) operations of following kind.

- In a single operation, you can increase or decrease any of the elements of array **A** by **1**.

Find out the maximum value of _interaction_ of the arrays that you can get.

### Input

- The first line of input contains a single integer **T** denoting number of test cases.
- For each test case: 
  - First line contains two space separated integers **N, K**.
  - Second line contains **N** space separated integers denoting array **A**.
  - Third line contains **N** space separated integers denoting array **B**.

### Output

- For each test case, output a single integer denoting the answer of the problem.

### Constraints

- 1 ≤ **T** ≤ **10**
- 1 ≤ **N** ≤ **105**
- 0 ≤ **|A\[i\]|, |B\[i\]|** ≤ **105**
- 0 ≤ **K** ≤ **109**

### Subtasks

**Subtask #1 : (25 points)**

- 1 ≤ **N** ≤ **10**
- 0 ≤ **|A\[i\]|, |B\[i\]|** ≤ **10**
- 0 ≤ **K** ≤ **10**

**Subtask #2 : (35 points)**

- 1 ≤ **N** ≤ **1000**
- 0 ≤ **|A\[i\]|, |B\[i\]|** ≤ **1000**
- 0 ≤ **K** ≤ **105**

**Subtask #3 : (40 points)**

- No additional constraints

### Example

<pre><b>Input:</b>
2
2 2
1 2
-2 3
3 5
1 2 -3
-2 3 -5

<b>Output:</b>
10
44

</pre>### Explanation
**In the first example**,
you can increase value **A\[2\]** using two two operations. Now, **A** would be \[1, 4\]. The value of _interaction_ will be 1 \* -2 + 4 \* 3 = -2 + 12 = 10.
