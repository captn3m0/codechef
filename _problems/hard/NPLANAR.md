---
category_name: hard
problem_code: NPLANAR
problem_name: 'Not even planar'
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
problem_author: xellos0
problem_tester: antoniuk1
date_added: 27-01-2016
tags:
    - cook68
    - dp
    - edge
    - matching
    - medium
    - xellos0
editorial_url: 'http://discuss.codechef.com/problems/NPLANAR'
time:
    view_start_date: 1458498600
    submit_start_date: 1458498600
    visible_start_date: 1458498600
    end_date: 1735669800
    current: 1493556779
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK68/mandarin/NPLANAR.pdf), [Russian](http://www.codechef.com/download/translated/COOK68/russian/NPLANAR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK68/vietnamese/NPLANAR.pdf) as well.

You're given an undirected graph **G** with **N** vertices and **M** edges. A triangle in this graph is a cycle of length 3.

Triangles are stupid and nobody likes them, so you should remove some (possibly zero) vertices from this graph in such a way, that the resulting graph doesn't contain any triangle. In addition, the number of removed vertices should be minimum possible. Note that if you remove a vertex from a graph, then all the edges incident on that vertex will also be removed.

In the given graph **G**, each vertex belongs to **at most 2** triangles. Also, **G** can contain at most **40** triangles.

Compute the minimum number of vertices to remove.

### Input

- The first line of the input contains an integer **T** - the number of test cases.
- The first line of each test case contains two space-separated integers **N** and **M**.
- Each of the next **M** lines contains two space-separated integers **a** and **b** - two vertices connected by an edge.

### Output

For each test case, output one line with a single number - the minimum number of vertices that have to be removed.

### Constraints

- **1 ≤ T ≤ 10**
- **1 ≤ N ≤ 3000**
- **1 ≤ M ≤ N(N-1)/2**
- The sum of all **M** in a single test file won't exceed **106**.
- The graph won't contain any self-loops or multiple edges.
- Each vertex belongs to **at most 2** triangles.
- In each test case, there will be at most 40 triangles.

### Example

<pre><b>Input:</b>
3
8 8
2 3
2 1
1 4
4 3
2 6
7 6
7 8
8 3
11 16
1 2
2 3
3 4
4 1
1 5
2 5
2 6
3 6
3 7
4 7
4 8
8 1
9 1
10 7
11 7
11 10
7 9
1 2
1 3
2 3
1 4
1 5
4 5
6 2
7 2
7 6

<b>Output:</b>
0
3
2

</pre>### Explanation
**Example case 1.** The graph looks like two cycles of lengths 4 and 5 with a common edge. Since there are no triangles, there's no need to remove any vertex.

**Example case 2.** It's sufficient to remove vertices 7, 1 and 2.

**Example case 3.** Vertices 1 and 2 have to be removed.
