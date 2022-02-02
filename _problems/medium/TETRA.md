---
languages_supported:
    - NA
title: TETRA
category: NA
old_version: true
problem_code: TETRA
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given the lengths of the edges of a tetrahedron calculate the radius of a sphere inscribed in that tetrahedron (i.e. a sphere tangent to all the faces).

### Input

An integer t, 1&lt;=t&lt;=30, denoting the number of test cases, followed by t lines, each containing 6 integers describing the lengths of the edges of a tetrahedron separated by single spaces. The edges are not longer than 1000 and for the tetrahedron WXYZ, the order of the edges is: WX, WY, WZ, XY, XZ, YZ.

### Output

t lines, each consisting of a real number given with four digits decimal precision equal to the radius of a sphere inscribed in the given tetrahedron.

### Example

<pre>Input:
2
1 1 1 1 1 1
1000 999 998 5 5 6

Output:
0.2041
1.4189
</pre>