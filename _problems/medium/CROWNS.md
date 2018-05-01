---
languages_supported:
    - NA
title: CROWNS
category: NA
old_version: true
problem_code: CROWNS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The Chef has been asked to decorate a birthday cake for a little child. The parents of the child requested that he draw a crown out of icing on the cake. The Chef has already added some icing blossoms and now it is time to add the crown. If we imagine the blossoms as being points on the x-y plane, he draws this crown according to the following rules. For a point p, we will let x(p) and y(p) denote the x and y coordinates of p, respectively.

1\) The crown is a polygon defined by a sequence of an odd number of points (i.e. icing blossoms) p1, p2, ..., pk. The polygon has line segments from pi to pi+1 for each 1 ≤ i < k as well as a line segment from pk to p1. If we translate the points so that p1 is at the origin and then rotate the points about the origin so that pk lies on the positive x axis, then x(pi) < x(pi+1) for each 1 ≤ i < k and y(pi) > 0 for each 1 < i < k. Furthermore, for any index 1 < i ≤ k we have that y(pi) > y(pi-1) if i is even and y(pi) < y(pi-1) if i is odd. To paraphrase, after translating and rotating the points we have that the x coordinates of the points are strictly increasing, the y coordinates of all but the two endpoints are strictly positive, and the difference between y coordinates of successive points alternates between positive and negative.

2\) No blossoms may be contained strictly in the interior of the crown.

You can find some pictures of crowns following the sample data for this problem.

Subject to these restrictions, the Chef wants to draw the crown with the largest possible area. Thankfully, his job is made slightly simpler since no three blossoms are collinear.

### Input

The first line consists of a single positive integer T ≤ 20 indicating the number of test cases. Each test case begins with an integer N, between 3 and 50, indicating the number of blossoms. Then N lines follow, each containing two integers X and Y describing the location of a blossom. These integers will have absolute value at most 10,000.

As promised in the problem statement, no three blossoms will be collinear. Also, no two blossoms will have both the same X and Y coordinates.

### Output

The output for each test case is a single floating point number with 1 decimal of precision indicating the largest possible area of a crown drawn according to the restrictions above.

### Example

<pre>
<b>Input:</b>
4
4
0 0
0 1
1 0
1 1
6
0 0
10 0
3 1
8 6
1 7
4 7
5
-4 10
-10 -1
-2 3
8 4
0 5
7
2 -6
6 3
10 8
-3 -9
9 2
0 0
-9 -9


<b>Output:</b>
0.5
36.5
57.0
66.5
</pre>### Figures

The following figures illustrate the solutions for each test case. The dotted lines indicate the x and y axis. The bold line on a crown indicates that the endpoints of this line are the endpoints p1 and pk of the crown.

Case 1. Notice that having endpoints (1,0) and (0,0) would not form a crown since, after translating and rotating the points so (1,0) is on the origin and (0,0) is on the positive x axis, every other point would share an x coordinate with one of the endpoints.

![Test Case 1](http://www.codechef.com/download/case1.png)

Case 2. We can't add the missing point to the crown since then we would have two successive decreases in the y coordinates of consecutive points.

![Test Case 2](http://www.codechef.com/download/case2.png)

Case 3.

![Test Case 3](http://www.codechef.com/download/case3.png)

Case 4.

![Test Case 4](http://www.codechef.com/download/case4.png)
