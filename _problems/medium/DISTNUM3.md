---
category_name: medium
problem_code: DISTNUM3
problem_name: 'Primitive Queries'
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
max_timelimit: '2 - 6'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 24-05-2016
tags:
    - mgch
time:
    view_start_date: 1487496600
    submit_start_date: 1487496600
    visible_start_date: 1487496600
    end_date: 1735669800
    current: 1493557918
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB17/mandarin/DISTNUM3.pdf), [Russian](http://www.codechef.com/download/translated/FEB17/russian/DISTNUM3.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB17/vietnamese/DISTNUM3.pdf) as well.

Given a tree **T** consisting of **N** nodes and **Q** queries on it. Each node **v** have some value **Cv** assigned to it. The queries can be of two types:

- **1 u v** - find number of distinct numbers on path between **u** and **v**
- **2 v y** - assign the value **y** to the node with index **v**.


All the indices in the queries are 1-based.

### Input

The first line of input contains two integers **N** and **Q** denoting the number of elements in **T**, and the number of queries to be executed.

The second line of input contains **N** integers denoting the assigned values **C** to **T**.

Each of the next **N - 1** lines contains two integers**u** and **v** nodes which connected by edge.

Each of the next **Q** lines contains one query. All the numbers in input are integers.

### Output

For each query of **type 1**, output the answer to the query in a single line.

### Constraints

- **1** ≤ **N, Q** ≤ **105**
- ≤ **C**i, **y** ≤ **109**
- **1** ≤ **u, v**  ≤ **N**

### Subtasks

- **Subtask 1:** **Q**x**N** ≤ 2\*107, **Points - 23, TL = 2 sec**
- **Subtask 2:** Original constraints. **Points - 77, TL = 6 sec**

### Example

```
<b>Input:</b>
6 7
1 2 3 4 5 6
1 2
1 3
2 4
2 5
3 6
1 5 6
2 5 6
1 1 5
1 5 6
2 1 6
1 5 6
1 2 6

<b>Output:</b>
5
3
4
3
3

```