---
category_name: hard
problem_code: SEAINVS
problem_name: 'Sereja and Inversions'
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
problem_author: sereja
problem_tester: mgch
date_added: 16-10-2016
tags:
    - sereja
time:
    view_start_date: 1487496600
    submit_start_date: 1487496600
    visible_start_date: 1487496600
    end_date: 1735669800
    current: 1493556831
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB17/mandarin/SEAINVS.pdf), [Russian](http://www.codechef.com/download/translated/FEB17/russian/SEAINVS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB17/vietnamese/SEAINVS.pdf) as well.

Sereja has a permutation **P** of the **N** numbers in the range **1** to **N**. You have to answer **M** queries over it, where each query is given four numbers **l1, r1, l2, r2 (1 ≤ l1 ≤ r1 2 ≤ r2 ≤ N, r1 - l1 = r2 - l2)**. Your task is to calculate number of permutations **Q** of the **S** integers in the range **1** to **S**, such that **S = r1 - l1 + 1**, and for each **i** from **1** to **S**, the condition **PQi + l1 - 1 i + l2 - 1** is satisfied.

Please help Sereja in providing the answer for each query modulo **109 + 7**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

First line of each test case contains two space separated integers **N, M**.

Next line contains numbers **P1, P2, ..., PN**.

Each of next **M** lines contains numbers **l1, r1, l2, r2** - denoting the query.

### Output

For each query, output the corresponding answer in single line.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ sum of all **N** over all test cases ≤ **105**
- **1** ≤ sum of all **M** over all test cases ≤ **105**

### Subtasks

- **Subtask #1: (10 points)** **1** ≤ **N** ≤ **10**
- **Subtask #2: (20 points)** **1** ≤ **N** ≤ **1000**
- **Subtask #3: (70 points)** original constraints plus additionally 0 ≤ number of pairs **i, j (1 ≤ i i > Pj)** over all test cases ≤ **3\*106**

### Example

<pre><b>Input:</b>
3
4 1
1 2 3 4
1 2 3 4
4 2
1 3 2 4
1 1 2 2
1 2 3 4
10 1
1 4 3 2 9 5 6 7 10 8
1 5 6 10

<b>Output:</b>
2
1
1
24
</pre>