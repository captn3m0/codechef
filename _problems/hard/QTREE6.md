---
category_name: hard
problem_code: QTREE6
problem_name: 'Query on a tree VI'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xiaodao
problem_tester: gerald
date_added: 7-11-2013
tags:
    - dec13
    - hard
    - heavy
    - link
    - xiaodao
editorial_url: 'http://discuss.codechef.com/problems/QTREE6'
time:
    view_start_date: 1387186200
    submit_start_date: 1387186200
    visible_start_date: 1387186200
    end_date: 1735669800
    current: 1493556808
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC13/mandarin/QTREE6.pdf) and [Russian](http://www.codechef.com/download/translated/DEC13/russian/QTREE6_1.pdf).

You are given a tree (an acyclic undirected connected graph) with **n** nodes. The tree nodes are numbered from 1 to **n**. Each node has a color, white or black. All the nodes are black initially. We will ask you to perfrom some instructions of the following form:

- **0 u**: ask for how many nodes are connected to **u**, two nodes are connected if all the node on the path from **u** to **v** (inclusive **u** and **v**) have the same color.
- **1 u**: toggle the color of **u** (that is, from black to white, or from white to black).

### Input

The first line contains a number **n** that denotes the number of nodes in the tree (1 ≤ **n** ≤ 105). In each of the following **n-1** lines, there will be two numbers (**u**, **v**) that describes an edge of the tree (1 ≤ **u**, **v** ≤ **n**). The next line contains a number **m** denoting number of operations we are going to process (1 ≤ **m** ≤ 105). Each of the following **m** lines describe an operation (**t**, **u**) as we mentioned above(0 ≤ **t** ≤ 1, 1 ≤ **u** ≤ **n**).

### Output

For each query operation, output the corresponding result.

### Example

<pre><pre style="text-align: left;"><strong>Input 1:</strong><br></br>5
1 2
1 3
1 4
1 5
3
0 1
1 1
0 1
<strong>Output 1:</strong><br></br>5
1
</pre><pre><pre style="text-align: left;"><strong><br></br>Input 2:<br></br></strong>7
1 2
1 3
2 4
2 5
3 6
3 7
4
0 1
1 1
0 2
0 3
<strong><br></br><br></br>Output 2:</strong><br></br>7
3
3<br></br><br></br><br></br><strong>Warning: large input/output data,be careful with certain languages</strong>
</pre>