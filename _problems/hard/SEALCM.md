---
category_name: hard
problem_code: SEALCM
problem_name: 'Sereja and LCM'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: shiplu
date_added: 23-10-2014
tags:
    - dynamic
    - jan15
    - matrix
    - medium
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEALCM'
time:
    view_start_date: 1421055000
    submit_start_date: 1421055000
    visible_start_date: 1421055000
    end_date: 1735669800
    current: 1493556831
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN15/mandarin/SEALCM.pdf) and [Russian](http://www.codechef.com/download/translated/JAN15/russian/SEALCM.pdf).

In this problem Sereja is interested in number of arrays **A\[1\], A\[2\], ..., A\[N\] (1 ≤ A\[i\] ≤ M, A\[i\] - integer)**
such that least common multiple ([**LCM**](http://en.wikipedia.org/wiki/Least_common_multiple)) of all its elements is divisible by number **D**.

Please, find sum of answers to the problem with **D = L, D = L+1, ..., D = R**. As answer could be large, please output it modulo
(109 + 7).

### Input

6. First line of input contain integer **T** - number of test cases.
7. For each test case, only line of input contain four integers **N, M, L, R**.
### Output

For each test case, output required sum modulo **(109 + 7)**.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **5\*106**
- **1** ≤ **L** ≤ **R** ≤ **M** ≤ **1000**

### Subtasks

- Subtask #1: **1** ≤ **N, M** ≤ **10** (25 points)
- Subtask #2: **1** ≤ **N, M** ≤  **1000**  (25 points)
- Subtask #3: original constraints (50 points)

### Example

```

<b>Input:</b>
2
5 5 1 5
5 5 4 5

<b>Output:</b>
12310
4202


```