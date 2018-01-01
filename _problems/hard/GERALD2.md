---
category_name: hard
problem_code: GERALD2
problem_name: 'Black and White Tree'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: gerald
problem_tester: null
date_added: 8-10-2013
tags:
    - data
    - gerald
    - hard
    - heavy
    - nov13
editorial_url: 'http://discuss.codechef.com/problems/GERALD2'
time:
    view_start_date: 1384162200
    submit_start_date: 1384162200
    visible_start_date: 1384162200
    end_date: 1735669800
    current: 1493556718
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV13/mandarin/GERALD2.pdf) and [Russian](http://www.codechef.com/download/translated/NOV13/russian/GERALD2.PDF).

Chef has a rooted tree, consisting of **N** vertexes. Each tree vertex has a unique index (integer from **1** to **N**), and also has a color (black or white).
The root of Chef's tree has index **1**.

Initially, all vertexes of the tree are colored white. Then Chef start playing with the tree. He writes out a sequence of
**M** vertexes of the tree **V1**, **V2**, ..., **VM**. And now he wants to make **M** operations with the tree, each of them is:

1. During **i**-th operation Chef picks vertex **Vi**.
2. If vertex **Vi** is black, then he colors it white.
3. Chef finds the farthest white vertex from vertex **Vi**, in case of tie he picks the one with largest index. This vertex is the result of current operation.
4. If vertex **Vi** wasn't recolored on step 2 of current operation (therefore before the operation it is white), Chef colors it black.

Chef gives to you the tree and sequence **V**. Help him to make all the operations. So, print the index of resulting vertex for each operation.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **N**, **M** - the number of vertexes of the tree and the number of operations.
The second line contains **N-1** integers **P2**, **P3**, ..., **PN** - description of Chef's tree.
Integer **Pi** denotes the index of vertex that is parent of the vertex **i** in the tree.
Each of the next **M** lines contains the description of operations, **i**-th of them contains integer **Vi**.

It is guaranteed that the given graph is a tree.

### Output

For each operation of each test case print the index of resulting vertex on the separate line.

### Constraints

**1** ≤ **T** ≤ **1000**,

**2** ≤ **N** ≤ **200000**,

**1** ≤ **M** ≤ **200000**,

**1** ≤ **Pi**, **Vi** ≤ **N**;

Sum of all **N** values for test cases is not greater than **200000**.

Sum of all **M** values for test cases is not greater than **200000**.

### Example

<pre><b>Input:</b>
2
6 7
3 1 3 4 4
1
5
6
1
3
5
2
2 2
1
2
1

<b>Output:</b>
6
2
2
4
4
2
5
1
1

</pre>