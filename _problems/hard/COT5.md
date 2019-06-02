---
category_name: hard
problem_code: COT5
problem_name: 'Count on a Treap'
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
problem_tester: laycurse
date_added: 12-12-2013
tags:
    - feb14
    - hard
    - segment
    - treap
    - xiaodao
editorial_url: 'http://discuss.codechef.com/problems/COT5'
time:
    view_start_date: 1392629400
    submit_start_date: 1392629400
    visible_start_date: 1392629400
    end_date: 1735669800
    current: 1493556669
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/FEB14/mandarin/COT5.pdf) and [Russian](http://www.codechef.com/download/translated/FEB14/russian/COT5.pdf).

In computer science, a treap is a binary search tree according to the keys and meanwhile a heap according to the weights. Follow the link for more details: [http://en.wikipedia.org/wiki/Treap](http://en.wikipedia.org/wiki/Treap "http://en.wikipedia.org/wiki/Treap")

Your task is to maintain a **max-treap** supporting the following operations:

- 0 **k w**: Insert a new node, whose key and weight are **k** and **w**.
- 1 **k**: Delete a node in the treap with key **k**.
- 2 **ku** **kv**: Return the distance between node **u** whose key is **ku** and node **v** whose key is **kv**.



No two nodes share the same key or the same weight in the tree, and we guarantee the node is indeed in the treap before a delete operation takes place.

### Input

The first line contains an integer **N**, the number of operations.
Each of the next **N** lines contains two or three integers "**0 k w**" "**1 k**" or "**2 ku kv**” . These integers describe the current operation.

### Output

For each distance query, print the distance between **u** and **v**.

### Constraints

- **1 ≤ N ≤ 200000**
- **0 < k, w, ku, kv < 232**

### Example

<pre><strong>Input:</strong>
12
0 4 17535
0 10 38964
0 2 21626
0 1 61321
2 1 10
2 10 4 
1 10
1 1
0 8 42634
2 8 4
2 8 2
2 4 2

<strong>Output:</strong>
1
2
2
1
1
</pre>