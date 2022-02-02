---
languages_supported:
    - NA
title: DOMNOCUT
category: NA
old_version: true
problem_code: DOMNOCUT
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Consider rectangular grid that composed of **N** rows and **M** columns. **Colored domino tiling** of the grid is some way to put lowercase English letter in each cell of the grid provided that each cell has exactly one neighbor with the same letter as in this cell. Two cells of the grid are neighbors if they share a common side. Each letter represents some color. **Cut** of colored domino tiling is vertical or horizontal line that divides the grid in two colored domino tilings. In other words this line should not pass between two adjacent cells with the same color. 

 For given **N** and **M** you should find the colored domino tiling that has the minimal possible number of cuts. If there are several solutions you should find among them the tiling that uses the minimal possible number of colors in it. If your tiling requires **K** colors then use first **K** lowercase letters of English alphabet as colors. If there are still several solutions then find any such tiling.

### Input

The first line contains a positive integer **T**, the number of test cases. In the following lines, **T** test cases follow. Every test case is a single line that contains two space separated positive integers, **N** and **M**, the sizes of the grid.

### Output

For each test case output in the first line the word **"IMPOSSIBLE"** without quotes if there are no tilings of the grid with **N** rows and **M** columns. Otherwise output in the first line two space separated integers, the minimal number of cuts and minimal number of colors in required tiling and then in the next **N** lines output the tiling itself. Each of these **N** lines must be composed of exactly **M** lowercase English letters.

### Constraints

1 &lt;= T &lt;= 3000 
 1 &lt;= N, M &lt;= 500 
 sum of N\*M in the file &lt;= 2,000,000

### Sample input

<pre>5
1 1
2 2
2 3
4 3
5 5

</pre>
### Sample output

<pre>IMPOSSIBLE
1 2
ab
ab
1 3
aab
ccb
1 3
aab
ccb
baa
bcc
IMPOSSIBLE
</pre>