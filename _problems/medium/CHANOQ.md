---
category_name: medium
problem_code: CHANOQ
problem_name: 'Chef and odd queries'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: markysha
problem_tester: null
date_added: 21-01-2018
tags:
    - feb18
    - markysha
    - medium
    - persistence
    - segment
    - sqrt
editorial_url: 'https://discuss.codechef.com/problems/CHANOQ'
time:
    view_start_date: 1518427800
    submit_start_date: 1518427800
    visible_start_date: 1518427800
    end_date: 1735669800
    current: 1525454447
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/FEB18/mandarin/CHANOQ.pdf), [Russian](http://www.codechef.com/download/translated/FEB18/russian/CHANOQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB18/vietnamese/CHANOQ.pdf) as well.

Chef has **N** segments. For each **i** (1 ≤ **i** ≤ **N**), the **i**-th segment starts at point **Li** and ends at point **Ri** (let's denote it by \[**Li**, **Ri**\]).

Let's say that a segment \[**l**, **r**\] crosses a point **x** if **l** ≤ **x** ≤ **r**.

Chef wants you to answer **Q** queries. In each query, you are given a set of **M** distinct points **X1, X2, ..., XM**; you should compute the number of good segments \[**Li**, **Ri**\] among the given **N** segments. A segment is _good_ if it crosses an **odd** number of points out of the given **M** points.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of segments.
- The following **N** lines describe the segments. For each **i**, the **i**-th of these lines contains two space-separated integers **Li** and **Ri**.
- The next line contains a single integer **Q** denoting the number of queries.
- The following **Q** lines describe the queries. Each of these lines starts with an integer **M** — the number of points in this query, followed by **M** space-separated integers **X1, X2, ..., XM**.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **Q** ≤ **N** ≤ 100,000
- sum of **M** for all queries ≤ **N**
- sum of **N** over all test cases ≤ 200,000
- 1 ≤ **Xi** ≤ **N** for each valid **i**
- all **Xi** in each query are distinct
- 1 ≤ **Li** ≤ **Ri** ≤ **N** for each valid **i**

### Subtasks

**Subtask #1 (10 points):** **N**, **Q** ≤ 300

**Subtask #2 (90 points):** original constraints

### Output

For each query, print a single line containing the number of good segments for that query.

### **Example**

<pre><b>Input:</b>

2
5
4 5
3 5
2 4
1 3
5 5
2
4 1 2 3 4
1 4
5
4 5
3 5
2 4
2 3
5 5
2
2 2 5
3 1 2 5

<b>Output:</b>

3
3
5
5
</pre>