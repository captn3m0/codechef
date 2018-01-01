---
languages_supported:
    - NA
title: RECTCNT
category: NA
old_version: true
problem_code: RECTCNT
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given N separate integer points on the Cartesian plane satisfying: there is no any three of them sharing a same X-coordinate. Your task is to count the number of rectangles (whose edges parrallel to the axes) created from any four of given points.

### Input

There are several test cases (ten at most), each formed as follows:

- The first line contains a positive integer N (N ≤ 105).
- N lines follow, each containing a pair of integers (each having an absolute value of 109 at most) describing coordinates of a given point.

The input is ended with N = 0. ### Output

For each test case, output on a line an integer which is the respective number of rectangles found.

### Example

<pre>
<b>Input:</b>
6
7 1
3 5
3 1
1 5
1 1
7 5
0

<b>Output:</b>
3

</pre>