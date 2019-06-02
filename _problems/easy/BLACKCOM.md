---
category_name: easy
problem_code: BLACKCOM
problem_name: 'Black Nodes in Subgraphs'
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
problem_author: admin3
problem_tester: null
date_added: 2-06-2017
tags:
    - admin3
time:
    view_start_date: 1496516400
    submit_start_date: 1496516400
    visible_start_date: 1496516400
    end_date: 1735669800
    current: 1497284056
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKEL17/mandarin/BLACKCOM.pdf), [Russian](http://www.codechef.com/download/translated/SNCKEL17/russian/BLACKCOM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKEL17/vietnamese/BLACKCOM.pdf) as well.

You are given a tree T with **N** nodes. The nodes are numbered from 1 to **N**, and each node is colored either white or black. You are given **Q** queries, where each query is of the form (**s**, **b**). You need to check if there is a connected subgraph of size exactly **s**, which contains exactly **b** black nodes.

A subgraph H, of a tree T, is a graph whose vertex set VH is a subset of the nodes of the tree and the edges are exactly those edges of the tree whose both end points are in VH. A subgraph H is a connected subgraph if H is connected.

### Input

- The first line contains a single integer, **T**, which denotes the number of testcases. The descriptions of the testcases follow.
- The first line of each testcase contains two integers, **N** and **Q**, which denotes the number of nodes in the tree, and the number of queries, respectively.
- The i-th of the next **N** - 1 lines contains two integers: **ui** and **vi**. This denotes that there is an edge between nodes **ui** and **vi** in the tree.
- The next line contains **N** integers, **c1, c2**, .., **cN**. **ci** is 0 if node i is colored white, and it is 1 if it is colored black.
- The i-th of the next **Q** lines contains two integers: **si** and **bi**. This denotes a query of the form (**si, bi**) as described above.

### Output

- For each testcase, output a single line containing the string "Yes" (without quotes), if there is a connected subgraph as required by the query, or "No" (without quotes) otherwise.

### Constraints

- 1 ≤ **T** ≤ 5
- 2 ≤ **N** ≤ 5000
- 1 ≤ **Q** ≤ 105
- 1 ≤ **ui, vi** ≤ **N**
- 0 ≤ **ci** ≤ 1
- 0 ≤ **bi** ≤ **N**
- 1 ≤ **si** ≤ **N**
- **bi** ≤ **si**

### Example

<pre><b>Input:</b>
1
9 4
4 1
1 5
1 2
3 2
3 6
6 7
6 8
9 6
0 1 0 1 0 0 1 0 1
3 2
7 3
4 0
9 5

<b>Output:</b>
Yes
Yes
No
No
</pre>
### Explanation

**Query 1**: The subgraph containing the nodes {6, 7, 9} is a connected subgraph because (6, 7) and (6, 9) are edges in the original tree. And it has exactly two black nodes (7 and 9). So, there is at least one connected subgraph of size exactly 3 which has exactly 2 black nodes. Hence the answer is "Yes".

**Query 2**: The subgraph containing the nodes {1, 2, 3, 4, 6, 7, 8} is a connected subgraph. And it has exactly three black nodes (2, 4 and 7). So, there is at least one connected subgraph of size exactly 7 which has exactly 3 black nodes. Hence the answer is "Yes".

**Query 3**: There is no connected subgraph of size exactly 4 with all white nodes. Hence the answer is "No".

**Query 4**: The only subgraph with 9 nodes is the entire tree itself. And it has 4 black nodes, and not 5. Hence the answer is "No".
