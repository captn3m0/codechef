---
category_name: hard
problem_code: QTREE
problem_name: 'Queries on tree again!'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: pieguy
date_added: 26-12-2012
tags:
    - hard
    - heavy
    - may13
    - segment
    - simple
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/QTREE'
time:
    view_start_date: 1368440849
    submit_start_date: 1368441000
    visible_start_date: 1368441000
    end_date: 1735669800
    current: 1493556808
layout: problem
---
All submissions for this problem are available.You are given a simple connected graph **G** with **N** vertices and **N** edges (a simple graph is an un-directed graph that has no loops and no more than one edge between any two different vertices).
It is obvious that the graph **G** contains exactly one cycle and you can assume that the length of this cycle is odd (there are odd number of vertices in this cycle).
The vertices are numbered from 1 to **N**. Each edge is assigned a corresponding integer weight.
Your mission is to stimulate two types of queries :

- Update query represented by **f u v**: change the sign of all the weights of the edges on the shortest path (you can see the definition of shortest path in this problem later on) from vertex **u** to vertex **v**.
- Find query represented by **? u v**: On the shortest path from vertex **u** to vertex **v**, find the (possibly empty) set of consecutive edges such that the sum of the weights is maximal. In other words, let's define the shortest path from **u** to **v** as **a\_1, a\_2, ..., a\_k** (where **a\_1** = **u** and **a\_k** = **v**). You have to find **a\_i** and **a\_j** such that **i** &lt;= **j** and the sum of the weights of the edges of the path **a\_i, a\_(i + 1), ..., a\_j** is as large as possible. You just have to find that sum.

The shortest path between two vertices **u** and **v** is the path connecting them with the minimal number of vertices. In this problem, it is obvious that there is only one shortest path between any pair of vertices of **G**.

### Input

The first line contains an integer **N**. Each of the next **N** lines represents an edge of the graph with three integers **u v c** which mean there is an edge connecting vertices **u** and **v** and it is has weight **c**.
The next line contains an integer **Q**, the number of queries. Each of the next **Q** lines represents a query in one of the two forms above.

### Output

For each **find** query, print the result of the query (the maximal sum) on a line.

### Constraints

- 1 ≤ **N** ≤ 100,000
- 1 ≤ **u**, **v** ≤ **N**
- -10,000 ≤ **c** ≤ 10,000
- 1 ≤ **Q** ≤ 100,000

### Example

<pre>
<b>Input:</b>
6
1 2 1
2 3 1
3 1 1
2 4 1
4 5 1
3 6 1
3
? 5 6
f 2 3
? 5 6

<b>Output:</b>
4
2
</pre>
### Explanation

The shortest path from 5 to 6 is 5, 4, 2, 3, 6. All the edges on this path have weight 1 so the answer to the first query is 4. After the second query, the weight of the edge (2, 3) is - 1. The edges on the path 5, 4, 2, 3, 6 have weights 1, 1, -1, 1 respectively. so the answer for the third query is 2.
