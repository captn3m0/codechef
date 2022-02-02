---
languages_supported:
    - NA
title: ESCAPE
category: NA
old_version: true
problem_code: ESCAPE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Harry the Intrepid Archaeologist has discovered a wealth of treasure hidden deep in an ancient ruin. The room that houses this treasure is tiled in a grid-like fashion with columns at the grid points (the corners where tiles meet). So, the only way to traverse this room is by traveling from a tile to one of its four adjacent tiles.

Alas, when Harry reached the treasure a trap was sprung and some gaping holes opened at some of the tiles. Over time, the tiles next to these holes will also collapse to create larger holes. This process will continue until all tiles in the room collapse!

Harry needs to escape the room quickly. He also wants to carry some treasure back with him. However, Harry moves slower if he carries more treasure so he has to determine the slowest he is allowed to travel to escape the room alive.

Suppose Harry's speed is d tiles per second. After the initial holes are created, Harry can traverse up to d tiles. Then, all of the tiles adjacent to a collapsed tile will then collapse. After this, Harry may move another d tiles. Then, all of the tiles adjacent to a collapsed tile will then collapse. This process repeats until either Harry reaches the exit or else Harry falls into one of the holes. Harry better be careful because the exit tile can also collapse which leaves him stranded with no way out!

To be clear, if Harry steps on an intact tile that is not the exit tile after d steps but then the tile collapses before Harry can take another step, he falls in the hole and is not able to reach the exit. However, if Harry steps on the exit tile the moment before it will be collapsed then he can exit safely. Your goal is to compute the minimum integer d such that Harry can safely reach the exit with speed d without falling into any holes.

### Input

The first line consists of a single integer k ≤ 30 indicating the number of test cases. Each test case begins with integers r, c, sr, sc, er, ec, h. Here, r and c denote the number of rows and columns, sr and sc denotes the row and column of the start cell, er and ec denotes the row and column of the exit cell, and h denotes the number of tiles that initially collapse before Harry starts running for the exit.

The following h lines each describe a single hole that initially opens. Each hole is given by two numbers hr and hc denoting the row and column of the hole. Among all initial holes and the start and end tiles, no two of these will occupy the same location.

Bounds: 1 ≤ r,c ≤ 300, 1 ≤ h ≤ 5000, all row coordinates in the input are between 0 and r-1 and all column coordinates in the input are between 0 and c-1.

### Output

The output for each test case consists of a single integer on a single line indicating the minimum integer d for which Harry can escape with speed d. If Harry cannot escape with any speed d, then output the text "Impossible!" instead.

### Example

<pre>
<b>Input:</b>
4
3 3 0 0 1 1 1
2 0
4 4 0 0 1 2 2
0 2
3 0
2 2 0 0 1 1 2
0 1
1 0
3 2 0 0 2 0 1
1 1

<b>Output:</b>
1
3
Impossible!
2
</pre>
### Explanation of Sample Data

In the first case, Harry can step from (0,0) to (0,1) using d=1 steps. Then, the tiles (1,0) and (2,1), which are adjacent to the hole at (2,0), will collapse. Harry takes one more step from (0,1) to the exit at (1,1) and can safely exit the grid even though the tile (1,1) will collapse in the next expansion of the holes.

In the second case, Harry can reach the exit by travelling along the sequence of tiles (0,0), (1,0), (1,1), (1,2) with a speed of d=3. This reaches the exit before the holes expand. However, if Harry travels at a speed d &lt; 3, then he cannot reach the exit after d steps and the hole at tile (0,2) will expand to consume the exit tile (1,2).

Harry cannot reach the exit with any speed in the third case since the only tiles adjacent to his start position are holes already. Finally, he cannot reach the exit in the fourth case with a speed of d=1 since he can only reach tiles (0,1) and (1,0) with this speed and both tiles collapse when the hole at (1,1) expands.
