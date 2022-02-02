---
languages_supported:
    - NA
title: POINTS
category: NA
old_version: true
problem_code: POINTS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

You are given a set of points in the 2D plane. You start at the point with the least X and greatest Y value, and end at the point with the greatest X and least Y value. The rule for movement is that you can not move to a point with a lesser X value as compared to the X value of the point you are on. Also for points having the same X value, you need to visit the point with the greatest Y value before visiting the next point with the same X value. So, if there are 2 points: (0,4 and 4,0) we would start with (0,4) - i.e. least X takes precedence over greatest Y. You need to visit every point in the plane.

### Input

You will be given an integer t(1&lt;=t&lt;=20) representing the number of test cases. A new line follows; after which the t test cases are given. Each test case starts with a blank line followed by an integer n(2&lt;=n&lt;=100000), which represents the number of points to follow. This is followed by a new line. Then follow the n points, each being a pair of integers separated by a single space; followed by a new line. The X and Y coordinates of each point will be between 0 and 10000 both inclusive.

### Output

For each test case, print the total distance traveled by you from start to finish; keeping in mind the rules mentioned above, correct to 2 decimal places. The result for each test case must be on a new line.

### Example

<pre>
<b>Input:</b>
3

2
0 0
0 1

3
0 0
1 1
2 2

4
0 0
1 10
1 5
2 2

<b>Output:</b>
1.00
2.83
18.21

For the third test case above, the following is the path you must take:
0,0 -> 1,10  
1,10 -> 1,5
1,5 -> 2,2
= 18.21
</pre>