---
category_name: medium
problem_code: TREEROOT
problem_name: 'Root of the Problem'
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
problem_author: pieguy
problem_tester: anton_lunyov
date_added: 26-11-2012
tags:
    - cook29
    - pieguy
    - simple
    - simple
editorial_url: 'http://discuss.codechef.com/problems/TREEROOT'
time:
    view_start_date: 1356288302
    submit_start_date: 1356288302
    visible_start_date: 1356288262
    end_date: 1735669800
    current: 1493557950
layout: problem
---
All submissions for this problem are available.Chef has a binary tree. The binary tree consists of 1 or more nodes. Each node has a unique integer id. Each node has up to 2 children, which are identified by their ids, and each node is the child of at most 1 other node. A node **X** is considered to be an ancestor of node **Y** if node **Y** is a child of node **X** or if there is some node **Z** for which **X** is an ancestor of **Z** and **Y** is a child of **Z**. No node is an ancestor of itself. A special node called the root node is an ancestor of all other nodes.

Chef has forgotten which node of his tree is the root, and wants you to help him to figure it out. Unfortunately, Chef's knowledge of the tree is incomplete. He does not remember the ids of the children of each node, but only remembers the sum of the ids of the children of each node.

### Input

Input begins with an integer **T**, the number of test cases. Each test case begins with an integer **N**, the number of nodes in the tree. **N** lines follow with 2 integers each: the id of a node, and the sum of the ids of its children. The second number will be 0 if the node has no children.

### Output

For each test case, output on a line a space separated list of all possible values for the id of the root node in increasing order. **It is guaranteed that at least one such id exists for each test case.**

### Constraints

- 1 ≤ **T** ≤ 50
- 1 ≤ **N** ≤ 30
- All node ids are between 1 and 1000, inclusive

### Sample Input

<pre>2
1
4 0
6
1 5
2 0
3 0
4 0
5 5
6 5

</pre>### Sample Output
<pre>4
6

</pre>### Explanation
In the first sample test case, there is only one node, which is clearly the root. In the second test case, there are two non-isomorphic trees that satisfy the constraints, as seen in the following picture:

<pre>  6           6
   \         / \
    5       1   4
   / \       \
  1   4       5
 / \         / \
2   3       2   3

</pre>