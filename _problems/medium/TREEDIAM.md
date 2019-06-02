---
category_name: medium
problem_code: TREEDIAM
problem_name: 'Product of Diameters'
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
problem_author: xcwgf666
problem_tester: harshil7924
date_added: 6-08-2016
tags:
    - lca
    - ltime39
    - medium
    - tree
    - union
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/TREEDIAM'
time:
    view_start_date: 1472317200
    submit_start_date: 1472317200
    visible_start_date: 1472317200
    end_date: 1735669800
    current: 1493557949
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME39/mandarin/TREEDIAM.pdf), [Russian](http://www.codechef.com/download/translated/LTIME39/russian/TREEDIAM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME39/vietnamese/TREEDIAM.pdf) as well.

Chef had a tree **T** with weighted nodes.

One day he decided that he wants to have two trees instead of one. So, he removed one of the edges of **T**.

The next day, he decided to have three trees instead of two. So, he removed one more edge from some of the trees he had.

And so on. Every day, Chef was removing one, not yet removed edge, util he once got a forest, consisting of **N** single-node trees.

Chef thinks that the main characteristic of a tree is its' diameter. So he asks you to calculate the product of the diameters in obtained set of trees.

Since the overall product might be quite large, output it modulo **109+7**.

### Note

In this problem, we consider the diameter of the tree as the maximum sum of weights of the nodes over all simple paths in this tree.

### Input

The first line of the input contains an integer **N** denoting the number of nodes in the tree **T**.

The following line contains **N** space-separated integers **Wi**, denoting the weights of the nodes.

Each of the following **(N-1)** lines contain two space-separated integers **Xi Yi**.

Each of the following **(N-1)** lines contain a single integer **Kj**, denoting the number of the edge that will be deleted on the **j**th day.

### Output

Output **N** lines.

On the **i**th line, output the product of the diameters of all the trees after **(i-1)** days modulo **109+7**. Formally, if **i > 1**, output the product of the diameters of the obtained trees after deleting the edges **K1**, **K2**, ..., **Ki - 1**, modulo **109+7**, otherwise output the diameter of the initial tree.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **Wi** ≤ **104**
- **1** ≤ **Xi, Yi** ≤ **N**
- **K** is a permutation of the integers from the range **\[1; N-1\]**.

### Subtasks

- **Subtask #1 (16 points)**: **1** ≤ **N** ≤ **100**
- **Subtask #2 (24 points)**: **1** ≤ **N** ≤ **5000**
- **Subtask #3 (60 points)**: no additional constraints

### Example

<pre><b>Input:</b>
<tt>3
1 2 3
1 2
1 3
2
1</tt>

<b>Output:</b>
<tt>6
9
6</tt>
</pre>
### Explanation

The diameter of the initial tree is **6** (node **2** to node **1** to node **3**).

After the first day (the deletion of the **2**nd edge, i.e. **1 3**), we get two trees, both with diameters 3.

After the second day (the deletion of the **1**st edge, i.e. **1 2**), we get three trees with diameters **1**, **2**, **3**, and their product equals to **6**.
