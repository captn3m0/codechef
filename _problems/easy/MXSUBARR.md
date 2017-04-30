---
category_name: easy
problem_code: MXSUBARR
problem_name: 'Maximum Disjoint Subarrays'
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
problem_author: admin2
problem_tester: null
date_added: 23-06-2016
tags:
    - admin2
time:
    view_start_date: 1467052140
    submit_start_date: 1467052140
    visible_start_date: 1467052140
    end_date: 1735669800
    current: 1493558169
layout: problem
---
All submissions for this problem are available.You are given an array **A** consisting of **N** integers. A group of disjoint subarrays in it will be a collection of subarrays of the array. Formally a group of subarrays consisting of **K** subarrays can be denoted by **2 \* K** indices, **\[i1, j1\]**, **\[i2, j2\]** , ..., **\[iK, jK\]**, such that **i1 ≤ j1 < i2 ≤ j2** < ... < **iK ≤ jK.**

For example, in array **A = {5, 6, 7}**. A group of subarrays could be the subarrays denoted by indices **\[1, 1\], \[2, 3\]**. The subarray corresponding to indices **\[1, 1\]** will be **{5}**. The subarray corresponding to indices **\[2, 3\]** will be **{6, 7}**. So, we have **i1 = 1, j1 = 1, i2 = 2, j2 = 3** and **K = 2**. You can check that the indices satisfy the property **i1 ≤ j1 < i2 ≤ j2**.

Note that the group of subarrays **\[1, 2\]** and **\[2, 3\]** won't be disjoint, as it does not satisfy the property **j1 < i2**. In other words, the index 2 is common in two subarrays, which should not happen.

Let **M** denote the maximum value of **K** in a group of **K** disjoint subarrays of array **A**, such that there are not two elements (**not indices**) common in those subarrays. This means, that if the group contained subarrays **\[A\[i1\], A\[j1\]**, **\[A\[i2\], A\[j2\]\]** , ..., **A\[\[iK, jK\]\]**, then there should not be an element which is present in more than one subarrays.

You have to find maximum number of group of disjoint subarrays that number of subarrays in those groups are equal to **M**. As the answer could be large, output it modulo **109 + 7**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

First line of the each test case contains a single integer **N** denoting number of elements in array **A**.

Second line of each test case contains **N** space separated integers denoting the elements of the array **A**

### Output

For each test case, output a single line corresponding to maximum number of group of disjoint subarrays of array **A**.

### Constraints

- 1 ≤ **T, N** ≤ **105**
- 1 ≤ **Ai** ≤ **n**
- Sum of **N** over all the test cases in a single file won't exceed **105**

### Subtasks

**Subtask #1 (30 points)**

- 1 ≤ **T, N** ≤ **103**
- 1 ≤ **Ai** ≤ **n**
- Sum of **N** over all the test cases in a single file won't exceed **103**

**Subtask #2 (70 points)**

- original constraints

### Example

```
<b>Input</b>
3
2
3 4
3
1 2 2
5
1 1 2 2 2

<b>Output:</b>
1
3
18

```
### Explanation

**Example case 1.** **M** will be equal to 2. The subarrays will be {\[1, 1\], \[2, 2\]}.

**Example case 2.** **M** will be equal to 3. The subarrays will be {\[1, 1\], \[2, 2\]}, {\[1, 1\], \[3, 3\]} and {\[1, 1\], \[2, 3\]}. Note that {\[2, 2\], \[3, 3\]} won't be a non-intersecting subarray as A\[2\] = 2 and A\[3\] = 2. So, 2 is common in both these subarrays.