---
category_name: medium
problem_code: COOK82D
problem_name: 'Nasty Queries'
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
problem_author: deadwing97
problem_tester: kingofnumbers
date_added: 20-05-2017
tags:
    - cook82
    - deadwing97
    - euler
    - hashing
    - medium
time:
    view_start_date: 1495391400
    submit_start_date: 1495391400
    visible_start_date: 1495391400
    end_date: 1735669800
    current: 1497284426
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK82/mandarin/COOK82D.pdf), [russian](http://www.codechef.com/download/translated/COOK82/russian/COOK82D.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK82/vietnamese/COOK82D.pdf) as well.

Hussain was doing research on graph theory, and he came up with a new family of graphs called Deadwing Graphs.

Consider an undirected graph. We can partition the vertices uniquely into [connected components](https://en.wikipedia.org/wiki/Connected_component_(graph_theory)), such that two vertices belong to the same connected component if and only if they are connected by a sequence of edges.

We call a graph Good, if for every vertex, there is a [walk](http://mathworld.wolfram.com/Walk.html) starting from that vertex, and ending at the vertex, while using every edge exactly once. In other words, for every vertex, you should be able to start from that vertex, and following the edges, end at the same vertex, and have traversed every edge exactly once.

A Deadwing Graph is an undirected graph, such that if the graph is decomposed into its connected components, then each connected component is Good.

Hussain has an undirected graph with **N** nodes, and a list of **M** edges: **E1, E2, .., EM**. The nodes are numbered from 1 to **N**. He wants you to answer **Q** queries. Each query is denoted by 2 integers **l, r**: Consider all the edges between the **l-th** and the **r-th** edge. You must tell if the graph formed by these edges forms a Deadwing graph or not. That is, consider a new graph, which has the same set of vertices as the original graph, but the edges are only **El, El+1, .., Er**. You need to check whether this graph is a Deadwing Graph or not.

### Input

- The first line contains 2 integers: **N, M**, the number of vertices in the graph and the number of edges in the original graph.
- The i-th of the next **M** lines contains 2 integers: **ui , vi**. This denotes that there is an edge between **ui** and **vi**.
- The next line contains an integer **Q** denoting the number of queries.
- The next **Q** lines each contains 2 integers: **l , r**

### Output

Output **Q** lines, the i-th of which should contain a single word: "Yes" if the graph formed by the edges in the i-th query is a Deadwing Graph. Otherwise output "No". (Without quotations).

### Constraints

- 1 ≤ **N** ≤ 105
- 1 ≤ **M , Q** ≤ 106
- 1 ≤ **ui, vi** ≤ N
- 1 ≤ **l** ≤ **r** ≤ **M**, in each query
- There can be more than one edge between same pair of nodes. But there is no edge between a node and itself. That is, **ui** ≠ **vi**.

### Example

<pre><b>Input:</b>
4 6
1 2
3 1
2 3
4 1
2 4
1 2
3
1 3
2 4
1 6

<b>Output:</b>
Yes
No
Yes
</pre>### Explanation

The given original graph is as follows:

![](https://codechef_shared.s3.amazonaws.com/download/upload/COOK82/COOK82D/image1.png)The first query corresponds to the graph with edges **E1, E2 and E3**:

![](https://codechef_shared.s3.amazonaws.com/download/upload/COOK82/COOK82D/image2.png)This has two connected components and both of them are Good. Hence this is a Deadwing Graph.

The second query corresponds to the graph with edges **E2, E3 and E4**:

![](https://codechef_shared.s3.amazonaws.com/download/upload/COOK82/COOK82D/image3.png)This has only one connected component, which is not Good. This is because there is no walk starting from node 2 (or any other node for that matter), which passes through each edge exactly once and comes back to node 2.Hence this is not a Deadwing Graph.

The third query corresponds to the entire original graph. It has only one component, and it is Good. For example, starting from node 1, we have this walk: **E2, E3, E1, E6, E5, E4**. Hence this is a Deadwing Graph.
