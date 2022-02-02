---
languages_supported:
    - NA
title: RESTOCK
category: NA
old_version: true
problem_code: RESTOCK
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The chef has to replenish supplies in the kitchen. He divided the kitchen floor into a rectangular grid of cell with N rows and M columns. All coordinates in this problem are 0-indexed and in the form (row, column). The supplies will be delivered to the cell (R,C) and have to be moved to the storage, which is located in the cell (0,0). The chef will organize his employees so that they can pass individual items between them from the point of delivery to the storage. However, he has one additional request. The chef wants to see progress with every pass, which means that the Euclidean distance between the item and the storage has to decrease with every pass.

An employee assigned to the cell (Y1,X1) can pass an item to another empoyee in cell (Y2,X2) if |Y1-Y2| &lt;= D and |X1-X2| &lt;= D. Note that one person has to be assigned to cell (R,C) in any valid assignment. The chef assigned a wage to each cell to compensate for different working conditions. For example, standing next to an oven is not a very popular spot among the employees. The chef will take the position at the storage himself, therefore the wage for the cell (0,0) will be 0 in all cases. Of course, the chef wants to pay as little as possible. The cost of some assignement of employees to different cells is equal to the sum of wages associated with their cells. The chef can always find some new workforce, so the number of workers is not a restriction. Help him find the cost of the cheapest assignment.

### Input

The first line contains a single integer T, the number of test cases. The first line of each testcase contains the number of rows N and the number of columns M. Second line contains integers D, R and C. Following N lines with M integers describe the wages. j-th number in i-th line represents the wage wi-1,j-1 for the cell (i-1,j-1).

### Output

Output a line with a single integer, the cost of the cheapest assignment of workers to cells such that they can pass the items from the point of delivery to the storage.

### Constraints

- 1 &lt;= T &lt;= 10
- 1 &lt;= N, M &lt;= 500
- 1 &lt;= D &lt;= 500
- 0 &lt;= wi,j &lt;= 10000
- The sum of N\*M over all test cases in a single test file will not exceed 250000.

### Example

<pre>
<b>Input:</b>
2
1 5
2 0 4
0 1 5 1 4
5 6
2 4 3
0 7 8 5 9 1
1 6 8 4 6 2
5 4 2 5 0 3
5 2 0 6 8 8
3 5 3 3 8 4

<b>Output:</b>
6
4
</pre>