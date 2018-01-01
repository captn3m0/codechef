---
category_name: medium
problem_code: ANCESTOR
problem_name: 'Ancestors in Two Trees'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 1-06-2017
tags:
    - kingofnumbers
time:
    view_start_date: 1496516400
    submit_start_date: 1496516400
    visible_start_date: 1496516400
    end_date: 1735669800
    current: 1497284428
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKEL17/mandarin/ANCESTOR.pdf), [Russian](http://www.codechef.com/download/translated/SNCKEL17/russian/ANCESTOR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKEL17/vietnamese/ANCESTOR.pdf) as well.

You are given two rooted trees, each with **N** nodes. The nodes in each tree are labeled from 1 to **N**. The root of each tree is the node labeled 1 in that tree.

Your task is simple: For each i, find the number of j's (j ≠ i), such that node j is an ancestor of node i in both the trees.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases.
- First line of each test-case contains **N**, the number of nodes in each tree.
- The i-th of the next **N** - 1 lines contains two integers, **ui** and **vi**, which denotes that there is an edge between node **ui** and node **vi** in the first tree.
- The i-th of the next **N** - 1 lines contains two integers, **ui** and **vi**, which denotes that there is an edge between node **ui** and node **vi** in the second tree.

### Output

For each test case, output a single line containing **N** integers, i-th integer is the number of nodes which are ancestors of node i in both the trees.

### Constraints

- 1 ≤ **T** ≤ 10000
- 2 ≤ **N** ≤ 500,000
- 1 ≤ sum of **N** in all test-cases ≤ 500,000
- 1 ≤ **ui**, **vi** ≤ **N**

### Example

<pre><b>Input:</b>
1
5
1 3
1 2
3 5
3 4
1 5
1 2
2 3
3 4

<b>Output:</b>
0 1 1 2 1

</pre>### Explanation
Because node 1 is the root in both the trees, there is no node above them. So first output is 0.

Node 1 is the only node which is an ancestor of Node 2 in both the trees. So the second output is 1.

Node 1 is the only node which is an ancestor of Node 3 in both the trees. So the third output is 1.

Node 1 and node 3 are the only nodes which are ancestors of Node 4 in both the trees. So the fourth output is 2.

Node 1 is the only node which is an ancestor of Node 5 in both the trees. So the fifth output is 1.
