---
languages_supported:
    - NA
title: WINDOW2
category: NA
old_version: true
problem_code: WINDOW2
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

After Chef successfully built a modern **(L, K)**-window on the attic wall he decided to expand the notion of the **(L, K)**-window in some other areas. Now he considers a rectangular grid that contains only zeroes and ones and has size **N x M**. He considers the **(L, K)**-window here as any submatrix of size **L x K** that contains only ones. Formally he defines **(L, K)**-window as any **(K+L)**-tuple **(R1, ..., RL, C1, ..., CK)** such that **1 &lt;= R1 &lt; ... &lt; RL &lt;= N**, **1 &lt;= C1 &lt; ... &lt; CK &lt;= M** and **A\[Ri\]\[Cj\]=1** for all **1 &lt;= i &lt;= L, 1&lt;= j &lt;= K**. Here **A\[r\]\[c\]** is the **c**-th element of the **r**-th row of considered rectangular grid. 

Why does Chef call some **(K+L)**-tuple of numbers by the window? Just mark all points **(Ri,Cj)** (**1 &lt;= i &lt;= L, 1&lt;= j &lt;= K**) on the plane and join by line segments all pairs of points that has equal abscises or ordinates and you will see that this picture is like a window. 

Now Chef considers some particular **N x M** grid and wants to calculate the total number of **(L, K)**-windows in this rectangular grid. Help him. Since this number can be very large calculate the result modulo **1000000080798150871**.

### Input

 The first line contains a single positive integer **T &lt;= 100**, the number of test cases. **T** test cases follow. The first line of each test case contains four positive integers **N, M, L, K**, where **L, N &lt;= 1000, K, M &lt;=3**. Next **N** lines describe the rectangular grid considered by Chef. Each of these lines contains **M** symbols. Every symbol is either one or zero.

### Output

 For each test case, output a single line containing the total number of **(L, K)**-windows for the given grid modulo **1000000080798150871**.

### Example

<pre>
<b>Input:</b>
2
3 2 2 1
11
01
10
3 3 2 2
111
101
111

<b>Output:</b>
2
5
</pre>
### Explanation

In the first case it is just the number of pairs of cells with value 1 that have the same column number. 

In the second case we have the following **(2, 2)**-windows: 
(First row, Second row, First column, Third column) 
(First row, Third row, First column, Second column) 
(First row, Third row, First column, Third column) 
(First row, Third row, Second column, Third column) 
(Second row, Third row, First column, Third column)
