---
category_name: easy
problem_code: ABROADS
problem_name: 'Ancient Berland Roads'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: pavel1996
date_added: 29-10-2015
tags:
    - bfs
    - dsu
    - ltime31
    - medium
    - set
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/ABROADS'
time:
    view_start_date: 1451205000
    submit_start_date: 1451205000
    visible_start_date: 1451205000
    end_date: 1735669800
    current: 1493558102
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME31/mandarin/ABROADS.pdf), [Russian](http://www.codechef.com/download/translated/LTIME31/russian/ABROADS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME31/vietnamese/ABROADS.pdf) as well.

In Ancient Berland, there were **N** towns, along with **M** bidirectional roads connecting them. With time, some roads became unusable, and nobody repaired them.

As a person who is fond of Ancient Berland history, you now want to undertake a small research study. For this purpose, you want to write a program capable of processing the following kinds of queries:

- D **K** : meaning that the road numbered **K** in the input became unusable. The road numbers are 1-indexed.
- P **A x** : meaning that the population of the **A**th town became **x**.

Let's call a subset of towns a **region** if it is possible to get from each town in the subset to every other town in the subset by the usable (those, which haven't already been destroyed) roads, possibly, via some intermediary cities of this subset. The **population** of the region is, then, the sum of populations of all the towns in the region.

You are given the initial road system, the initial population in each town and **Q** queries, each being one of two types above. Your task is to maintain the size of the most populated region after each query.

### Input

The first line of each test case contains three space-separated integers — **N**, **M**, and **Q** — denoting the number of cities, the number of roads, and the number of queries, respectively.

The following line contains **N** space-separated integers, the **i**th of which denotes the initial population of the **i**th city.

The **j**th of the following **M** lines contains a pair of space-separated integers — **Xj, Yj** — denoting that there is a bidirectional road connecting the cities numbered **Xj** and **Yj**.

Each of the following **Q** lines describes a query in one of the forms described earlier.

### Output

Output **Q** lines. On the **i**th line, output the size of the most populated region after performing **i** queries.

### Constraints

- **1** ≤ **Xj**, **Yj** ≤ **N**
- Roads' numbers are 1-indexed.
- There is no road that gets removed twice or more.
- **1** ≤ **Pi** ≤ **105**
- Subtask 1 (30 points) : **1** ≤ **N**, **M**, **Q** ≤ **103**
- Subtask 2 (70 points) : **1** ≤ **N**, **M**, **Q** ≤ **5 × 105**

### Example

<pre><b>Input:</b>
<tt>3 3 6
1 2 3
1 2
2 3
3 1
P 1 3
D 1
P 2 3
D 2
P 3 10
D 3</tt>

<b>Output:</b>
<tt>8
8
9
6
13
10</tt>
</pre>
### Explanation

- After the first query, the populations are **(3, 2, 3)** and the most populated region is **{1, 2, 3}**.
- After the second query the populations and the regions remain the same.
- After the third query the populations are **(3, 3, 3)** and the most populated region is again **{1, 2, 3}**.
- After the fourth query the populations remain the same, but we have two regions: **{1, 3}** and **{2}**. The most populated region is **{1, 3}**.
- After the fifth query the populations become equal to **(3, 3, 10)** respectively, and the most populated region is again **{1, 3}**.
- After the last query we have populations the same, but now every city forms it own separate region, and the most populated region is region **{3}**.
