---
languages_supported:
    - NA
title: BEARS
category: NA
old_version: true
problem_code: BEARS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

_It's a very funny thought that, if Bears were Bees,
They'd build their nests at the bottom of trees.
And that being so (if the Bees were Bears),
We shouldn't have to climb up all these stairs._ - - - - - -

Winnie-the-Pooh, a Complaining Song 

Have you ever thought, when given an undirected graph in some problem, that it would be easier to solve it if the graph's edges were actually its vertices and the graph's vertices were its edges? This problem is right about this -- unfortunately, not about bears and bees (but if you want, you may think of vertices as of bears and of edges as of bees (or even vice versa)).

Suppose you're given an undirected graph **G0** with **N** vertices and **M** edges. Let's perform a _simple transformation_ on graph **G0** to obtain graph **G1** with **M** vertices so that each vertex of **G1** corresponds to a unique edge of **G0** and a pair of vertices in **G1** is connected by a single edge if and only if the corresponding edges of **G0** share a common vertex. Similarly, let's perform a simple transformation on graph **G1** to obtain graph **G2**, and let's perform a simple transformation on graph **G2** to obtain graph **G3**.

All you have to do is to output the number of vertices and edges in **G3**.

### Input

The first line of the input file contains one integer **T** -- the number of test cases (no more than 10). Each test case is described by a line containing two integers **N** and **M** (1 ≤ **N**, **M** ≤ 1000) followed by **M** lines, each containing two integers between 1 and **N**, inclusive, separated by a single space and describing an edge of graph **G0**. It's guaranteed that each edge connects two distinct vertices and each pair of vertices is directly connected by at most one edge.

### Output

For each test case output just one line containing two integers -- the number of vertices and edges in **G3**.

### Example

```

<b>Input:</b>
2
3 3
1 2
1 3
2 3
4 4
1 2
1 3
2 3
3 4

<b>Output:</b>
3 3
8 18

<b>Explanation:</b>

```
In the first test case the given graph is a "triangle". It's easy to see that a simple transformation on a triangle results in the same triangle (as it contains three pairwise connected vertices and three pairwise "connected" edges).