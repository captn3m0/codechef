---
languages_supported:
    - NA
title: PRUNING
category: NA
old_version: true
problem_code: PRUNING
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

You have a tree (an acyclic, connected graph) with edge weights, but it is far too big. You are to prune the tree by deleting some edges so that the following property holds. For each connected component C of the pruned tree, there is some node rC such that for every node v in C, the total weight of the edges on the path between v and rC is at most some given value d.

You happen to like heavy trees so you want to delete the minimum possible total edge weight to satisfy this property.

### Input

The first line of each test case is an integer T ≤ 40 indicating the number of test cases to follow. The first line of each test case contains two integers n and d that indicate there are n nodes in the tree and d is as specified in the problem description. Suppose the nodes in the tree are indexed by integers between 0 and n-1. Then n-1 lines follow, each containing three integers u,v, and w. This indicates that there is an edge of weight w between nodes u and v. The input will be such that the graph is connected with no cycles. No edge will be given more than once and no edge in the input will be a loop (_i.e._ u ≠ v for each input edge).

Bounds: 1 ≤ n ≤ 100, 0 ≤ d ≤ 109, and, for each edge u,v,w in the input, 0 ≤ u < v ≤ n-1 and 1 ≤ w ≤ 107.

### Output

The output for each test case consists of a single line containing a single integer denoting the maximum total weight of edges that can remain after deleting some edges so that the remaining graph satisfies the property described in the problem description.

### Example

<pre>
<b>Input:</b>
3
5 10
0 1 10
1 2 9
1 3 10
3 4 9
10 1
0 1 1
0 2 1
1 3 1
1 4 1
2 5 1
2 6 1
2 7 1
6 8 1
6 9 1
7 2
0 1 1
0 2 2
1 3 1
1 4 2
2 5 2
2 6 7

<b>Output:</b>
29
7
7
</pre>