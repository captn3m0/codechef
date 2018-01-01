---
category_name: medium
problem_code: SNGRAPH
problem_name: 'Snakes and Graph'
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
problem_author: admin2
problem_tester: kingofnumbers
date_added: 31-05-2017
tags:
    - admin2
    - dsu
    - graph
    - medium
    - snckpb17
editorial_url: 'https://discuss.codechef.com/problems/SNGRAPH'
time:
    view_start_date: 1496331000
    submit_start_date: 1496331000
    visible_start_date: 1496331000
    end_date: 1735669800
    current: 1497284446
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB17/mandarin/SNGRAPH.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB17/russian/SNGRAPH.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB17/vietnamese/SNGRAPH.pdf) as well.

There is a graph consisting of **n** nodes and **m** edges. There is a snake in each of its nodes. These snakes want to stage a coup against the mongoose who controls and puts restrictions on various aspects of their life. If there is an edge between some two nodes, then it means that the snakes in those nodes can talk with each other. The mongoose wants to protect himself against the coup. First, he calculates the degree of each node, i.e. the number of snakes a snake can talk to. He starts with an integer d = 0 and goes till d = **n** - 1. At each such d, he will select the set of nodes that have their degree (the originally computed degree, because the mongoose doesn't like to compute the degree each time) less than or equal to d. He will remove all the edges whose one or both the endpoints belong to this set. The snakes want to find, for each d, the minimum number of edges (or communication channels) that they should add so that each of the snakes is able to talk to every other snake either directly via an edge or via other snakes indirectly.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of the each test case contains two space separated integers: **n, m**.

Each of the next **m** lines contain two space separated integers **u**i, **v**i denoting that there is an edge between nodes **u**i and **v**i.

### Output

For each test case, output **n** space separated integers corresponding to answers for d = 0 to **n** - 1.

### Constraints

- 1 ≤ **T** ≤ 3
- 1 ≤ **n** ≤ 105
- 0 ≤ **m** ≤ min(n \* (n - 1) / 2, 2 \* 105)
- 1 ≤ **u**i, **v**i≤ n
- **u**i ≠ **v**i
- The graph doesn't have self loops and multi edges.

### Example

<pre>
<b>Input</b>
1
5 4
1 2
2 3
2 4
4 5

<b>Output</b>
0 3 4 4 4

</pre>### Explanation
**Example 1**. The degree of the nodes are \[1, 3, 1, 2, 1\].

For d = 0, all the vertices and edges are the present in the graph. The snakes can talk to each other already, and there is no need to add more edges. So, the answer is zero for d = 0.

For d = 1, the chosen vertex set will be \[1, 3, 5\]. The set of edges that will be removed will be (1, 2), (2, 3) and (4, 5). Only the edge (2, 4) is remaining. Now, in order to talk with each other, at least 3 edges must be added. One way of doing this is to add the three edges removed.

For d = 2, the chosen vertex set will be \[1, 3, 4, 5\]. All the edges of the graph will be removed. Now, in order to talk with each other, at least 4 edges must be added to the graph.

For d = 3 and d = 4 also, all the edges will be removed, and at least 4 edges must be added to the graph in order for all the snakes to talk with each other.
