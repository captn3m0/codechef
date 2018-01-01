---
category_name: medium
problem_code: CLOSEFAR
problem_name: 'So Close Yet So Far'
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
max_timelimit: '3.5'
source_sizelimit: '50000'
problem_author: animesh_f
problem_tester: pushkarmishra
date_added: 29-07-2016
tags:
    - animesh_f
    - data
    - ltime38
    - lunchtime
    - mo
    - optimization
editorial_url: 'http://discuss.codechef.com/problems/CLOSEFAR'
time:
    view_start_date: 1469901600
    submit_start_date: 1469901600
    visible_start_date: 1469901600
    end_date: 1735669800
    current: 1493557581
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME38/mandarin/CLOSEFAR.pdf), [Russian](http://www.codechef.com/download/translated/LTIME38/russian/CLOSEFAR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME38/vietnamese/CLOSEFAR.pdf) as well.

![](https://codechef_shared.s3.amazonaws.com/upfiles/5cm.jpg)Takaki Tono is a Computer Programmer in Tokyo. His boss at work shows him an online puzzle, which if solved would earn the solver a full expense paid trip to Los Angeles, California. Takaki really wants to solve this, as the love of his life, Akari, lives in Los Angeles and he hasn't met her since four years. Upon reading the puzzle he realizes that it is a query based problem. The problem is as follows :-

You are given a [Tree](https://en.wikipedia.org/wiki/Tree_(graph_theory)) **T** with **N** nodes numbered from **1** to **N**, with each node numbered **z** having a positive integer **Az** written on it. This integer denotes the value of the node. You have to process **Q** queries, of the following forms :-

**1)** **C x y** : Report the closest two values in the unique path from **x** to **y** i.e compute **min(|Ap - Aq|)** where **p** and **q** are two distinct nodes on the unique path from **x** to **y**.

**2)** **F x y** : Report the farthest two values in the unique path from **x** to **y** i.e. compute **max(|Ap - Aq|)** where **p** and **q** are two distinct nodes on the unique path from **x** to **y**.

It is also mentioned that **x** is not equal to **y** in any query and that no two nodes have the same value printed on them. Also, **|x|** denotes the absolute value of x.

Takaki is perplexed and requires your help to solve this task? Can you help him out?

### Input

The first line of the input contains an integer **N** denoting the number of nodes in tree **T**.

The second line comprises **N** space separated integers denoting **A**, where the **i**-th integer denotes **Ai**.

The next **N-1** lines each comprise two space separated integers **u** and **v**, denoting that node **u** and node **v**are connected by an edge. It is guaranteed that the final graph will be a connected tree.

The next line contains a single integer **Q**, denoting number of queries.

The next **Q** lines comprise the queries. Each such line is of the format **C x y** or **F x y**.

### Output

For each query, print the required output as mentioned above.

### Constraints

- **2** ≤ **N** ≤ **35000**
- **1** ≤ **Ai** ≤ **109**
- **1** ≤ **Q** ≤ **35000**
- **1** ≤ **u, v** ≤ **N**
- No two nodes have the same value printed on them.
- **x** is not equal to **y** in any query.

### Subtasks

### Subtasks

**Subtask #1 (15 points)**- **N, Q** **≤ 1000**

 **Subtask #2 (20 points)**- Only Type **F** queries are present.

 **Subtask #3 (65 points)**- Original constraints

### Example

<pre><b>Input:</b>
<tt>5
1 2 7 4 5
1 2
2 3
2 4
2 5
7
C 1 5
F 1 5
C 2 4
C 1 2
F 1 3
F 3 4
F 2 4</tt>

<b>Output:</b>
<tt>1
4
2
1
6
5
2</tt>

</pre>### Explanation
Given below is the tree corresponding to the sample input. Each node has two numbers written in it.

The first number represents the node index and the second number indicates node value.

![](https://codechef_shared.s3.amazonaws.com/upfiles/Tree.png)
