---
category_name: hard
problem_code: TRS
problem_name: 'Queries on Tree'
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
max_timelimit: '3.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: lg5293
date_added: 27-03-2018
tags:
    - decomposition
    - hard
    - ltime58
    - mgch
    - squareroot
    - supernode
time:
    view_start_date: 1522602000
    submit_start_date: 1522602000
    visible_start_date: 1522602000
    end_date: 1735669800
    current: 1525454451
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME58/mandarin/TRS.pdf), [Russian](http://www.codechef.com/download/translated/LTIME58/russian/TRS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME58/vietnamese/TRS.pdf) as well.

 You are given a tree **T** with **N** nodes numbered 1 through **N**. Each node of the tree has a value; let's denote the value of node **v** by **Cv**. You are also given **Q** queries to process. There are two types of queries:

- 1 **U** **V** **W** — add **W** to the value of each node on the path between nodes **U** and **V** (both inclusive)
- 2 **U** **V** **X** — consider each node on the path between nodes **U** and **V** (both inclusive) whose value is ≥ **X**; compute the minimum of these nodes' values

Process the queries in the given order and compute the answer to each query of the second type.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **Q**.
- The second line contains **N** space-separated integers **C1, C2, ..., CN**.
- **N-1** lines follow. Each of these lines contains two space-separated integers **U** and **V** denoting an edge connecting nodes **U** and **V**.
- The following **Q** lines describe queries. Each of them contains four space-separated integers **type**, **U**, **V** and either **W** (for **type** = 1) or **X** (for **type** = 2). Here, **type** denotes the type of the query.

### Output

For each query of the second type, print a single line containing one integer — the minimum value ≥ **X** of a node on the given path which is, or -1 if no such value exists.

### Constraints

- 1 ≤ **T** ≤ 100,000
- 1 ≤ **N**, **Q** ≤ 100,000
- 0 ≤ **Ci** ≤ 109 for each valid **i**
- 1 ≤ **type** ≤ 2
- 1 ≤ **X** ≤ 1014
- 1 ≤ **W** ≤ 109
- 1 ≤ **U**, **V** ≤ **N**
- the graph described on the input is a tree
- 1 ≤ sum of **N** over all test cases ≤ 100,000
- 1 ≤ sum of **Q** over all test cases ≤ 100,000

### Subtasks

**Subtask #1 (43 points):** there are no queries of the first type (**type** = 2 for each query)

**Subtask #2 (57 points):** original constraints

### Example

<pre><b>Input:</b>

1
5 5
10 15 20 15 10
1 2
1 3
2 4
2 5
2 5 3 3
1 2 5 10
2 1 4 4
1 5 2 17
2 1 5 100

<b>Output:</b>

10
10
-1
</pre>