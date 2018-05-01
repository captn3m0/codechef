---
category_name: easy
problem_code: CARRAY
problem_name: 'Chef and Line'
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
problem_tester: wwwwodddd
date_added: 3-02-2018
tags:
    - cook91
    - greedy
    - mgch
    - simple
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/CARRAY'
time:
    view_start_date: 1518978600
    submit_start_date: 1518978600
    visible_start_date: 1518978600
    end_date: 1735669800
    current: 1525198882
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK91/mandarin/CARRAY.pdf), [Russian](http://www.codechef.com/download/translated/COOK91/russian/CARRAY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK91/vietnamese/CARRAY.pdf) as well.

Chef has a sequence **A** with length **N** and a line given by the equation **y**(**x**) = **k · x + b**. Let us say that an element **Aj** is _reachable_ from another element **Ai** if the point (**Ai**, **Aj**) is lying above or on the line **y**(**x**), i.e. if **Aj** ≥ **k · Ai + b**.

Consider an arbitrary subsequence of **A**; let's denote it by **B**. Subsequence **B** is called _good_ if its elements can be reordered in such a way that for each valid **i**, **Bi+1** is reachable from **Bi**.

Chef asked you to compute the maximum possible length of a good subsequence. Can you help him?

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains three space-separated integers **N**, **k** and **b**.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**.

### Output

For each test case, print a single line containing one integer — the length of the longest good subsequence of **A**.

### Constraints

- 1 ≤ **T** ≤ 5000
- 1 ≤ **N** ≤ 100000
- 0 ≤ **k**, **b** ≤ 109
- 0 ≤ **Ai** ≤ 109 for each valid **i**
- 1 ≤ sum of **N** over all test cases ≤ 200000

### Example

<pre><b>Input:</b>

1
5 4 1
100 2 4 17 8

<b>Output:</b>

3
</pre>### Explanation

**Example case 1:** We can choose the subsequence (100, 4, 17) and reorder it to get the sequence (4, 17, 100). In this sequence, 17 is reachable from 4 because 4 · 4 + 1 = 17 ≤ 17 and 100 is reachable from 17 because 4 · 17 + 1 = 69 ≤ 100. Hence, (100, 4, 17) is a good subsequence; there is no good subsequence of **A** with length 4 or more, so the answer is 3.
