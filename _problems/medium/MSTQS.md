---
category_name: medium
problem_code: MSTQS
problem_name: 'MST Queries'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: pkacprzak
problem_tester: null
date_added: 29-12-2016
tags:
    - graph
    - kruskal
    - ltime43
    - medium
    - mst
    - pkacprzak
editorial_url: 'https://discuss.codechef.com/problems/MSTQS'
time:
    view_start_date: 1483203600
    submit_start_date: 1483203600
    visible_start_date: 1483203600
    end_date: 1735669800
    current: 1493557807
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME43/mandarin/MSTQS.pdf), [Russian](http://www.codechef.com/download/translated/LTIME43/russian/MSTQS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME43/vietnamese/MSTQS.pdf) as well.

For a given connected graph **G** with **N** vertices and **M** undirected weighted edges, the goal is to perform **Q** queries, each belonging to one of the below 3 types:

1. **AssignZero(u, v)** := Change the weight of edge between vertices **u** and **v** to zero. It is guaranteed there is an edge between vertex **u** and **v** in the graph **G**.
2. **AssignOriginal(u, v)** := Change the weight of edge between vertices **u** and **v** to its original weight.
3. **MstWeight()** := Returns the weight of [Minimal Spanning Tree](https://en.wikipedia.org/wiki/Minimum_spanning_tree) of **G**.

### Input

First line of the input contains three space separated integers **N**, **M** and **Q**, denoting the number of vertices in **G**, the number of edges in **G**, and the number of queries to perform, respectively.

Next **M** lines follow, each consisting of three space separated integers **u**, **v** and **w**, denoting that there is an edge between vertices **u** and **v** in **G** of weight **w**.

The **i**-th of the following **Q** lines corresponds to the **i**-th query. It starts with a single integer **qtype** denoting the type of the query. If **qtype = 1 or 2**, it is followed by two space separated integers **u**, **v** denoting the arguments of the query.

### Output

For each query of type 3, output an integer in a single line corresponding to the answer to this query.

### Constraints

- **1 ≤ v, u ≤ N**
- **v ≠ u**
- **1 ≤ w ≤ 109**
- **1 ≤ qtype ≤ 3**
- There are no multi-edges and no self loops in the graph **G**.
- For every query of types 1 and 2, it is guaranteed that there is an edge between vertices **u** and **v** in G.

### Subtasks

**Subtask #1: (20 points)**

- **2 ≤ N ≤ 200**
- **1 ≤ M ≤ 2000**
- **1 ≤ Q ≤ 2000**

**Subtask #2: (50 points)**

- **2 ≤ N ≤ 2000**
- **1 ≤ M ≤ 2\*105**
- **1 ≤ Q ≤ 2\*104**
- There is no query of type 2

**Subtask #3: (30 points)**

- The same as in subtask #2, but all query types are allowed

### Example

```
<b>Input:</b>
4 4 5
1 2 1
2 3 1
3 4 1
4 1 1
3 
1 1 2
3
2 1 2
3

<b>Output:</b>
3
2
3

```
### Explanation

The input graph has 4 vertices and 4 edges, it can be drawn like this:

```


4_____3
|           |
|           |
|_____ |
1         2


```
Initially, all edges have weight equal 1. There are 5 queries to handle.

In the first query, we are asked for the weight of Minimal Spanning Tree, which is 3 (taking any 3 edges produces such a tree).

After that, weight of edge between vertices 1 and 2 is changed to 0. Then we are asked again for the weight of Minimal Spanning Tree. It is now 2, because we can take edge from 1 to 2 and any 2 of the remaining edges.

Next, we restore the weight of edge between vertices 1 and 2, i.e. change it to original weight 1. Finally, we are again asked for the weight of Minimal Spanning Tree, which is again 3, because the underlying graph is the same as it was at the beginning.