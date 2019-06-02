---
languages_supported:
    - NA
title: LAMQUGAM
category: NA
old_version: true
problem_code: LAMQUGAM
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Code and Chef play a game on the set of all points with positive integer coordinates of the usual coordinate plane. Initially the lame queen stands in the point with coordinates **(x0, y0)** or shortly: in the point **(x0, y0)**. Players alternate moves. **Code moves first.** During each move the player can move the queen from the point **(x, y)** to the point **(x - a, y)**, **(x, y - a)** or **(x - a, y - a)** for some positive integer **a**, provided that the new point has positive coordinates. But since the queen is lame she possibly can't make all diagonal moves. Namely she can move from the point **(x, y)** to the point **(x - a, y - a)** only if **a** is divisible by **d**, where **d** is some positive integer that is called the queen lameness. So if **d = 2** the queen can move diagonally from the point **(x, y)** only to the points **(x - 2, y - 2), (x - 4, y - 4), (x - 6, y - 6)** and so on. However if **d = 1** then the queen becomes the usual chess queen.  **The first player who can't make a valid move loses the game.**  Both players play optimally in their respective moves. 

 After playing this game for some time Chef realizes that he loses almost always. Now he wants to know what is the probability that he wins if initial point **(x0, y0)** is chosen randomly from the rectangle **x1 <= x0 <= x2, y1 <= y0 <= y2**. But I should warn that he wants to know this for a large number of rectangles.

### Input

The first line contains two space separated positive integers **d** and **T**, the queen lameness and the number of rectangles for which Chef wants to know the answer. Each of the next **T** lines contains four space separated positive integers **x1, y1, x2, y2**  the coordinates of rectangle corners.

### Output

For each rectangle from the input file, output a single line containing the probability in the form of an irreducible fraction that Chef wins if the initial cell is chosen randomly from this rectangle.

### Constraints

 **1 <= d <= 20 
 1 <= T <= 100000 
 1 <= x1 <= x2 <= 200000 
 1 <= y1 <= y2 <= 200000**

### Example

<pre><b>Input:</b>
1 4
1 1 4 4
2 4 5 8
3 7 10 10
5 8 5 8

<b>Output:</b>
3/16
1/10
1/32
1/1
</pre>
### Explanation

For the first rectangle Chef wins in three cases out of 16. Namely when the starting point is **(1,1), (2,3)** or **(3,2)**.



The fourth rectangle is lucky. It contains only one point and this one is winning for Chef.
