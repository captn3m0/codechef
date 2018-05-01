---
category_name: easy
problem_code: MAXDIST
problem_name: 'Chef and Trees'
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
problem_author: 'iscsi '
problem_tester: null
date_added: 8-06-2015
tags:
    - iscsi
    - snck15el
editorial_url: 'http://discuss.codechef.com/problems/MAXDIST'
time:
    view_start_date: 1434135600
    submit_start_date: 1434135600
    visible_start_date: 1434135600
    end_date: 1735669800
    current: 1493558167
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK15EL/mandarin/MAXDIST.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK15EL/russian/MAXDIST.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK15EL/vietnamese/MAXDIST.pdf)

Chef recently read about trees. He already learnt that the trees are undirected, simple, connected graphs and has no cycles. He also knows that the tree (or graph) diameter is the largest distance of two nodes in the tree (or graph). He finds out about a challenging problem: Can we decrease the diameter of the tree if we add just a single edge? Unfortunately he is tired from a lot of reading, so could you help him to solve the problem?

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows. The first line of each test contains an integer **N**, denoting the number of nodes in the tree. The next **N - 1** lines contain two space separated integers **Ai, Bi** denoting the tree edges. It's guaranteed that the input is a valid tree.

### Output

For each test case, output a single line print "YES" if it is possible to add a tree an edge to decrease the diameter of the graph, otherwise print "NO".

### Constraints

- **1** ≤ **T** ≤  **30**
- **2** ≤ **N** ≤  **10000**
- **1** ≤ **Ai, Bi** ≤  **N**

### Example

<pre><b>Input:</b>
3
2
1 2
3 
1 2
2 3
5
1 2
2 3
3 4
3 5

<b>Output:</b>
NO
YES
YES
</pre>### Explanation

**Example case 1.** In this example, we can use just cycle edges, or a parallel edge but these edges don't change the distance of the 1-2 nodes. ![HTML5 Icon](https://dl.dropboxusercontent.com/u/61869957/example1.bmp)

**Example case 2.**The original graph diameter is two because distance(1,3)=2, distance(1,2)=1 and distance(2,3)=1, if we connect 1,3 nodes then distance(1,3) will be 1 so the diameter decrease to 1. ![HTML5 Icon](https://dl.dropboxusercontent.com/u/61869957/example2.bmp)

**Example case 3.**The original graph diameter is three because dist(1,4)=dist(1,5)=3, if we connect 1,3 nodes then the diameter becomes 2. ![HTML5 Icon](https://dl.dropboxusercontent.com/u/61869957/example3.bmp)
