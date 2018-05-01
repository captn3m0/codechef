---
category_name: medium
problem_code: KNODES
problem_name: 'Path containing K Nodes'
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
problem_author: devuy11
problem_tester: adurysk
date_added: 20-05-2015
tags:
    - bfs
    - cook60
    - devuy11
    - medium
editorial_url: 'http://discuss.codechef.com/problems/KNODES'
time:
    view_start_date: 1437330600
    submit_start_date: 1437330600
    visible_start_date: 1437330600
    end_date: 1735669800
    current: 1493557717
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK60/mandarin/KNODES.pdf) and [Russian](http://www.codechef.com/download/translated/COOK60/russian/KNODES.pdf) as well.

You are given a tree.

You have to execute numerous queries on this tree. In a query, you will be given **K** nodes and you need to find if there is a path in the tree which contains all these **K** nodes.

If there is a path containing these **K** nodes, then output **Yes**. Otherwise, output **No**.

### Input

First line contains **T**, number of test cases to follow.

First line of each test case contains an integer **N** which represents the number of nodes in the tree.

Next **N-1** lines contain the description of the tree. Each line contains 2 space separated integers implying that there is an edge between these two nodes.

Next line contains **Q**, number of path queries to follow.

First line of each query contains an integer **K**.

Second line contains **K** space separated nodes.

### Output

For each query, output **Yes** if there is a path containing the **K** query nodes. Otherwise, output **No**.

### Constraints

- 1 ≤ **N** ≤ 105
- 1 ≤ Sum of **N** over all test cases ≤ 105
- 1 ≤ **T** ≤ 500
- 3 ≤ **K** ≤ N
- 1 ≤ Sum of **K** over all test cases and queries ≤ 106
- Nodes are numbered from 1

### Example

<pre><b>Input:</b>

1
10
3 1
5 7
4 6
10 4
8 9
2 1
3 4
8 5
5 3
4
3
8 10 3
4
8 7 9 6
3
2 1 6
3
6 2 5

<b>Output:</b>

Yes
No
Yes
No

</pre>### Explanation: 

Query 1: The path corresponding to it is 8->5->3->4->10.

Query 2: There does not exists any path joining all 4.
