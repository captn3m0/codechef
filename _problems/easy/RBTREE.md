---
category_name: easy
problem_code: RBTREE
problem_name: 'Chef and Red Black Tree'
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
problem_author: ma5termind
problem_tester: null
date_added: 28-09-2014
tags:
    - ad
    - easy
    - graph
    - lca
    - ma5termind
    - nov14
editorial_url: 'http://discuss.codechef.com/problems/RBTREE'
time:
    view_start_date: 1416216600
    submit_start_date: 1416216600
    visible_start_date: 1416216600
    end_date: 1735669800
    current: 1493558178
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV14/mandarin/RBTREE.pdf) and [Russian](http://www.codechef.com/download/translated/NOV14/russian/RBTREE.pdf).

Chef likes trees a lot. Today he has an infinte full binary tree (each node has exactly two childs) with special properties.
Chef's tree has the following special properties :

- Each node of the tree is either colored **red** or **black**.
- Root of the tree is **black** intially.
- Both childs of a **red** colored node are **black** and both childs of a **black** colored node are **red**.

The root of the tree is labelled as 1. For a node labelled **v**, it's left child is labelled as **2\*v** and it's right child is labelled as **2\*v+1**.

Chef wants to fulfill **Q** queries on this tree. Each query belongs to any of the following three types:

- **Qi** Change color of all **red** colored nodes to **black** and all **black** colored nodes to **red**.
- **Qb x y** Count the number of **black** colored nodes on the path from node **x** to node **y** (both inclusive).
- **Qr x y** Count the number of **red** colored nodes on the path from node **x** to node **y** (both inclusive).

Help chef accomplishing this task.


**Input**

First line of the input contains an integer **Q** denoting the number of queries. Next **Q** lines of the input contain **Q** queries (one per line). Each query belongs to one of the three types mentioned above.


**Output**

For each query of type **Qb** or **Qr**, print the required answer.


**Constraints**

**1. 1<=Q<=105** 
**1. 1<=x,y<=109** 


**Sample Input**

5
Qb 4 5
Qr 4 5
Qi
Qb 4 5
Qr 4 5


**Sample Output**

2
1
1
2


**Explanation**

With the initial configuration of the tree, Path from node 4 to node 5 is 4->2->5 and color of nodes on the path is B->R->B.

- Number of black nodes are 2.
- Number of red nodes are 1.

After Query Qi, New configuration of the path from node 4 to node 5 is R->B->R.

- Number of black nodes are 1.
- Number of red nodes are 2.



**Scoring**

- Subtask #1: **1<=Q<=100 1<=x,y<=1000** **: 27 pts**
- Subtask #2: **1<=Q<=103 1<=x,y<=105 : **25 pts****
- Subtask #3: **1<=Q<=105 1<=x,y<=109 : **48 pts****
