---
category_name: easy
problem_code: STRMRG
problem_name: 'String Merging'
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
date_added: 2-01-2018
tags:
    - dynamic
    - easy
    - jan18
    - kingofnumbers
    - kingofnumbers
editorial_url: 'https://discuss.codechef.com/problems/STRMRG'
time:
    view_start_date: 1516008600
    submit_start_date: 1516008600
    visible_start_date: 1516008600
    end_date: 1735669800
    current: 1525454394
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JAN18/mandarin/STRMRG.pdf), [Russian](http://www.codechef.com/download/translated/JAN18/russian/STRMRG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN18/vietnamese/STRMRG.pdf) as well.

For a string **S**, let's define a function **F**(**S**) as the minimum number of blocks consisting of consecutive identical characters in **S**. In other words, **F**(**S**) is equal to 1 plus the number of valid indices **i** such that **Si** ≠ **Si+1**.

You are given two strings **A** and **B** with lengths **N** and **M** respectively. You should merge these two strings into one string **C** with length **N+M**. Specifically, each character of **C** should come either from **A** or **B**; all characters from **A** should be in the same relative order in **C** as in **A** and all characters from **B** should be in the same relative order in **C** as in **B**.

Compute the minimum possible value of **F**(**C**).

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **M**.
- The second line contains a single string **A** with length **N**.
- The third line contains a single string **B** with length **M**.

### Output

For each test case, print a single line containing one integer — the minimum possible value of **F**(**C**).

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N**, **M** ≤ 5,000
- 1 ≤ sum of **N** in all test cases ≤ 5,000
- 1 ≤ sum of **M** in all test cases ≤ 5,000
- strings **A**, **B** consist only of lowercase English letters

### Subtasks

**Subtask 1 (10 points):** 1 ≤ **T**, **N**, **M** ≤ 10

**Subtask 2 (20 points):** the characters of **A** and **B** are sorted in non-decreasing order

**Subtask 3 (70 points):** original constraints

### Example

<pre><b>Input:</b>

1
4 4
abab
baba

<b>Output:</b>

5
</pre>### Explanation

**Example case 1:** One possible way to choose the string **C** to get the desired answer is "abbaabba".
