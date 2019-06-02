---
category_name: easy
problem_code: CHEFCCYL
problem_name: 'Chef and Cycled Cycles'
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
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: alex_2oo8
date_added: 24-11-2015
tags:
    - berezin
    - medium
    - oct17
    - prefix
editorial_url: 'https://discuss.codechef.com/problems/CHEFCCYL'
time:
    view_start_date: 1508146200
    submit_start_date: 1508146200
    visible_start_date: 1508146200
    end_date: 1735669800
    current: 1514816824
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/OCT17/mandarin/CHEFCCYL.pdf), [russian](http://www.codechef.com/download/translated/OCT17/russian/CHEFCCYL.pdf) and [vietnamese](http://www.codechef.com/download/translated/OCT17/vietnamese/CHEFCCYL.pdf) as well.

Chef recently learned about finding shortest paths in a bidirectional graph. He has following types of graphs with him and would like to find shortest paths between some given pair of vertices.

There are **N** cycles in the graph. Let us enumerate them cycle number **1** to **N**. The **i**-th cycle contains **Ai** nodes enumerated from **1** to **Ai**.

The nodes of a single cycle are connected to each other in cyclic fashion, i.e. the 1st node is connected to 2nd, 2nd to 3rd, and so on till the last node is connected to the 1st node. All of these edges are weighed.

The cycles are also connected to each other via an edge in a similar cyclic order. The **i**-th cycle is connected to **i % N + 1**-th cycle via an edge. This edge is between some vertex **v1** of **i**-th cycle and vertex **v2** of **i % N + 1**-th cycle and is a weighted edge.

You are given **Q** queries, each containing four integers **v1**, **c1**, **v2**, **c2**. You have to find the weight of shortest path between the **v1**-th vertex of **c1**-th cycle, and **v2**-th vertex of **c2**-th cycle.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

First line of each test case contains two space separated integers **N, Q** denoting the number of cycles in the graph and the number of queries.

Next **N** lines contain the description of the cycles.

The **i**-th line describes **i**-th cycle. First it contains an integer **Ai** denoting the number nodes in the **i**-th cycle followed by **Ai** integers denoting the weight of edges of the cycle. First integer denotes the weight of edge from node **1** to node **2**, from **2** to **3** and so on. Last integer denotes the weight of the edge from node **Ai** to node **1**.

Next **N** lines describe connections between adjacent cycles. The **i**-th line contains three space separated integers **v1**, **v2**, **w** denoting that there is an edge of weight **w** between the **v1**-th node of **i**-th cycle and **v2**-th node of the **i % N + 1**-th cycle.

Next **Q** lines describe the queries. Each query is given by four space separated integers **v1**, **c1**, **v2**, **c2**

### Output

For each query, output a single integer corresponding to the total weight of the shortest path.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N, Q** ≤ **105**
- **1** ≤ **Ai** ≤ **105**
- **1** ≤ **A1** + **A2** + ... + **AN** ≤ **105**
- **1** ≤ **weight of edges** ≤ **103**
- For each query, **c1** != **c2**

### Subtasks

- **Subtask #1 (10 points)**: 1 ≤ **A1** + **A2** + ... + **AN** ≤ **103**, **1** ≤ **Q** ≤ **103**.
- **Subtask #2 (15 points)**: All the edges are of weight = 1.
- **Subtask #3 (20 points)**: **c1** = 1 for all the queries.
- **Subtask #4 (55 points)**: **Original constraints**

### Example

<pre><b>Input:</b>
1
3 3
3 1 2 2
2 1 2
3 1 4 1
2 1 2
2 1 5
3 1 3
2 1 1 2
1 1 1 2
3 1 3 3

<b>Output:</b>
2
3
5
</pre>
### Explanation

**Example case 1.**

Here is the description of the graph.

There are **3** cycles.

<pre>
Cycle <b>1</b>: <b>3</b> nodes. Edges: <b>(1, 2) = 1</b>, <b>(2, 3) = 2</b>, (3, 1) = 2.
Cycle <b>2</b>: <b>2</b> nodes. Edges: <b>(1, 2) = 1</b>, <b>(2, 1) = 2</b>.
Cycle <b>3</b>: <b>3</b> nodes. Edges: <b>(1, 2) = 1</b>, <b>(2, 3) = 4</b>, (3, 1) = 1.
</pre>
Connections between adjacent cycles:

<pre>
Cycle <b>1</b> node <b>2</b> is connected to Cycle <b>2</b> node <b>1</b> with edge of weight <b>2</b>. 
Cycle <b>2</b> node <b>2</b> is connected to Cycle <b>3</b> node <b>1</b> with edge of weight <b>5</b>.
Cycle <b>3</b> node <b>3</b> is connected to Cycle <b>1</b> node <b>1</b> with edge of weight <b>3</b>.
</pre>
**Queries**

Best path from node **2** cycle **1** to node **1** cycle **2** is of the cost 2.

Best path from node **1** cycle **1** to node **1** cycle **2** is: edge **(1, 2)** of cycle **1** + edge **(2, 1)** between cycles **1** and **2**.

Best path from node **3** cycle **1** to node **3** cycle **3** is: edge **(3,1)** of cycle **1** + edge **(3, 1)** between cycles **3** and **1**.
