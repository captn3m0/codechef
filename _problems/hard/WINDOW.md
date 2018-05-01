---
languages_supported:
    - NA
title: WINDOW
category: NA
old_version: true
problem_code: WINDOW
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef lives in a big house. Almost all is perfect in it except for one thing. Chef has an attic, but there is no window in it. Now, he wants to build a window there. 

The attic wall has the form of a right triangle. We can imagine it as a triangle on a coordinate plane with vertices **(0; 0), (N; 0), (N; N \* A / B)**, where **N, A, B** are some positive integers. 

As a modern guy Chef want to build a modern **(L, K)**-window on the attic wall. A modern **(L, K)**-window is made up of **L+1** vertical lines and **K+1** horizontal lines such that all their intersections lie on the attic wall. Here **L, K** are positive integers. 

Formally he can choose **L+1** integers **0 <= x\[0\] < x\[1\] < ... < x\[L\] <= N** and **K+1** integers **0 <= y\[0\] < y\[1\] < ... < y\[K\] <= N\*A/B** such that all points **(x\[i\], y\[j\])** lie on the wall. Then, rectangular grid with all these points as nodes is required window. 

Chef is interested in knowing how many ways he can choose the window. But since this number can be very large he wants to find it modulo **900000011**. Help him.

### Input

 The first line contains a single positive integer **T <= 50**, the number of test cases. **T** test cases follow. The only line of each test case contains five positive integers **N, A, B, K, L**, where **N, A, B <= 10^18** and **K, L <= 10**.

### Output

 For each test case, output a single line containing the number of ways to choose a window modulo **900000011**.

### Example

<pre>
<b>Input:</b>
3
4 2 3 1 1
4 3 2 2 2
1001 101 97 3 2

<b>Output:</b>
5
4
579415965
</pre>### Explanation

In the first case we need calculate the number of rectangles which lie in triangle with vertices **(0; 0), (4; 0), (4; 8/3)**. There exist 5 such rectangles. Among them 3 have size **1 x 1**. One has size **2 x 1** and one have size **1 x 2**. 

In the second case we have two rectangles **2 x 2** and one rectangle **2 x 3** where we can choose middle horizontal segment in two ways. So we have in total 4 possible choices.
