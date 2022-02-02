---
languages_supported:
    - NA
title: SWARM
category: NA
old_version: true
problem_code: SWARM
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

There is a regular n-gon. Some points are marked on each of its sides. There are x1 point marked on the first side, x2 on the second, , xn on the nth. The marked points do not coincide with the vertices of the n-gon. You can choose no more than one of the marked points from each side and form a convex non-degenerate polygon by connecting all those points with lines. Now your task is to find the number of different k-gons that can be formed that way.

### Input

The first line of input file contains positive integer t the amount of test cases. Next t lines contain six integers each: n, k, a, b, c, m. Here n is the number of sides of the initial n-gon. The amount of marked points on the first side of this n-gon is x1 = a, the amount of the marked points on the following sides is xi = (b\*xi-1 + c) mod m, for i &gt; 1.

### Constraints

1 &lt;= t &lt;= 30
3 &lt;= n &lt;= 109
3 &lt;= k &lt;= 20
1 &lt;= b, c, m &lt;= 106
0 &lt;= a &lt; m

### Output

For each test case output the number of k-gons that can be formed modulo 1000000007.

### Example

<pre>
<b>Input:</b>
2
4 3 1 2 2 191
10 5 1 113 157 999991

<b>Output:</b>
1228
328836201


</pre>