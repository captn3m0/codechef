---
category_name: hard
problem_code: TUPLES2
problem_name: 'Path Triples On Tree'
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
problem_author: r_64
problem_tester: xcwgf666
date_added: 7-02-2017
tags:
    - centroid
    - dynamic
    - hard
    - march17
    - r_64
    - tree
editorial_url: 'https://discuss.codechef.com/problems/TUPLES2'
time:
    view_start_date: 1489397400
    submit_start_date: 1489397400
    visible_start_date: 1489397400
    end_date: 1735669800
    current: 1493556888
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH17/mandarin/TUPLES2.pdf?v=1), [Russian](http://www.codechef.com/download/translated/MARCH17/russian/TUPLES2.pdf?v=1) and [Vietnamese](http://www.codechef.com/download/translated/MARCH17/vietnamese/TUPLES2.pdf?v=1) as well.

Chef is given a tree of **N** nodes. Let M denote the number of simple paths with at least two nodes. Notice that M = **N \* (N - 1) / 2**.

There are (M \* (M - 1) \* (M - 2) / 6) unordered triples of such paths. Your task is to count how many of them are nice. A triple of paths (**A**, **B**, **C**) is *nice* if and only if **either** of the following conditions is satisfied:

- The three paths are pairwise disjoint (no two of them share a node).
- Each pair of paths intersect with each other. In other words: paths **A** and **B** share at least one node, paths **A** and **C** share at least one node, and also paths **B** and **C** share at least one node.

Output the number of nice triples of paths modulo (**109+7**).

###  Input

 The first line of the input contains an integer **N**.

Each of the next **N-1** lines contains two integers **a**i and **b**i denoting an edge between nodes **a**i and **b**i.

###  Output

 Output a single integer, denoting the number of nice triples of paths modulo (**109+7**).

###  Constraints

- **1** ≤ **N** ≤ **3\*105**
- **1** ≤ **a**i, **b**i ≤ **N**
- **a**i ≠ **b**i

### Subtasks

 Subtask 1 (15 points): - **1** ≤ **N** ≤ **2000**


 Subtask 2 (57 points): - **1** ≤ **N** ≤ **105**


 Subtask 3 (28 points): - Original constraints.

###  Example

<pre>
<b>Input 1:</b>
<tt>4
1 2
2 3
3 4</tt>

<b>Output 1:</b>
<tt>16</tt>

<b>Input 2:</b>
<tt>13
1 2
1 3
1 4
2 5
2 6
3 7
4 8
7 9
9 10
10 11
11 12
12 13</tt>

<b>Output 2:</b>
<tt>43484</tt>
</pre>
###  Explanation

 **Example test 1.** Let (**x**, **y**) denote the simple path between nodes **x** and **y**. There are **16** nice triples of paths: - (1, 2), (1, 3), (1, 4)
- (1, 2), (1, 3), (2, 3)
- (1, 2), (1, 3), (2, 4)
- (1, 2), (1, 4), (2, 3)
- (1, 2), (1, 4), (2, 4)
- (1, 2), (2, 3), (2, 4)
- (1, 3), (1, 4), (2, 3)
- (1, 3), (1, 4), (2, 4)
- (1, 3), (1, 4), (3, 4)
- (1, 3), (2, 3), (2, 4)
- (1, 3), (2, 3), (3, 4)
- (1, 3), (2, 4), (3, 4)
- (1, 4), (2, 3), (2, 4)
- (1, 4), (2, 3), (3, 4)
- (1, 4), (2, 4), (3, 4)
- (2, 3), (2, 4), (3, 4)


**Example test 2.** The triple {(1, 5), (3, 7), (9, 13)} is one of the 43484 nice triples of paths.
