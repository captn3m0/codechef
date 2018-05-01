---
category_name: medium
problem_code: WEASELTX
problem_name: 'Weasel does Xor on Tree'
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
    - kotlin
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
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: bciobanu
problem_tester: jingbo_adm
date_added: 9-08-2017
tags:
    - bciobanu
    - binomial
    - lucas
    - medium
    - sept17
editorial_url: 'https://discuss.codechef.com/problems/WEASELTX'
time:
    view_start_date: 1505122200
    submit_start_date: 1505122200
    visible_start_date: 1505122200
    end_date: 1735669800
    current: 1514816840
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/SEPT17/mandarin/WEASELTX.pdf), [russian](http://www.codechef.com/download/translated/SEPT17/russian/WEASELTX.pdf) and [vietnamese](http://www.codechef.com/download/translated/SEPT17/vietnamese/WEASELTX.pdf) as well.

A tree is an undirected graph in which each pair of vertices is connected to each other by exactly one path. Weasel has a tree with **N** nodes. The indexing of the nodes is 0-based and the tree is rooted at node 0. Every node **i** has an initial value **X0i**.

Every day **d > 0**, he performs the following operations, starting from the root:

- Weasel computes **Xdu** as the bitwise-xor sum of all the values **Xd − 1v** for a node **v** in **u**'s subtree.
- He recursively proceeds to perform the operation for every child of **u**.

For **Q** values of **Δ**, Weasel wants to compute **XΔ0**.

### Input

The first line of the input contains two integers **N** and **Q**.

Each of the following **N − 1** lines contains two integers, **u** and **v**, an edge in the tree.

On the following line there are **N** integers, representing the **X0** array.

Each of the next **Q** lines contains values for **Δ** as noted in the statement.

### Output

You should print **Q** lines, each containing **XΔ0**.

### Constraints

- **1** ≤ **N, Q** ≤ **2 \* 105**
- 0 ≤ **X0i** ≤ **1018** for every 0 ≤ **i** ≤ **N − 1**.
- 0 ≤ **Δ** ≤ **1018**
- 0 ≤ **u, v** ≤ **N − 1**

### Subtasks

- **Subtask 1** (20 points): **1** ≤ **N** ≤ **500** and **Δ** ≤ **500**
- **Subtask 2** (20 points): **1** ≤ **N** ≤ **1000** and **1** ≤ **N × Q** ≤ **106**
- **Subtask 3** (10 points): **1** ≤ **N** ≤ **5000**
- **Subtask 4** (50 points): original constraints

### Example

<pre><b>Input:</b>
4 3
0 1
1 2
0 3
1 5 8 7
1
2
3

<b>Output:</b>
11
9
3
</pre>### Explanation

Initially **X0 = \[1, 5, 8, 7\]**.

Weasel performs his operation on node 0: **X10** = **X00** xor **X01** xor **X02** xor **X03** = **1** xor **5** xor **8** xor **7** = **11**.

**X11** = **X01** xor **X02** = **5** xor **8** = **13**.

**X12** and **X13** remain equal to **X02**, respectively **X03**.
