---
category_name: easy
problem_code: UNIONSET
problem_name: 'Pairwise union of sets'
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
date_added: 2-06-2017
tags:
    - admin2
time:
    view_start_date: 1497259800
    submit_start_date: 1497259800
    visible_start_date: 1497259800
    end_date: 1735669800
    current: 1497284415
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin](http://www.codechef.com/download/translated/JUNE17/mandarin/UNIONSET.pdf), [Russian](http://www.codechef.com/download/translated/JUNE17/russian/UNIONSET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE17/vietnamese/UNIONSET.pdf) as well.

There are **N** sets of integers from 1 to **K** both inclusive. Find out number of pairs of sets whose union contains all the **K** elements.

### Input

The first line contains an integer **T** denotes number of test cases.

The first line of each test case contains two space separated integers **N, K**.

The each of the next line first contains an integer **len**i denoting number of elements in the i-th set, followed by **len**i space separated integers in the range \[1, **K**\] denoting the elements in the set.

### Output

For each test case, output a single integer corresponding to the answer.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N, K** ≤ 2500
- 1 ≤ **len**i ≤ K
- Note that a set can't contain repeated elements.
- 1 ≤ **len**1 + **len**2 + .. + **len****N** ≤ 10000

### Subtasks

**Subtask #1** (40 points)

- 1 ≤ **T** ≤ 10
- 1 ≤ **N, K** ≤ 250
- 1 ≤ **len**1 + **len**2 + .. + **len****N** ≤ 1000

**Subtask #2** (60 points)

- original constraints.

### Example

<pre>
<b>Input</b>
3
2 2
1 1
1 1
3 2
2 1 2
2 1 2
2 1 2
3 4
3 1 2 3
4 1 2 3 4
3 2 3 4

<b>Output</b>
0
3
3

</pre>### Explanation
**Example 1**. No pair of sets is there with its union = 2.

For **example 2 and 3**, all the pairs are valid.
