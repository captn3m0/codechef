---
category_name: medium
problem_code: CHEFLAND
problem_name: 'Chef Land'
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
problem_author: kingofnumbers
problem_tester: mgch
date_added: 13-06-2016
tags:
    - bridges
    - cook71
    - graph
    - kingofnumbers
    - medium
editorial_url: 'http://discuss.codechef.com/problems/CHEFLAND'
time:
    view_start_date: 1466965800
    submit_start_date: 1466965800
    visible_start_date: 1466965800
    end_date: 1735669800
    current: 1493557535
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK71/mandarin/CHEFLAND.pdf), [Russian](http://www.codechef.com/download/translated/COOK71/russian/CHEFLAND.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK71/vietnamese/CHEFLAND.pdf) as well.

You are given an undirected unweighted graph consisting of **N** nodes and M edges. A pair of nodes **u, v** is called good if and only if you can go from node **u** to **v** and then return back from **v** to **u** without using any edge more than once.

Can you add at most one edge to the graph to make all the pairs of nodes good? Note that the added edge can be between two vertices which are already connected by some edges. However you are not allowed to add self loops.

### Input

First line of the input contains two space separated integers - **N** (number of nodes) and **M** (number of edges).

Each of the next **M** lines contains two space separated integers **x** and **y**, denoting that there is an edge between node **x** and **y**.

### Output

Output "YES" (without quotes) if it possible to make all pairs of node good by adding at most one edge. Output "NO" (without quotes) otherwise.

### Constraints

- **1** ≤ **N** ≤ **105**
- 0 ≤ **M** ≤ **2 \* 105**
- **1** ≤ **x, y** ≤ **N**
- It is guaranteed that the graph is connected.
- The given graph may contain multi-edges. It doesn't contain any self loops.

### Example

<pre><b>Input:</b>
<tt>4 4
3 2
3 1
2 1
1 4</tt>

<b>Output:</b>
<tt>YES</tt>
</pre>### Explanation

We can connect nodes 3 and 4 via an edge. After that all the pair of vertices will be good.
