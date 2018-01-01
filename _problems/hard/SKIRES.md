---
languages_supported:
    - NA
title: SKIRES
category: NA
old_version: true
problem_code: SKIRES
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Ski season is in full swing and the Chef decided it's time to expand his business. He invested into a restaurant at the bottom of a ski slope. Things were going great until one of his employees got injured while skiing home from work. Chef would like to make sure this doesn't happen again. He wants to alter the surrounding landscape to prevent his employees from skiing to their homes in the nearby town. Flattening a large area is obviously out of the question and that's where you come in.

Chef was kind enough to model the surronding area as a grid with H rows and W columns. Area outside this grid is not suitable for skiing. You are given the elevation of each cell in this grid and the location of his restaurant (Rr,Cr) and the town (Rt,Ct). As long as there exists a non-increasing path from the restaurant to the town, the employees will not hesitate to ski home. A sequence of cells is called a path if every consecutive pair of cells shares a common edge. You are allowed to **increase** the elevation of any cell (except for the restaurant and town cell) by an integer amount. Find the minimum total number of units of elevation increase which allows Chef to prevent his employees from skiing home.

### Input

The first line contains a single integer T, the number of test cases. The first line of each testcase contains numbers H and W. Rr, Cr, Rt, Ct are given in the second line. Following lines describe the layout of the ski resort. The j-th number in the i-th line represents elevation Ei,j of cell (i,j). Top left corner of the grid has coordinates (1,1). All numbers in the input are integer.

### Output

For each test case, output minimum total elevation so that chef can achieve his goal or -1 if that is not possible.

### Constraints

- T <= 10
- 1 <= H,W <= 50
- 0 <= Ei,j <= 200 000

### Example

<pre>
<b>Input:</b>
2

4 2
1 1 3 2
10 11
6 6
4 4
3 4

1 5
1 2 1 3
3 4 2 5 5

<b>Output:</b>
4
-1

</pre>