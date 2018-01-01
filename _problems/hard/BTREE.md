---
category_name: hard
problem_code: BTREE
problem_name: 'Union on Tree'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: wjmzbmr
problem_tester: shangjingbo
date_added: 26-08-2014
tags:
    - hard
    - lca
    - oct14
    - wjmzbmr
editorial_url: 'http://discuss.codechef.com/problems/BTREE'
time:
    view_start_date: 1413192600
    submit_start_date: 1413192600
    visible_start_date: 1413192600
    end_date: 1735669800
    current: 1493556627
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT14/mandarin/BTREE.pdf) and [Russian](http://www.codechef.com/download/translated/OCT14/russian/BTREE.pdf).

There is a country whose road system is a tree, the nodes in the tree represent cities and the edge is the road between them, and each edge is of unit length. For safety, the government should put guards to protect all cities. But the government is in shortage of money. So they might not be able to protect all cites.

You're concerned about the country's safety, so you get the information of the guards. And you know that on the i-th day, there are k\[i\] guards on the road system, and j-th guard is on node a\[j\] and can protect every node whose distance to a\[j\] is not larger than r\[j\]. And you want to know how many nodes in the road system is protected by at least one guard.

### Input

The first line contains an integer n, denoting the number of the cities.

Then n-1 lines follows, each line contains 2 integers a and b, denoting there is an edge between city a and b (1-based index).

The next line contains an integer Q, denoting the number of the days.

Then Q lines's description follows, each contains an integer k, denoting the number of guards in that day, and k integer pairs a\[i\],r\[i\] denoting the guards's information, for simplicity, no node will have more than 1 guard.

### Constraints

- 1 ≤ n, Q ≤ 50000.
- The total number of guards in the queries ≤ 500000.

### Output

For each day, output the answer in one line.

### Example

`<strong>Input:</strong>````

20
1 2
1 3
1 4
4 5
4 6
2 7
4 8
5 9
7 10
2 11
9 12
8 13
1 14
12 15
9 16
7 17
12 18
1 19
6 20
5
2 9 3 12 5 
3 3 3 4 1 11 5 
3 3 3 10 4 19 2 
2 3 4 10 2 
5 5 4 11 2 16 2 18 1 19 2

<pre>`<strong>Output:</strong><pre>`
16
16
13
16
18

</pre>