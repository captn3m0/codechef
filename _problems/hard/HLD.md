---
category_name: hard
problem_code: HLD
problem_name: 'Heavy-Light Decomposition'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: cgy4ever
problem_tester: null
date_added: 3-04-2017
tags:
    - april17
    - cgy4ever
editorial_url: 'https://discuss.codechef.com/problems/HLD'
time:
    view_start_date: 1492421400
    submit_start_date: 1492421400
    visible_start_date: 1492421400
    end_date: 1735669800
    current: 1497589508
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL17/mandarin/HLD.pdf), [Russian](http://www.codechef.com/download/translated/APRIL17/russian/HLD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL17/vietnamese/HLD.pdf) as well.

You are given a rooted tree with **N** nodes. The nodes are numbered from 1 to **N**, and the root is the node numbered 1. For each node X which is not a leaf, you must choose a node Y which is a child of X and mark the edge between X and Y as heavy (red in the picture below).

Once this has been done, we calculate the cost of each path from the root to a leaf. For this, we decompose the path into segments, where each segment has all light edges or all heavy edges, and each segment is maximal (ie. each segment is as long as possible). So, a path will start with a heavy segment or a light segment, but the segment types will alternate between heavy and light.

The length of a segment is the number of edges in it. The cost of a light segment with length L is L, and the cost of a heavy segment with length L is (ceiling\[log2L\]+1). The cost of a path from the root to a leaf will be the sum of costs of all the segments.

The decomposition into segments is done independently for each path.

 For example:

![](https://codechef_shared.s3.amazonaws.com/download/upload/APRIL17/hld.png)- The path 1 → 9 contains one heavy segment (1 → 2) with length 1 and one light segment (2 → 9) with length 2, so the cost is (ceiling\[log21\]+1) + 2 = (0 + 1) + 2 = 3.
- The path 1 → 17 contains one light segment (1 → 3) with length 1 and one segment (3 → 17) with length 5, so the cost is 1 + (ceiling\[log25\]+1) = 1 + (3 + 1) = 5.
- The path 1 → 15 has cost 1 + (ceiling\[log22\]+1) + 1 = 1 + (1 + 1) + 1 = 4.

Consider all the paths from the root to leaves. The maximum cost among all these paths, is defined to be the 'cost' of the tree. Different ways of choosing heavy edges can lead to different ‘costs' of the tree.

Please find the minimum ‘cost' of the tree achievable.

### Input

- The first line contains one integer, **T**, the number of test cases. The description of each test case follows:
- The first line of each test case contains one integer, **N**.
- **N**-1 lines follow, each of which contains two integers **a**, **b**. This signifies that there is an edge between nodes **a** and **b**.

### Output

The output should have only one integer in a new line, the minimum 'cost' achievable.

### Constraints

- 1 ≤ **T** ≤ 10
- 2 ≤ **N** ≤ 105

### Subtasks

- Subtask #1 (30 points): 2 ≤ **N** ≤ 1000
- Subtask #2 (70 points): Original constraints.

### Example

<pre><b>Input:</b><tt>
2
12
1 2
2 4
4 5
5 6
4 7
1 3
3 8
8 9
3 10
10 11
10 12
2
1 2
</tt>

<b>Output:</b><tt>
3
1</tt>
</pre>### Explanation

For first input: one solution is to mark these edges as heavy and the other edges as light: {1-2, 2-4, 4-5, 5-6, 3-8, 8-9, 10-11}
