---
languages_supported:
    - NA
title: GENIND
category: NA
old_version: true
problem_code: GENIND
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given a graph G on nodes V with undirected edges E, an independent set X is a subset of V such that no edge in E has both endpoints in X. Finding the size of the largest independent set in a graph is currently a very difficult problem.

Consider the following generalization of an independent set. A function f that maps each node v to a non-negative value f(v) is said to be a partially generalized independent set if, for any edge e = (u,v), we have f(u) + f(v) ≤ 1. Unfortunately, this doesn't provide a great generalization. Consider a graph G where every possible edge exists in E. The size of a maximum independent set is only 1 whereas assigning 1/2 to every value f(v) has the total fractional value of the f(v) values being |V|/2.

So, let's add one more constraint to strengthen the notion of a generalized independent set. A cycle in a graph is a sequence of k ≥ 2 distinct nodes v1, v2, ..., vk where there is an edge between vi and vi+1 for any 1 ≤ i < k as well as an edge between v1 and vk. Notice that cycles of length 2 (_i.e._ edges) are permitted by this definition.

If C is a cycle of G of length |C|, then no independent set can have more than floor(|C|/2) nodes from C. Given this, define a generalized independent set as a function f on nodes in V that satisfies the following conditions. For any cycle C = v1, v2, ..., v|C|, we have f(v1) + f(v2) + ... + f(v|C|) ≤ floor(|C|/2). Finally, for each node v we must have 0 ≤ f(v) ≤ 1.

Your task will be to determine if a given function f on the nodes of a graph is indeed a generalized independent set. If not, you must produce a cycle that is violated.

### Input

The first line of the input contains an integer T ≤ 30 indicating the number of test cases. Each test case begins with two integers n and m. Here, n is the number of nodes and m is the number of edges in the graph. Say the nodes of the graph are denoted by v0, v1, ..., vn-1. Following this is a line containing n floating point values. The i'th such value is the value of f(vi). Finally, m lines follow, each containing two distinct integers i,j between 0 and n-1 that indicate that there is an edge between vi and vj in the graph. No edge will be given more than once in the input.

Bounds: 1 ≤ n ≤ 500 and 0 ≤ m ≤ 2,000. The value of each f(vi) will be between 0 and 1 (inclusive) and will be presented with at most three decimals of precision.

### Output

The output for each test case consists of a single line. If the input function is a generalized independent set then the line consists simply of the text "Ok". Otherwise, you should output the text "Bad Cycle: " followed by a sequence of distinct integers between 0 and n-1 that forms a cycle C for which the sum of the f(v) values for nodes in C exceeds floor(|C|/2). Following this sequence is the single integer -1. These integers should be separated by a single space.

If there are multiple such cycles, then any will do. Also, the order in which the nodes of such a cycle are output does not matter beyond ensuring that consecutive nodes in the output are connected by an edge and that the first and last nodes are also connected by an edge.

### Example

```

<b>Input:</b>
3
4 4
0.5 0.5 0.5 0.5
0 1
1 2
2 3
3 0
6 7
0.5 0.5 0.334 0.5 0.333 0.334
0 1
0 2
1 3
2 3
1 4
2 5
4 5
5 5
1.0 0.0 0.667 0.5 0.0
0 1
1 2
2 3
3 4
4 1

<b>Output:</b>
Ok
Bad Cycle: 4 5 2 0 1 -1
Bad Cycle: 3 2 -1

```