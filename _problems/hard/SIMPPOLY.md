---
{"category_name":"hard","problem_code":"SIMPPOLY","problem_name":"A Simple Polygon","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-12-2017","tags":{"0":"admin2"},"time":{"view_start_date":1517693400,"submit_start_date":1517693400,"visible_start_date":1517693400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a simple (not self-intersecting polygon, without holes) polygon P with <b>N</b> vertices. You have to <b>find 500 pairs of vertices</b> such that the line segments joining these two points lie completely inside the polygon (i.e. suppose AB is a segment, then it should be inside the polygon and it shouldn't touch or intersect the polygon at any other point than A or B). None of the line segments made by these vertices should be one of the sides of the polygon. In a pair, the two vertices should be different. Along with this, none of the 500 line segments should be intersecting with each other at a point other than the endpoints. That is, if there is a selected line segment between the vertices A and B, and another selected line segment between the vertices C and D, the only points where they can touch are at A, B, C, or D.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains an integer <b>N</b> denoting the number of vertices of the polygon P.</p>
<p>Each of the next <b>N</b> lines contain two space separated integers denoting the x and y coordinates of the i-th vertex of the polygon P. It's guaranteed that no three consecutive vertices of the polygon are collinear.
 The polygons can be in any of the clockwise or counter-clockwise order.</p>

<h3>Output</h3>
<p>For each test case, output 500 lines each containing two integers which should be the indices (1-based) of a pair of vertices. You can output the indices in any order. If there are multiple possible such segments, you can output any. Note that each of these line segments should be distinct, i.e. no line segment should appear more than once in the output.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 400</li>
<li>10<sup>3</sup> ≤ <b>N</b> ≤ 5 * 10<sup>4</sup></b></li>
<li>-10<sup>9</sup> ≤ <b>x</b>, <b>y</b> ≤ 10<sup>9</sup></li>
<li>Sum of <b>N</b> over all the test cases in a single file would be at most 2 * 10<sup>5</sup></li> 
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
2
4
0 0
1 0
1 1
0 1
4
-1 0
0 0
0 1
2 -1

<b>Output</b>
1 3
4 2
</pre>

<h3>Explanation</h3>
<p>Please note the samples provided are wrong. They are for representative purposes only. These samples are provided assuming that you just print only 1 line segment. Also, the samples don't follow the constraints of <b>N</b>, which will be followed in the actual input.</p>

<p><b>Testcase 2:</b> The figure below shows the polygon in the input, with the vertices marked as 1, 2, 3 and 4. The output given is the line segment between vertices 2 and 4, which is also shown in the figure.</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/AMR17AMR/SIMPPOLY/1.png" height="300"/>
</p>