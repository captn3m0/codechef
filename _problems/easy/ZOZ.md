---
category_name: easy
problem_code: ZOZ
problem_name: 'Magic Elements'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: lg5293
date_added: 30-03-2018
tags:
    - array
    - easy
    - ltime58
    - mgch
    - sum
time:
    view_start_date: 1522602000
    submit_start_date: 1522602000
    visible_start_date: 1522602000
    end_date: 1735669800
    current: 1525454373
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME58/mandarin/ZOZ.pdf), [Russian](http://www.codechef.com/download/translated/LTIME58/russian/ZOZ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME58/vietnamese/ZOZ.pdf) as well.

You are given an array **A** with size **N** and a number **K**. Let's call a position **i** (1 ≤ **i** ≤ **N**) _valid_ if, after increasing **Ai** by **K**, it would be greater than the sum of all other elements in the array **A**.

Determine the number of distinct valid positions.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **K**.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**.

### Output

For each test case, print a single line containing one integer — the number of valid positions.

### Constraints

- 1 ≤ **T** ≤ 100,000
- 1 ≤ **N** ≤ 100,000
- 1 ≤ **K** ≤ 109
- 1 ≤ **Ai** ≤ 104 for each valid **i**
- 1 ≤ sum of **N** over all test cases ≤ 100,000

### Subtasks

**Subtask #1 (33 points):** sum of **N** over all test cases ≤ 5,000

**Subtask #2 (67 points):** original constraints

### Example

<pre>
<b>Input:</b>

2
4 4
2 1 6 7
4 2
2 1 5 4

<b>Output:</b>

1
0
</pre>### Explanation

**Example case 1:** **A1 + K** = 6 isn't greater than **A2 + A3 + A4** = 14, so position 1 isn't valid. **A2 + K** = 5 isn't greater than **A1 + A3 + A4** = 15, so position 2 isn't valid. **A3 + K** = 10 isn't greater than **A1 + A2 + A4** = 10, so position 3 also isn't valid. **A4 + K** = 11 is greater than **A1 + A2 + A3** = 9. Therefore, there is only one valid position — position 4.
