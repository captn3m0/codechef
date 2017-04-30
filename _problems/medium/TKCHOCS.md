---
languages_supported:
    - NA
title: TKCHOCS
category: NA
old_version: true
problem_code: TKCHOCS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Did you know that chocolate chip cookie was invented by accident ? They even declared May 15 as National Chocolate Chip day :). Po and Mantis love choco chips and they want to collect them on the board. The board is in the shape of a right-angled triangle having **N** rows, with i cells in the ith row ( 1-based indices, as shown below for N=4 ). Cell (i,j) refers to the cell in jth column in the ith row.

Po starts from the top-most cell (1,1) and from a cell (i,j) Po can move to any of the cells (i+1,j-1), (i+1,j) or (i+1,j+1) in one step, if it exists. Mantis starts from the right-most cell (N,N) and from a cell (i,j) Mantis can move to any of the cells (i-1,j-1), (i,j-1) or (i+1,j-1) in one step, if it exists. When Po or Mantis are in a cell, they can collect all the choco chips in it. They both want to reach the bottom-left cell (N,1) after collecting as many choco chips as possible. Find the maximum number of choco chips they can collect i.e., maximize the sum of chips collected by each of them.

12341_Po_
(1,1)2(2,1)(2,2)3(3,1)(3,2)(3,3)4(4,1)
_Exit_(4,2)(4,3)(4,4)
_Mantis_### Input

First line contains an integer T (number of test cases, around 10 ). T cases follow. Each case starts with a line having an integer N ( 2 <= N <= 500 ). N lines follow with ith line having i non-negative integers from range \[0 - 1,000,000\], number of chips in each cell as explained above.

### Output

For each case, output the maximum number of choco chips Po and Mantis can collect, in a separate line.

### Example

```
<b>Input:</b>
2
2
1
1 1
3
1
2 5
1 3 1

<b>Output:</b>
3
11

```

**Explanation:**
 Case 2 : Po can visit (1,1) -> (2,2) -> (3,1) and Mantis can visit (3,3) -> (3,2) -> (3,1). Note that if both step in to a same cell, we must count the choco chips in it only once in the final answer. The cell (3,1) is reached by both, but the 1 choco chip in it must be added only once ( of course :) ).

_Warning : Large input / output. You may have to use efficient input / output methods if you are using languages with heavy input / output overload. Eg: Prefer using scanf/printf to cin/cout for C/C++_