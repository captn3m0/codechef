---
category_name: medium
problem_code: BINTREEQ
problem_name: 'Queries on a Binary Tree'
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
problem_author: kostya_by
problem_tester: pavel1996
date_added: 26-03-2016
tags:
    - cook69
    - easy
    - kostya_by
    - lca
editorial_url: 'http://discuss.codechef.com/problems/BINTREEQ'
time:
    view_start_date: 1460917800
    submit_start_date: 1460917800
    visible_start_date: 1460917800
    end_date: 1735669800
    current: 1493557491
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK69/mandarin/BINTREEQ.pdf), [Russian](http://www.codechef.com/download/translated/COOK69/russian/BINTREEQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK69/vietnamese/BINTREEQ.pdf) as well.

Let's consider a rooted binary tree with the following properties:

- The number of nodes and edges in the tree is infinite
- The tree root is labeled by **1**
- A node labeled by **v** has two children: **2 × v** (the left son of **v**) and **2 × v + 1** (the right son of **v**)

Here is an image of the first several tree layers of such a tree:

![](https://www.codechef.com/download/COOK69/1.png)

Let's consider four operations, that are allowed to apply during the tree traversal:

- **move to the left son** - move from **v** to **2 × v**
- **move to the right son** - move from **v** to **2 × v + 1**
- **move to the parent as a left son** - move from **v** to **v / 2** if **v** is an even integer
- **move to the parent as a right son** - move from **v** to **(v - 1) / 2** if **v** is an odd integer

It can be proven, that for any pair of two nodes **u** and **v**, there is only one sequence of such commands, that moves from **u** to **v** and visits each node of the tree at most once. Let's call such a sequence of commands a _path configuration_ for a pair of nodes (**u**, **v**).

You are asked to process a series of the following queries:

You are given three integers **n**, **u** and **v** (**1 ≤ u, v ≤ n**). Count the pairs of nodes (**w, t**) (**1 ≤ w, t ≤ n**) such that the path configuration for (**w, t**) is the same with the path configuration for (**u, v**).

### Input

The first line of input contains an integer **Q** denoting the number of queries to process.

Each of the next **Q** lines contains three space-separated integers **n**, **u** and **v** denoting a query.

### Output

For each query, print the answer on a separate line.

### Constraints

- **1 ≤ Q ≤ 20000**
- **1 ≤ u, v ≤ n ≤ 109**

### Example

```
<b>Input:</b>
3
11 9 11
10 2 2
8 1 8

<b>Output:</b>
2
10
1

```
### Explanation

In the first query from the example test case, you should count pairs (**5, 7**) and (**9, 11**).

In the second query from the example test case, you should count the following pairs: (**1, 1**), (**2, 2**), (**3, 3**), (**4, 4**), (**5, 5**), (**6, 6**), (**7, 7**), (**8, 8**), (**9, 9**) and (**10, 10**).

In the third query from the example test case, you should only count a pair (**1, 8**).