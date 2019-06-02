---
category_name: hard
problem_code: TAPAIR
problem_name: 'Counting The Important Pairs'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: null
date_added: 15-05-2013
tags:
    - dfs
    - hard
    - jan14
    - tuananh93
    - xor
editorial_url: 'http://discuss.codechef.com/problems/TAPAIR'
time:
    view_start_date: 1389605400
    submit_start_date: 1389605400
    visible_start_date: 1389605400
    end_date: 1735669800
    current: 1493556996
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JAN14/mandarin/TAPAIR.pdf) and [Russian](http://www.codechef.com/download/translated/JAN14/russian/TAPAIR1.pdf).

*\[**a simple graph** is an undirected graph that has no loops (edges connected at both ends to the same vertex) and no more than one edge between any two different vertices.\]*

 -Retrieved from http://en.wikipedia.org/wiki/Graph\_(mathematics)

The road system at Byteland can be seen as a simple graph in which the vertices represented by the cities and the edges represented by the roads connected two different cities. Besides, the road system is connected it means people can travel between any two cities. It is decided by the president that two roads will be concurrently upgraded in the next month. Since it may take a couple of weeks to get the work done, two roads should be chosen so that the connectivity of the system is hold during the up-gradation process. More clearly, people still can go between any pair of cities without using that two roads.

Which roads should be upgraded is not decided yet. There may be no way to choose such a two roads or may be many ways. Your mission is counting how many pair of roads **cannot** be chosen. Notice that two roads must be different and we consider only un-ordered pair ((1, 2) is the same as (2,1)).

### Input

The first line of the input contains two integers **N M** which are the number of cities and roads respectively. Each line in the next  **M**  contains two integers **u v** which means there is a road connects the **u**th city to the **v**th city.

### Output

 Output a single line contains the number of way that two roads **cannot** be chosen for upgradation.

### Constraints

- **1** ≤ **N** ≤ **100,000**
- **1** ≤ **M** ≤ **300,000**
- **1** ≤ **u**, **v** ≤ **N**
- **u** ≠ **v**
- There is at most one road between any two cities.

### Example

<pre><b>Input:</b>
5 6
1 2
2 3
1 3
3 4
4 5
3 5

<b>Output:</b>
6
</pre>
### Explanation

There are 5 cities and 6 roads (numbered from 1 to 6). There are 6 pairs of roads cannot be chosen which are
(1, 2), (1, 3), (2, 3), (4, 5), (4, 6) and (5, 6).
