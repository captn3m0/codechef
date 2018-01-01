---
category_name: medium
problem_code: SEATR2
problem_name: 'Sereja and Tree 2'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
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
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: iscsi
date_added: 9-11-2015
tags:
    - cook64
    - dynamic
    - maths
    - medium
    - sereja
    - tree
editorial_url: 'http://discuss.codechef.com/problems/SEATR2'
time:
    view_start_date: 1448217000
    submit_start_date: 1448217000
    visible_start_date: 1448217000
    end_date: 1735669800
    current: 1493557928
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK64/mandarin/SEATR2.pdf) and [Russian](http://www.codechef.com/download/translated/COOK64/russian/SEATR2.pdf).

Sereja has a rooted tree of **N** nodes with node **1** being the root node. He wants to find the number of ways of assigning an integer in the range **\[1, M\]** to each node, such that value of each node should be a multiple of it's parent node's value (for vertex #1 there is no parent so any number fit condition). As the answer could be large, report it modulo **(109 + 7)**.

### Input

The first line of input contains an integer **T** — the number of test cases. **T** tests follow.

First line of each test case contains two space-separated integers **N** and **M**. Each of the next **N-1** lines contains two integers **(u, v)** — a pair of vertices connected by an edge.

### Output

For each test case, output a single integer corresponding to the answer in separate line. ### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **500**
- **1** ≤ **M** ≤ **20000**
- **1** ≤ **u, v** ≤ **N**
- It is guaranteed that the given graph is a tree (i.e., there won't be any cycles or self-loops).

### Example

<pre><b>Input:</b>
2
3 2
1 2
1 3
1 100

<b>Output:</b>
5
100

</pre>### Explanation
In first test case there are five possible assigns of numbers: \[1, 1, 1\], \[1, 1, 2\], \[1, 2, 1\], \[1, 2, 2\], \[2, 2, 2\]. In second test case there are hundred possible assigns: \[1\], \[2\], \[3\], ..., \[100\].
