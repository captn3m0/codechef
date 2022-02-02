---
languages_supported:
    - NA
title: MAXCROSS
category: NA
old_version: true
problem_code: MAXCROSS
tags:
    - NA
layout: problem
---
**The 'Clarification' in the problem statement has been updated on July 2nd at 6:15pm** 

On the matrix A sized n n, some cells were marked by crosses (X). For each cell (i,j) (with i the row index, j the column index), we define B(i,j) as the maximal number of continuous crosses going across the cell (i,j) in the same horizontal, vertical or diagonal; B(i,j)=0 if A(i,j) is empty ( '.' ). \[ Empty cells are marked by '.'\] .

Clarification:
 Continuous crosses going across cell (i,j) in horizontal direction = x1 + x2 - 1
 where x1 = highest possible x such that
 j + x - 1&lt;= n and A(i, j ... j + x - 1) are all 'X'
 and x2 = highest possible x such that
 j - x + 1 &gt; 0 and A(i, j - x + 1...j) are all 'X'
 
 Similarily we can extend the definition for vertical and diagonal directions.

### Task

Given matrix A as input, calculate matrix B.

### Input

- The first line contains the integer n.
- Then follow n lines , each containing n characters. The j-th character of the i-th line represents the cell (i,j) of the matrix A, with A(i,j)='X' if it contains a cross, or A(i,j)='.' if it is empty.

### Output

Output n lines, each contains n integers, the j-th integer of the i-th line shows the value of B(i,j).
 ***(Each integer on a same line must be separated by exactly one space character)***

### Example

**Input:**

<pre>10<br></br>..X....XX.<br></br>XX.X..XX.X<br></br>.....XX..X<br></br>.XXX..X.X.<br></br>.....X..XX<br></br>....X....X<br></br>X.X....XX.<br></br>.X...X.X.X<br></br>X.X..X....<br></br>..XXXXX.XX<br></br>
</pre>
**Output:**

<pre>0 0 2 0 0 0 0 3 3 0 <br></br>2 2 0 2 0 0 3 3 0 2 <br></br>0 0 0 0 0 3 3 0 0 2 <br></br>0 3 3 3 0 0 3 0 2 0 <br></br>0 0 0 0 0 3 0 0 2 2 <br></br>0 0 0 0 3 0 0 0 0 3 <br></br>4 0 3 0 0 0 0 2 3 0 <br></br>0 4 0 0 0 3 0 3 0 2 <br></br>3 0 4 0 0 3 0 0 0 0 <br></br>0 0 5 5 5 5 5 0 2 2<br></br>
</pre>
### Limitations

0&lt;n 1 000
