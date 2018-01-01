---
languages_supported:
    - NA
title: CPOINT
category: NA
old_version: true
problem_code: CPOINT
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given a set of N integer points on the Cartesian plane. Your task is to find an integer point satisfying its sum of distances to N given points (**S**) is minimum.

### Input

There are several test cases (fifteen at most), each formed as follows:

- The first line contains a positive integer N (N ≤ 2,000).
- N lines follow, each containing a pair of integers (each having an absolute value of 109 at most) describing coordinates of a given point.

The input is ended with N = 0. ### Output

For each test case, output on a line a real number (with exactly 6 decimal places) which is the respective minimum sum **S** found.

### Example

<pre>
<b>Input:</b>
3
1 1
2 2
3 3
5
1 4
2 3
5 2
3 5
4 1
0

<b>Output:</b>
2.828427
9.640986

</pre>