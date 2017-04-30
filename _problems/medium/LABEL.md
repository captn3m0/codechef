---
category_name: medium
problem_code: LABEL
problem_name: 'Tree Labelling'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: ma5termind
problem_tester: xcwgf666
date_added: 9-04-2016
tags:
    - dynamic
    - implementation
    - ltime35
    - ma5termind
    - medium
    - memoization
editorial_url: 'http://discuss.codechef.com/problems/LABEL'
time:
    view_start_date: 1462036200
    submit_start_date: 1462036200
    visible_start_date: 1462036200
    end_date: 1735669800
    current: 1493557732
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME35/mandarin/LABEL.pdf), [Russian](http://www.codechef.com/download/translated/LTIME35/russian/LABEL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME35/vietnamese/LABEL.pdf) as well.

Chef likes to play with trees a lot, so his best friend Smurf has given him a tree **T** consisting of **N** nodes numbered from **1** to **N**.

Smurf asked him to count the number of ways to assign an integer in the range **\[1, M\]** to each of the nodes of the tree such that the absolute difference between the integers assigned to any pair of adjacent nodes is greater or equal than **K** (i. e **≥ K**). Since this number can be huge, Chef only needs to find it modulo **109 + 7 (1000000007)**

Of course this task is tough for our little chef and he cannot solve it without your help. Can you help him?

### Input

The first line of input contains a single integer **t** denoting the number of test cases.

The first line of each test case contains three space separated integers denoting **N**, **M** and **K**, denoting the number of nodes in the tree and the values of **M** and **K** respectively.

The following **(N-1)** lines of each test case contain two space separated integers **u** and **v** denoting that there is an edge between the nodes **u** and **v**.

### Output

For each test case, print the answer in a separate line.

### Constraints

**1. 1 ≤ T ≤ 50** 
**1. 1 ≤ N ≤ 100** 
**1. 0 ≤ K ≤ 100** 
**1. 1 ≤ M ≤ 109** 
### Subtasks

- Subtask 1 (20 pts) : **1 ≤ M ≤ 102**
- Subtask 2 (30 pts) : **1 ≤ M ≤ 104**
- Subtask 3 (50 pts) : **1 ≤ M ≤ 109**

### Example

```

<b>Input</b>
<tt>3
2 2 0
1 2
3 3 2
1 3
1 2
3 3 1
1 2
2 3</tt>

<b>Output</b>
<tt>4
2
12</tt>

```
### Explanation

![](https://s3.amazonaws.com/hr-challenge-images/15909/1461164061-a8af760fd8-C.png "C.png")