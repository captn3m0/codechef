---
category_name: hard
problem_code: LKYEDGE
problem_name: 'Lucky Edge'
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
problem_author: fudail
problem_tester: alex_2oo8
date_added: 3-10-2017
tags:
    - dfs
    - fudail
    - hard
    - oct17
    - tree
editorial_url: 'https://discuss.codechef.com/problems/LKYEDGE'
time:
    view_start_date: 1508146200
    submit_start_date: 1508146200
    visible_start_date: 1508146200
    end_date: 1735669800
    current: 1514817001
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/OCT17/mandarin/LKYEDGE.pdf), [russian](http://www.codechef.com/download/translated/OCT17/russian/LKYEDGE.pdf) and [vietnamese](http://www.codechef.com/download/translated/OCT17/vietnamese/LKYEDGE.pdf) as well.

In an undirected unweighted graph, an edge of the graph is said to be *lucky* if it is a part of some cycle of the graph.

You are given a list **E** of **M** edges. We define **f(i)** as the number of intervals **\[l, r\]** (**1 ≤ l ≤ i ≤ r ≤ M**) such that if you build a graph from edges **El, El+1, ..., Er**, the edge **Ei** will be a lucky edge in this graph.

Your task is to calculate the values of **f(1), f(2), ..., f(M)**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of each test case contains a single integer **M** denoting the number of edges.

Each of the next **M** lines contains two space-separated integers **ui** and **vi** denoting that **i**-th edge connects nodes **ui** and **vi**.

### Output

For each test case, output a single line containing **M** integers, i-th of which should be value of **f(i)**.

### Constraints

- **1** ≤ **T** ≤ **50**
- **1** ≤ **M** ≤ **5,000**
- **1** ≤ sum of **M** over all test-cases ≤ **20,000**
- **1** ≤ **ui**, **vi** ≤ **10,000**
- **ui** ≠ **vi**

### Subtasks

- **Subtask #1 (10 points):**  **M** ≤ 200 and sum of **M** ≤ 2,300
- **Subtask #2 (20 points):**  **M** ≤ 1,000 and sum of **M** ≤ 4,000
- **Subtask #3 (70 points):**  Original constraints

### Example

<pre><b>Input:</b>
2
3
1 2
3 4
2 1
5
1 2
2 3
3 4
1 4
4 2

<b>Output:</b>
1 0 1
2 3 3 2 2
</pre>