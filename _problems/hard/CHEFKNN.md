---
category_name: hard
problem_code: CHEFKNN
problem_name: 'Chef and Interval Painting'
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
max_timelimit: '5'
source_sizelimit: '15000'
problem_author: bciobanu
problem_tester: null
date_added: 26-12-2017
tags:
    - bciobanu
    - counting
    - hard
    - march18
    - ntt
editorial_url: 'https://discuss.codechef.com/problems/CHEFKNN'
time:
    view_start_date: 1520847000
    submit_start_date: 1520847000
    visible_start_date: 1520847000
    end_date: 1735669800
    current: 1525198964
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MARCH18/mandarin/CHEFKNN.pdf), [Russian](http://www.codechef.com/download/translated/MARCH18/russian/CHEFKNN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH18/vietnamese/CHEFKNN.pdf) as well.

Chef has **K** friends (numbered 1 through **K**) and an array of length **N** in which each element has a color; initially, each element has color 0. Chef agreed to let each of his friends (in the order from friend 1 to friend **K**) perform the following operation:

- choose an arbitrary non-empty subarray
- paint all elements in this subarray with color **i**, where **i** is the number of this friend

When an element is painted with some color, its original color is lost. This happens even if this element was already painted by some friend before.

Chef is now wondering: how many distinct colorings of the final array are possible?

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains two space-separated integers **N** and **K**.

### Output

For each test case, print a single line containing one integer — the number of possible final arrays **modulo 163577857**.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **K** ≤ **N** ≤ 106
- 1 ≤ sum of **N** over all test cases ≤ 5 · 106

### Subtasks

**Subtask #1 (10 points):** 1 ≤ sum of **N** over all test cases ≤ 500

**Subtask #2 (20 points):**

- 1 ≤ **N** ≤ 2500
- 1 ≤ sum of **N** over all test cases ≤ 104

**Subtask #3 (30 points):**

- 1 ≤ **N** ≤ 105
- 1 ≤ sum of **N** over all test cases ≤ 5 · 105

**Subtask #4 (40 points):** original constraints

### Example

<pre><b>Input:</b>

3
2 1
2 2
3 1

<b>Output:</b>

3
5
6
</pre>
### Explanation

**Example case 1:** the final array can be \[0, 1\], \[1, 0\] or \[1, 1\].

**Example case 2:** the final array can be \[0, 2\], \[1, 2\], \[2, 0\], \[2, 1\] or \[2, 2\].

**Example case 3:** the final array can be \[0, 0, 1\], \[0, 1, 0\], \[0, 1, 1\], \[1, 0, 0\], \[1, 1, 0\] or \[1, 1, 1\].
