---
languages_supported:
    - NA
title: GRAPLANE
category: NA
old_version: true
problem_code: GRAPLANE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Suppose you are given a graph as a set of pairs of numbers representing edges. What is the first thing you usually do with such a graph? Draw it, of course!

Today Caroline has got an undirected graph with **N** vertices numbered from 1 to **N** and **M** edges without loops or multiple edges between two vertices, and she would like to draw it on a Cartesian plane. She wants the edges to be straight line segments, so the only problem is to assign a point on the plane to each vertex. Caroline doesn't want to place any vertices on the coordinate axes -- so each vertex should be assigned to one of four [quadrants](http://en.wikipedia.org/wiki/Cartesian_coordinate_system#Quadrants_and_octants); moreover, if we count the number of vertices in each quadrant and write down these four numbers, no two of these numbers should differ by more than 1 (so Caroline wants to distribute the vertices among quadrants as equally as possible). She would also like no two vertices to coincide.

Out of all drawings satisfying the given requirements, Caroline would like to choose a drawing with the minimal number of intersections between graph edges and coordinate axes. Note that if an edge intersects the origin (0;0), it's counted as one intersection, and if an edge intersects both axes at different points, it's counted as two intersections. Also note that if two edges intersect either of the axes in the same point, an intersection is counted for both edges.

Caroline doesn't care about the thing that the edges may intersect, overlap, contain vertices or even each other inside. She considers all the graphs satisfying all the requirements equally good.

It's easy to guess now what you are to do in this problem.

### Input

The first line of the input file contains an integer **T** -- the number of test cases (no more than 3). Each test case is described by a line containing two integers **N** and **M** (2 ≤ **N** ≤ 18; **N** is even; 1 ≤ **M** ≤ **N**\*(**N**-1)/2) followed by **M** lines, each containing two integers between 1 and **N**, inclusive, and describing an edge of the graph. There will be a blank line preceding each test case. It's guaranteed that no edge connects a vertex to itself, and also no two edges connect the same pair of vertices (remember that the graph is undirected, so **A B** and **B A** is essentially the same edge).

### Output

For each test case output exactly **N**+1 lines. The first of them should contain the smallest possible number of intersection of graph edges with coordinate axes. The following **N** lines should contain a pair of integers **xi** **yi** corresponding to a point on the plane assigned to the **i**-th vertex of the graph (1 ≤ |**x**|, |**y**| ≤ 10000). You may separate the answers with empty lines.

### Example

<pre>
<b>Input:</b>
3

2 1
1 2

4 4
1 2
2 3
3 4
4 1

4 2
1 3
2 4

<b>Output:</b>
1
1 2
3 -4

4
5 6
7 -8
-9 10
-11 -12

2
2 3
7 -5
-2 -3
-7 5
</pre>