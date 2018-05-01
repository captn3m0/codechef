---
category_name: medium
problem_code: SEAKAM
problem_name: 'Sereja and Salesman'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: antoniuk1
date_added: 14-10-2014
tags:
    - combinatorics
    - dp
    - jan16
    - medium
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAKAM'
time:
    view_start_date: 1452504600
    submit_start_date: 1452504600
    visible_start_date: 1452504600
    end_date: 1735669800
    current: 1493557907
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN16/mandarin/SEAKAM.pdf), [Russian](http://www.codechef.com/download/translated/JAN16/russian/SEAKAM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN16/vietnamese/SEAKAM.pdf) as well.

Sereja has an undirected graph on **N** vertices. There are edges between all but **M** pairs of vertices.

A permutation **p** on the vertices of the graph is represented as **p\[1\], p\[2\], … , p\[N\]** such that for all **i**, **p\[i\]** is a vertex of the graph. A permutation is called connected if there is an edge between vertices **p\[i\]** and **p\[i+1\]** for all natural numbers **i** less than **N**. Sereja wants to know the number of connected permutations on the graph vertices.

### Input

First line of input contains a single integer **T**, denoting the number of test cases. **T** tests follow. First line of each test case contains two integers, **N** and **M**. **M** lines follow, each containing a pair of indices of vertices, indicating that those vertices are **not** connected by an edge.

### Output

For each test case, output one number — the answer for the problem modulo **109+7**.

### Constraints

- **1** ≤ **T** ≤  **10**
- **1** ≤ **N** ≤  **105**
- 0 ≤ **M** ≤  **7**

### Subtasks

- **Subtask #1:**  **1** ≤ **N** ≤  **10**  (25 points)
- **Subtask #2:**  **1** ≤ **N** ≤  **100**  (25 points)
- **Subtask #3:**  **1** ≤ **N** ≤  **1000**  (25 points)
- **Subtask #4:**   **original**  (25 points)

### Example

<pre><b>Input:</b>
2
4 3
1 2
2 3
3 4
2 1
1 2

<b>Output:</b>
2
0

</pre>