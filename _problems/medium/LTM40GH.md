---
category_name: medium
problem_code: LTM40GH
problem_name: 'Chef and Tree'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: xcwgf666
date_added: 12-09-2016
tags:
    - lca
    - ltime40
    - medium
    - mgch
    - optimization
    - tree
    - xor
editorial_url: 'http://discuss.codechef.com/problems/LTM40GH'
time:
    view_start_date: 1474736400
    submit_start_date: 1474736400
    visible_start_date: 1474736400
    end_date: 1735669800
    current: 1493557921
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME40/mandarin/LTM40GH.pdf), [Russian](http://www.codechef.com/download/translated/LTIME40/russian/LTM40GH.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME40/vietnamese/LTM40GH.pdf) as well.

Chef likes trees a lot. He has a weighted rooted tree **T** rooted at node 1. There are **N** nodes in the tree numbered from 1 to **N**. Each node **v** has a value **Av** associated with it. Let's call ugliness of path between nodes **u** and **v** - C(**u**, **v**) as bitwise XOR of all values on path. Let's call ugliness of node **v** maximal ugliness among all the paths which lies in subtree **v**. For each node find ugliness of it.

### Input

The first line contains one integer **T**, denoting the number of the test cases.

First line of each test case contains one integer **N**.

Second line contains **N** space-separated integers denoting **Av** - the values associated with nodes.

Next **N-1** lines contains two space-separated integers **u**, **v** denoting the nodes connected by an edge.

### Output

For each test case for each node in range from 1 to **N**, output its ugliness in a single line.

### Constraints

- **1** ≤ **T** ≤ **105**
- **2** ≤ **N** ≤ **105**
- **1** ≤ **Ai** ≤ **109**
- **1** ≤ **u, v** ≤ **N**

### Subtasks

- **Subtask #1 (10 points):** 1 ≤ sum over all **N** ≤ 100
- **Subtask #2 (20 points):** 1 ≤ sum over all **N** ≤ 1000
- **Subtask #3 (30 points):** 1 ≤ sum over all **N** ≤ 10000
- **Subtask #4 (40 points):** 1 ≤ sum over all **N** ≤ 100000

### Example

<pre><b>Input:</b>
<tt>1
5
1 2 3 4 5
1 2
1 3
2 4
2 5
</tt>

<b>Output:</b>
<tt>7
7
3
4
5</tt>
</pre>