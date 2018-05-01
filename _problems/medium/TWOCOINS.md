---
category_name: medium
problem_code: TWOCOINS
problem_name: 'Two Coins'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: admin3
problem_tester: null
date_added: 5-07-2017
tags:
    - admin3
    - dynamic
    - easy
    - july17
    - tree
editorial_url: 'https://discuss.codechef.com/problems/TWOCOINS'
time:
    view_start_date: 1500283800
    submit_start_date: 1500283800
    visible_start_date: 1500283800
    end_date: 1735669800
    current: 1514816332
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY17/mandarin/TWOCOINS.pdf), [Russian](http://www.codechef.com/download/translated/JULY17/russian/TWOCOINS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY17/vietnamese/TWOCOINS.pdf) as well.

You are given a rooted tree consisting of **N** nodes. The nodes are numbered from 1 to **N**, and node 1 is the root. At each node of the tree, you can put zero or one coin such that the following property is satisfied for the tree:

- For each node of the tree, starting from the original configuration, we should be able to get two coins on the node by applying at most two operations of the following kind:
- Take a coin from a node and move it to an adjacent node.
 
- While trying to get to a particular node, if the same coin is moved in two operations, both those operations should either be towards the root, or both of them should be away from the root. That is, you cannot move a coin to its parent in one operation and then take it to another child of the parent in the second operation.

Find the minimum total number of coins which can be used to get a valid configuration.

### Input

The first line of the input contains an integer **T**.

For each test case, the first line contains an integer **N**.

Each of the next **N** - 1 lines, contains two space separated integers **u, v**, denoting that there is an edge between node **u** and node **v** of the tree.

### Output

For each test case, output a single integer corresponding to the minimum number of coins that can be used. If it's not possible to achieve this, output -1.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 105
- 1 ≤ **u**, **v** ≤ **N**

### Subtasks

**Subtask #1 (40 points)**

- 1 ≤ **N** ≤ 1000

**Subtask #2 (60 points)**

- Original constraints

### Example

<pre>
<b>Input</b>
2
3
1 2
1 3
5
1 2
1 3
3 4
3 5

<b>Output</b>
3
4
</pre>### Explanation

**Example case 1**.

![](https://discuss.codechef.com/upfiles/twocoins_first_sample.jpg)

The nodes which have a coin in them are shown by blue color. You can see that each node satisfies the desired property.

**Example case 2**.

![](https://discuss.codechef.com/upfiles/twocoins_2.jpg)
