---
category_name: hard
problem_code: GERALD07
problem_name: 'Chef and Graph Queries'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: gerald
problem_tester: null
date_added: 9-02-2014
tags:
    - decomposition
    - gerald
    - link
    - march14
    - medium
editorial_url: 'http://discuss.codechef.com/problems/GERALD07'
time:
    view_start_date: 1395135000
    submit_start_date: 1395135000
    visible_start_date: 1395135000
    end_date: 1735669800
    current: 1493556718
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH14/mandarin/GERALD07.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH14/russian/GERALD07_new.pdf).

### Problem Statement

Chef has a undirected graph **G**. This graph consists of **N** vertices and **M** edges. Each vertex of the graph has an unique index from **1** to **N**, also each edge of the graph has an unique index from **1** to **M**.

Also Chef has **Q** pairs of integers: **Li**, **Ri** (**1** ≤ **Li** ≤ **Ri** ≤ **M**). For each pair **Li**, **Ri**, Chef wants to know: how many connected components will contain graph **G** if Chef erase all the edges from the graph, except the edges with indies **X**, where **Li** ≤ **X** ≤ **Ri**. Please, help Chef with these queries.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
The first line of each test case contains three integers **N**, **M**, **Q**. Each of the next **M** lines contains a pair of integers **Vi**, **Ui** - the current edge of graph **G**. Each of the next **Q** lines contains a pair of integers **Li**, **Ri** - the current query.

### Output

For each query of each test case print the required number of connected components.

### Constraints

- **1** ≤ **T** ≤ **1000**.
- **1** ≤ **N**, **M**, **Q** ≤ **200000**.
- **1** ≤ **Ui**, **Vi** ≤ **N**.
- **1** ≤ **Li** ≤ **Ri** ≤ **M**.
- Sum of all values of **N** for test cases is not greater than **200000**. Sum of all values of **M** for test cases is not greater than **200000**. Sum of all values of **Q** for test cases is not greater than **200000**.
- Graph **G** can contain self-loops and multiple edges.

### Example

<pre><b>Input:</b>
2
3 5 4
1 3
1 2
2 1
3 2
2 2
2 3
1 5
5 5
1 2
1 1 1
1 1
1 1
<b>Output:</b>
2
1
3
1
1

</pre>