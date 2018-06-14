---
category_name: easy
problem_code: PRTITION
problem_name: 'Partition the numbers'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 4-01-2018
tags:
    - easy
    - jan18
    - kingofnumbers
    - kingofnumbers
editorial_url: 'https://discuss.codechef.com/problems/PRTITION'
time:
    view_start_date: 1516008600
    submit_start_date: 1516008600
    visible_start_date: 1516008600
    end_date: 1735669800
    current: 1525454371
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JAN18/mandarin/PRTITION.pdf), [Russian](http://www.codechef.com/download/translated/JAN18/russian/PRTITION.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN18/vietnamese/PRTITION.pdf) as well.

You are given two integers **x** and **N**. Consider all integers between 1 and **N** inclusive, except **x**. We want to partition these integers into two disjoint sets (each integer has to appear in exactly one set) such that the sums of numbers in these sets are equal.

Find one valid partition or determine that it doesn't exist.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains two space-separated integers **x** and **N**.

### Output

For each test case:

- If there's no way to partition the numbers into two sets with equal sums, print a single line containing the string "impossible" (without quotes).
- Otherwise, print a single line containing a string with length **N**.
- The **x**-th character of this string should be **'2'**.
- For each valid **i** ≠ **x**, the **i**-th character of this string should be **'0'** if number **i** should be in the first set or **'1'** if it should be in the second set.

### Constraints

- 1 ≤ **T** ≤ 10,000
- 2 ≤ **N** ≤ 1,000,000
- 1 ≤ **x** ≤ **N**
- 1 ≤ sum of **N** in all test cases ≤ 1,000,000

### Subtasks

**Subtask #1 (20 points):** sum of **N** in all test cases ≤ 50

**Subtask #2 (80 points):** original constraints

### Example

<pre><b>Input:</b>

3
2 4
5 5
1 2

<b>Output:</b>

0201
01102
impossible
</pre>