---
languages_supported:
    - NA
title: COURSE
category: NA
old_version: true
problem_code: COURSE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

A number of traffic cones have been placed on a circular racetrack to form an obstacle course. You are asked to determine the largest sized car that can navigate the course. For simplicity, the cones are assumed to have zero width and the car is perfectly circular and infinitely maneuverable. The track itself is the area between 2 concentric circles.

Formally, the course can be navigated by a car of radius c if there exists a closed loop around the center of the track which lies between the circles forming the track, and every point on the loop is at least c distance away from each cone and each boundary of the track.

### Input:

Input begins with an integer T (about 25), the number of test cases. Each test case begins with 2 integers r and R (1&lt;=r&lt;R&lt;=25000). The racetrack is the area between the circles centered at (0,0) with radii r and R. The next line of input contains an integer N (0&lt;=N&lt;=500), the number of cones. N lines follow, each containing the coordinates of a cone. The coordinates are integers, and are guaranteed to lie within the track, and be distinct. Cases are separated by a blank line.

### Output:

For each input, output on a single line the diameter of the largest car that can navigate the course, rounded to 3 decimal places.

### Sample input:

<pre>1

5 10
3
6 0
5 7
-2 -7
</pre>
### Sample output:

<pre>2.720
</pre>
### Explanation:

The image below shows the course corresponding to the sample input. The black circles represent the boundaries of the racetrack, the small dots the cones, and the filled red circle the car. Also shown is one possible path of the car through the course.

![sample course](http://www.codechef.com/download/course.png)
