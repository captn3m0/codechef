---
{"languages_supported":{"0":"NA"},"title":"CROWNS","category":"NA","old_version":true,"problem_code":"CROWNS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
The Chef has been asked to decorate a birthday cake for a little child. The parents of the child requested that he draw a crown out of icing on the cake. The Chef has already added some icing blossoms and now it is time to add the crown. If we imagine the blossoms as being points on the x-y plane, he draws this crown according to the following rules. For a point p, we will let x(p) and y(p) denote the x and y coordinates of p, respectively.

</p><p>
1) The crown is a polygon defined by a sequence of an odd number of points (i.e. icing blossoms) p<sub>1</sub>, p<sub>2</sub>, ..., p<sub>k</sub>. The polygon has line segments from p<sub>i</sub> to p<sub>i+1</sub> for each 1 ≤ i &lt; k as well as a line segment from p<sub>k</sub> to p<sub>1</sub>. If we translate the points so that p<sub>1</sub> is at the origin and then rotate the points about the origin so that p<sub>k</sub> lies on the positive x axis, then x(p<sub>i</sub>) &lt; x(p<sub>i+1</sub>) for each 1 ≤ i &lt; k and y(p<sub>i</sub>) &gt; 0 for each 1 &lt; i &lt; k.
Furthermore, for any index 1 &lt; i ≤ k we have that y(p<sub>i</sub>) &gt; y(p<sub>i-1</sub>) if i is even and y(p<sub>i</sub>) &lt; y(p<sub>i-1</sub>) if i is odd. To paraphrase, after translating and rotating the points we have that the x coordinates of the points are strictly increasing, the y coordinates of all but the two endpoints are strictly positive, and the difference between y coordinates of successive points alternates between positive and negative.

</p><p>
2)
No blossoms may be contained strictly in the interior of the crown.

</p><p>
You can find some pictures of crowns following the sample data for this problem.

</p><p>
Subject to these restrictions, the Chef wants to draw the crown with the largest possible area. Thankfully, his job is made slightly simpler since no three blossoms are collinear.

<h3>Input</h3>
</p><p>
The first line consists of a single positive integer T ≤ 20 indicating the number of test cases. Each test case begins with an integer N, between 3 and 50, indicating the number of blossoms. Then N lines follow, each containing two integers X and Y describing the location of a blossom. These integers will have absolute value at most 10,000.

</p><p>
As promised in the problem statement, no three blossoms will be collinear. Also, no two blossoms will have both the same X and Y coordinates.

<h3>Output</h3>
</p><p>
The output for each test case is a single floating point number with 1 decimal of precision indicating the largest possible area of a crown drawn according to the restrictions above.

<h3>Example</h3>

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
</pre>

<h3>Figures</h3>
</p><p>
The following figures illustrate the solutions for each test case. The dotted lines indicate the x and y axis. The bold line on a crown indicates that the endpoints of this line are the endpoints p<sub>1</sub> and p<sub>k</sub> of the crown.
</p><p>
Case 1. Notice that having endpoints (1,0) and (0,0) would not form a crown since, after translating and rotating the points so (1,0) is on the origin and (0,0) is on the positive x axis, every other point would share an x coordinate with one of the endpoints.
</p><p>
<img src="http://www.codechef.com/download/case1.png" alt="Test Case 1" />
</p><p>
Case 2. We can't add the missing point to the crown since then we would have two successive decreases in the y coordinates of consecutive points.
</p><p>
<img src="http://www.codechef.com/download/case2.png" alt="Test Case 2" width="350" height="275" />
</p><p>
Case 3.
</p><p>
<img src="http://www.codechef.com/download/case3.png" alt="Test Case 3" width="450" height="300" />
</p><p>
Case 4.
</p><p>
<img src="http://www.codechef.com/download/case4.png" alt="Test Case 4" width="350" height="300" /></p>    