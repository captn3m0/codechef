---
category_name: medium
problem_code: SEAGCD2
problem_name: 'Sereja and GCD 2'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: kevinsogo
date_added: 25-10-2014
tags:
    - combinatorics
    - dynamic
    - may16
    - number
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAGCD2'
time:
    view_start_date: 1463391000
    submit_start_date: 1463391000
    visible_start_date: 1463391000
    end_date: 1735669800
    current: 1493557907
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY16/mandarin/SEAGCD2.pdf), [Russian](http://www.codechef.com/download/translated/MAY16/russian/SEAGCD2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY16/vietnamese/SEAGCD2.pdf) as well.

Sereja asks you to find out number of arrays **A** of size **N, i.e. A1, A2, ..., AN (1 ≤ Ai ≤ M)**, such that for each pair **i, j (1 ≤ i < j ≤ N) gcd(Ai, Aj) = 1.**

As the answer could be large, print it modulo **109 + 7 (1000000007)**.

### Input

First line of the input contain an integer **T** - number of test cases.

**T** tests follow. First line of each test case contain two space separated integers **N, M**.

### Output

For each test case output required answer modulo **10^9 + 7**.

### Constraints

- **1** ≤ **T** ≤  **10**
- **1** ≤ **N** ≤  **105**
- **1** ≤ **M** ≤  **100**

### Subtasks

- Subtask #1: (10 points, TL = 5 secs) **1** ≤ **N, M** ≤  **10**
- Subtask #2: (25 points, TL = 5 secs) **1** ≤ **N** ≤  **100**
- Subtask #3: (65 points, TL = 5 secs) **original**

### Example

```
<b>Input:</b>
2
1 1
3 3

<b>Output:</b>
1
13


```