---
languages_supported:
    - NA
title: POSTERS
category: NA
old_version: true
problem_code: POSTERS
tags:
    - NA
layout: problem
---
A public wall at your university is littered with posters advertising various events. A new policy has just been enacted that states no two posters on the wall may overlap. You have been asked to remove some posters from the wall so the remaining posters do not obscure each other. To keep the students as happy as possible, you should remove the minimum number of posters to achieve this goal. You may not remove a poster and place it in another position; all posters you leave on the wall must be in their original position.

When you examined the wall, you noticed something very nice. Every poster was placed on the wall by pinning the four corners. This was done in a very courteous manner since each pin goes only through the poster it is holding.

Time to get to work! Oh, the reason you were hired is that you are very good at taking down a single poster without disturbing the rest, even if that poster is obscured by many others.

### Input

The first line consists of a single integer T indicating the number of test cases (about 25).

Each test case consists begins with a single integer n indicating the number of posters. The next n lines consist of 4 integers x0, x1, y0, and y1 satisfying x0 < x1 and y0 < y1. This means the poster covers all points (x,y) satisfying x0 <= x <= x1 and y0 <= y <= y1.

As stated before hand, no corner of any poster will intersect any other poster anywhere. That is, if (x,y) is a corner point of one poster and another poster is described by x0, x1, y0, and y1, then we do not have x0 <= x <= x1 and y0 <= y <= y1.

Bounds: 1 <= n <= 100 and each integer in a poster description fits in a signed 32 bit integer.

### Output

The output for each test case is a single line containing a single integer that is the maximum number of posters that can be left on the wall such that no two posters share a common point on the wall.

### Example

<pre>
<b>Input:</b>
2

3
0 5 1 2
1 2 0 3
3 4 0 3

3
-3 3 -1 1
-2 2 -2 2
-1 1 -3 3

<b>Output:</b>
2
1
</pre>