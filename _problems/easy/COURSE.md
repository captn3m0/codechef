---
{"languages_supported":{"0":"NA"},"title":"COURSE","category":"NA","old_version":true,"problem_code":"COURSE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>A number of traffic cones have been placed on a circular racetrack to form
an obstacle course.  You are asked to determine the largest sized car that can
navigate the course.  For simplicity, the cones are assumed to have zero width
and the car is perfectly circular and infinitely maneuverable.  The track itself
is the area between 2 concentric circles.</p>

<p>Formally, the course can be navigated by a car of radius c if there exists a
closed loop around the center of the track which lies between the circles forming the track, and
every point on the loop is at least c distance away from each cone and each
boundary of the track.</p>

<h3>Input:</h3>
<p>Input begins with an integer T (about 25), the number of test cases.
Each test case begins with 2 integers r and R (1&lt;=r&lt;R&lt;=25000).  The racetrack is
the area between the circles centered at (0,0) with radii r and R.
The next line of input contains an integer N (0&lt;=N&lt;=500), the number of cones.
N lines follow, each containing the coordinates of a cone.  The coordinates are
integers, and are guaranteed to lie within the track, and be distinct.
Cases are separated by a blank line.</p>

<h3>Output:</h3>
<p>For each input, output on a single line the diameter of the largest car that
can navigate the course, rounded to 3 decimal places.</p>

<h3>Sample input:</h3>
<pre>1

5 10
3
6 0
5 7
-2 -7</pre>

<h3>Sample output:</h3>
<pre>2.720</pre>

<h3>Explanation:</h3>
<p>The image below shows the course corresponding to the sample input.  The black circles represent the boundaries of the racetrack, the small dots the cones, and the filled red circle the car.  Also shown is one possible path of the car through the course.</p>
<img src="http://www.codechef.com/download/course.png" alt="sample course" />    