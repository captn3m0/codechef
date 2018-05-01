---
category_name: medium
problem_code: ARRP
problem_name: Partitions
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
problem_author: mgch
problem_tester: lg5293
date_added: 27-03-2018
tags:
    - easy
    - ltime58
    - maths
    - mgch
    - sieve
    - sum
time:
    view_start_date: 1522602000
    submit_start_date: 1522602000
    visible_start_date: 1522602000
    end_date: 1735669800
    current: 1525198947
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME58/mandarin/ARRP.pdf), [Russian](http://www.codechef.com/download/translated/LTIME58/russian/ARRP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME58/vietnamese/ARRP.pdf) as well.

You are given an array **A** with size **N**. For each **K** between 1 and **N** (inclusive), find out if it is possible to partition (split) the array **A** into **K** contiguous subarrays such that the sum of elements within each of these subarrays is the same. Each element of the original array should belong to exactly one subarray.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N**.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**.

### Output

For each test case, print a single line containing **N** characters. For each **K** (1 ≤ **K** ≤ **N**), the **K**-th of these characters should be '1' if it is possible to partition the array in the desired way or '0' if it is impossible.

### Constraints

- 1 ≤ **T** ≤ 1,000,000
- 1 ≤ **N** ≤ 1,000,000
- 1 ≤ sum of **N** over all test cases ≤ 1,000,000
- 1 ≤ **Ai** ≤ 109 for each valid **i**

### Subtasks

**Subtask #1 (30 points):** sum of **N** over all test cases ≤ 10,000

**Subtask #2 (70 points):** original constraints

### Example

<pre><b>Input:</b>

3
5
1 4 2 3 5
4
1 1 1 1
4
1 1 2 2

<b>Output:</b>

10100
1101
1010
</pre>### Explanation

**Example case 1:** There are two possible partitions: into exactly 1 array (with sum 1+4+3+2+5) or into exactly 3 arrays (with sums 1+4 = 2+3 = 5).
