---
languages_supported:
    - NA
title: HARMONY
category: NA
old_version: true
problem_code: HARMONY
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The Chef has formed a very nice planar graph out of icing on his latest cake. The nodes of the graph are represented by distinct points on the cake and every edge is drawn as a straight line segment between its two endpoints. For each edge e = (u,v) the line segment connecting u and v does not pass through any other point representing some other node. Finally, if two line segments representing different edges e,e' share a common point on the cake, it must be that this common point is in fact a common endpoint v of both e and e' (i.e. no two edges cross).

Not only is the drawing of the planar graph very nice, the graph itself has some nice properties. For starters, there are no loops in the graph and no two nodes are connected by more than one edge. The graph is also connected and it is impossible to disconnect the graph by removing a single edge.

Drawing the planar graph divides the plane into "faces". More specifically, consider the subset of the plane F = { (x,y) : (x,y) is not a point and (x,y) does not lie on an edge}. The points in F are partitioned into faces where two points P,Q in F lie on the same face if and only if it is possible to draw a path from P to Q without lifting the pencil and without touching any edge or point (i.e. the path stays contained in F).

As is well-known in the theory of planar graphs, there is exactly one face that is "unbounded" or "outside" of the drawing. All other faces are called "interior" faces. Note that if a graph G is simply a cycle, then there is also only one interior face. For each cycle C and each face F, we say that F is "contained in" C if F is a subset (as a set of points in the plane) of the only interior face of the planar drawing obtained by erasing all edges and nodes of G except for those that appear in C.

The Chef wants to add an icing blossom on some of the edges in the drawing of the graph in a harmonious manner. He wants to do this so that for each cycle C, the parity of the number of blossoms on edges of C is equal to the parity of the number of faces contained in C. Your task is to determine if this is possible and, if so, describe which edges should receive a blossom.

### Input

The first line contains a single positive integer **T** indicating the number of test cases. Each test case begins with two integers **N** and **M**. Here, **N** indicates the number of nodes in the graph and **M** indicates the number of edges.

The nodes of the graph are numbered from 0 to **N**-1. Then **N** lines follow, each consisting of two integers **x,y** describing the coordinates of the points (if we view the surface of the cake as the Euclidean plane). Then **M** lines follow, each consisting of two integers **u**,**v** describing the endpoints of one of the **M** edges. Here, 0 ≤ **u**, **v**, < **N** are the indices of the nodes that are connected by the edge. Recall that the graph is drawn on the cake by connecting the locations of the points representing the endpoints of an edge by a straight line segment.

Constraints: 3 ≤ **N** ≤ 10,000 and  **N**  ≤  **M**  ≤ 3**N** -6. The integers describing the coordinates of the points are at most 1,000,000,000 in absolute value. No two nodes will be located at the same point, no edge has equal endpoints, and no edge will be given more than once in the input (this also means that if **u**,**v** is given, then **v**,**u** will not be given in a different line). Finally, the graph is connected and cannot be disconnected by deleting a single edge.

### Output

For each test case, you are to output a single line. If it is not possible to add blossoms to some edges of the cake in the harmonious manner, then this line should contain the text "impossible" (without the quotes). Otherwise, the line should consist of **M** 0 or 1 values where the i'th such value is a 1 if and only if the i'th edge in the input should receive a blossom. No other integers than 0 or 1 may be output on this line.

### Example

```
<b>Input:</b>
3
3 3
0 0
0 1
1 0
0 1
1 2
2 0
5 6
0 0
1 1
1 -1
-1 -1
-1 1
0 1
1 2
2 3
3 4
4 0
4 1
6 9
-1 -1
0 1
1 -1
-2 -2
2 -2
0 2
0 1
1 2
0 2
3 4
3 5
5 4
0 3
4 2
5 1



<b>Output:</b>
1 0 0
0 1 0 0 0 1
0 0 1 0 1 1 0 0 0

```
### Illustration Of Sample Data

The following three images illustrate the sample data. The thick edges indicate edges that receive a blossom. A red cycle has been highlighted in the last example. Note, in particular, that there are three faces contained in this cycle and there is one edge lying on this cycle that receives a blossom.

Test Case 1:

![Test Case 1](/download/c1.png)

Test Case 2:

![Test Case 2](/download/c2.png)

Test Case 3:

![Test Case 3](/download/c3.png)