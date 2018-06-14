---
category_name: easy
problem_code: MAXSC
problem_name: 'Maximum Score'
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
    - cakewalk
    - hruday968
    - hruday968
    - jan18
editorial_url: 'https://discuss.codechef.com/problems/MAXSC'
time:
    view_start_date: 1516008600
    submit_start_date: 1516008600
    visible_start_date: 1516008600
    end_date: 1735669800
    current: 1525454368
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JAN18/mandarin/MAXSC.pdf), [Russian](http://www.codechef.com/download/translated/JAN18/russian/MAXSC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN18/vietnamese/MAXSC.pdf) as well.

You are given **N** integer sequences **A1, A2, ..., AN**. Each of these sequences contains **N** elements. You should pick **N** elements, one from each sequence; let's denote the element picked from sequence **Ai** by **Ei**. For each **i** (2 ≤ **i** ≤ **N**), **Ei** should be strictly greater than **Ei-1**.

Compute the maximum possible value of **E1 + E2 + ... + EN**. If it's impossible to pick the elements **E1, E2, ..., EN**, print -1 instead.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N**.
- **N** lines follow. For each valid **i**, the **i**-th of these lines contains **N** space-separated integers **Ai1, Ai2, ..., AiN** denoting the elements of the sequence **Ai**.

### Output

For each test case, print a single line containing one integer — the maximum sum of picked elements.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 700
- 1 ≤ sum of **N** in all test-cases ≤ 3700
- 1 ≤ **Aij** ≤ 109 for each valid **i**, **j**

### Subtasks

**Subtask #1 (18 points):** 1 ≤ **Aij** ≤ **N** for each valid **i**, **j**

**Subtask #2 (82 points):** original constraints

### Example

<pre><b>Input:</b>

1
3
1 2 3
4 5 6
7 8 9

<b>Output:</b>

18
</pre>### Explanation

**Example case 1:** To maximise the score, pick 3 from the first row, 6 from the second row and 9 from the third row. The resulting sum is **E1+E2+E3** = 3+6+9 = 18.
