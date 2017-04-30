---
category_name: medium
problem_code: SEATR
problem_name: 'Sereja and Tree'
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
max_timelimit: '10'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: iscsi
date_added: 6-11-2015
tags:
    - cook64
    - dynamic
    - hard
    - mathematics
    - memoization
    - sereja
    - tree
editorial_url: 'http://discuss.codechef.com/problems/SEATR'
time:
    view_start_date: 1448217000
    submit_start_date: 1448217000
    visible_start_date: 1448217000
    end_date: 1735669800
    current: 1493557974
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK64/mandarin/SEATR.pdf) and [Russian](http://www.codechef.com/download/translated/COOK64/russian/SEATR.pdf).

Sereja likes to hang around trees. A tree is an undirected graph on **N** vertices with **N-1** edges and no cycles. Sereja has his own peculiar way of comparing two trees. To describe it, let's start with the way Sereja stores a tree. For every tree, Sereja has a value **V** — the root of the tree, and for every vertex **i**, he has an ordered list **Q\[i\]** with **L\[i\]** elements — **Q\[i\]\[1\], Q\[i\]\[2\], ..., Q\[i\]\[L\[i\]\]** which are children of the vertex **i**. Sereja assumes two trees to be equal if their roots are the same and for every **i**, the ordered list **Q\[i\]** is the same in both the trees that Sereja compares.

So if Sereja has tree#1 given as **\[V=1, Q\[1\]=\[2, 3\], Q\[2\]=\[\], Q\[3\]=\[\]\]** and tree#2 given as **\[V=1, Q\[1\]=\[3, 2\], Q\[2\]=\[\], Q\[3\]=\[\]\]**, they will be considered different because **Q\[1\]** in the first tree is not equal to **Q\[1\]** in the second tree.

For any vertex **i**, Sereja calls number of vertices adjacent to it as **E\[i\]**.

Given an array **C** of **N** elements, Let **f(C)** be the number of different trees (in Sereja's representation) such that there exists a permutation **P\[1\], P\[2\], ... , P\[N\]** so that **E\[P\[1\]\]=C\[1\], E\[P\[2\]\]= C\[2\], ... , E\[P\[N\]\]=C\[N\]**.

Sereja gives you the array **C**. You have to compute the number **f(C)** modulo **1000000007 (109+7)**.

### Input

The first line of input contains the integer **N**. Next line contains **N** integers **C\[1\], C\[2\], ..., C\[N\]**. ### Output

Output answer in single line. ### Constraints

- **1** ≤ **N** ≤  **80**
- ≤ **C\[i\]** ≤  **80**

### Example

```
<b>Input:</b>
4
1 1 2 2

<b>Output:</b>
72

<b>Input:</b>
5
3 1 1 1 2

<b>Output:</b>
960

<b>Input:</b>
3
2 2 2

<b>Output:</b>
0

```