---
languages_supported:
    - NA
title: GRAPHCT
category: NA
old_version: true
problem_code: GRAPHCT
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

First for some definitions :

Let G = (V,E) be an undirected graph containing an edge e = (u,v) with u ≠ v. Let f be a function which maps every vertex in V\\{u,v} to itself, and otherwise, maps it to a new vertex w. The contraction of e results in a new graph G′ = (V′,E′), where V′ = (V\\{u,v})∪{w}, E′ = E\\{e}, and for every x ∈ V, x′ = f(x) ∈ V′ is incident to an edge e′ ∈ E′ if and only if, the corresponding edge, e ∈ E is incident to x in G.

An undirected graph H is called a minor of the graph G if H is isomorphic to a graph that can be obtained by zero or more edge contractions on a subgraph of G.

A graph is connected if there exists a path between any two vertices. A biconnected graph is one which remains connected even after the removal of any one vertex and all edges incident to it.

A simple graph is one which does not have more than one edge between any pair of vertex, nor does it have an edge from a vertex to itself.

You need to count how many simple biconnected graphs having n vertices and m edges exist such that they do not have a cycle of length 5 as a minor. Two graphs are considered distinct if there exist vertices having labels i and j which are adjacent in the first graph, but not in the second graph.

Input :

The first line contains the number of test cases T. Each of the next lines contains two integers n and m.

Output :

Output T lines, one corresponding to each test case. For a test case, output the number of graphs as described in the question. Output the answer modulo 1000000007.

```
Sample Input :
5
1 0
3 2
3 3
4 4
5 10


```
```
Sample Output :
1
0
1
3
0


```
```
Constraints :
1 <= T <= 2000
1 <= n <= 100
0 <= m <= 10000

```