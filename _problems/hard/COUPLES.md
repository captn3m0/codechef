---
category_name: hard
problem_code: COUPLES
problem_name: 'Couples sit next to each other'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: mgch
date_added: 21-02-2018
tags:
    - kingofnumbers
    - ltime57
    - med
    - segment
editorial_url: 'https://discuss.codechef.com/problems/COUPLES'
time:
    view_start_date: 1519491600
    submit_start_date: 1519491600
    visible_start_date: 1519491600
    end_date: 1735669800
    current: 1525198964
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME57/mandarin/COUPLES.pdf), [Russian](http://www.codechef.com/download/translated/LTIME57/russian/COUPLES.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME57/vietnamese/COUPLES.pdf) as well.

There are **N** couples numbered 1 through **N**. Each couple consists of two people. There are also **2N** chairs numbered 1 through **2N**. Each chair has a person sitting on it; for each **i** (1 ≤ **i** ≤ **2N**), the person initially sitting on chair **i** belongs to couple number **Ai**. The chairs are placed in a circle, so chairs **i** and **i+1** are adjacent for each 1 ≤ **i** ≤ **2N-1**; chairs **2N** and **1** are also adjacent.

You may perform the following operation any number of times (including zero): choose two people sitting on adjacent chairs and swap them.

We would like all couples to sit on adjacent chairs. Compute the minimum number of operations needed to achieve this.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N**.
- The second line contains **2N** space-separated integers **A1, A2, ..., A2N**.

### Output

For each test case, print a single line containing one number — the minimum number of operations required to make each couple sit next to each other.

### Constraints

- 1 ≤ **T** ≤ 1,000
- 1 ≤ **N** ≤ 500,000
- 1 ≤ sum of **N** over all test cases ≤ 1,000,000
- 1 ≤ **Ai** ≤ **N** for each valid **i**
- each number from 1 to **N** appears in **A** exactly twice

### Subtasks

**Subtask #1 (35 points):**

- **N** ≤ 1,000
- sum of **N** over all test cases ≤ 5,000

**Subtask #2 (65 points):** original constraints

### Example

<pre><b>Input:</b>

2
2
1 2 1 2
3
1 2 3 1 3 2

<b>Output:</b>

1
2
</pre>