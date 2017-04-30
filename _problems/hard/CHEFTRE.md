---
category_name: hard
problem_code: CHEFTRE
problem_name: 'Chef and Tree'
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
max_timelimit: '9'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: xcwgf666
date_added: 13-07-2016
tags:
    - aug16
    - decomposition
    - hard
    - heavy
    - mgch
    - segment
editorial_url: 'http://discuss.codechef.com/problems/CHEFTRE'
time:
    view_start_date: 1471253400
    submit_start_date: 1471253400
    visible_start_date: 1471253400
    end_date: 1735669800
    current: 1493556640
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG16/mandarin/CHEFTRE.pdf), [Russian](http://www.codechef.com/download/translated/AUG16/russian/CHEFTRE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG16/vietnamese/CHEFTRE.pdf) as well.

Chef likes trees a lot. Now he thinking about one interesting problem on trees. He finds the following problem interesting, and you?

Given a tree **T** and **Q** queries to it. Tree **T** has **N** nodes numbered from 1 to **N**. Each node **v** has a value **Av** associated with it. Queries can be one of three types.

- **1 u v** - reverse the values on the path between vertices **u** and **v**.
- **2 ul ur vl vr** - print "Yes" if all the values on the path from **ul** to **ur** are exactly same as that of path from **vl** to **vr**, and "No" otherwise. It is ensured that length of both the paths are same.
- **3 ul ur vl vr** - Copy all values on path from **ul** to **ur** and insert them into the path from **vl** to **vr**. It is ensured that length of both the paths are same.

### Input

The first line contains two integers **N** and **Q**.

The second line contains **N** space-separeted integers denoting **Av** - the values associated with nodes.

Next **N-1** lines contains two space-separeted integers **u**, **v** denoting the nodes connected by an edge.

Next **Q** lines contains queries as described above.

### Output

For each query of second type output your answer in a single line.

### Constraints

- **1** ≤ **N, Q** ≤ **105**
- **1** ≤ **Ai** ≤ **103**
- **1** ≤ **u, v, ul, ur, vl, vr** ≤ **N**

### Subtasks

- **Subtask 1: (21 pts)** **N, Q** ≤ 25000.
- **Subtask 2: (79 pts)** Original constraints.

### Example

```
<b>Input:</b>
<tt>5 8
1 2 3 4 5
1 2
1 3
2 4
2 5
2 1 3 1 2
3 1 1 2 2
3 1 1 3 3
2 1 3 1 2
1 2 5
2 1 3 1 2
1 2 5
2 1 3 1 2</tt>

<b>Output:</b>
<tt>No
Yes
No
Yes</tt>

```