---
languages_supported:
    - NA
title: BUILDING
category: NA
old_version: true
problem_code: BUILDING
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

CodeChef Inc. owns a rectangular piece of land sized w×h. Its edges are parallel to the axes, with the bottom-left corner at (0,0) and top-right corner at (w,h). They intend to build a new head office within this land. The new office will be a square whose center is located at a point with integer coordinates, and whose diagonals are parallel to the axes and have length 2\*d.

Unfortunately, there are n barricades on the land, some of which may need to be removed in order for the office to be built. The (i)th barricade is located at (Xi, Yi) and will cost Ci to remove. The office may only be built once all points it covers (including the boundaries) are free of barricades.

### Request

Help them find the minimum total cost of barricade removal.

### Input

- The first line contains the integers w,h,d,n, respectively.
- Within following n lines, the i-th line contains the integers Xi,Yi,Ci respectively.

### Output

Output on a single line an integer which is the minimum cost found.

### Example

**Input:**

`4 3 1 4<br></br>1 3 5<br></br>3 3 4<br></br>2 2 1<br></br>2 1 2<br></br>`**Output:**

`2<br></br>`### Limitations

- 2 <= w,h <= 1 000
- 0 <= n <= 200 000
- 2 <=2d <= min(w,h)
- 0 < Ci <= 10 000
- All the listed barricades are inside or on the boundaries of the CodeChef s land.
- There is at most one barricade at each point.