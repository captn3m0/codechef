---
category_name: medium
problem_code: BORDER
problem_name: 'Prefix borders'
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
problem_tester: mgch
date_added: 21-02-2018
tags:
    - binary
    - kingofnumbers
    - kmp
    - ltime57
    - medium
    - tree
editorial_url: 'https://discuss.codechef.com/problems/BORDER'
time:
    view_start_date: 1519491600
    submit_start_date: 1519491600
    visible_start_date: 1519491600
    end_date: 1735669800
    current: 1525198948
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME57/mandarin/BORDER.pdf), [Russian](http://www.codechef.com/download/translated/LTIME57/russian/BORDER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME57/vietnamese/BORDER.pdf) as well.

Let's define a *border substring* of a string as a non-empty substring that's both a suffix and a prefix of this string.

You are given a string **S** with length **N** and **Q** queries. In each query, you are given the **p**-th prefix of **S** (let's denote it by **S1..p**) and an integer **k**. Consider the **k**-th shortest border of **S1..p** (if it exists). Compute the length of this border substring or determine that it doesn't exist.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **Q**.
- The second line contains a single string **S**.
- Each of the following **Q** lines contains two space-separated integers **p** and **k** describing one query.

### Output

For each test case, print **Q** lines. For each **i** (1 ≤ **i** ≤ **Q**), the **i**-th of these lines should contain a single integer — the answer to the **i**-th query (the length of the **k**-th shortest border or -1 if it doesn't exist).

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N**, **Q** ≤ 200,000
- **|S|** = **N**
- 1 ≤ sum of **N** over all test cases ≤ 200,000
- 1 ≤ sum of **Q** over all test cases ≤ 200,000
- 1 ≤ **p**, **k** ≤ **N**
- **S** contains only lowercase English letters

### Subtasks

**Subtask #1 (20 points):**

- **Q**, **N** ≤ 100
- sum of **N** over all test cases ≤ 500
- sum of **Q** over all test cases ≤ 500

**Subtask #2 (20 points):**

- **N** ≤ 100
- sum of **N** over all test cases ≤ 500

**Subtask #3 (60 points):** original constraints

### Example

<pre><b>Input:</b>

1
5 4
abcab
2 1
5 1
5 2
5 3

<b>Output:</b>

2
2
5
-1
</pre>