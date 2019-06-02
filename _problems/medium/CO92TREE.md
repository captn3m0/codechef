---
category_name: medium
problem_code: CO92TREE
problem_name: 'Chef Chooses a Subset'
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
problem_author: kefaa
problem_tester: null
date_added: 15-03-2018
tags:
    - bruteforce
    - cook92
    - dfs
    - kefaa
    - medium
    - tree
editorial_url: 'https://discuss.codechef.com/problems/CO92TREE'
time:
    view_start_date: 1521397800
    submit_start_date: 1521397800
    visible_start_date: 1521397800
    end_date: 1735669800
    current: 1525454396
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK92/mandarin/CO92TREE.pdf), [Russian](http://www.codechef.com/download/translated/COOK92/russian/CO92TREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK92/vietnamese/CO92TREE.pdf) as well.

Chef has a tree with **N** nodes numbered 1 through **N**.

A subset **S** of nodes of the tree is called *connected* if, for any two nodes from **S**, the simple path between these two nodes in the tree contains only nodes which belong to **S**.

Chef defines the *cost* of a connected subset **S** as **|S| · AND(S)**. Here, **|S|** denotes the size of the set **S** and  **AND(S)** denotes the bitwise AND of indices of all nodes from **S**.

Chef would like to know the maximum of costs of all connected subsets. Can you help him?

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N**.
- Each of the following **N-1** lines contains two space-separated integers **x** and **y** denoting an edge between nodes **x** and **y** of the tree.

### Output

For each test case, print a single line containing one integer — the maximum cost of a connected subset.

### Constraints

- 1 ≤ **T** ≤ 30
- 1 ≤ **N** ≤ 100,000
- 1 ≤ **x**, **y** ≤ **N**
- 1 ≤ sum of **N** over all test cases ≤ 300,000

### Example

<pre><b>Input:</b>

1
6
1 2
3 5
3 4
2 3
5 6

<b>Output:</b>

8
</pre>