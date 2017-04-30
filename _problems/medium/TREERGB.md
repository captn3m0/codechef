---
category_name: medium
problem_code: TREERGB
problem_name: 'Paint the Tree'
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
problem_author: witua
problem_tester: xcwgf666
date_added: 13-08-2014
tags:
    - cook49
    - dynamic
    - easy
    - tree
    - witua
editorial_url: 'http://discuss.codechef.com/problems/TREERGB'
time:
    view_start_date: 1408906200
    submit_start_date: 1408906200
    visible_start_date: 1408906200
    end_date: 1735669800
    current: 1493557950
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK49/mandarin2/TREERGB.pdf) and [Russian](http://www.codechef.com/download/translated/COOK49/russian/TREERGB.pdf) as well.

You are given a rooted tree with **N** nodes. You would like to paint each node of the tree in one of three possible colors: red, green, and blue. The following conditions must be fulfilled:

- For each node painted red, there must be no more than **R** red nodes in its subtree (including this node).
- For each node painted green, there must be no more than **G** green nodes in its subtree (including this node).
- For each node painted blue, there must be no more than **B** blue nodes in it's subtree (including this node).

Find the number of ways to paint the tree and output it modulo **1000000007**.

### Input

The first line contains four integers **N**, **R**, **G** and **B**.

The following **N-1** lines contain pairs of the nodes' numbers **Ui** and **Vi** (one pair per line), describing the edges of the tree.

The nodes are numbered from **1** to **N**, inclusive, and the node with the index **1** is the root of the tree.

### Output

Output the answer to the problem on the first line.

### Constraints

- **1** ≤ **N** ≤ **300**
- ≤ **R**, **G**, **B** ≤ **300**

### Example

```
<b>Input #1:</b>
3 1 1 1
1 2
3 1

<b>Output #1:</b>
12

```
```
<b>Input #2:</b>
8 2 1 3
1 2
1 4
5 4
7 4
3 2
4 6
8 6

<b>Output #2:</b>
613

```