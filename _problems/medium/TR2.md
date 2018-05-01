---
languages_supported:
    - NA
title: TR2
category: NA
old_version: true
problem_code: TR2
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

**NOTE: The problem statement has been updated on June 3rd 2010 at 10:00pm Indian Standard Time.** 
Byteland is a kingdom of islands. Alice has N maps of the different islands constituting Byteland. Map of each island consists of cities, connected by roads. Being Byteland, the road layout of each island has a binary tree structure. Each island has a capital, which is the root of the binary tree of its map.

Alice is bored and plays the following game:
 She chooses k out of these N maps and places a robot on the capital city of each map. Every robot is controlled by a common control string. If the present character of the control string is L(R), then all the robots move to the left(right) subtree on their map. All the robots follow the same control string and move on their respective maps.

A control string is valid with respect to a given map if it corresponds to a valid path on that map. A control string is considered valid for a given set of k maps if it is valid for each of the k chosen maps.

For example in a complete binary tree of 3 nodes, control strings "L" and "R" are valid and "LL" is an example of an invalid control string.

Alice is interested in knowing the longest control string which is valid for at least k maps, for each value of k. Can you find this for her?

### Input

First line of input contains an integer t (t<=5), the number of test cases. Each test case starts with an integer M (1<=M<=100), the number of maps. Then M maps description follow.
 The ith map description starts with an integer N (2<=N<=1000), the number of cities on the island. Each of the following N-1 lines contain two space separated integers u c v (1<=u,v<=N , c=L or R) which means a road between city u and city v on the ith island and if c is L(R) then v is in the left(right) subtree of u. The capital city of each island is the city with number 1.

### Output

For each test case output M space separated integers, where the ith integer denotes the length of the longest valid control string she can obtain assuming she can choose i maps.

### Example

<pre><b>Input:</b>
2
3
5
1 L 2
1 R 3
3 L 4
3 R 5
4
1 R 2
1 L 3
2 L 4
3
1 L 2
1 R 3
2
5
1 L 2
2 L 3
3 L 4
4 L 5
6
1 L 2
2 R 3
3 L 4
4 R 5
5 L 6


<b>Output:</b>
2 2 1
5 1
</pre>