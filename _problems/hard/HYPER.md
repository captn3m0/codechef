---
languages_supported:
    - NA
title: HYPER
category: NA
old_version: true
problem_code: HYPER
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

A **hypergraph** is a generalization of a graph, where an edge can connect any number of vertices. A _k_-**uniform hypergraph** is a hypergraph such that all its hyperedges have size _k_. For more information, see [Wikipedia](http://en.wikipedia.org/wiki/Hypergraph). 

Let's call a particular hypergraph a **hypertree** if it is connected (that is, you can move from any vertex to any other vertex using only its hyperedges) and removing any of its hyperedges makes the hypergraph disconnected (note that this definition of hypertrees differs from the standard one). 

Given just one integer **N**, find the number of 3-uniform hypertrees on **N** vertices. Two 3-uniform hypertrees are considered different if a hyperedge (_u_, _v_, _w_) exists such that it is present in exactly one of these hypertrees (note that the order of vertices in the hyperedge doesn't matter, and neither does the order of hyperedges in the hypertree).

### Input

The first line of the input contains an integer **T** -- the number of test cases (at most 15). Then **T** lines follow, each contains an integer **N** (3 ≤ **N** ≤ 17).

**Important! Please include all code used in solving this problem in your solution.**

### Output

For each test case output one line containing the requested number. It's guaranteed that this number won't exceed 263-1.

### Examples

```

<b>Input:</b>
4
3
4
5
8

<b>Output:</b>
1
6
25
93268

<b>Explanation:</b>

```
There is just one 3-uniform hypertree on 3 vertices: {(1,2,3)}. There are six of them on 4 vertices: {(1,2,3), (1,2,4)}, {(1,2,3), (1,3,4)}, {(1,2,3), (2,3,4)}, {(1,2,4), (1,3,4)}, {(1,2,4), (2,3,4)}, {(1,3,4), (2,3,4)}. Two of the 25 possible hypertrees on 5 vertices are {(1,2,3), (3,4,5)} and {(1,2,3), (1,2,4), (1,2,5)}.