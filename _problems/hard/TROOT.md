---
category_name: hard
problem_code: TROOT
problem_name: 'Roots of a Tree'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: stzgd
date_added: 30-04-2014
tags:
    - dfs
    - easy
    - ltime12
    - segment
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/TROOT'
time:
    view_start_date: 1401006600
    submit_start_date: 1401006600
    visible_start_date: 1401006600
    end_date: 1735669800
    current: 1493556881
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME12/mandarin/TROOT.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME12/russian/TROOT.pdf).

You are given a tree with **N** nodes, numbered from 1 to **N**. You need to handle the queiries of the following two types:

- + **x** **y**. Add a path going from the node **x** to the node **y** (or from **y** to **x** because it's actually irrelevant). We will never add the path that is already a present one.
- - **x** **y**. Delete the path going from the node **x** to the node **y**. It is guaranteed that such path exists and after its last adding it haven't yet been deleted.

If we root the tree at the node **t** and for every present (added and not yet deleted) path, the least common ancestor of its endpoints is also one of the endpoints of this path, then we call the node **t** a possible root.

We ask you to output the product of all the possible roots' indexes after every query.

### Input

The first line of input contains two single space separated integers **N** and **M** - the number of nodes in the tree and the number of queries respectively.

The following **N-1** lines contain pairs of integers denoting the edges of a tree. The pair **X Y** corresponds to the edge between the nodes **X** and **Y**.

Then there are **M** lines denoting the queries in the form described above.

### Output

Output **M** lines. Output the product of all the possible roots' numbers modulo **109+7** after the performing of the **i**-th query on the **i**-th line. If there are no possible roots, output **-1** on this line instead.

### Constraints

- **1** ≤ **X, Y** ≤ **N**
- **1** ≤ **x, y** ≤ **N**
- **1** ≤ **N, M** ≤ **100** - 42 points.
- **1** ≤ **N, M** ≤ **105** - 58 points.

### Example

<pre><b>Input:</b>
5 4
1 2
2 3
3 4
4 5
+ 1 3
+ 3 5
- 1 3
- 3 5

<b>Output:</b>
60
15
30
120

</pre>