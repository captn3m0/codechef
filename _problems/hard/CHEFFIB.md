---
category_name: hard
problem_code: CHEFFIB
problem_name: 'Chef, Leonardo And Queries'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - PYPY
    - PYTH
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: kefaa
problem_tester: null
date_added: 23-11-2017
tags:
    - dec17
    - kefaa
editorial_url: 'https://discuss.codechef.com/problems/CHEFFIB'
time:
    view_start_date: 1512984600
    submit_start_date: 1512984600
    visible_start_date: 1512984600
    end_date: 1735669800
    current: 1514816598
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/DEC17/mandarin/CHEFFIB.pdf), [Russian](http://www.codechef.com/download/translated/DEC17/russian/CHEFFIB.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC17/vietnamese/CHEFFIB.pdf) as well.

Chef has a tree with **N** nodes numbered **1** through **N**. Initially, each node has value 0.

Chef's best friend Leonardo loves queries on trees. He asked Chef to perform **Q** queries. Each query is of one of the following two types:

- **1 v k a b**: Consider **f(0) = a**, **f(1) = b**, **f(i) = f(i - 1) + f(i - 2)** for **i ≥ 2**. For each node **u** of the tree, let **d** be the distance (in edges) from **v** to **u**. Then, if **d** ≤ **k**, Chef must add **f(d)** to the value of node **u**.
- **2 v**: Print the value of node **v** modulo **10^9 + 7**.

Help Chef perform Leonardo's queries!

### Input

- The first line of the input contains one integer **T** denoting the number of test cases.
- The first line of each test case contains two space-separated integers **N** and **Q**.
- Each of the next **N**-1 lines contains two space-separated integers **x** and **y** denoting an edge between nodes **x** and **y**.
- **Q** lines follow. Each of these lines describes one query in the format above.

### Output

For each query of type 2, print the answer to it on a separate line.

### Constraints

- 1 ≤ **T** ≤ 150
- 1 ≤ **N, Q** ≤ 300,000
- 1 ≤ sum of **N** over all testcases ≤ 300,000
- 1 ≤ sum of **Q** over all testcases ≤ 300,000
- 1 ≤ **v** ≤ **N**
- 0 ≤ **k** ≤ **N**
- 0 ≤ **a, b** ≤ 1,000,000,000

### Subtasks

**Subtask #1 (15 points):**

- sum of all **N** ≤ 3000
- sum of all **Q** ≤ 3000

**Subtask #2 (85 points):** original constraints

### Example

<pre><b>Input:</b>

1
6 5
4 5
1 5
5 2
3 4
6 1
1 2 0 3 3
2 2
1 4 2 1 5
1 1 2 5 4
2 4

<b>Output:</b>

3
10
</pre>