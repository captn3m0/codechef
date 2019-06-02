---
category_name: hard
problem_code: ADJLEAF
problem_name: 'Adjacent leaves'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: amrmahmoud
date_added: 17-11-2017
tags:
    - cook88
    - dynamic
    - hard
    - kingofnumbers
time:
    view_start_date: 1511116200
    submit_start_date: 1511116200
    visible_start_date: 1511116200
    end_date: 1735669800
    current: 1514816843
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Russian](http://www.codechef.com/download/translated/COOK88/russian/ADJLEAF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK88/vietnamese/ADJLEAF.pdf) as well.

beauty of a rooted tree is defined as the number of good subsets of leaves.

a leaf in rooted tree is a node that doesn't have children.

suppose you do dfs from the root, whenever you visit a leaf you write down the label of the leaf in a sequence, leaves are written in order of visiting. consider all possible sequences that can created using dfs traversal (different sequences can come from different order of visiting children of some node), we call subset of leaves good iff it's not empty and there's at least one sequence such that leaves of that subset appear consecutively (next to each other, any order is fine) in that sequence.

Given a tree of **N** nodes, nodes are numbered from 1 to **N**, for every node **i** find the beauty of the tree if node **i** was the root of the tree. since the answer is large output it modulo **109+7**

### Input

First line of input contains one integer **T** denoting the number of test-cases

First line of each test-case contains **N** denoting number of nodes

Each of the following **N** - 1 lines contains two integers **u v** denoting that there's an edge between nodes **u** and **v**

### Output

For each test-case output **N** lines, in i-th line output a single integer denoting the beauty of the tree if node **i** was the root modulo **109+7**

### Constraints

- **1** ≤ **T** ≤ **1,000**
- **2** ≤ **N** ≤ **300,000**
- **2** ≤ sum of **N** in all test-cases ≤ **300,000**

### Example

<pre><b>Input:</b>
2
5
1 2
2 3
2 4
1 5
10
1 2
1 3
1 4
2 5
2 6
3 7
3 8
4 9
4 10


<b>Output:</b>
7
7
3
3
3
55
51
51
51
27
27
27
27
27
27
</pre>
### Explanation

**Example case 1.** all subsets of leaves are good whatever the root is, so the answer is 7 when there are 3 leaves and 3 when there are 2 leaves

**Example case 2.** when the root is node 1 all subsets of leaves are good except:

- 5, 7, 9
- 5, 7, 10
- 5, 8, 9
- 5, 8, 10
- 6, 7, 9
- 6, 7, 10
- 6, 8, 9
- 6, 8, 10


so the answer is 63 - 8 = 55
