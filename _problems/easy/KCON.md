---
category_name: easy
problem_code: KCON
problem_name: K-Concatenation
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
problem_author: hruday968
problem_tester: null
date_added: 28-12-2017
tags:
    - easy
    - hruday968
    - hruday968
    - jan18
editorial_url: 'https://discuss.codechef.com/problems/KCON'
time:
    view_start_date: 1516008600
    submit_start_date: 1516008600
    visible_start_date: 1516008600
    end_date: 1735669800
    current: 1525454366
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JAN18/mandarin/KCON.pdf), [Russian](http://www.codechef.com/download/translated/JAN18/russian/KCON.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN18/vietnamese/KCON.pdf) as well.

You are given an array **A** with size **N** (indexed from 0) and an integer **K**. Let's define another array **B** with size **N** · **K** as the array that's formed by concatenating **K** copies of array **A**.

For example, if **A** = {1, 2} and **K** = 3, then **B** = {1, 2, 1, 2, 1, 2}.

You have to find the maximum subarray sum of the array **B**. Fomally, you should compute the maximum value of **Bi + Bi+1 + Bi+2 + ... + Bj**, where 0 ≤ **i** ≤ **j** < **N** · **K**.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **K**.
- The second line contains **N** space-separated integers **A0, A1, ..., AN-1**.

### Output

For each test case, print a single line containing the maximum subarray sum of **B**.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 105
- 1 ≤ **K** ≤ 105
- -106 ≤ **Ai** ≤ 106 for each valid **i**

### Subtasks

**Subtask #1 (18 points):** **N** · **K** ≤ 105

**Subtask #2 (82 points):** original constraints

### Example

<pre><b>Input:</b>

2
2 3
1 2
3 2
1 -2 1

<b>Output:</b>

9
2
</pre>
### Explanation

**Example case 1:** **B** = {1, 2, 1, 2, 1, 2} and the subarray with maximum sum is the whole {1, 2, 1, 2, 1, 2}. Hence, the answer is 9.

**Example case 2:** **B** = {1, -2, 1, 1, -2, 1} and the subarray with maximum sum is {1, 1}. Hence, the answer is 2.
